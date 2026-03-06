import mysql.connector
import os
import time

def generar_reporte():
    try:
        
        conexion = mysql.connector.connect(
            host="localhost", 
            port=3307, 
            user="root",
            password="",
            database="portafolio_db"
        )
        cursor = conexion.cursor()

        cursor.execute("SELECT COUNT(*) FROM contactos")
        resultado = cursor.fetchone()
        total = resultado[0] if resultado else 0

        ruta_reporte = r"C:/Users/Dipper/Documents/GitHub/Proyecto_Xampp#/reportes/reporte.txt"

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