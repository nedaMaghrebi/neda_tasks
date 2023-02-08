<?php include "headerproject.php";?>

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