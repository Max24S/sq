<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['phone'])){
        $_SESSION['phone'] = $_POST['phone'];
        
        $phone =  $_SESSION['phone'];
    }
}

?>

<input type="text" disabled value="<?php echo $phone ?>">
