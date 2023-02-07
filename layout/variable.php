
<?php include "header.php"?>  


<h3> Exercise 3. In-class Task Variable and Operators(variable.php)</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo 
    echo statement to print using tag: Hello …., You are welcome to my site.

<form action="action.php" method="post">
    
<div class="row">


    <div class="col">
    <input type="text" name="fname" required placeholder="First Name"> </div>
    
    <div class="col">
    <input type="text" name="fname" required placeholder="Last Name"></div>
</div>


Birth Date: <input type="date" name="bdate"> <br>
Select fav Color: <input type="color" name="color"> <br>
<input type="submit" value="Submit">



</form>



<?php include "footer.php"?>