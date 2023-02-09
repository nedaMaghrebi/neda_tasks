<?php include "header.php"?>  
<h3>Exercise 5. In-class Task Arrays  09.02.2023 (array.php))</h3>


<h3>1.  Write a php script to display courses as list.</h3>
<?php
$courses=array("PHP ", "HTML ", "JavaScript ", "CMS ", "Project ");
for ($i=0; $i< count($courses);$i++){
echo $courses["$i"];
}



?>