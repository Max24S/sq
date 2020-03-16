<?php
// $sd=[4,2,3,4,5,6,7,8];
// // echo min($sd);
// // for ($i=0; $i < ; $i++) { 
// //     # code...
// // }
// // $city="";
// $town='sds';
// $city=$town??'kram';
// echo $city;
// // $value=(isset($name))?:'no-name';
// // echo $value;
// // $user=(!empty($name))?:"user3";
// // echo $user;
// // $fio=(isset($surname))?"Ivanov":$surname;
// // echo $fio;
// for ($i=10; $i<22 ; $i++) {
//     if($i%2==0){
//         echo "<br>$i";
//     } 
// }
// $user = [
//     'surname' => 'Иванов',
//     'name' => 'Василий',
//     'age' => 18
//   ];
//   $fruits = ['apple', 'kiwi', 'orange'];
//   foreach ($fruits as $fruit) { 
//       # code...
//         echo '<br>'.$fruit.'<br>';
//   }
//   foreach ($user as $key=>$users){
//       echo $users.'<br>';
//   }
//   define('PI',3.14);
//   $int=(string)1;
//   echo gettype($int)."<br>";
//   $count=0;
//   echo "Число пи(".PI.")-это константа";
//   for ($i=10; $i <55 ; $i++) {    
//       if($i%3==0){
//          $count++; 
//       }
//   }
//    function sum($x,$y):float
//   {
//       $sum=($x)+($y);
//       return $sum;
//       # code...
//   }
//   echo "<br>".sum(3,5)."<br>";
//   var_dump(sum(3,5));
  
//   echo $count;
//    $count_str=0;
//   function get_count_sybmols($str,$symbol):int{

//     for($i=0;$i<mb_strlen($str);$i++){
//         if($str[$i]== $symbol){
//             global $count_str;
//              $count_str++;
//         }
//     }
//     return $count_str;
//   }
//   $aray=[26, 17, 136, 12, 79, 15];
//   $sum=0;
//   foreach ($aray as $variable) {
//       $sum+=pow($variable,2);
//   }
//   echo "<br> sum=".$sum;
// //   echo "<br>".get_count_sybmols("sdadadadadd",'d')
// function get_first_upper_str($str):string{
//     $str=$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8"); 
//     return $str; 
// }
// echo get_first_upper_str("максим ИВанов");
// function get_name($str){
// // $str=stripslashes($str);
// $psd=strrpos($str,"\\");

// $new_str=substr($str, $psd+1,mb_strlen($str));
// $point=strpos($new_str, ".");
// $name=substr($new_str, 0, $point);

// return $name;
// }
// echo get_name("D:\WebServersww\myfile.txt")

//     $erName=false;
//     $erSurname=false;
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     var_dump($_POST);
//     $erName=check_void_input(($_POST["name"]));
//     $erSurname=check_void_input($_POST["surname"]);  
// }


// $name=$_POST["name"];
//  function check_void_input($str){
//      if($str){
        
//          return  false;
        
//      }
//      return true;
//  }

//  $str="123456789";
//  $sum=0;
// for ($i=0; $i < mb_strlen($str); $i++) { 
//     $sum+=$str[$i];
//     # code...
// }
// // echo $sum;
// // var_dump( array_sum(str_split($str)));

// $fruits=['a'=>"apple",'b'=>"banana",'c'=>'cheazy'];
// function renameKeys($array)  {
//     return array_combine(array_reverse(array_keys($array)), array_values($array));
// }

// // var_dump(renameKeys($fruits));


// $number_array=[1,2,3];
// $char_array=['a','b','c'];
// $res=[];
// for($i=0; $i<count($char_array); $i++){
//     $res[]=$char_array[$i];
//     $res[]=$number_array[$i];
//   }
// $result= array_merge ( [1,2,3],['a','b','c']);
// var_dump($result);

// var_dump($res);

// $date=time();
// $date2=mktime(12,12,34,1,23,1999);
// // var_dump($date);
// // var_dump($date2);
// function getDayOfWeek($date){
//     $days=["Воскресенье","Пондельник","Вторник","Среда","Четверг","Пятница","Суббота"];
//     $timeStampDate=strtotime($date);
//     $indexDday=Date('w',$timeStampDate);

//     return $days[$indexDday];
// }
// echo getDayOfWeek("1996-04-05");

// function getDay(){
//     $dateNow=time();
//     $dateTomorrow=strtotime("+1 day",$dateNow);
//     $days=["Воскресенье","Пондельник","Вторник","Среда","Четверг","Пятница","Суббота"];
//     $indexDday=Date('w',$dateTomorrow);

