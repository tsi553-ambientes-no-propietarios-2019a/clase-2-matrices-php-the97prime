<?php

echo '<br>';
$Datos = array(
    array(
            'Nombre' => 'Oscar',
            'Apellido' => 'Peñaherrera',
            'Edad' => 21
    ),
    array(
            'Nombre' => 'Ruth',
            'Apellido' => 'Mejillon',
            'Edad' => 20
    ),
    array(
            'Nombre' => 'Fernando',
            'Apellido' => 'Buendia',
            'Edad' => 25
    )
    );
echo'<center>'; 
echo'<h1>Deber</h1>';
echo'<h2>Tabla en PHP</h2>'; 
echo '<table width="50%" border="1">';
echo ' 
<thead>
    <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>                
    </tr>
</thead>';
foreach ( $Datos as $row ) {
        echo '<tr>';
        foreach ( $row as $key ) {
                echo '<td>'.$key.'</td>';
        }
        echo '</tr>';
}
echo '</table>';
echo'</center>';