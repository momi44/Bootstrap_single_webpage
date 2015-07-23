<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canada Weather</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
      
  </head>
    
  <body>
      <!-- Navebar containing the links to different sections in the page  -->
      
       <div class="navbar navbar-default navbar-fixed-top">
          <div class = "container">
            <div class = "navbar-header">
                <a class = "navbar-brand"> Canada Weather App</a>
                <button class = "navbar-toggle" data-toggle= "collapse" data-target=".navbar-collapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            </div>

            <div class = "collapse navbar-collapse">
                <ul class= "nav navbar-nav navbar-right">
                    <li><a href="#img01">Home</a></li>
                    <li> <a href="#about">About</a> </li>
                    <li> <a href="#download">Download</a></li>
                    <li> <a href="#contact">Contact Us</a></li>
                </ul>
            </div>
          </div>
       </div>


        <div data-spy="scroll" data-target=".navbar">
        <!-- Home Section -->
           <div class="container contentContainer" id="img01">
             <div class="row">
                 <div class="col-md-6 col-md-offset-3" id="row01">
                     <h1> The Weather App</h1>
                     <p class="lead"> Check the weather of Canada wherever you want</p> <br/>
                     <p>The interface of The Weather App is intentionally simple. It provides just the data you need, without any           distractions                    or confusion.
                     </p>
                     <p class="bold">Want to Join Us?</p>
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="input-group paddingTop">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" placeholder="Your Email" name="sendEm" id="sendEm"/>
                        </div>
                            <input type="submit" value="submit"  class="btn btn-success btn-lg paddingTop" id="submitBtn"/>
                     </form>
                 </div>
             </div>
           </div>

        <!-- About Section -->
           <div class="container contentContainer" id="about">
                <div class="row center title">
                    <h1> Fast, Accurate, Beautifull</h1>
                    <br/>
                    <p class="lead"> summary of App features</p>
                    </br>
                </div>   

               <div class="row">
                    <div class="col-md-4">
                        <h2> <span class="glyphicon glyphicon-plus-sign"></span> layerd</h2>
                        <p>The app presents a beguilingly simple interface. All the basic weather data is immediately presented on the home                             dashboard.
                        </p>
                        <button class="btn btn-success paddingTop "> Sign Up </button>
                    </div>

                   <div class="col-md-4">
                        <h2> <span class="glyphicon glyphicon-plus-sign"></span> fast </h2>
                        <p>Check the Weather is optimized from the ground up to be fast and fluid, whether you are on the fanciest new iPhone or a                          more vintage model.
                        </p>
                        <button class="btn btn-success paddingTop "> Sign Up </button>
                    </div>

                    <div class="col-md-4">
                        <h2> <span class="glyphicon glyphicon-plus-sign"></span> accurate </h2>
                        <p>Built on top of some of the most advanced weather forecasting systems available, Check the Weather gives hyper-accurate                      data wherever you find yourself.
                        </p>
                        <button class="btn btn-success paddingTop "> Sign Up </button>
                    </div> 
               </div>
           </div>

        <!-- Download Section -->
           <div class="container contentContainer" id="download" >
               <div class="row center title">
                    <h1> Download The App</h1>
                    <br/><br/>
                    <p class="lead"> want to download the Canda Weather App?</p>
                    <p class="center"><img src="img/Android_badge.png" class="appStoreimage" id="androidImg"/></p> 

                </div>
           </div>    

        <!-- Contact Section -->
           <div class="container contentContainer" id="contact">
               <div class="row center title">
                    <h1> Contact Us</h1><br/>
               </div>
               <div class="row">
                    <div class="col-md-4 paddingTop">
                    <h3> <span class="glyphicon glyphicon-triangle-right"></span> Address </h3>
                    <p>8888 Pinewood</p>
                    <p>Nepean, Ontario</p>
                    <p>K2K 2K2</p>
                    <p>Canada</p>
                    </div>

                    <div class="col-md-8 paddingTop">
                    <h2> <span class="glyphicon glyphicon-phone-alt"></span> Have a question? </h2>
                    <p> Email us directly info (at) canadaweather (dot) com or call us at 1-855-xxx-xxxx. </p>
                    </div> 
                </div>  
           </div>
        <!-- Footer -->
            <div class="navbar navbar-default navbar-fixed-buttom">
            <div class = "navbar-footer">
                <p class="center">@ Canada Weather 2015 </p> 
            </div>
    </div>
      <div>   
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(".contentContainer").css("min-height",$(window).height());
    </script>
    
    <?php
        extract($_POST);
            //print_r($_POST);

        $headers  = "MIME-Version: 1.0"."\n"."Content-type: text/html; charset=utf-8"."\n"."From: support@momi.com"."\n";

        $message  = "Hi There,<br/> 
                     Thanks for signning up in our newsletter! <br/><br/>
                     Thank you, <br/>
                     Support Team XXXX";

        $subject= "Confirmation";
        if(isset($sendEm)){
            //Email to customer!
            $customer_email = mail($sendEm, $subject, $message, $headers);
            //Email to myself
            $myself = mail("momenehtaban@gamil.com", $subject, $message, $headers);
            if ($customer_email){
                // TODO: change input text and populate a message.
            }
        }
    ?>
      </div>
  </body>
      
</html>

