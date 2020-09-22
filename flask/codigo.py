from flask import Flask, render_template, request, redirect, url_for
import subprocess
import pymysql



app = Flask(__name__)

connection=pymysql.connect(host="localhost",
						   user="root",
						   password="",
						   db="sist-trabajo"
							)

@app.route('/')
def index():
    return render_template('request.html')

@app.route('/algoritmo',methods=['GET','POST'])
def algoritmo():
    if request.method == 'POST':
        doc_o = request.form['doco']
        doc_c = request.form['docc']
        arg="python algoritmo.py "+doc_o+" "+doc_c
        result = subprocess.check_output(arg, shell=True)
        # find = result.find('GaboT')
        # search = result[find:]
        confirmacion = "se genero con exito"

        return render_template('resultados.html', ver= confirmacion)

if __name__ == "__main__":
    app.run(debug=True)