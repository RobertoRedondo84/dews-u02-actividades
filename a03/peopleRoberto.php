<?php
$people=[
    [
        'name' => 'Roberto',
        'height' => 176,
        'email' => 'robredgar@alu.edu.gva.es'],
    
        [
            'name' => 'Juan',
            'height' => 180,
            'email' => 'juan@alu.edu.gva.es'],
        
        [
            'name' => 'Maria',
            'height' => 165,
            'email' => 'maria@alu.edu.gva.es'],

        [
            'name' => 'Pedro',
            'height' => 170,
            'email' => 'pedro@alu.edu.gva.es'],

        [
            'name' => 'Ana',
            'height' => 160,
            'email' => 'ana@alu.edu.gva.es'
        ]
]; ?>
<table>
    <tr>
        <th>Campo</th>
        <th>Valor</th>  
        
    </tr>

        <?php foreach ($people as $person) {  
            foreach ($person as $key => $value) 
            { ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php } 
        } ?>
</table>
