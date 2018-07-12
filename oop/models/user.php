<?php
echo __DIR__ ;
require_once "../db.php";
class User extends Db {

}
$user1= new User ();
$user1->find(2);