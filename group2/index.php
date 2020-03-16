<?

// $surname = 'Petrov';
// $age = 23;
// $prefix = 'sub-';
// //const
// define('ADMIN_NAME', 'test');

// $num = '11';

// //echo (integer)$num;

// echo '<strong>Hello, '.$name.'</strong>' , '<br>', '<hr>';
// echo "Hi , $name  $surname!" , '<br>' , '<hr>';
// echo "Привет {$prefix}kk" , '<br>', '<hr>';


// //define
// echo ADMIN_NAME;
// echo __LINE__ , '<br>';

// echo '<hr>';


// //var_dump($num);

// echo '<br>';

// $a = $b = $c = $d = 3;
// echo $a++;




// $city = '';

// if(isset($town)){
//   $city = $town;
// }else{
//   $city = 'kram';
// }

// $city = $town ?? 'kram';

// $value = 'no-name';
// if(isset($name)){
//   $value = $name;
// }

// $value = $name ?? 'no-name';


// if(!empty($name)){
//     $user = $name;
//   }else{
//     $user = 'user3';
//   }

//   $user = (!empty($name)) ?  : 'user3' ;

// $i = 0;

// while ($i < 10) {
//     echo $i.'<br>';
//     $i++;
// }

// for( $i = 3; $i < 10; $i++) {
//     echo $i.'<br>';
// }


// for ($num = 11; $num < 25; $num++){
//     if($num % 2 == 0) {
//         echo $num. '<br>';
//     }
// }

// $users = [
//     'surname' => 'Иванов',
//     'name' => 'Василий',
//     'age' => 18
//   ];
  
// $fruits = ['apple', 'kiwi', 'orange'];

// foreach( $users as $key =>  $value ) {
//    echo "Ключ <strong>$key</strong> значение <strong>$value</strong> <br>";
// }



// define( 'PI' , 3.14);

// $int = 1 ;
// $int = (string)$int; //строка


// echo "Число пи ".PI." -это константа";



// $count = 0;
// for ($numb = 10; $numb < 55; $numb++){
    
//     if( $numb % 3 == 0 ) {
//         $count++;
//     }
 
// }
// echo $count;



    // function calc($a, $b){
    //     return  $a + $b;
    // }
    // echo calc(3, 5);

    // function summ($a):int {
    //     return $a;
    // }

    // var_dump(summ('2'))


    $a = 'тssт';
    //echo mb_strlen($a);
    //mb_strlen -- префикс mb_ для кирилицы

    //echo strpos($a, ''); 
    //stripos() -- регистро независимый поиск
    //strrpos() -- в обратном порядке | strripos() -- регистро независимый поиск

    //strtolower($str) - в нижний
    //strtoupper($str) - в верхний
    //substr (с какого элемента , скоко символов)
    
    // $str = 'ывфыввывы';

    // for ($i = 0; $i < mb_strlen($str); $i++){
    //     echo mb_substr($str, $i, 1).'<br>';

    // }

    // $str2 = 'D:\WebServers\home\testsite\www\myfile.txt';

    // function getName($str){
    //    $res =  strrpos($str, '\\');
    //    return substr($str , $res + 1); 

    // }
    // echo getName($str2);


    // function getFio($str){
    //     $res = '';
    //    //return $str = mb_convert_case($str ,  MB_CASE_TITLE, "UTF-8");
    //    for( $i = 0; $i < mb_strlen($str); $i++){
    //        if(mb_substr($str, $i, 1) !== ' ') {
    //         $res.= mb_substr($str, $i, 1);
    //        }else {
    //         $str = str_replace(' ', '', $str);
    //         $res.= ' '. mb_strtoupper(mb_substr($str, $i, 1));
              
    //        }
    //    }
    //    return $res;

    // }
    // echo '<br>';
    // echo  getFio('Иван матроc');



    // function getFio($fio){
    //     $fio = trim( mb_strtolower($fio));

    //     $res = mb_strtoupper( mb_substr($fio , 0 , 1) );

    //     $isUp = false;

    //     for($i = 1 ; $i < mb_strlen($fio); $i++){
    //         $symbol = mb_substr($fio , $i , 1);

    //         //first variant
    //         if($isUp){
    //             $symbol = mb_strtoupper($symbol);
    //         }
    //         $res .= $symbol;

    //         if( $symbol == ' ' ) {
    //             $isUp = true;
    //         }else{
    //             $isUp = false;
    //         }
            
    //     }

    //     return $res;

    // }
    // echo '<br>';
    // echo  getFio(' Иван матроc  asdS');


    //  $str = 'Привет, <strong>Разрещенный</strong> <h1>Ку</h1> Друг';
    echo '<br>';
    // // $str = str_replace('Друг' , 'Враг', $str);
    // // echo $str;
    
    // $symbol = '<';
    // echo strip_tags ($str , '<strong>');

   
   $name = 'Mike';
   //var_dump($_POST);
//    echo '<pre>';
//    var_dump($_SERVER); 
//    echo '</pre>';    

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $check = $_POST['name'];
    
//     if( empty($check)) {
//         $check = 'Заполните поле';
//     }else {
//         $check = '';
//     }
    
// }



// function countSymb( $symb = 10){
//     $checkName = $_POST['name'];
//     $checkName = trim($checkName);
//     if(mb_strlen($checkName) > $symb) {
//         return 'Символов больше'.' '.$symb;
//     } else {
//         return  '';
//     }
// }


?>

