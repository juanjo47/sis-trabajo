filepath = 'C:/xampp/htdocs/sis-trabajo/archivos/'
import docx
from bs4 import BeautifulSoup
import sys
import re
import nltk
from nltk.tokenize import RegexpTokenizer
from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import letter

request = sys.argv[1]
request2 = sys.argv[2]
sys.path.append(filepath)
sys.path


def ReadingTextDocuments(fileName):
  doc = docx.Document(fileName)

  completedText = []

  for paragraph in doc.paragraphs:
    completedText.append(paragraph.text)

  return '\n' .join(completedText)


def modify(a, b):
  j = -1 
  s= 0
  ax = []
  cb = []
  for p in a:
    j += 1 
    if p != b[j]:
        if p == b[j].lower():
            cb.append('modificar: mayuscula en ' + p + ' de ' + a)
        elif p == b[j].upper():
            cb.append('modificar: minuscula en ' + p + ' de ' + a)
        else:
            s += 1
            if s > 2:
                cb = []
                break
            else:
                ax.append(j)
  if s == 1:
    cb.append('modificar: ' + a[ax[0]] + ' por ' + b[ax[0]] + ' en ' + a)
  elif s == 2:
    cb.append('modificar: ' + a[ax[0]] + ' por ' + b[ax[0]] + ' y ' + a[ax[1]] + ' por ' + b[ax[1]] + ' en ' + a)
  return (cb, s)


def comparacion (text_o, text_c):
  i = -1
  cont = 0
  comentarios = []
  correcciones = []
  cambios = []
  for palabra in text_o:
    i += 1
    while palabra != text_c[i]:
      cont += 1
      pal = text_c[i]
      if cont >= 2:
        frase = frase + ' ' + pal
      elif cont == 1:
        frase = pal
      i += 1
    if cont == 1:
      ci, r = modify(palabra, pal)
      cambios = cambios + ci
      if r > 2:
        correcciones.append('correccion: cambiar ' + palabra + ' por ' + pal)
    elif cont >= 2:
      comentarios.append('Recomendacion: ' + frase)
    frase = ''
    cont = 0
  return (comentarios, correcciones, cambios)

def documento(come, cor, cam):
  reporte = []
  reporte= reporte + come + cor + cam
  w, h = letter
  c = canvas.Canvas(filepath+"Informe de correcciones.pdf", pagesize= letter)
  c.drawImage(filepath+"descarga.png", 50, h -100, width=125, height=75)
  c.drawImage(filepath+"logos.jpg", w -180, h -130, width=140, height=140)
  c.setFont("Times-Roman", 16)
  c.drawString(210, h -120, "INFORME DE SEGUIMIENTO")
  text = c.beginText(50, h - 160)
  text.setFont("Helvetica", 14)
  text.textLine("Estudiante: Juan Jose Quiroga Torrez")
  text.textLine("")
  text.textLines("Trabajo: Sistema de Procesamiento de Lenguaje Natural para el Seguimiento y \n  Control de Trabajos de Grado ")
  text.textLine("")
  text.textLine("Linea de investigacion: Inteligencia Artificial")
  text.textLine("")
  text.textLine("Revision realizada por: Admin")
  text.textLine("")
  c.drawText(text)
  c.setFont("Times-Roman", 16)
  c.drawString(50, h -320, "INFORME A DETALLE")
  text = c.beginText(50, h - 360)
  text.setFont("Helvetica", 14)
  for rep in reporte:
    text.textLine(rep)
  c.drawText(text)
  c.showPage()
  c.save()

  return True



if __name__ == '__main__':
    original = request
    corregido = request2
    text_1 = ReadingTextDocuments(filepath+original)
    text_2 = ReadingTextDocuments(filepath+corregido)
    soup = BeautifulSoup(text_1, 'html.parser')
    text = soup.get_text()
    text1 = re.findall('\w+', text)
    soup = BeautifulSoup(text_2, 'html.parser')
    text = soup.get_text()
    text2 = re.findall('\w+', text)
    com, corr, camb = comparacion(text1, text2)
    documento(camb, corr, com)
    