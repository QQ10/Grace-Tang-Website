<?php

    $error = "";

    $successMessage = "";


    if ($_POST){

        if (!$_POST["email"]){

            $error .= "The email field is required.<br>";

        }

        if (!$_POST["subject"]){

            $error .= "The subject field is required.<br>";

        }

        if (!$_POST["content"]){

            $error .= "The content field is required.<br>";

        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

            $error .= "The email address is invalid.<br>";
        }

        if ($error != "") {


            $error = '<div class="alert alert-info alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>There were error(s) in your form:</strong><br>' . $error . '</div>';

        } else {

            $emailTo = "gracetang1025@hotmail.com";

            $subject = $_POST["subject"];

            $content = $_POST["content"].$_POST["phone"];

            $headers = "From: ".$_POST["email"];

            if (mail($emailTo, $subject, $content,  $headers)){

                $successMessage = '<div class="alert alert-success alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Your message was sent successfully!</div>';

            } else {

                 $error = '<div class="alert alert-info alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Your message couldn\'t be sent. Please try again.</div>';

            }

        }


    }


?>

<!DOCTYPE html>

<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Grace Tang</title>

      <style type="text/css">

          .jumbotron{

              background-image: url(images/pics/gracetang1.jpg);
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              background-attachment: fixed;
              height: 800px;
              box-shadow: inset 0 0 0 1000px rgba(0,0,0,.6);

          }

          #profile{

              border-radius: 50%;
              margin-top: 60px;
              display: block;
              margin-left: auto;
              margin-right: auto;

          }

          #introduce{

              text-align: center;
              color: white;

          }

          #nameLine{

              margin-top: 15px;

          }

          #secondLine{

              margin-top: 15px;

          }

          #breakLine{

            color:#CCC;
            background-color:#CCC;
            width: 55%;

         }

          .socialIconGroup{

              display: flex;
              position: absolute;
              margin-top: 15px;
              left:50%;
              transform: translate(-50%,-50%);
          }

          .socialIconGroup .socialIcon{

              list-style: none;

          }

          .socialIconGroup .socialIcon a{

              width: 40px;
              height: 40px;
              background: #fff;
              text-align: center;
              line-height: 40px;
              font-size: 20px;
              margin: 0 10px;
              display: block;
              border-radius: 50%;
              position: relative;
              overflow: hidden;
              border: 3px solid #fff;
              z-index: 1;

          }

          .socialIconGroup .socialIcon a .fa{

              position: relative;
              color: #262626;
              transition: .5s;
              z-index: 3;

          }

          .socialIconGroup .socialIcon a:hover .fa{

              color:#fff;
              transform: rotateY(360deg);

          }

          .socialIconGroup .socialIcon a:before {

              content: '';
              position: absolute;
              top: 100%;
              left: 0;
              width: 100%;
              height: 100%;
              background: #f00;
              transition: .5s;
              z-index: 2;

          }

         .socialIconGroup .socialIcon a:hover:before{

              top: 0;

          }

          .socialIconGroup .socialIcon:nth-child(1) a:before{

              background: #3b5999;

          }

           .socialIconGroup .socialIcon:nth-child(2) a:before{

              background: #55acee;

          }

          .socialIconGroup .socialIconi:nth-child(3) a:before{

              background: #00AFF0;

          }

           .socialIconGroup .socialIcon:nth-child(4) a:before{

              background: #0077B5;

          }

           .socialIconGroup .socialIcon:nth-child(5) a:before{

              background: #e4405f;

          }

          #downArrow{

             margin-top: 120px;
             transition-duration: 0.5;


          }

          #expertise{

              background-color: #F5F5F5;
              text-align: center;
              font-family:serif;

          }

          .card-img-top{

              width: 100%;

          }

          .card-block{

              text-align: center;

          }

          .card-title{

             margin-top: 7px;
             margin-bottom: 10px;

          }

          #contact{

              padding-top: 70px;
              height: 750px;

          }

          #keepInTouch{

               margin-top: 50px;
               text-align: center;
               font-family:serif;

          }

          #story{

              margin-top:-32px;
          }


        .card {

           margin-bottom: 35px;
            transition-duration: 0.3s;

        }

        .card:hover {

            filter: brightness(130%);
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition-duration: 0.3s;
        }


        #myBtn {

            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: gray; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 10px; /* Some padding */
            border-radius: 10px; /* Rounded corners */

        }

       #myBtn:hover {

            background-color: #555; /* Add a dark-grey background on hover */

       }

        #form{


             margin: 0 auto;
             width: 70%;

          }

          .alert{

              margin: 0 auto;
              width: 80%;

          }

          #phone{

              margin-top: -25px;

          }

          #email{

              margin-top: -25px;

          }

          #content{

              margin-top: -25px;

          }




      </style>



  </head>

  <body>

      <button onclick="topFunction()" id="myBtn" title="Go to top">Top  <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>

      <!-- <nav class="navbar navbar-toggleable-md navbar-light bg-faded"> -->

        <nav class="navbar navbar-inverse bg-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">MySpace</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#story">Story</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#expertise">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
              <!--
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
              -->
          </div>
        </nav>

        <div class="jumbotron" id="jumbotron">
            <img src="images/pics/gracetang2.jpg" class="img-responsive" alt="Profile Image" width="140" height="140" id="profile">

            <div id="introduce">
              <h2 id="nameLine">I'm Grace Tang.</h2>
              <p class="lead" id="secondLine">Hi there, I graduated from Auburn University with a Bachelor’s degree in computer science from the College of engineering.<br>
              I <i class="fa fa-heart" aria-hidden="true"></i> making websites and apps for family and friends.<br>
              I also <i class="fa fa-heart" aria-hidden="true"></i> skiing and hiking.
              </p>
              <hr class="my-4" id="breakLine">
                <ul class="socialIconGroup">
                    <li class="socialIcon"><a href="https://www.facebook.com/grace.w.tang"><i class="fa fa-facebook-official" aria-hidden="true"></i ></a></li>
                    <li class="socialIcon"><a href="https://twitter.com/gracetang1025"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="socialIcon"><a href="https://github.com/QQ10"><i class="fa fa-github" aria-hidden="true"></i></i></a></li>
                    <li class="socialIcon"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="socialIcon"><a href="https://www.instagram.com/gracetang1025/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>

              <p class="lead" id="downArrow">
                  <a  href="#expertise" role="button"><i class="fa fa-angle-double-down" style="color:white;" aria-hidden="true"></i></a>

                <!--
                <button type="button" class="btn btn-link" href="#contact"><i class="fa fa-angle-double-down" style="color:white;" aria-hidden="true"></i></button>
                 -->

              </p>

            </div>
        </div>

      <!-- Start Hello area -->
		<div id="story">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="about-text" style="padding-bottom:130px;">
							<h1 style="text-align:center; margin-top: 90px; margin-bottom:25px; font-family:serif;">HEL<span style="color:#F7CA18;">LO...</span></h1>
                            <div id="textwrapper" style="color:gray;">
							<p>I remember It was a Saturday afternoon and there was a technician man bustling around the living room. He was trying to install a Windows 95 desktop computer for us. The computer was huge and it had just 512 Mb of RAM, as well as a single floppy drive. And this is my first computer story.</p>

                            <p>I said “Is this my computer?”</p><br>

                            <p>“No,” said my dad. “It’s the family computer, not yours. You have to share it with your little sister.”</p><br>

                            <p>I had to share the computer with my parent and my sister, but I was still the system’s primary user. My first ever computer game was 3D Pinball Space Cadet. When I was little, I could spend the entire afternoon playing with it. I was happy like a fat kid loves cake. At this point in my life I decided to get involved with computer technologies.</p>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>



      <div id="expertise">
        <div class="container">
            <h1 style="padding-top: 100px;"><strong>My Expertise</strong></h1>
            <p style="font-size:130%; color:grey;">I create responsive websites and Apps!</p>
        </div>

        <div class="container">
         <div class="card-deck" style="padding-bottom:100px;">
          <div class="card">
            <img class="card-img-top" src="images/pics/gracetang3.jpg" alt="Code Image">
            <div class="card-block">
              <h4 class="card-title"><i class="fa fa-code" aria-hidden="true"></i> Code</h4>
              <p class="card-text">I create responsive websites that allow the user to experience your website in the best and most appropriate way suited to the device they are using. I utilize HTML 5, &nbsp;CSS 3, &nbsp;Javascript, &nbsp;Bootstrap and other technology skills to accomplish the project. Other technical skills such as jQuary, &nbsp;Java, &nbsp;PHP, &nbsp;MySQL and Python.

            </p>
            </div>

          </div>
          <div class="card">
            <img class="card-img-top" src="images/pics/gracetang4.jpg" alt="Sketch 3 Image">
            <div class="card-block">
              <h4 class="card-title"><i class="fa fa-diamond" aria-hidden="true"></i> Design</h4>
              <p class="card-text">I utilize sketch 3 for website and app design. Sketch 3 is a light and easy to use tool created specifically for web designers who create web design magic. I consider design to be just as important as development and aim to combine both to produce high quality user experience.</p>
            </div>

          </div>
          <div class="card">
            <img class="card-img-top" src="images/pics/gracetang5.jpg" alt="Swift 3 Image">
            <div class="card-block">
              <h4 class="card-title"><i class="fa fa-apple" aria-hidden="true"></i> App</h4>
              <p class="card-text">I utilize Swift 3/ XCode to build app for Iphone and Ipad. I have experience in building restaurant app and other fun apps.</p>
            </div>

          </div>
         </div>
        </div>
      </div>


    <div id="contact">
      <div class ="container">

        <h1 id="keepInTouch"><strong>Keep In Touch</strong></h1>

        <div id="error"><? echo $error.$successMessage; ?></div>

        <form method="post" id="form">

          <div class="form-group">
            <label for="subject"></label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Name">
          </div>


          <div class="form-group">
            <label for="phone"></label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
          </div>



          <div class="form-group">
            <label for="email"></label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
            <!--
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>

          <div class="form-group">
            <label for="content"></label>
            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Feel free to contact me."></textarea>
          </div>

            <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Send</button>

        </form>

    </div>



