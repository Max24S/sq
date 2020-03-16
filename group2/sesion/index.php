<?php

// if(!isset($_COOKIE['time'])) {
//     setcookie('time' , time(), time() + 3600);
// }

// if(isset($_COOKIE['time'])){
//     echo 'Времени с первого  раза прошло '.abs($_COOKIE['time'] - time()).' сек';
// }

?>

<form action="" method="POST">
<br>
<label for="">Введи свою днюху</label>
<br>
<input type="date" name="birhday">
<button>Запомнить днюху</button>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(!empty($_POST['birhday'])){

        setcookie('birhday' , $_POST['birhday'], time() + 3600);
    }
}

if(isset($_COOKIE['birhday'])){
    echo $_COOKIE['birhday'];
}

?>