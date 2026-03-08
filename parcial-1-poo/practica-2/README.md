# Práctica 2: Herencia y Reutilización de Código en PHP

[cite_start]Este proyecto pertenece a la asignatura de **Desarrollo Web Avanzado** de la **Facultad de Informática Mazatlán (FIMAZ)**[cite: 8, 9]. [cite_start]El objetivo es implementar el concepto de herencia para optimizar la estructura del código[cite: 122].

---

## 1. Explicación de la herencia aplicada
[cite_start]La **herencia** se aplicó mediante la palabra reservada `extends`, permitiendo que la clase `Admin` herede todos los atributos y métodos de la clase base `Usuario`[cite: 122, 264]. 
* [cite_start]**Reutilización**: No fue necesario volver a declarar `$nombre` ni `$correo` en la clase hija, ya que se reutilizaron directamente del padre[cite: 122].
* [cite_start]**Acoplamiento**: La clase hija utiliza el constructor de la clase base para inicializar los datos desde el momento de la instancia[cite: 282].



## 2. Diferencias entre Usuario y Admin
Aunque comparten la misma estructura base, presentan diferencias funcionales:

| Característica | Clase Usuario (Base) | Clase Admin (Hija) |
| :--- | :--- | :--- |
| **Definición** | [cite_start]Clase general para cualquier usuario[cite: 122]. | [cite_start]Clase especializada con privilegios[cite: 122]. |
| **Atributos** | [cite_start]Posee los datos raíz (`nombre`, `correo`)[cite: 95, 137]. | [cite_start]Hereda los atributos del padre[cite: 122]. |
| **Métodos Propios** | [cite_start]Getters y Setters estándar[cite: 122]. | [cite_start]Incluye el método exclusivo `getRol()`[cite: 122]. |

## 3. Documentación del Código
[cite_start]Siguiendo el estándar de la asignatura, el código incluye bloques **DocBlock** para facilitar la interpretación por terceros[cite: 49, 55]:
* [cite_start]**@package**: Agrupa las clases en el módulo correspondiente[cite: 74, 87].
* [cite_start]**@param**: Define el tipo y descripción de los parámetros recibidos[cite: 75, 112].
* [cite_start]**@return**: Indica el tipo de dato que el método devuelve al finalizar[cite: 76, 119].
* [cite_start]**@version**: Controla la versión actual del desarrollo[cite: 88, 128].



## 4. Evidencia de ejecución
<img width="258" height="109" alt="image" src="https://github.com/user-attachments/assets/ad1fb07f-013f-473c-a5f3-a6d9f9bb5ab3" />

