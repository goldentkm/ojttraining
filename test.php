<?php $makefoo=true;
bar();
if (!($makefoo)) {
    function foo()
    {
        echo "I don't exist until program execution reaches me.<br/>";
    }
}
if (!($makefoo))  foo();

function bar() 
{
    echo "I exist immediately upon program start.<br/>";
}
function foo1() 
{
  function bar1() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}
foo1();
/* Now we can call bar(),
   foo()'s processesing has
   made it accessible. */

bar1();

function multipleret($arg1){
$arrResult=array();
$arrResult[]="A";
$arrResult[]=$arg1;
$arrResult[]=1.25;
return $arrResult;  
}
print_r(multipleret("bla bla bla"));
function sayHello() { 
		echo "Hello<br />"; 
		} 
		$function_holder = "sayHello"; 
		$function_holder();

$d=cal_days_in_month(CAL_GREGORIAN,2,2016);
echo "There was $d days in February 2016". "<br />";
    // There was 29 days in February 2016
echo easter_date() . "<br />"; 
echo date("M-d-Y",easter_date()) . "<br />";
echo date("M-d-Y",easter_date(1975)) . "<br />";// 1428168600
//Mar-26-2016//Mar-29-1975
echo "Easter Day is ". easter_days() . " days after March 21 this year.<br />";echo "Easter Day was ". easter_days(1990) . " days after March 21 in 1990.<br />";//Easter Day is 6 days after March 21 this year.//Easter Day was 9 days after March 21 in 1990.
$a1=array("red","green");
		$a2=array("blue","yellow");
	echo "replace:";
		print_r(array_replace($a1,$a2));
		echo "<br/>a1:";
		print_r($a1);
		echo "<br/>a2:";
		print_r($a2);
		$a1=array("a"=>"red","b"=>"green");
		$a2=array("a"=>"orange","burgundy");
		print_r(array_replace($a1,$a2));
		$a1=array("red","green");
		$a2=array("blue","yellow");
		$a3=array("orange","burgundy");
		print_r(array_replace($a1,$a2,$a3));
		//array_push
		echo "<br/><h1>array_push</h1><br/>";
		         $arraya = array('a', 'b', 'c');
         print_r($arraya);
        echo("<br>") ;
        foreach($arraya as $key=>$value) {
               if($value == 'b') {
                         $d = 'd';
                         array_push($arraya, $d);
                         print_r($arraya);  
                }  
       } 
       print_r($arraya);  
echo "<br/> <h1>unset</h1><br/>";
$my_array = array("Element 1", "Element 2", "Element 3");
	   foreach ($my_array as $name) {
	     echo "$name<br>";
       }
	   unset($my_array[0]);
	   echo "<br/>After<br>";
	   foreach ($my_array as $name) {
	        echo "$name<br>";
}
echo "<br/>Count:".count($my_array);

echo "<br/>Size:".sizeof($my_array);
echo "<br/>uasort";
function my_sort($a,$b)
		{
			if ($a==$b) return 0;
 			  return ($a<$b)?-1:1;}
		$a=array('2'=>'a','4'=>'b','6'=>'e','8'=>'d');
		print_r($a);
		usort($a,"my_sort");
		$arrlength=count($a);
	for($x=0;$x<$arrlength;$x++)
   		{             echo $a[$x];
  			 echo "<br>";
   			}
  		 print_r($a);
echo "<br/>";

function my_sort2($a,$b)
		{
			if ($a==$b) return 0;
				return ($a<$b)?-1:1;
		}
		 $a=array('7'=>'c','4'=>'b','6'=>'d','8'=>'a');
		print_r($a);
		uasort($a,"my_sort2");
		print_r($a);

		echo "<br/><h1>UKsort</h1><br/>";
				function my_sort1($a,$b)
			{
				if ($a==$b) return 0;
				return ($a<$b)?-1:1;
				}
			$a=array('7'=>'a','4'=>'b','6'=>'c','8'=>'d');
			print_r($a);
			uksort($a,"my_sort1");
			$arrlength=count($a);
			print_r($a);
echo "<br/><h1>Array Values</h1><br/>";
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
echo "<br/><h1>Array Merge:</h1><br/>";
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
$a=array(3=>"red",4=>"green");
print_r(array_merge($a));
echo "<br/><h1>array value</h1><br/>";
$arr = array(5 => 1, 12 => 2);
foreach ($arr as $key => $value)
 { 
     echo $key, '=>', $value, "<br/>" ; 
 }
$arr[] = 56;    // the same as $arr[13] = 56;
$arr["x"] = 42; // adds a new element
unset($arr[5]); // removes the element
//unset($arr);    // deletes the whole array
print_r($arr);
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);
$b = array_values($a);
print_r($b);

function printRow( $value, $key )
   {
      printf( "
         <tr>
            <td> $key </td>
            <td> $value </td>
         </tr>\n" );
   }
   $color = array( 'Red' => '#FF0000',
                   'Green' => '#00FF00',
                   'Blue' => '#0000FF',
                   'Yellow' => '#FFFF00' );
   array_walk( $color, 'printRow' );
?>
