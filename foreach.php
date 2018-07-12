<!doctype html>
<?php include "functions.php";
$users = get_users();
?>
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
    td, tr, th {
        border: 1px solid;
    }
</style>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>action</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td> <?php echo $user['id']; ?> </td>
            <td> <?php echo $user['name']; ?> </td>
            <td> <?php echo $user['email']; ?> </td>
            <td>
                <a href="#">delete</a>
                <a href="#">edit</a>
                <a href="#">approve</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>