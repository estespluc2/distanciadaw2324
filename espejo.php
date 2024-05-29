<?php
/**
 * MODIFICADA
 * Actividad 1.2  En esta actividad debes crear en tu servidor un script PHP con el nombre 
 * practica-XXXXXX.php, donde XXXXXX será tu apellido. 
 * A continuación escribe dentro de este script bloques de código y DocBlocks para que 
 * luego se pueda generar la documentación correspondiente. El script debe contener al 
 * menos dos funciones documentadas, indicando mediante las etiquetas vistas en la unidad 
 * los siguientes elementos. 
 *      - Parámetros de entrada de la función.
 *      - Parámetros de devuelve la función.
 *      - Autor y versión del script.
 *      - Una anotación que solo sea visible en la documentación para desarrolladores.
 * 
 * @package Actividad_PHPDocumentor
 * @version 1.0.0
 */

/**
 * Cálculo del área de un rectángulo.
 *
 * Esta función toma el ancho y la altura de un rectángulo y devuelve el área.
 *
 * @param float $ancho El ancho del rectángulo.
 * @param float $alto La altura del rectángulo.
 * @return float El área del rectángulo.
 * @throws InvalidArgumentException Si alguno de los parámetros es negativo.
 * @author Esther Espejo Lucena
 * @version 1.0.0
 * @internal Ambas dimensiones, ancho y alto, deberían estar en la misma unidad de medida.
 */
function calcularAreaRectangulo($ancho, $alto) {
    if ($ancho < 0 || $alto < 0) {
        throw new InvalidArgumentException('El ancho y la altura deben ser no negativos.');
    }
    return $ancho * $alto;
}

/**
 * Convertir a mayúsculas.
 *
 * Esta función toma una cadena y devuelve la cadena en mayúsculas.
 *
 * @param string $texto La cadena a convertir.
 * @return string La cadena convertida a mayúsculas.
 * @since 1.0.0
 * @author Esther Espejo Lucena
 * @version 1.0.0
 */
function convertirAMayusculas($texto) {
    return strtoupper($texto);
}

