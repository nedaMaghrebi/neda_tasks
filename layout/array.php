<?php include "headerproject.php"?>  
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
<style>
    body {
    background-color:#EF92D5;
    font-family:'Courier New', Courier, monospace;
    color:#680a11;
    font-size: 13.5px;
    width: 1080px;
    margin:auto;
    display: flex;
    justify-content: space-between;
}

h4{ 
    text-align: center;
    font-size: 20px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    font-weight: bold;
 
}

.card {
    
    margin-top:0%;
    margin-left: 10px;
    margin-bottom: 20px;
    font-size: 15px;
  
    text-align:justify;
    
}
img{
    margin-right: 50px;
    margin-bottom: 0px;
}
nav li {
    font-size: 20px;
    display:inline-block;
    margin-right:60.5px;
    margin-left: 10px;
    margin-bottom:0px;
}
nav li:last-child {
    margin-right: 0px;
}
nav ul {
    padding-left: 0;    
}
h1{
    font-size: 20px;
    text-align: justify;
}
.header-image {
    width: 100%;
    height: auto;
}
h2{
    background-color:#EF92D5;
    height: 107px;
    padding-top: 20px;
    padding-bottom:20px ;
    padding-left: 20px;
    text-align: center;
    font-size: 22px;
    font-size: 18px;
    
}


footer{
    margin-top:0px;
    background-color:#FD0DBA;
    margin-left: 9px;
    margin-bottom: 15px;
}

p{

    height: 50px;
    padding-top: 20px;
    padding-bottom:20px ;
    padding-left: 20px;
    text-align: center;
    font-size: 15px;
    text-align: justify;
    font-weight: bold;

}

.img-fluid {
    width:fit-content;
}

@media  (max-width: 450px) {

    body {
        width: fit-content;
        margin: 0 16px 16px 16px;
            
    }
    
    .wrapper {
        display : flex ;
        justify-content : center ;
        align-items:center ;
        height : auto;
        width: 100%;
    }
    
    img {
        display: block;
        margin: 0 0 16px 0;
    
    }
}
</style>
<?php include "footerproject.php"?>


