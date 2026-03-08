# Práctica 3: POO, Herencia y Manejo de Excepciones en PHP

**Materia:** Desarrollo Web Avanzado  
**Docente:** Dr. José Alfonso Aguilar Calderón

---

## 1. Descripción del Sistema

Este proyecto implementa un sistema base de gestión de usuarios desarrollado en PHP, aplicando los principios de la Programación Orientada a Objetos (POO). El objetivo principal del sistema es garantizar la **integridad de los datos** mediante la validación estricta de las entradas antes de permitir la instanciación de los objetos en la memoria. 

A través de la implementación de reglas de negocio en el constructor principal, el sistema previene que ingresen datos anómalos (como correos electrónicos con formatos no válidos), asegurando que cualquier objeto derivado nazca en un estado válido y seguro.

---

## 2. Explicación del Flujo de Clases

La arquitectura del proyecto está modularizada dividiendo la lógica de negocio (carpeta `/clases`) de la capa de presentación (`index.php`). El flujo de datos se basa en la reutilización de código mediante **herencia multinivel** y la aplicación de **polimorfismo**:

* **`Usuario.php` (Clase Base):** * Actúa como la plantilla principal y el filtro de seguridad del sistema.
  * Encapsula los atributos comunes (`nombre`, `correo`).
  * Su constructor implementa la función nativa `filter_var()` con la constante `FILTER_VALIDATE_EMAIL`. Si la validación falla, interrumpe el flujo lanzando una nueva instancia de la clase `Exception`.
  
* **`Admin.php` (Clase Derivada):**
  * Hereda la estructura y las validaciones estrictas de la clase `Usuario`.
  * Aplica polimorfismo al definir el comportamiento específico del método `getRol()`, retornando la cadena "Administrador".

* **`Alumno.php` (Clase Derivada):**
  * Extiende la clase `Usuario` añadiendo un nivel de especialización con el atributo exclusivo `matricula`.
  * **Sobrescritura del constructor:** Para inicializar su atributo propio sin perder la seguridad del sistema, utiliza la instrucción `parent::__construct($nombre, $correo)`. Esto delega la responsabilidad de la validación del correo a la clase padre antes de asignar la matrícula.
  * Aplica polimorfismo en `getRol()` retornando "Alumno".

---

## 3. Evidencia del Manejo de Errores

Para garantizar la estabilidad de la aplicación y evitar interrupciones abruptas en el servidor web (*Fatal Errors*), se implementó un bloque de control estructurado `try/catch` en el archivo de ejecución principal (`index.php`).

El flujo de control de errores comprobado es el siguiente:

1. **Camino de Éxito (`try`):** Se instancian correctamente objetos `Admin` y `Alumno` pasando parámetros válidos. El sistema procesa la herencia y los métodos encapsulados sin interrupciones.
2. **Detección del Error:** Se intenta crear un objeto `Alumno` pasándole un string sin formato (`"este-correo-invalido"`).
3. **Lanzamiento (`throw`):** La clase base `Usuario` detecta el fallo en la regla de negocio y ejecuta `throw new Exception`.
4. **Captura y Control (`catch`):** La ejecución del bloque `try` se aborta inmediatamente, impidiendo la creación del objeto corrupto. El bloque `catch` intercepta la excepción y utiliza el método `$e->getMessage()` para extraer el texto del error, imprimiéndolo en la interfaz gráfica mediante una alerta HTML controlada.
