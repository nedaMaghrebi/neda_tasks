
<?php include "header.php"?>  


<h3> Exercise 3. In-class Task Variable and Operators(variable.php)</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo 
    echo statement to print using tag: Hello …., You are welcome to my site.

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

</form>



<?php include "footer.php"?>