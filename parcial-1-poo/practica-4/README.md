# Práctica 3: Herencia, Polimorfismo y Manejo de Excepciones en PHP

## 🎯 Objetivo de la práctica
El objetivo de esta práctica es aplicar los pilares de la Programación Orientada a Objetos (POO) en PHP para crear un sistema seguro de gestión de perfiles. 
Se busca demostrar el dominio de:
1. **Herencia y Polimorfismo:** Creación de una clase padre (`Usuario`) y clases hijas (`Admin`, `Alumno`, `Invitado`) que comparten métodos pero adaptan sus comportamientos (como el uso de `instanceof` para mostrar datos únicos).
2. **Validación de Datos:** Uso de `filter_var` con `FILTER_VALIDATE_EMAIL` en el constructor de la clase base para evitar que el sistema acepte información "basura".
3. **Manejo de Excepciones:** Implementación de la estructura `try/catch` y la instrucción `throw new Exception` para interceptar errores lógicos e impedir que la aplicación colapse con un "Fatal Error".

## ⚙️ Requisitos
Para ejecutar este proyecto correctamente en un entorno local, se requiere:
* **Servidor Local:** XAMPP (con el módulo de Apache en ejecución).
* **Lenguaje:** PHP 8.0 o superior (necesario para el manejo estricto de tipos y excepciones modernas).
* **Navegador Web:** Cualquier navegador moderno (Chrome, Edge, Firefox).

## 🚀 Ruta de ejecución en navegador
Una vez clonado el repositorio dentro de la carpeta `htdocs` de XAMPP y con el servidor Apache encendido, el proyecto se puede visualizar ingresando la siguiente ruta en la barra de direcciones del navegador:

`http://localhost/desarrollo-web-avanzado-fimaz-uas/practica-3/index.php`

*(Nota: La ruta puede variar ligeramente dependiendo del nombre exacto que tenga la carpeta del repositorio local).*

## 📊 Evidencia esperada
Al ejecutar el archivo `index.php` en el navegador, el sistema procesa el bloque `try/catch` y arroja la siguiente evidencia visual en pantalla:

<img width="1919" height="276" alt="image" src="https://github.com/user-attachments/assets/a901dd67-e8e4-48d7-8116-9f292f3ce3d6" />
