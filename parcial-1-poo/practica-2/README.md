# Práctica 2: Herencia y Reutilización de Código en PHP


## 1. Explicación de la herencia aplicada
La **herencia** se aplicó mediante la palabra reservada `extends`, permitiendo que la clase `Admin` herede todos los atributos y métodos de la clase base `Usuario`. 
**Reutilización**: No fue necesario volver a declarar `$vNombre` ni `$vCorreo` en la clase hija, ya que se reutilizaron directamente del padre.
**Acoplamiento**: La clase hija utiliza el constructor de la clase base para inicializar los datos desde el momento de la instancia.



## 2. Diferencias entre Usuario y Admin
Aunque comparten la misma estructura base, presentan diferencias funcionales:

| Característica | Clase Usuario (Base) | Clase Admin (Hija) |
| :--- | :--- | :--- |
| **Definición** | Clase general para cualquier usuario. | Clase especializada con privilegios. |
| **Atributos** | Posee los datos raíz (`$vNombre`, `$vCorreo`). | Hereda los atributos del padre. |
| **Métodos Propios** | Getters y Setters estándar. | Incluye el método exclusivo `getRol()`. |

## 3. Documentación del Código
Siguiendo el estándar de la asignatura, el código incluye bloques **DocBlock** para facilitar la interpretación por terceros:
**@package**: Agrupa las clases en el módulo correspondiente.
**@param**: Define el tipo y descripción de los parámetros recibidos.
**@return**: Indica el tipo de dato que el método devuelve al finalizar.



## 4. Evidencia de ejecución
<img width="258" height="109" alt="image" src="https://github.com/user-attachments/assets/ad1fb07f-013f-473c-a5f3-a6d9f9bb5ab3" />

