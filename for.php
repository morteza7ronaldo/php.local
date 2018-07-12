<?php include "functions.php";
<?php include "export.php";
$users = get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    table {
        border: 1px solid #ddd;
    }
    td,tr,th {
        padding: 5px 10px ;
    }


</style>
<table>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 5; $j++): ?>
                <?php
                $red = mt_rand(0, 255);
                $green = mt_rand(0, 255);
                $blue = mt_rand(0, 255);
              $bg_color= $red . ',' . $green . ','.$blue;
                ?>
                <td style="background:rgb(<?php echo $bg_color; ?>)"> <?php echo $bg_color; ?>  </td>
            <?php endfor; ?>
        </tr>

    <?php endfor; ?>
</table>
</body>
</html>