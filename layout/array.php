<?php include "header.php"?>  
<h3>Exercise 5. In-class Task Arrays  09.02.2023 (array.php))</h3>


<h3>1.  Write a php script to display courses as list.</h3>
<?php
$courses=array("PHP ", "HTML ", "JavaScript ", "CMS ", "Project ");
for ($i = 0; $i < count($courses); $i++) 
 {
 echo "<li> $courses[$i].";
 }
?>

<h3>2.  The unset() function is used to remove element from the array.</h3>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[1]);
echo implode(',' , $courses1);
?>

<h3>3. Sort the following array .</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
echo "Ascending order by value:". implode(',' , $courses3)."<br>";
ksort($courses3);
echo "Ascending order  by Key:". implode(',' , $courses3)."<br>";
arsort($courses3);
echo "Decending order by value:". implode(',' , $courses3)."<br>";
krsort($courses3);
echo "Decending order by Key:". implode(',' , $courses3)."<br>";
?>

<h3>4. Change the following array's all values to upper case. .</h3>
<?php 
 $courses4=array("php", "html", "javascript", "cms", "project");
 for($i=0 ; $i<count($courses4) ; $i++){
 $courses4[$i] = strtoupper($courses4[$i]);
}
echo implode(',' ,$courses4);
?>

<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays).</h3>
<?php 

$mycolors = array( "red" => "#ff0000","purple" => "#800080","white" => "#ffffff", "gray" => "#808080");

$favcov = array_keys($mycolors);

for ($i = 0; $i < count($favcov); $i++) {
    echo $favcov[$i] . "/" . $mycolors[$favcov[$i]] . "<br>";
  
}
?>

<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>
<?php
$month_temp = " 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

