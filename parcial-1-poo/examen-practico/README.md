# 📑 Examen: Sistema de Gestión de Usuarios con POO (PHP)

Este repositorio contiene la resolución del examen práctico para la asignatura de **Desarrollo Web Avanzado**. El objetivo principal es demostrar el dominio de la **Programación Orientada a Objetos (POO)** en PHP, aplicando conceptos de herencia, encapsulamiento y manejo de errores.

---

## 🛠️ Requisitos de la Actividad

El sistema cumple con los siguientes requerimientos técnicos:

1.  **Clase Base `Usuario`**: Define los atributos protegidos `vNombre` y `vCorreo`. Incluye una validación en el constructor que lanza una `Exception` si el formato del correo es inválido.
2.  **Clase `Admin`**: Extiende de `Usuario` e implementa el método `getRol()` retornando "Administrador".
3.  **Clase `Alumno`**: Extiende de `Usuario`, añade el atributo privado `vMatricula` y sobrescribe el constructor para inicializar la matrícula llamando a `parent::__construct`.
4.  **Manejo de Errores**: Uso de bloques `try-catch` en el `index.php` para capturar errores de validación sin detener la ejecución de la interfaz.
5.  **Visualización**: Generación de una tabla dinámica en HTML que gestiona la visualización de la matrícula mediante lógica condicional de roles.
6. **Resultado**:
     <img width="722" height="293" alt="image" src="https://github.com/user-attachments/assets/a615a320-2480-4d5b-84a8-52d23ca142fb" />



---

## 📂 Estructura del Proyecto

```text
/
├── clases/
│   ├── Usuario.php   # Lógica base y validación de correo
│   ├── Admin.php     # Especialización para Administradores
│   └── Alumno.php    # Especialización para Alumnos (incluye matrícula)
└── index.php         # Controlador principal y renderizado de la tabla
