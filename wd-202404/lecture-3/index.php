<?php

echo "Lecture 3 \n";

// echo "<pre>";
// $choices = $_POST['choice'];

// $choicesString = implode(',',$choices);
// echo $choicesString;

// echo $_POST['name'];


/***
 * String Manipulation
 * Using single qoute
 * Using double qoute
 * Using HereDoc Syntax
 * Using NowDoc Syntax
 */

 /**
  * Escaped Charecters
  * \n, \t, \v
  * 
  */



 /**
  * Start HereDoc Syntax
  */

  $name = "Mithu";
  $roll = 773907;
  $reg = 615902;
//   echo <<<NAME
//     Hello                       World! $name
//     $name

//   NAME;
//   echo 'Name: '.$name.' Roll: '.$roll.' Reg: '.$reg;

// $totalLengthOfName = strlen($name);
// echo $totalLengthOfName;

$fruits = "Apple,Watermelon,Papaya,Orange"; 
// echo $fruits;
$fruitsArray = explode(",",$fruits); 

/**
 * explode($del,$string):array
 * split a string into array based on delimiter
 */

// echo count($fruitsArray);

/**
 * implode($del,$array):string
 * array convert to string
 */

$fruitsString = implode(",",$fruitsArray);
// echo $fruitsString;


$choice1= "DPI";
$choice2= "FPI";
$choice3= "FCI";
$choice4= "DMPI";
$choice5= "CPI";

$institute = "$choice1, $choice2,$choice3,$choice4,$choice5";

// $output = "DPI, FPI,FCI,DMPI,CPI";

// echo $institute;

/***
 * strlower()
 * strupper()
 * ucfirst("mehedi")
 * str_word_count()
 * substr()
 * str_contains()
 */

//  $data = substr("Hello Guys I am from Bangladesh.",0,5);
//  echo $data;
// str_contains("I Love Programming","Love");

// 12500.358;
echo number_format(12500.3588874564654,2,'.','-');
?>
