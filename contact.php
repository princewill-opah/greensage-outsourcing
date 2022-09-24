<?php

$msg = "";
$msgClass = "";
//check for submission
if(filter_has_var(INPUT_POST,'submit')){
    //get from data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //check if these fields are  NOT empty
  if(!empty($name) && !empty($email) && !empty($message)){//passed
          //chek for valid email
          if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){//failed
                          $msg = 'Please, use a valid email';
                          $msgClass = "alert-danger";
          }else{//fpassed
                //main stuff
            $toEmail = "info@greensageoutsourcing.com";
            $subject = "Contact Request From ".$name;

            // $body = "<h2>Contact Request</h2>
            //          <h4>Name: ".$name." </h4>
            //          <h4>Email: ".$email." </h4>
            //          <h4>Message: ".$message." </h4>";

          $body = "<div style='background:rgb(240,241,243); padding:0px'>
                      <h2 style='background:teal; padding:20px;color:white'>Contact Message From  ".$name."</h2>
                      <div style='padding:0px 40px 50px 30px'>
                        <h4 style='color:teal; font-weight:500;'><span style='color:darkblue; font-weight:bold'>Name:</span> ".$name." </h4>
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Email:</span> ".$email." </h4>                      
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Message:</span> ".$message." </h4>
                      </div>
                  </div>";
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
            $headers .= "From: ".$name."<".$email.">"."\r\n";//additional header

            if(mail($toEmail,$subject,$body,$headers)){//passed
                            $msg = 'Your Message has been received, '.$name.'. We will get back to you shortly';
                            // $msgClass = "alert-success";
                             $msgClass = "alert-custom-success";
            }else{
                            $msg = 'Sorry, Something went wrong';
                            $msgClass = "alert-danger";
            }//end sending if
          }//end if for emptiness
  }else{//failed
        $msg = 'Please, fill in all fields';
        $msgClass = "alert-danger";
  }//end if for emptiness
}// end parent if

/////////heading   /////

	$title = 'Home';
	$page ="contact";
   include "includes/header.php";
?>

 <!-- Inner Banner Start -->
 <section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="inner-banner-detail">
					<!-- <p><a href="index.php">Home</a><span> - </span>Contact </p> -->
					<h2>CONTACT US </h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Inner Banner End -->

<main id="main">

  <!-- ========================================================================================================= -->
                 <!-- HISTORY OF Ekstralayn -->
<!-- ========================================================================================================= -->
<section class="contact-form-media" >
  <div class="container">
      <div class="contact-form-media-content">
        <div class="row">
          <div class="col-md-6">
            <div class="title">
               <h3 class="">Get in touch</h3>
                      <p class="">   
                          Just complete the following input boxes, and we will get back to you as soon as we get your messages? 
                      </p>
            </div>
          </div>

                <div class="col-md-6">
                  <h3>CONTACT INFORMATION</h1>
                  <div class="contains">
                    <div class="socials">
                      <i class="fa fa-map-marker" aria-hidden="true"></i><p>Office Address: F1, City Mall beside TBS onikan Lagos</p>
                    </div>
                    <div class="socials">
                        <i class="fa fa-phone" aria-hidden="true"></i><p>+2347040161272 | 014543520</p>
                    </div>
                    
                    <div class="socials">
                        <i class="fa fa-envelope" aria-hidden="true"></i><p>info@greensageoutsourcing.com</p>
                    </div>
                  </div>
               </div>


            
             
        </div>
          <div class="row">
              <div class="col-md-7 ">
                  <div class="contact-media" >
                      <div class="row">
                          <div class="col-md-12">
                            <div class="map">
                              <!-- <div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=350&amp;hl=en&amp;q=Arie%20den%20Toomweg%2037,%20Rotterdam,%20NL,%203089KA+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div> -->
                                <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=The%20City%20Mall%20Lagos+(GREENSAGE%20BUSINESS%20CONSULT%20LIMITED)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                              </div>
                              <!-- {{-- <img src="img/contact/contact_us_savers.jpg" class="img-fluid" alt="contact support image"> --}} -->
                          </div>    
                      </div>
                 
                  </div>
              </div>
              <div class="col-md-5">
              <div class="contact-form" >
                       
              <?php if($msg != ""):?>
                                    <div class="alert <?php echo $msgClass; ?>" role="alert" style="background: teal">
                                        <strong style="color:rgba(255,255,255, .8)"><?php  echo $msg; ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                              
                                 <?php endif; ?> 
                       <!-- alert-dismissible fade show -->
                  <form id="contacts_form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                
                      <div class="form-group field-wrapper">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Name"  value="<?php echo isset($_POST['name']) ? $name: '';?>"
                             required autocomplete="name" autofocus style="width: 100%">
                          <span class="bottom bottoms"></span>
                          <span class="right"></span>
                          <span class="top"></span>
                          <span class="left"></span>
                         
                      </div>
                      <div class="form-group" style="">
                     <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email"style="width: 100%" autocomplete="email" required  value="<?php echo isset($_POST['email']) ? $email: '';?>">
                          <span class="bottom bottoms"></span>
                          <span class="right"></span>
                          <span class="top"></span>
                           <span class="left"></span>
                          
                      </div>
                      <div class="form-group">
                        <textarea class="form-control rounded-0" id="message" name="message" rows="10" placeholder="Message here" required autocomplete="message"> <?php echo isset($_POST['message']) ? $message: '';?></textarea>
                          <span class="bottom bottoms"></span>
                          <span class="right"></span>
                          <span class="top"></span>
                          <span class="left"></span>
                         
                      </div>
                     <input type="submit" class="btn rounded-0 form-submit  bttn-fill bttn-md bttn-primary"  value="Send" name="submit">

                  </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- ========================================================================================================= -->
           <!-- MAP -->
<!-- ========================================================================================================= -->




</main><!-- End #main -->



<!--=========================footer =============================================-->
 <!-- ----------footer---------------------------------- -->
 <?php
	$page ="contact";
	include "includes/footer.php";
?>
<!-- ---------------end footer ---------------------------- -->