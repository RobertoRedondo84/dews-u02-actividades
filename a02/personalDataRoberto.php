<?php

$person = [
    'name' => 'Roberto',
    'last_name' => 'Redondo',
    'email' => 'robredgar@alu.edu.gva.es',
    'birth_date' => '1984-08-23',
    'phone' => '637106567'
    ];
?>
   <table>
    <tr>
        <th>Campo</th>
        <th>Valor</th>
    </tr>

  <?php  foreach ($person as $key => $value) {  ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php } ?>

</table>

