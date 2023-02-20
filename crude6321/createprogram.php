


 
 <!-- creating form for program in kindergarten-->

<form  method="post"  action=""> 


<div class="row">
   <div class="col-md-3">
   <select name="pname">
    <option value="CURRICULAR ACTIVITIES"> CURRICULAR ACTIVITIES </option>
    <option value="SPORTS ACTIVITIES"> SPORTS ACTIVITIES </option>
    <option value="EXCURSIONS"> EXCURSIONS </option>
    </select><br></div>
   
   <div class="col-md-3">
   <input type="text" name="description" required placeholder="Description" class="form-control"> <br></div>


<div class="row">
  <div class="col-md-3">
  <input type="date" name="startdate" required placeholder="Please Enter Program Start Date" class="form-control" > </div>

  <div class="col-md-3">
  <input type="date" name="enddate" required placeholder="Please Enter Program End Date" class="form-control" > <br> </div>
</div>

<div class="row">
  <div class="col-md-3">
  <input type="int" name="capacity" required placeholder="Capacity" class="form-control" >  <br> </div>
</div>




<div class="row"> 
  <div class="col-md-3">
  <input type="submit" value="Submit" name="Submit"> <br> </div>
</div>
</form>


<?php
//Getting values from end user
if(isset($_POST['Submit'])){
   $pname=$_POST['pname'];
   $description=$_POST['description'];
   $startdate=$_POST['startdate'];
   $enddate=$_POST['enddate'];
   $capacity=$_POST['capacity'];
   
   include 'db.php';
   $sql="insert into program(pname,description,startdate,enddate,capacity)
   values('$pname','$description', '$startdate', '$enddate', '$capacity' )";
   if($conn->query($sql)===TRUE){
               
     echo"Your datas are added successfully";

 }
 else{

     echo"Error:" .$conn->error;

 }
}
?>
        
               
</body> 
</html>

<br>
