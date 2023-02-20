<?php include "headerproject.php"?>
<h3> 3.1 Write a simple PHP script to print your information (Name and your groupid). </h3>
<?php 
echo "Neda Maghrebi ";
echo "BBCA22";
?>
<h3> 3.2 Write PHP code display the following message. </h3>
<?php
echo "Hello World! My name is \"neda maghrabi\" ";

?>
<h3> Current Date</h3>
<?php echo date("m . d . y") ?> <br>


<script>
document.write("Hello world this is JavaSript");
</script>

<noscript>
Please enable JavaScript to view this content,
</noscript>

<input type="button" onclick="hello()" value="Click Me">

<h3> 3.4 Variable in Php</h3>
<?php 
$title1="PHP is interesting";
echo " <h1>" . $title1. " <h1>";
?>

<script>
//window.alert
window.alert("This will trigger an alert box");
window.alert(5+10 );
</script>

<h3> 3.5 Table & Variables dd</h3>
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
<td> 1 </td> <td> Pekka </td> <td> $g1 </td>
</tr>
<tr>
<td> 2 </td> <td> Johanna </td> <td> $g2 </td>
</tr>
<tr>
<td> 3 </td> <td> John </td> <td> $g3 </td>
</tr>
<table>
";
?>

<h3> 4 Screenshot </h3>
<img src="images/1.jpg" alt="first shot">


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

