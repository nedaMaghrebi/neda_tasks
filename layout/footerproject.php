

    
    <footer> 
        

        <div class="row">
                
            <div class="col-md-4 text-center">
                <p>Visamäentie 23<br>Hämeenlinna 13100</p>
            </div>
    
            <div class="col-md-4 text-center">
                <p>Monday - Friday<br> at 7:00 am - 6:00 pm</p>
            </div>
    
            <div class="col-md-4 text-center">
                <p>info@twinklingstars.com<br>Phone:415-218-4791</p>
            </div>
            <?php

$fileName = 'variable.php';
  if (file_exists($fileName)) 
  {
  echo "Last modified: " . date ("F d Y H:i:s.", filemtime($fileName));
  }
?>

        </div>
        
    </footer>
  
  </div>
  
  
    </body>
  </html>
  
  
  
  