//     return $days[$indexDday];
// }
// echo("<br>".getDay()."<br>");

// function differenceBetweenTwoDates($dat1,$dat2){
//     $date=explode("-",$dat1);
//     $date_2=explode("-",$dat2);
//     $date1=strtotime("$date[2]-$date[1]-$date[0]");
//     $date2=strtotime("$date_2[2]-$date_2[1]-$date_2[0]");
//     $diference=abs($date1-$date2);

//     return $diference/86400;
// } 

// echo (differenceBetweenTwoDates("1996-04-05","1996-04-03"));

// class FirstClass {
//     public $name;
//     function __construct($hi){
//         $this->name=$hi;
//     }
//     public function SayHello(){
//         return 'Hi'.$this->name;
//     }
// }
// $instance=new FirstClass("IVAN");
//  echo "<br>".$instance->SayHello();
// class StringFunctionClass{

//     public $str="";
//     function __construct($str)
//     {
//         $this->str=$str;
//     }
//     public function getEditedStr(){

//         $string=trim($this->str);
//         $string=strip_tags($string);
//         return $string;
//     }
//     public  function getFIO()
//     {
//         $this->getEditedStr();
// 	    $fio = mb_strtolower($this->str);
        
// 	$result = mb_strtoupper( mb_substr($fio, 0, 1) );
// 	$pos = '';
// 	for($i = 1; $i < mb_strlen($fio); $i++){
// 		$symbol =  mb_substr($fio, $i, 1) ;
// 		if($pos == 'set_next'){
// 			$symbol = mb_strtoupper($symbol);
// 		}
// 		$result .= $symbol;

// 		if($symbol == ' '){
// 			$pos = 'set_next';
// 		}else{
// 			$pos = '';
// 		}
//     }
    
//     return $result;
    
//     } 
// }
// $obgClass=new StringFunctionClass("  <span></span>        кудрявцев игорь анатальевич");
// echo $obgClass->getEditedStr()."<br>";
// echo $obgClass->getFIO();
// class DateFunctionsClass{
// 	private $date1 = '';
// 	private $date2 = '';

// 	/**
//      * установка первой даты
//      */
// 	public function setDate1($date1)
// 	{
// 		return $this->date1=trim($date1);
// 	}

//     /**
//      * установка второй даты
//      */
// 	public function setDate2($date2)
// 	{
// 		return $this->date2=trim($date2);
// 	}

//     /**
//      * дата в формате '2020-02-02' преобразовуется в timestamp
//      * @param $date
//      * @return int
//      */
//     public function getDateInTimestamp($date = '')
//     {
//         if(empty($date)){
//             $date=strtotime($this->date1);
//             return $date;
//         }
//         else {
//           return strtotime($date);
//         }
//     }

//     /**
//      * получение разницы двух дат
//      * @param $date1
//      * @param $date2
//      * @return int
//      */
// 	public function getDifferentDate($date1, $date2)
// 	{

// 	}

//     /**
//      * определение является ли дата рабочим днем
//      * @param $date
//      * @return bool
//      */
// 	public function isWorkDate($date)
//     {

//     }

//     /**
//      * функция возвращает словами день недели
//      * @param string $date
//      * @return string
//      */
//     public function getNameDayOfWeek($date = '')
//     {

//     }


// }

// $dateOBG=new DateFunctionsClass();
// echo ($dateOBG->setDate1('2020-03-02')."<br>");
// echo ($dateOBG->getDateInTimestamp());
class Animals
{
    protected $type="";
    protected $name="";
    public function setType($type){

        $this->type=$type;
    }
    public function setName($name){
        
        $this->name=$name;
    }
    public function getType(){

        return $this->type;
     }
     public function getName(){
 
         return $this->name;
     }
}
class Dog extends Animals 
{  
     function __construct($name,$type)
    {
        $this->setName($name);
        $this->setType($type);
    }
}

$dogObj=new Dog("Ivan","CHAYCHAY");

echo "У меня есть {$dogObj->getType()} {$dogObj->getName()}"
?>
<div><?php if($erName===true){echo"пустое значение имени";}if($erSurname===true){echo"пустая фамилия";}?></div>
<form  action="" method="POST">

<p>Имя: <input name="name" value="" type="text"></p>

<p>Фамилия: <input name="surname" type="text"></p>

<p>E-mail: <input name="email" type="text"></p>

<p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>

<p><input type='submit' value='Отправить'></p>

</form>