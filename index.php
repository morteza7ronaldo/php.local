<?php include "functions.php"?>
<?php
if (isset($_POST['Send'])){
//    var_dump($_POST);
    $background_color=select_bg($_POST['background']);
}



    ?>

<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: <?php echo $background_color ?>">
<?php //if (is_user_logged_in()):?>
<!-- <p>welcome to our website </p>-->
<!-- --><?php //else: ?>
<!--<a href="#">please login to download this file </a>-->
<?php //endif; ?>
<?php
//$is_user_logged_in=false;
//switch ($is_user_logged_in){
//    case true:
//        echo 'this user is already logged in ';
//        break;
//    case false:
//        echo 'please login';
//        break;
//    default : echo 'eror 404';
//}
//
//?>
<!--<form action="" method="post">-->
<!--    <input type="radio" name="background"  value="blue">-->
<!--    <input type="radio" name="background" value="red">-->
<!--    <input type="radio" name="background" value="green">-->
<!---->
<!---->
<!--    <input type="submit" name="Send" value="send">-->
<!---->
<!--</form>-->
<?php for ($i=0;i<10;$i++): ?>
<p> <?php echo $i; ?> </p>
<?php endfor; ?>
</body>
</html>