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

<h3>2.Assign colour red to a variable name $color</h3>

<?php
$color ="red";
if($color =="red"){
    echo 'The color is red ';
}else{
    echo 'The color is not red.
    ';
}
?>


<h3>3.Write a program to grade students based on their total score</h3>

<?php

    $score = "58";

    if ($score>=80)
    {
    echo "Exelent.";
    }
    elseif ($score>=70 && $score<80)
    {
        echo "Good.";
    } 
    elseif ($score>=60 && $score<70)
    {
        echo "Good.";
    } 
    elseif ($score>=50 && $score<60)
    {
        echo "Pass.";
    } 
    elseif ($score<50)
    {
        echo "Fail.";
    }  
?>


<h3>4.Write a program to get inputs (age and name) from the user</h3>

<form action="inputs.php" method="post">
    
<div class="row">

    <div class="col">
    <input type="text" name="fname" required placeholder="First Name" class="form-control" > </div>
    
    <div class="col">
    <input type="text" name="lname" required placeholder="Last Name" class="form-control"></div>


    <div class="col">
    <input type="number" name="age" required placeholder="Age" class="form-control"></div>

</div>

<?php

    ?>

</form>


 <?php include "footer.php" ?>



