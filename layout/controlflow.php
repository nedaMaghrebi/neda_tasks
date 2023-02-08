<?php include "headerproject.php"?>  


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


    
   <input type="submit" value="Submit">
</div>

<?php

    ?>

</form>

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


 <?php include "footerproject.php" ?>



