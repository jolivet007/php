✅ 1. Formato en Markdown (para GitHub o impresiones)
Ideal para subir al repositorio o entregar como apunte a los alumnos.

<details> <summary>📄 Haz clic aquí para desplegar el contenido en formato Markdown</summary>
markdown
Copy
Edit
# 🧠 Clase: Estructuras de Control en PHP

## 🎯 Objetivo de la clase
Comprender y aplicar las principales estructuras de control en PHP para modificar el flujo de ejecución de los programas, incluyendo condicionales y bucles.

## ⏱ Duración estimada: 45 minutos

---

## 🧩 1. ¿Qué son las estructuras de control?

Las **estructuras de control** permiten tomar decisiones y repetir acciones en un programa. Son esenciales para controlar el flujo de ejecución.

**Tipos:**
- Condicionales: `if`, `else`, `elseif`, `switch`
- Bucles: `while`, `do...while`, `for`, `foreach`
- Control de flujo: `break`, `continue`, `exit`, `return`

---

## 🔀 2. Estructuras Condicionales

### ✅ if / else / elseif

```php
$edad = 20;

if ($edad >= 18) {
    echo "Es mayor de edad";
} elseif ($edad >= 13) {
    echo "Es adolescente";
} else {
    echo "Es menor de edad";
}
```
🔁 switch
``` php
$dia = "martes";

switch ($dia) {
    case "lunes":
        echo "Inicio de semana";
        break;
    case "martes":
        echo "Segundo día";
        break;
    default:
        echo "Otro día";
}
```
🔄 3. Bucles o estructuras de repetición
⏳ while
```php
$contador = 1;
while ($contador <= 5) {
    echo "Número: $contador <br>";
    $contador++;
}
```
🔂 do...while
```
$numero = 1;
do {
    echo "Número: $numero <br>";
    $numero++;
} while ($numero <= 3);
```
🔃 for
php
Copy
Edit
for ($i = 1; $i <= 5; $i++) {
    echo "Iteración: $i <br>";
}
🧠 foreach
php
Copy
Edit
$nombres = ["Ana", "Luis", "Carlos"];

foreach ($nombres as $nombre) {
    echo "Hola, $nombre <br>";
}
🚦 4. Control de flujo
⛔ break
php
Copy
Edit
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo $i . "<br>";
}
🔄 continue
php
Copy
Edit
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    echo $i . "<br>";
}
🚪 exit / die
php
Copy
Edit
if (!$usuario_autenticado) {
    die("Acceso denegado");
}
🧪 5. Ejercicios propuestos
Usá un if para verificar si una variable $nota es mayor o igual a 6 y mostrar "Aprobado", si no, "Reprobado".

Creá un bucle for que imprima los números del 10 al 1.

Recorre un array con foreach y mostrale el nombre a cada elemento: ["Pedro", "María", "Sofía"].

Usá switch para responder a los días: "lunes", "viernes" o "otro día".

📋 6. Evaluación
Preguntas de opción múltiple (1 punto c/u)
1. ¿Qué estructura se ejecuta al menos una vez, sin importar si la condición es verdadera o falsa?

a) while

b) do...while ✅

c) for

d) foreach

2. ¿Cuál estructura es más adecuada para recorrer un array indexado?

a) switch

b) if

c) foreach ✅

d) exit

3. ¿Qué hace el comando break?

a) Salta a la siguiente iteración

b) Sale del bucle actual ✅

c) Finaliza todo el script

d) Repite el bucle indefinidamente

4. ¿Cuál es el error en este fragmento?

php
Copy
Edit
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
a) Falta el punto y coma en echo

b) El bucle está mal escrito

c) No hay error ✅

d) Falta cerrar el for con endfor

Pregunta de desarrollo (2 puntos)
Describí las diferencias entre if y switch y explicá en qué situación preferirías usar cada uno.

yaml
Copy
Edit

</details>

---

## 🖥️ 2. **Versión para presentación (diapositivas)**

Dividida por temas clave:

---

### 💡 Diapositiva 1 – Título
**Clase: Estructuras de Control en PHP**  
Duración: 45 minutos  
Objetivo: Controlar el flujo de ejecución con condicionales y bucles.

---

### 💡 Diapositiva 2 – ¿Qué son las estructuras de control?
- Permiten tomar decisiones
- Repiten acciones
- Tipos: Condicionales, Bucles, Flujo

---

### 💡 Diapositiva 3 – Condicionales: `if / else / elseif`

```php
if ($edad >= 18) {
    echo "Mayor de edad";
} elseif ($edad >= 13) {
    echo "Adolescente";
} else {
    echo "Menor";
}
💡 Diapositiva 4 – Condicionales: switch
php
Copy
Edit
switch ($dia) {
    case "lunes":
        echo "Inicio de semana";
        break;
    default:
        echo "Otro día";
}
💡 Diapositiva 5 – Bucles: while, do...while
php
Copy
Edit
while ($i <= 5) {
    echo $i;
    $i++;
}
💡 Diapositiva 6 – Bucle for
php
Copy
Edit
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
💡 Diapositiva 7 – Bucle foreach
php
Copy
Edit
foreach ($nombres as $nombre) {
    echo $nombre;
}
💡 Diapositiva 8 – Control de flujo: break, continue, exit
php
Copy
Edit
if (!$login) {
    exit("No autorizado");
}
💡 Diapositiva 9 – Ejercicios propuestos
if con nota

for de 10 a 1

foreach de nombres

switch con días

💡 Diapositiva 10 – Evaluación
4 preguntas de opción múltiple
1 pregunta de desarrollo

📘 3. Propuesta de guía de ejercicios (para práctica individual o en clase)
markdown
Copy
Edit
# 📝 Guía de ejercicios – Estructuras de Control en PHP

## Nivel básico

1. Crea un programa que indique si un número es par o impar.
2. Hacé un `for` que imprima los múltiplos de 3 del 1 al 30.
3. Simulá un login: si el usuario y la clave coinciden con "admin", mostrar "Bienvenido".

## Nivel intermedio

4. Con un `switch`, mostrale al usuario un mensaje según el mes del año (1 al 12).
5. Cargá un array de 5 nombres y mostralos con `foreach`.
6. Usá `while` para sumar números hasta que la suma sea mayor a 100.

## Nivel avanzado

7. Armá un menú interactivo en consola (usando `readline()`) con `switch`:
    - 1. Ver perfil
    - 2. Editar perfil
    - 3. Salir

8. Simulá un semáforo con `switch`: según el color ("rojo", "verde", "amarillo"), mostrale al usuario una acción.

9. Hacé un ciclo que corte si se introduce el número 0 (usá `break`).

10. Simulá el lanzamiento de un dado (número random del 1 al 6) y repetí hasta que salga un 6 (usá `do...while`).
