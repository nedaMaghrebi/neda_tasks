

    
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


            
            <div class="footer-copyright text-center py-3" >© 2020 Copyright <br>
            <?php
    $fname = basename($_SERVER['PHP_SELF']);
    $last_modified = filemtime($fname);
    echo "last modified: " . date ('l jS \o\f F Y, h:i:s A', $last_modified);
?>
  </div>

        </div>
        
    </footer>
  
  </div>
  
  
    </body>
  </html>
  
  
  
  