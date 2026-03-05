import mysql.connector
import os
import time

def generar_reporte():
    try:
        # 1. Quita el time.sleep(5) para que la respuesta sea instantánea
        
        conexion = mysql.connector.connect(
            host="localhost", 
            port=3307, # Verifica si en XAMPP usas el 3306 o el 3307
            user="root",
            password="",
            database="portafolio_db"
        )
        cursor = conexion.cursor()

        # 2. Consulta real
        cursor.execute("SELECT COUNT(*) FROM contactos")
        resultado = cursor.fetchone()
        total = resultado[0] if resultado else 0

        # 3. Ruta absoluta para evitar fallos en XAMPP
        # Esto busca la carpeta 'reportes' que está un nivel arriba de donde esté este script
        ruta_reporte = "C:/xampp/htdocs/app-main/reportes/reporte.txt"

        # 4. Escribir el archivo
        with open(ruta_reporte, "w") as f:
            f.write("Reporte de Mensajes\n")
            f.write("==============================\n")
            f.write(f"total de mensajes recibidos: {total}\n")
            f.write(f"Ultima actualizacion: {time.strftime('%d-%m-%Y %H:%M:%S')}\n")

        cursor.close()
        conexion.close()
        print("Reporte actualizado correctamente")

    except Exception as e:
        print(f"Error: {e}")

if __name__ == "__main__":
    generar_reporte()
    time.sleep(1)