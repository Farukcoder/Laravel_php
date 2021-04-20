<?php
    // echo "Hello World";
    // print "<h1>variable</h1>";

    // $abul=1;
    // $abul1=2;

    // echo $abul*$abul1;

    //local variable

    // function add($a,$b,$c){
    //     echo $d= $a + $b + $c;
    
    // }
    // add(2,4,5);

    // global variable

    // $a = 12;
    // $b = 14;
    // $c = $a + $b;
    // function add($result){
    //     echo $result;
    // }
    // add($c);

    // super global variable

    // $a=100;
    // $b=300;

    // function substration(){
    //     $GLOBALS['c'] = $GLOBALS['b'] - $GLOBALS['a'];
    // }
    // substration();
    // echo $c;

    // function substration(){
    //     echo $_SERVER['PHP_SELF'];
    // }
    // substration();

    // $name="is";
    // $name1="thasan";
    // $name2="is a good";

    // $agg = str_replace("$name","$name1","$name2");
    // echo "$agg";

//     $vagg= "hello world";

//    print_r(explode(" ",$vagg)) ;

// $age=18;
// $gender='male';

// if($age == 18 ){
//     if($gender == 'male'){
//         echo "you can play now";
//     }else{
//         echo "you are not male";
//     }
// }else{
//     echo "opps so sorry now you are cildren";
// }

// if( $age >= 18 && $gender=="male"){
//     echo "thats good";
// }else{
//     echo "opps thats bad";
// }
  // date_default_timezone_set("Asia/Dhaka");
  // echo date("Y-m-d h:i:s");
//  $a=0;
//   for($i=0; $i<=10 ; $i++){
//     $a= $a+10;
//     echo $a."<br>";
//   }
// $car=['dj','md','bmw','honda'];

// foreach($car as $gari){
//   echo $gari.'<br>';
// }

// $a=20;
// $b=1;

// for($b=1; $b<=10;$b++){
//   $c=$a*$b;
//   echo $a."*".$b."=".$c."<br>";
// }

// $a=21;

// if(($a%2)==0){
//   echo "this is even number";
// }else{
//   echo "this is odd number";
// }

// $rafi=array(10,20,30,40,50,60,70,80,90);

// $start=0;
// $end= count($rafi)-1;

// for($start; $start<= $end; $start++){
//   echo $rafi[$start]."<br>";
// }
// foreach($rafi as $o){
//   echo $o.'<br>';
// }

// multidimantional array

$x=[
  [10,20,30],
  [40,50,60],
  [70,80,90]
];
foreach($x as $key=>$value){
  foreach($value as $key=>$value1){
    echo "key is:$key";
    echo "<br>";
    echo "value is :$value1";
  }
}

?>