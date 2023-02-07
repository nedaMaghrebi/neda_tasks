<?php
$title = "Contact:Twinkling Stars Kindergarten" ;
include "headerproject.php"?>


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    

<img src="https://s3-alpha-sig.figma.com/img/c526/a182/31a333572c962828c218c2ae894e102e?Expires=1675641600&Signature=AOIz0byh7tn7bepNARUmpliBCVcjgl8BfGLVLsjloiUTxO0hiZLXtEdLoIWI3-5FTo~WV3Fm~j~-YyQmAGTyP47fLzK26631N2S008dNBj12waclhvwjlaXFTNMHsei3rCN0DNrx7BS-bc6ya~H4Jgi-3ERNXpIBU57~YWhdKu8Q0qBzyd3b25VPP9ORUyU0Vz05U9ruNSuUsuQnaQ2DvNc~yysA1V4bcTxLPFUmzQwJxPfmmhZuyCSUUZQ7FOoMtc7khAJYLrk0jW35kRo2JfVwLwWVcUES8a6wmghM5Z~JJiRQm0CDGcKqQM3j0amgwbMuu9RV1XRnKRiVrvAz5w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="contact" class="rounded" >
            </div>
            <div class="column" style="text-align:left;">
            <ul style="list-style-type:none;">
                <div class="contact1" style="font-size: 40px; font-weight: bolder;">
                <li>Contact Us <br></li>
                </div>

                <div class="keepintouch" style="font-size: 30px;">
                <li>   Keep In Touch</li><br>
                </div>
                <li>Twinkling Stars Kindergarten  <br>Visamäentie 23,
                <br>Hämeenlinna 13100</li>
                <li><i class="material-icons" style="font-size:60px;color:blue;">phone</i>415-218-4791</li>
                <li><i class="material-icons" style="font-size:60px;color:blue;">email</i><a href="mailto:info@twinklingstars.com">info@twinklingstars.com</a></a></li>
                <li><i class="material-icons" style="font-size:60px;color:blue;">facebook</i><a href="https://www.facebook.com/profile.php?id=100089799731637">Like Us On Facebook</a></li>
            </ul>


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
img{
    margin-right: 50px;
    margin-left:5px;
    margin-bottom: 0px;
}
div{
    padding-top: 0px;
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
/*nav li {
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
}*/
h1{
    font-size: 20px;
    text-align: justify;
}
.header-image {
    width: 100%;
    height: auto;
}
.site-header img {
    margin-top:36px;
    width:100%;
    height:auto;
}
/*picture
img {
    width: auto;
    color:aliceblue;
    padding-top: 00px;
    padding-bottom:20px ;
    padding-left: 20px;
    padding: 0px 00px 00px 0px;
    image-orientation: flip;
    font-family:'Courier New', Courier, monospace;
    font-size: 1px;
    font-weight:bold; 
    text-align:center;
}*/

.container {
   width: 100%;
    max-width:fit-content;
   /*center the layout*/
    margin: 16px auto;
}
.row1{
    display: grid;
    align-items: center;
    grid-template-columns: 1fr 1fr;
    column-gap: 5px;
}

.header-image {
    width: 0%;
    height: 0px;
}
/*center text*/
h1 {
    background-color:#EF92D5;
    width: fit-content;
    height: 125px;
    padding-top: 00px;
    padding-bottom:0px ;
    padding-right: 10px;
    padding-left: 10px;
    text-align: center;
    font-family:'Courier New', Courier, monospace;
    color: #671419;
    font-weight: bold;
    font-size: 15px;
}
footer{
   
    margin-top:20px;
    background-color:#FD0DBA;
    margin-left: 7px;
   
 
}

p{

    height: 50px;
    padding-top: 20px;
    padding-bottom:20px ;
    padding-left: 15px;
    text-align: center;
    font-size: 15px;
    text-align: justify;
    font-weight: bold;

}


h3 {
    
    font-size: 25px;
}


a:hover {
    color:#68094d;
    text-decoration: none;
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
        margin: 0 0 0px 0;
    
    }
    .column {
        float: left;
        width: 80%;
      }
      
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      

}

</style>

             <?php include "footerproject.php"?>

          