<!-- 
<form action="" method="post">

<p>Имя: <input name="name" value="<?  'Test' ?>" type="text"></p>

<? //echo countSymb() ?>
<? //echo  $check ?>

<p>Фамилия: <input name="surname" type="text"></p>

<p>E-mail: <input name="email" type="text"></p>

<p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>

<p><input type='submit' value='Отправить'></p>



</form> -->

<?


// $summ = 0;
// function summ ($str) {
//     for($i = 0; $i < strlen($str); $i++){
//         $summ += (int)$str[$i];
//     }
//     return $summ;
// }

// echo summ('asda12d3aaa4567890');




// $fruits=['a' => "apple",'b' => "banana",'c' => 'cheazy'];
// function changeKey($array)  {
//     return array_combine(array_reverse(array_keys($array)), array_values($array));
// }

// echo '<pre>';
// print_r(changeKey($fruits));
// echo '</pre>';


// $arrMap = ['asd', 'asd', 'aaa','fff'];

// function contatc($arr){
//     return $arr . ' price 1000 ';
// }

// $res = array_map('contatc' , $arrMap);

// echo '<pre>';
// print_r(changeKey($res));
// echo '</pre>';

// $user2 = [
//     'name' => 'John',
//     'age' => '18',
// ];

// var_dump(array_keys($user2));


// $arrNum = [1 , 2 ,3 ];
// $arrStr = ['a' , 'b' ,'c'];

// for($i=0; $i < count($arrStr); $i++){
//     $res2[] = $arrNum[$i];
//     $res2[] = $arrStr[$i];
//   }

// echo '<pre>';
// print_r( $res2 );
// echo '</pre>';

// $numb = '123456789';

// function summ ($str) {
//     $numb = str_split($str);
//     return array_sum($numb);
// } 

// echo summ($numb);

//shift - убрать из первого элемента
//unshift - добавить первый элемент массива
//inArray проверить по ключам

// d.m.Y

// $time = time();
// var_dump($time);

// echo '<br>';

// $time = mktime();
// echo $time;

// echo '<br>';

// $date1 = strtotime('2020-02-01');
// $date2 = strtotime('+8 days', $date1);
// echo date('d.m.Y', $date2);






// function getDates ($date) {
//     $days = ['Воскресенье',  'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Понедельник'];
//     $daysNum =  date("w", strtotime($date));

//     return  $days[$daysNum];
// }

// echo 'Дата = '.getDates('2020-03-02');
// echo '<br>';




// function nextDay($date) {
//     $days = ['Воскресенье',  'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Понедельник'];

//     $date = strtotime($date);
//     $date = strtotime("+1 day", $date);
//     $daysNum =  date ('w', $date); ;

//     return $days[$daysNum];
// }

// echo 'Завтра - '.nextDay('2020-03-02');
// echo '<br>';



// function diffDays($date1 , $date2 ) {
//     $date1 = date(strtotime($date1));
//     $date2 = date(strtotime($date2));

//     return floor(abs($date1 - $date2) / (60 * 60 * 24));
// }

// echo 'Разница в датах = '.diffDays('03-03-2020', '08-03-2020');



// function get_count_days($date = "") {
//    $dateMay = strtotime("2020-01-05");
//    $date = strtotime($date);

//    if($date !=""){
//     return floor(abs($dateMay - $date) / (60 * 60 * 24));
//    }

//    $date = mktime();

//    return floor(abs($dateMay - $date) / (60 * 60 * 24));
   
// }
// echo '<br>';
// echo 'До мая - '.get_count_days();

// echo '<br>';
// echo '<hr>';


// class UsersClass 
// {

//     public $fio = 'Hi!' ;


//     public function getFio($fio)
//     {
//         return $this->toUpper($fio);
//     }

//     function __construct($fio = '')
//     {
//         $this->fio = $this->getFio($fio);
//     }

//     public function preperName($name)
//     {
//         return strip_tags(trim($name));
//     }

//     public function sayHelloUser($name)
//     {
//         return $this->preperName($name);
//     }
//     public function sayHello()
//     {
//        return $this->hi.'!';
//     }

//     private function toUpper($fio)
//     {
//         $fio = $this->preperName(mb_strtolower($fio));

//         $res = mb_strtoupper( mb_substr($fio , 0 , 1) );

//         $isUp = false;

//         for($i = 1 ; $i < mb_strlen($fio); $i++){
//             $symbol = mb_substr($fio , $i , 1);

//             if($isUp){
//                 $symbol = mb_strtoupper($symbol);
//             }
//             $res .= $symbol;

//             if( $symbol == ' ' ) {
//                 $isUp = true;
//             }else{
//                 $isUp = false;
//             }
            
//         }

//         return $res;   
//     }

// };

// echo $uesrClass = new UsersClass("   <span>  Иван Иванов Иванович</span>");
// var_dump($userClass->getFio());

// echo $uesrClass -> sayHello();
// echo '<br>';
// echo $uesrClass->getFio(' ');




// parent::__construct



abstract class Figure 
{

    public function SetType()
    {
        return 'Some Type';
    }

    public function SetColor()
    {
        return 'Some Color';
    }

    abstract public function calcSquare();
    
}

class Circle extends Figure
{
    public static $size = '200px'; 

    public function calcSquare(){
        echo self::$size;
        return 'this is abstract methods from parent';
    }
}








$objCirlce = new Circle;
echo $objCirlce->calcSquare();

echo Circle::$size;




?>