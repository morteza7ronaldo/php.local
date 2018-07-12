<?php
function is_user_logged_in(){
    return false ;
}
function select_bg($color_name){
    $result="";
    switch ($color_name){
        case 'blue':
            $result='#00c';
            break;
        case 'red':
            $result='#c00';
            break;
        case 'green':
            $result='#0c0';
            break;
    }
    return $result;
}
function get_users(){
    return array(
        array('id'=> 1, 'name'=>'ali', 'email'=>'ali@gmail.com'),
        array('id'=> 2, 'name'=>'morteza', 'email'=>'morteza@gmail.com'),
        array('id'=> 3, 'name'=>'atefeh', 'email'=>'atefeh@gmail.com'),
        array('id'=> 4, 'name'=>'mostafa', 'email'=>'mostafa@gmail.com'),
        array('id'=> 5, 'name'=>'hasan', 'email'=>'hasan@gmail.com'),
    ) ;
}