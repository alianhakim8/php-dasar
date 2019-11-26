<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .kotak{ 
        width:50px;
        height:50px;
        background-color:blue;
        color:#fff;
        text-align:center;
        line-height:50px;
        float:left;
        margin:3px;
        transition: 1.5s;
        border-radius:50%;
    }

    .kotak:hover{
        transform: rotate(360deg);
        border-radius:0%;
    }

    .clear{
        clear:both;
    }
    </style>
</head>
<body>
<?php $angka = [
    [2,2,3],
    [4,5,2],
    [1,4,3]
];
?>
</body>

<?php foreach( $angka as $a ):?>
    <?php foreach ( $a as $b ) : ?>
    <div class="kotak"><?= $b;?></div>
<?php endforeach; ?>
    <div class="clear">
    </div>
<?php endforeach; ?>
</html>