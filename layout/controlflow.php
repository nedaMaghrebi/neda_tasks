<?php include "header.php"?>  


<h3>Exercise 4. In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h3>



<h3>1.Write a script that gets the current month</h3>

<?php
$month =date("M");
//echo $month;
if($month =="Aug"){
    echo 'It is August so it is holydays ';
}else{
    echo 'it is ' . $month . ' so no holydays';
}
?>
// <?php include "footer.php" ?>



