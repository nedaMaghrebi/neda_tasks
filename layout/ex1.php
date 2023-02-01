<?php include "header.php"?>
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
<?php echo date("m . d . y") ?>

<h3> 3.4 Variable in Php</h3>
<?php 
$titel1="PHP is interesting";
echo " <h1>" . $title1. " <h1>";
?>

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
<?php include "footer.php"?>

