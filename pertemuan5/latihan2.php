<?php 
// PENGULANGAN PADA ARRAY
$angka = [2,3,4,5,1,3,2,8,10,12,23];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
    <style>
    .kotak{
        width : 50px;
        width : 50px;
        background-color : green;
        text-align : center;
        color : white;
        line-height : 50px;
        margin : 3px;
        float : left;
    }
    .clear{
        clear:both;
    }
    </style>
</head>
<body>

<?php for ( $i = 0 ; $i < count($angka) ; $i++ ) {?>
    <div class="kotak"><?php echo $angka[$i]?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a  ) :?>
    <div class ="kotak"><?= $a;?></div>
<?php endforeach;?>
</body>
</html>