# Práctica 1: Introducción a la Programación Orientada a Objetos en PHP

## • Objetivo de la práctica
Aplicar los fundamentos de la Programación Orientada a Objetos en PHP, implementando una clase con atributos privados, constructor y métodos de acceso, siguiendo buenas prácticas de encapsulamiento.

---

## • Descripción de la clase creada
Se diseñó la clase **`Usuario`**, la cual actúa como un molde para gestionar datos personales de manera segura. La lógica principal se basa en los siguientes puntos:

* **Encapsulamiento**: Los atributos `$vNombre` y `$vCorreo` se definieron como **privados** para proteger la información y evitar que sea alterada directamente desde fuera de la clase.
* **Constructor (`__construct`)**: Es la función que se ejecuta al "nacer" el objeto. Su función es recibir datos de afuera (**parámetros temporales**) y guardarlos en la memoria interna del objeto (**variables atributos**).
* **Métodos de Acceso (Getters)**: Permiten consultar la información guardada de forma controlada (`getNombre` y `getCorreo`).
* **Métodos de Modificación (Setters)**: Permiten actualizar los datos del objeto después de haber sido creado (`setNombre` y `setCorreo`).



---

## • Instrucciones de ejecución
Para ejecutar esta práctica en un servidor local (como XAMPP), siga estos pasos:

1. **Ubicación**: Coloque los archivos `Usuario.php` e `index.php` dentro de la carpeta `htdocs/practica-1/`.
2. **Servidor**: Inicie el módulo **Apache** desde el Panel de Control de XAMPP.
3. **Acceso**: Abra su navegador y escriba la dirección: `http://localhost/Desarrollo%20web%20avanzado/parcial-1-poo/practica-1/index.php`.
4. **Prueba**: "Las primeras dos lineas muestran los datos antes de usar los setters que es donde el nombre cambia ".

---

