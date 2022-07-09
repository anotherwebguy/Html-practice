<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <script type="text/javascript">
        function myfunc(data)
        {
          
           
           var req = new XMLHttpRequest();
           req.open("GET","http://localhost/webcom/response.php?datavalue="+data,true);
           req.send();
           
           req.onreadystatechange=function(){
               if(req.readyState==4 && req.status==200){
                   document.getElementById('city').innerHTML=req.responseText;
               }
           }
        }
         function validation(){
            var name= document.getElementById('name').value;
            var email= document.getElementById('email').value;
            if(name === ""){
                document.getElementById('username').innerHTML="  ** Please fill this field";
                return false;
            }
            
            if(email === ""){
                document.getElementById('emailname').innerHTML="  ** Please fill this field";
                return false;
            }
         }
    </script>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          <div>
             <p>Your feedback is valuable to us. Thank you for your time!
Thanks for your comments! You make us better.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                   
               
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" onsubmit="return validation()" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off">
                                        <span id="username" class="text-danger"></span>
                    </div>
				    
                    <div class="form-group col-sm-9">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
			 <span id="emailname" class="text-danger"></span>	   
                    </div>
                    <div class="form-group col-sm-9">
                        <select class="form-control" onchange="myfunc(this.value)">
                            <option>Select State</option>
                            <option>Bihar</option>
                            <option>Delhi</option>
                            <option>Gujarat</option>
                            <option>Maharashtra</option>
                            <option>UP</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-9">
                        <select class="form-control" id="city">
                            <option>Select city</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>Royal Appartment ,</p>
				    <p>Garden City, Mumbai,</p>
				    <p>INDIA</p>
				    <p>Phone:(+91) 222 555 3333</p>
				    <p>Fax: 222 55 33 6</p>
				    <p>Email: ecomm@estore.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On&#58;</h2>
                   <a href="http://www.facebook.com/estore" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/estore" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 "></a>
               </div>
            </div>
        </div>
    </div>
</div>
    


      
    
    
    <?php include 'includes/footer.php'; ?>
    
   </body>
</html>
