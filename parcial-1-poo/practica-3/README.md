## 1. Descripción del Sistema
En esta práctica desarrollamos un pequeño sistema de gestión de perfiles aplicando Programación Orientada a Objetos en PHP.Desarrollar un sistema orientado a objetos más robusto, integrando herencia, validaciones y manejo de excepciones para simular un entorno profesional.

## 2. Explicación del Flujo de Clases
El proyecto está organizado usando herencia para no repetir código. Tenemos una clase padre y dos clases hijas:

* **Clase Base (`Usuario.php`):** Es la plantilla principal. Tiene los atributos protegidos de '$vNombre' y '$vCorreo'. Lo más importante aquí es su constructor, porque funciona como un filtro: usa la función `filter_var` para checar el correo. Si el correo está mal, detiene todo lanzando una Excepción.
* **Clase Derivada (`Admin.php`):** Hereda directamente de `Usuario`. No necesitó un constructor propio porque usa el de la clase padre. Solo le agregamos el método `getRol()` que devuelve la palabra "Administrador".
* **Clase Derivada (`Alumno.php`):** También hereda de `Usuario`, pero aquí sí agregamos un dato extra: la `$vMatricula`. En su constructor usamos `parent::__construct($nombre, $correo)` para mandarle esos datos a la clase padre y que ella los valide. Una vez que pasan el filtro, ya guardamos la matrícula. Su método `getRol()` devuelve "Alumno".

## 3. Evidencia del Manejo de Errores
Para demostrar que el sistema no "truena" cuando el usuario hace algo mal, usamos un bloque `try/catch` en nuestro `index.php`.

* **El caso de éxito (`try`):** Primero instanciamos un Admin y un Alumno con datos correctos. El programa los procesó bien y mostró su información en pantalla.
* **Provocando el error:** Después, a propósito, intentamos crear un objeto con el correo `"este-correo-invalido"`.
* **La captura (`catch`):** Al detectar que no era un correo real, la clase padre lanzó un `throw new Exception`. En lugar de que PHP arrojara un *Fatal Error* y detuviera la página por completo, el programa saltó al bloque `catch`. Ahí, atrapamos el error y lo mostramos en pantalla dentro de un cuadro rojo usando `$e->getMessage()`.

<img width="814" height="390" alt="image" src="https://github.com/user-attachments/assets/d1d2dedc-42d0-489d-b19d-4e76f2f7b416" />
