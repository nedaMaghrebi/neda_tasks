
<?php include "headerproject.php"?>  


<h3> Exercise 3. In-class Task Variable and Operators(variable.php)</h3>

<h2>1.2 Create a simple html form to get Firstname and Lastname from the user and use echo 
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
 

$x = 'welcome to';
$y = ' Finland!';
 
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


<h3> 6.Detect the browser being used to view your pages  </h3>
<?php 
echo $_SERVER['HTTP_USER_AGENT'];
?>


<h3> 7.display the last modification time of a file.  </h3>
...! added in footer



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



<?php include "footerproject.php"?>