<?php include "header.php";?>

<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

if ($age>=18)
    {
    echo "he/she is eligible for voting";
    }
    else
    {
        echo "he/she is not eligible for voting.";
    } 
?>

 


<?php include "footer.php"?>