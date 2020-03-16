<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(!empty($_POST['name'])){

        setcookie('name2' , $_POST['name'], time() + 3600);
    }
   

}
echo $_COOKIE['name2'];

?>
