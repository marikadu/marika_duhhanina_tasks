<footer> 
                <div class="footer-widget">
                  <div class="container">
                      <div class="row">
                          <div class="row justify-content-center">
                          <div class="col-sm-6">
                              <div class="single-widget">
                                  <h2>About Cecile</h2>
                                  <ul class="nav nav-pills nav-stacked">
                                      <li><a href="405.php">About us</a></li>
                                      <li><a href="405.php">Work with us</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="single-widget">
                                  <h2>Information</h2>
                                  <ul class="nav nav-pills nav-stacked">
                                      <li><a href="405.php">Track order</a></li>
                                      <li><a href="405.php">Delivery and Returns</a></li>
                                      
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
          
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <p class="pull-left">Copyright © 2023 Cecile. All rights reserved.</p>
                  
                  
<?php
$filename = basename($_SERVER['PHP_SELF']);
$last_modified = filemtime($filename);
    echo "Last modified on: " . date ('l jS \o\f F Y, h:i:s A', $last_modified);
?>


                  <p> <img src="images/logo.png" alt="logo2"></p>
              </div>
            </div>
        </div>
    </footer>
  </body>
</html>