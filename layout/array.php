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
sort($courses3);
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



?>
