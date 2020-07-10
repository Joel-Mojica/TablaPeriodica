<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>

<p>Tabla Periodica</p>


<div class="container">


<?php 

$columna1 = array("H","LI","Na","K","Rb","Cs","Fr");
$columna2 = array(".","Be","MG","Ca","Sr","Ba","Ra");
$columna3 = array(".",".",".","Sc","Y","La-Lu","Ac-Lr");
$columna4 = array(".",".",".","Ti","Zr","Hf","Rf");
$columna5 = array(".",".",".","V","Nb","Ta","Db");
$columna6 = array(".",".",".","Cr","Mo","W","Sq");
$columna7 = array(".",".",".","Mn","Tc","Re","Bh");
$columna8 = array(".",".",".","Fe","Ru","Os","Hs");
$columna9 = array(".",".",".","Co","Rh","Ir","Mt");
$columna10 = array(".",".",".","Ni","Pd","Pt","Ds");
$columna11 = array(".",".",".","Cu","Ag","Au","Rg");
$columna12 = array(".",".",".","Zn","Cd","Hg","Cn");
$columna13 = array(".","B","Al","Ga","Ln","Tl","Nh");
$columna14 = array(".","C","Si","Ge","Sn","Pb","Fl");
$columna15 = array(".","N","P","As","Sb","Bi","Mc");
$columna16 = array(".","O","S","Se","Te","Po","Lv");
$columna17 = array(".","F","Cl","Br","l","At","Ts");
$columna18 = array("He","Ne","Ar","Kr","Xe","Rn","Og");



//COLUMNAS
   echo '<ul title="Otros Metales" class="columna1">';
for($i = 0; $i < count($columna1); $i ++){
    echo '<li title="Alcalinos" class=columna1_'.$i.'>'.$columna1[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna2">';
for($i = 0; $i < count($columna2); $i ++){
    echo '<li title="Alcalinoterreos"class=columna2_'.$i.'>'.$columna2[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna3">';
for($i = 0; $i < count($columna3); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna3_'.$i.'>'.$columna3[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna4">';
for($i = 0; $i < count($columna4); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna4_'.$i.'>'.$columna4[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna5">';
for($i = 0; $i < count($columna5); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna5_'.$i.'>'.$columna5[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna6">';
for($i = 0; $i < count($columna6); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna6_'.$i.'>'.$columna6[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna7">';
for($i = 0; $i < count($columna7); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna7_'.$i.'>'.$columna7[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna8">';
for($i = 0; $i < count($columna8); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna8_'.$i.'>'.$columna8[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna9">';
for($i = 0; $i < count($columna9); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna9_'.$i.'>'.$columna9[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna10">';
for($i = 0; $i < count($columna10); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna10_'.$i.'>'.$columna10[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna11">';
for($i = 0; $i < count($columna11); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna11_'.$i.'>'.$columna11[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna12">';
for($i = 0; $i < count($columna12); $i ++){
    echo '<li title="Metales de Trasicion / Bloque D" class=columna12_'.$i.'>'.$columna12[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna13">';
for($i = 0; $i < count($columna13); $i ++){
    echo '<li title="Otros metales" class=columna13_'.$i.'>'.$columna13[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna14">';
for($i = 0; $i < count($columna14); $i ++){
    echo '<li class=columna14_'.$i.'>'.$columna14[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna15">';
for($i = 0; $i < count($columna15); $i ++){
    echo '<li class=columna15_'.$i.'>'.$columna15[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna16">';
for($i = 0; $i < count($columna16); $i ++){
    echo '<li class=columna16_'.$i.'>'.$columna16[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna17">';
for($i = 0; $i < count($columna17); $i ++){
    echo '<li title="Alogenos" class=columna17_'.$i.'>'.$columna17[$i].'</li>';
}
echo '</ul>';

echo '<ul class="columna18">';
for($i = 0; $i < count($columna18); $i ++){
    echo '<li title="Gases Nobles" class=columna18_'.$i.'>'.$columna18[$i].'</li>';
}
echo '</ul>';

?>

</div>


<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous">
</script>

<script src="javascriptTabla.js"></script>

    
</body>
</html>