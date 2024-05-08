<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$agenda = [];

$agenda [] = "Dentista a las 12h";
$agenda [] = "Trabajo a las 14h";

$agenda [0] = "Dentista a las 16h";

var_dump ($agenda):
?>

<ul>
<li><?php echo $agenda [0]; ?></li>
<li><?php echo $agenda [1]; ?></li>
</ul>

</body>
</html>