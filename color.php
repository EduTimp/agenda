<?php
$colores = ['Rojo', 'Morad', 'Celeste', 'Verde', 'Naranja', 'Rosado'];
?>

<!-- <ul>
    <?php 
    foreach ($colores as $color) {
        echo "<li>$color<li>a";
    }
    ?>
</ul> -->

<div>
<ul>
    <?php foreach ($colores as $color):?>
        <li body style="background-color:black"><?php echo $color; ?></li>
        <?php endforeach; ?>
</ul>
</div>    
