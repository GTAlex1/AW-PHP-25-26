<?php
// Mostrar los números pares y divisibles por 3 del 1 al 100, o que sean mayores a 90. Mostrar en forma de tabla.

for ($i=1; $i <=100 ; $i++) { 
    if ($i<90) {
        if ($i%2=0 && $i%3=0) {
            ?> <table>
                <tr>
                    <td> <?php echo $i</td>
                </tr>
            </table>
        }
    }
}
?>
