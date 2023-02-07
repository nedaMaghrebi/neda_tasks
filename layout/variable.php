
<?php include "header.php"?>  


<h3> Exercise 3. In-class Task Variable and Operators(variable.php)</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo 
    echo statement to print using tag: Hello …., You are welcome to my site. And also Apply bootstrap style to the form.


<form action="action.php" method="post">
    
<div class="row">

    <div class="col">
    <input type="text" name="fname" required placeholder="First Name" class="form-control" > </div>
    
    <div class="col">
    <input type="text" name="lname" required placeholder="Last Name" class="form-control"></div>

</div>


<div class="row">

   <div class="col">
   <input type="text" name="bdate" required placeholder="Birth Date" class="form-control" > </div>
    
   <div class="col">
   <input type="text" name="color" required placeholder="Select fav Color" class="form-control" > </div>

   <input type="submit" value="Submit">

</div>


<div class="row">

    <div class="col">


    <h3>3.Table & Variables dd</h3>
    <?php 
    $g1=5;
    $g2=4;
    $g3=5;
    echo "
    <table>
    <tr>
    <th> S.N </th> <th> Name </th> <th> Grade </th>
    </tr>
    <tr>
    <td> 1 </td> <td> Neda </td> <td> $g1 </td>
    </tr>
    <tr>
    <td> 2 </td> <td> Pari </td> <td> $g2 </td>
    </tr>
    <tr>
    <td> 3 </td> <td> Max </td> <td> $g3 </td>
    </tr>
    <table>
    ";
    ?>
    </div>
</div>


<h3> 4. Write two string variables</h3>
<?php
 

$x = 'welcome';
$y = 'to Finland!';
 
// join Of String
$c = $x.$y;
echo " $c \n";
echo strlen($c);
?>

<h3> 5.  add up the numbers</h3>
<?php  
$n=200;  
$m=143;  
$x=$n+$m;  
echo "Sum: ",$x;  
?>  


<h3> 5.Detect the browser being used to view your pages  </h3>
<?php 
echo $_SERVER['HTTP_USER_AGENT'];
?>


<h3> 6.display the last modification time of a file.  </h3>
<?php

echo '<link rel="stylesheet" type="text/css" href="style.css?' . filemtime('style.css') . '" />';

?>



</form>



<?php include "footer.php"?>