</div>


    <footer class="footer" style="height: 50px; margin-top:-20px;">
      <div class="container">
        <hr>
        <span class="text-muted"><img id="flag" src="images/pics/gracetang6.png" class="img-responsive" alt="USA" width="19" height="19"><small style="color:gray;">&nbsp;Copyright 2017 Grace Tang. All Rights Reserved.</small></span>
      </div>
     </footer>




    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


      <script type="text/javascript">


            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0; // For Chrome, Safari and Opera
                document.documentElement.scrollTop = 0; // For IE and Firefox
            }


           // stop form submitting in JQuary - now we can see when click submit button is not refreshing the page.

          $("form").submit(function (e) {


              var error = "";

              if ($("#email").val() == ""){

                  error += "The email field is required.<br>";

              }

              if ($("#subject").val() == ""){

                  error += "The subject field is required.<br>";

              }

              if ($("#content").val() == ""){

                  error += "The content field is required."

              }

              if(error != ""){


                  $("#error").html('<div class="alert alert-info alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>There were error(s) in your form:</strong><br>' + error + '</div>');


                  $(".alert-dismissable").alert();
                  window.setTimeout(function() { $(".alert-dismissable").alert('close'); }, 2000);


                  return false;


              } else {

                 return true;

              }


          });

      </script>



  </body>

</html>
