<?php

// if(filter_has_var(INPUT_POST,'submit')){
//     $email = htmlspecialchars($_POST['email']);
    
    
//         // $subject = 'Marriage Proposal';
//         // $from = 'peterparker@email.com';
//         //  $toEmail = "greensageoutsourcing.com";
//         $to = 'info@greensageoutsourcing.com';
//           $subject = "Newsletter email from ".$email;
         
//         // To send HTML mail, the Content-type header must be set
//         $headers  = 'MIME-Version: 1.0' . "\r\n";
//         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         
//         // Create email headers
//         $headers .= 'From: '.$from."\r\n".
//             'Reply-To: '.$from."\r\n" .
//             'X-Mailer: PHP/' . phpversion();
         
//         // Compose a simple HTML email message
//         $message = '<html><body>';
//         $message .= '<h1 style="color:#f40;">'.$email.' has subscribed for Newsletter </h1>';
//         // $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
//         $message .= '</body></html>';
         
//         // Sending email
//         if(mail($to, $subject, $message, $headers)){
//             echo 'Your mail has been sent successfully.';
//         } else{
//             echo 'Unable to send email. Please try again.';
//         }
// }


// $msg = "";
// $msgClass = "";
// //check for submission
// if(filter_has_var(INPUT_POST,'submit')){
//     //get from data
//     // $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     // $message = htmlspecialchars($_POST['message']);

//     //check if these fields are  NOT empty
//   if(!empty($email) ){//passed
//           //chek for valid email
//           if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){//failed
//                           $msg = 'Please, use a valid email';
//                           $msgClass = "alert-danger";
//           }else{//fpassed
//                 //main stuff
//             $toEmail = "info@greensageoutsourcing.com";
//             $subject = "Newsletter email from ".$email;

       
//           $body = "<div style='background:rgb(240,241,243); padding:0px'>
//                       <h2 style='background:teal; padding:20px;color:white'>Newsletter Email from  ".$email."</h2>
//                       <div style='padding:0px 40px 50px 30px'>
//                         <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Email:</span> ".$email." </h4>  
//                       </div>
//                   </div>";
//             $headers = "MIME-Version: 1.0"."\r\n";
//             $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
//             $headers .= "From: ".$email."<".$email.">"."\r\n";//additional header

//             if(mail($toEmail,$subject,$body,$headers)){//passed
//                             $msg = 'Your Message has been received, '.$name.'. We will get back to you shortly';
//                             // $msgClass = "alert-success";
//                              $msgClass = "alert-custom-success";
//             }else{
//                             $msg = 'Sorry, Something went wrong';
//                             $msgClass = "alert-danger";
//             }//end sending if
//           }//end if for emptiness
//   }else{//failed
//         $msg = 'Please, fill in all fields';
//         $msgClass = "alert-danger";
//   }//end if for emptiness
// }// end parent if



// $msg = "";
// $msgClass = "";
// //check for submission
// if(filter_has_var(INPUT_POST,'submit')){
//     //get from data
//     $name = 'xxx';
//     $email = htmlspecialchars($_POST['email']);
//     $message = 'xxx';

//     //check if these fields are  NOT empty
//   if(!empty($name) && !empty($email) && !empty($message)){//passed
//           //chek for valid email
//           if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){//failed
//                           $msg = 'Please, use a valid email';
//                           $msgClass = "alert-danger";
//           }else{//fpassed
//                 //main stuff
//             $toEmail = "info@greensageoutsourcing.com";
//             $subject = "Newsletter email ".$name;

//             // $body = "<h2>Contact Request</h2>
//             //          <h4>Name: ".$name." </h4>
//             //          <h4>Email: ".$email." </h4>
//             //          <h4>Message: ".$message." </h4>";

//           $body = "<div style='background:rgb(240,241,243); padding:0px'>
//                       <h2 style='background:teal; padding:20px;color:white'>Newsletter email From  ".$email."</h2>
//                       <div style='padding:0px 40px 50px 30px'>
                       
//                         <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Email:</span> ".$email." </h4>                      
                        
//                       </div>
//                   </div>";
//             $headers = "MIME-Version: 1.0"."\r\n";
//             $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
//             $headers .= "From: ".$email."<".$email.">"."\r\n";//additional header

//             if(mail($toEmail,$subject,$body,$headers)){//passed
//                             $msg = 'Your Message has been received, '.$name.'. We will get back to you shortly';
//                             // $msgClass = "alert-success";
//                              $msgClass = "alert-custom-success";
//             }else{
//                             $msg = 'Sorry, Something went wrong';
//                             $msgClass = "alert-danger";
//             }//end sending if
//           }//end if for emptiness
//   }else{//failed
//         $msg = 'Please, fill in all fields';
//         $msgClass = "alert-danger";
//   }//end if for emptiness
// }// end parent if



$msg = "";
$msgClass = "";
//check for submission
if(filter_has_var(INPUT_POST,'submit')){
    $email = htmlspecialchars($_POST['email']);

    //check if these fields are  NOT empty
  if(!empty($email)){//passed
          //chek for valid email
          if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){//failed
                          $msg = 'Please, use a valid email';
                          $msgClass = "alert-danger";
          }else{//fpassed
                //main stuff
            $toEmail = "info@greensageoutsourcing.com";
            $subject = "Newsletter email ".$email;

          $body = "<div style='background:rgb(240,241,243); padding:0px'>
                      <h2 style='background:teal; padding:20px;color:white'>Newsletter email From  ".$email."</h2>
                      <div style='padding:0px 40px 50px 30px'>
                       
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Email:</span> ".$email." </h4>                      
                        
                      </div>
                  </div>";
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
            $headers .= "From: ".$email."<".$email.">"."\r\n";//additional header

            if(mail($toEmail,$subject,$body,$headers)){//passed
                            $msg = 'Thank You For subscribing to our newsletter';
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

	$title = 'Home';
	$page ="home";
   include "includes/header.php";
?>



<main class="main-content">
  <section class="slideshow">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <h4 class="title">Success Through Partnerships</h4>
              <!-- <div class="text">
                <p>Slide description 1</p>
              </div>  -->
              <a href="about.php" class="btn-slider">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container"> 
            <img src="assets/img/home/slide/slider1.jpg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <h4 class="title">To be Africa’s most respected outsourcing company with diverse and accessible skilled professionals</h4>
              <!-- <div class="text">
                <p>Slide description 2</p>
              </div>  -->
              <a href="about.php" class="btn-slider">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="assets/img/home/slide/slider2.jpg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <h4 class="title">To provide accessible services and manpower solutions with keen interest on improving the business performance of our clients.</h4>
              <!-- <div class="text">
                <p>Slide description 3</p>
              </div>  -->
              <a href="about.php" class="btn-slider">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="assets/img/home/slide/slider3.jpg"r alt="" class="image" />
          </div>
        </div>
        <!-- <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Slide title 4</div>
              <div class="text">
                <p>Slide description 4</p>
              </div> 
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container"> 
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2016/11/20mars17-sans-typo.jpg" alt="" class="image" />
          </div>
        </div> -->
      </div>
      <!-- <div class="pagination">
        <div class="item is-active"> 
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
        <div class="item">
          <span class="icon">4</span>
        </div>
      </div> -->
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div> 
  </section>
</main>

<!-- How we are Start  -->
<div class="how_we_are">
	<div class="container">
		<div class=" brief-services">

		<div class="col-wap">
		     <div class="brief-services-wrap">
				  <div class="icon">
					<i class="demo-icon icon-sales"></i>
				  </div>
				  <div class="title">
					  <h5>Reporting & Analytics</h5>
					  <h6></h6>
				  </div>
			  </div>
			</div>

			<div class="col-wap">
		      <div class="brief-services-wrap">
				  <div class="icon" style="margin-bottom:20px">
					<div class="our-client-img"><img src="assets/img/home/hand.png" class="img-fluid" alt=""></div>
				  </div>
				  <div class="title">
					  <h5>DEBT RECOVERY </h5>
					   <h6></h6> 
				  </div>
			  </div>
			</div>

			<div class="col-wap">
		      <div class="brief-services-wrap">
				  <div class="icon">
					<i class="demo-icon icon-customer-service"></i>
				  </div>
				  <div class="title">
					  <h5>CALL CENTER Setup</h5>
					   <h6></h6> 
				  </div>
			  </div>
			</div>

			<div class="col-wap">
		     <div class="brief-services-wrap">
				  <div class="icon">
					<i class="demo-icon icon-logistics"></i>
				  </div>
				  <div class="title">
					  <h5>Integrations</h5>
					  <h6></h6>
				  </div>
			 </div>
			</div>

			<div class="col-wap">
		     <div class="brief-services-wrap">
				  <div class="icon">
					<i class="demo-icon icon-hr"></i>
				  </div>
				  <div class="title">
					  <h5>AI & Automation</h5>
					  <h6></h6>
				  </div>
			 </div>
			</div>

			<div class="col-wap">
		     <div class="brief-services-wrap ">
				  <div class="icon">
					<i class="demo-icon icon-heartbeat"></i>
				  </div>
				  <div class="title">
					  <h5>Workforce Optimization</h5>
					  <h6></h6>
				  </div>
			 </div>
			</div>

			<div class="col-wap">
		     <div class="brief-services-wrap last">
				  <div class="icon">
					<i class="demo-icon icon-heartbeat"></i>
				  </div>
				  <div class="title">
					  <h5>Omnichannel Platform</h5>
					  <h6></h6>
				  </div>
			 </div>
			</div>

		</div>
	</div>
</div>
<!-- How we are End  -->

<!-- logistic About Start -->
<section id="why-greensage-outsourcing">
	<div class="container">
		<div class="row header-row">
		      <div class="header">
					<h5>Why Greensage Outsourcing Limited?</h5>
					<p>With GREENSAGE OUTSOURCING LIMITED, you will be able to
							cut spiraling cost and expand your business quicker. We offer flexible, adaptable and ready deals.
							We properly study your requirements and offer our professional support and instant solutions
							that will help you in the longer term. We have the right experience and innovative ideas to
							support you through the whole lifecycle of the project. At Greensage Outsourcing Limited, we
							provide services for our client by working in line with our Core Values: T.A.P
					</p>
					    <!-- <p>We provide services for our client by working in line with our Core Values: T.A.P
						</p> -->
				</div>
		</div>

	<!--	<div class="row d-flex justify-content-center" id="tabs">-->
	<!--		<div class="col-md-9">-->
	<!--			<nav>-->
	<!--				<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">-->
	<!--					<a class="nav-item nav-link active" id="nav-top-tab" data-toggle="tab" href="#nav-top" role="tab" aria-controls="nav-top" aria-selected="true">Top-notch Services</a>-->
	<!--					<a class="nav-item nav-link" id="nav-acct-tab" data-toggle="tab" href="#nav-acct" role="tab" aria-controls="nav-acct" aria-selected="false">Accountability</a>-->
	<!--					<a class="nav-item nav-link" id="nav-pro-tab" data-toggle="tab" href="#nav-pro" role="tab" aria-controls="nav-pro" aria-selected="false">Professionalism</a>-->
						
	<!--				</div>-->
	<!--			</nav>-->
	<!--			<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">-->
	<!--				<div class="tab-pane fade show active" id="nav-top" role="tabpanel" aria-labelledby="nav-top-tab">-->
	<!--				<div class="row ">-->
	<!--					<div class="col-md-6">-->
	<!--						<div class="">-->
	<!--							  <img src="assets/img/home/top-notch.jpg" class="img-fluid"  alt="Greensage Outsourcing Limited">-->
	<!--						</div>-->
                      
	<!--					</div>-->
	<!--					<div class="col-md-6">-->
	<!--						<div class="content">-->
	<!--										<p>We value our customers and this shows in the implementation of our unique -->
	<!--							services which is done to the best of our abilities and as such, makes us -->
	<!--							different from other outsourcing firms. Our services are carried out by-->
	<!--							professional and experts who know the ethics to providing Top-notch services. -->
	<!--							We carryout possible ‘Checks’ on people before we deploy them to various jobs. -->
	<!--							This is done to avoid any form of undisciplined behavior. </p>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
					
					
	<!--				</div>-->
	<!--				<div class="tab-pane fade" id="nav-acct" role="tabpanel" aria-labelledby="nav-acct-tab">-->
	<!--				<div class="row">-->
	<!--					<div class="col-md-6">-->
	<!--						<div class="">-->
	<!--							  <img src="assets/img/home/account.jpg" class="img-fluid"  alt="Greensage Outsourcing Limited">-->
	<!--						</div>-->
                      
	<!--					</div>-->
	<!--					<div class="col-md-6">-->
	<!--						<div class="content">-->
	<!--							<p>Greensage Outsourcing Limited is Transparent in  Accountability. In the -->
	<!--				process of carrying out our services, we also inform our client how funds -->
	<!--				given for any project is spent. We provide financial statement to our clients -->
	<!--				indicating how money is spent, for what purpose and what is left. This is done -->
	<!--				to build Trust and maintain excellent reputation</p>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
					
					
					
					<!--</div>-->
	<!--				<div class="tab-pane fade" id="nav-pro" role="tabpanel" aria-labelledby="nav-pro-tab">-->

	<!--				<div class="row">-->
	<!--					<div class="col-md-5">-->
	<!--						<div class="">-->
	<!--							  <img src="assets/img/home/pro.jpg" class="img-fluid" alt="Greensage Outsourcing Limited">-->
	<!--						</div>-->
                      
	<!--					</div>-->
	<!--					<div class="col-md-7">-->
	<!--						<div class="content">-->
	<!--										<p>At Greensage Outsourcing Limited, we have a large pool of Professionals who -->
	<!--					are well trained and specialized in their various field. We provide the right -->
	<!--					people for the right job. We have gotten good remarks from various companies.-->
	<!--					When it comes to “Pricing”, we are negotiable. We put our customer relationship -->
	<!--					first before anything else. Our services are affordable and open to Small, -->
	<!--					Medium and Big Enterprises.  We effectively deliver our part of the deal at -->
	<!--					an affordable price which allows you to focus more on other priorities.  -->
	<!--				</p>-->
	<!--					 <p>At Greensage Outsourcing we increase your productivity and reduce your spending.-->
	<!--					We provide best solutions that are strategic, practical, innovative and -->
	<!--					timely according to the service you need. Our company is large enough to -->
	<!--					work on high profile cases and small enough to allow you to contribute -->
	<!--					fully to engagements. We are structured to provide individual mentoring -->
	<!--					and coaching, but flexible enough to give you exposure to many different-->
	<!--					 practice areas. We help our client grow their revenue profit faster, -->
	<!--					 better, and more sustainable than anyone else. </p> -->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->

						

	<!--				</div>-->
				
	<!--			</div>-->
			
	<!--		</div>-->
	<!--	</div>-->

	<!--</div>-->
	</div>
</section>


<!-- logistic About End -->
<!-- <p>We provide best solutions that are strategic, practical, 
												innovative and timely according to the service you need. Our 
												company is large enough to work on high profile cases but 
												small enough to allow you to contribute fully to engagements. 
												We are structured to provide individual mentoring and coaching, 
												but flexible enough to give you exposure to many different practice 
												areas. We help our client grow their revenue profit faster, better, 
												and more sustainable than anyone else. 
											</p> -->

<!-- We give you best Start  -->
<!-- <section id="home-greensage-outsourcing">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<div class="title">
						<h4>Outsourcing company with a difference</h4>
				    </div>
				<p><span>GREENSAGE OUTSOURCING LIMITED</span> provides a ready extension to your organizational process thereby taking the pressure, risk and burden off your company within  the scope of the contract. We equip your firm with the business intelligence solutions and advisory support to make the most profitable business decisions. We provide reliable solutions while maintaining a relentless focus on cost and communications. Greensage Outsourcing Limited provides cutting edge outsourcing solutions on Sales and Marketing, Human Resource, IT and Customer Service.</p>
				<a href="about.php">Read More About Us</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img">
					<img src="assets/img/home/about.jpg" class="img-fluid" alt="about greensage outsourcing limited">
				</div>
				
			</div>
		</div>
	</div>
</section> -->

<section id="home-greensage-outsourcing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head">
						<div class="title">
							<h4>Outsourcing company with a difference</h4>
						</div>
					<!--<p><span>GREENSAGE OUTSOURCING LIMITED</span> provides a ready extension to your organizational process thereby taking the pressure, risk and burden off your company within  the scope of the contract. We equip your firm with the business intelligence solutions and advisory support to make the most profitable business decisions. We provide reliable solutions while maintaining a relentless focus on cost and communications. Greensage Outsourcing Limited provides cutting edge outsourcing solutions on Sales and Marketing, Human Resource, IT and Customer Service.</p>-->
				<p><span>GREENSAGE OUTSOURCING LIMITED</span> provides a ready extension to your organizational process thereby taking the pressure, risk and burden off your company within the scope of the contract. We equip your firm with the business intelligence solutions and advisory support to make the most profitable business decisions. We provide reliable solutions while maintaining a relentless focus on cost and communications.
</p>
			
			
				<!-- <a href="about.php">Read More About Us</a> -->
				</div>
			</div>
			<div class="col-md-7">
				<div class="mission-vision">
					<div class="wrap">
						<div class="icon">
						<i class="flaticon-binoculars"></i>
						</div>
						<div class="content">
							  <h5>OUR VISION </h5>
							  <p>To be Africa’s most respected outsourcing company with diverse and accessible skilled professionals.
							  </p>
				    	</div>
					</div>
					<div class="wrap">
						<div class="icon">
						<i class="flaticon-target"></i>
						</div>
                          <div class="content">
							  <h5>Our Mission</h5>
							  <p>To provide accessible services and manpower solutions with keen interest on improving the business performance of our clients. 
							  </p>
						  </div>
					</div>
					<div class="wrap">
						<div class="icon">
						<i class="flaticon-diamond"></i>
						</div>
						   <div class="content core">
									<h5>CORE VALUES</h5>
									<p>Top-notch Services</p>
									<p>Accountability</p>
									<p>Professionalism</p>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="img">
					<img src="assets/img/home/about.jpg" class="img-fluid" alt="about greensage outsourcing limited">
				</div>
				
			</div>
		</div>
	</div>
</section>




<!-- We give you best End  -->

<section id="greensage-outsourcing-services">

	<div class="container">
		<!-- <div class="header-row">
			<h4>Unmatched Services</h4>
			<h5>Unmatched Excellence</h5>
		</div> -->
		<i class="demo-icon icon-greensage"></i>
		<div class="row">
		    <div class="col-md-4 col-sm-6 first">
                <div class="services-wrapper">
					<div class="services-wrapper-content">
							<h4 class="top">Unmatched Services.</h4>
							<h5 class="bottom">Unmatched Excellence.</h5>
					</div>	
				</div>
			</div> 
			<div class="col-md-4 col-sm-6">
               <div class="services-wrapper">
					<a href="sales-and-marketing-outsourcing.php">
						<div class="services-wrapper-inner">
							<div class="icon">
							<i class="demo-icon icon-sales"></i>
							</div>
							<div class="service-content">
								<h6>Omnichannel Platform</h6>
								<p> Greensage Outsourcing enables customer experience through software
									and integrations that helps companies provide a consistent customer satisfaction experience  </p>
							</div>
				    	</div>
					</a>
					
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
               <div class="services-wrapper">
				<a href="hr-outsourcing.php">
					<div class="services-wrapper-inner">
						<div class="icon">
						<i class="demo-icon icon-hr"></i>
						</div>
						<div class="service-content">
							<h6>Workforce Optimization</h6>
							<p>Greensage Outsourcing proffers set of strategies and practices
								through industry standards and quality management that aim to improve employee and
								organizational efficiency, while decreasing operational costs through using data intelligence.
								With an overall goal is to achieving the organizational success.</p>
						</div>
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
                <div class="services-wrapper">
					<a href="debts-recovery-outsourcing.php">
						<div class="services-wrapper-inner">
							<div class="icon">
							<div class="our-client-img"><img src="assets/img/home/hand2.png" class="img-fluid" alt=""></div>
							</div>
							<div class="service-content">
								<h6>Debt Recovery</h6>
								<p> Debt recovery is essential for your organization to remain sustainable as it is an
										integral part of the cashflow cycle of the banking industry. If all that a bank does is give out loans
										with no guaranteed cash back strategy, then the accrued loss will ultimately be absolved by the
										bank which causes a major problem.
</p>
							</div>
				    	</div>
					</a>
					
				</div>
			</div>
		
			<div class="col-md-4 col-sm-6">
                <div class="services-wrapper">
				<a href="call-center-outsourcing.php">
					<div class="services-wrapper-inner">
						<div class="icon">
						<i class="demo-icon icon-customer-service"></i>
						</div>
						<div class="service-content">
							<h6>CALL CENTER Setup</h6>
							<p>Greensage  Call center Outsourcing is designed specially
							 to manage your customer care operations with the help of our 
							 professionals who have unique and exceptional skills in 
							 customer service that will give you substantial and 
							 long-term benefits </p>
						</div>
					</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
               <div class="services-wrapper">
				<a href="logistics-outsourcing.php">
					<div class="services-wrapper-inner">
						<div class="icon">
						<i class="demo-icon icon-logistics"></i>
						</div>
						<div class="service-content">
							<h6>AI & Automation</h6>
							<p>Greensage Outsourcing cognitive automation platform uses advanced
								technologies – artificial intelligence (AI) to enable overall business process management (BPM),
								and robotic process automation (RPA) – to streamline customer engagement, debt recovery and
								scale decision-making across the organization.</p>
						</div>
					</div>
					</a>
				</div>
			</div>
	
			<div class="col-md-4 col-sm-6">
               <div class="services-wrapper">
					<a href="hmo-outsourcing.php">
						<div class="services-wrapper-inner">
							<div class="icon">
							<i class="demo-icon icon-heartbeat"></i>
							</div>
							<div class="service-content">
								<h6>Integrations</h6>
							<p>Seamless integration with various software is one of the key requirements of a
								sustainable approach, to implement and that’s why we’ve made integrating with the Greensage
								platform seamless. The platform has the ability to integrate with a variety of the world’s leading
								software, from CRM, Call Center, Agent Management etc</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
               <div class="services-wrapper">
					<a href="hmo-outsourcing.php">
						<div class="services-wrapper-inner">
							<div class="icon">
							<i class="demo-icon icon-heartbeat"></i>
							</div>
							<div class="service-content">
								<h6>Reporting & Analytics</h6>
							<p>Reporting and Analytics Suite allows you to build your own customizable
								reports to help you meet and manage your teams KPIs. Enabling segmentation of data by
								demographics, industries, geography and more to spot trends and replicate success for optimized
								decision</p>
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>


<!--  Services Start  -->
<section id="greensage-outsourcing-clients">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading_clients">
					<h2>Trusted by these amazing clients</h2>
				
				</div>
			</div>
		</div>
		<!-- <div class="row"> -->
		<div class="cert-owl-carousel owl-carousel owl-theme row">
             <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/access.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/nig.png" class="img-fluid" alt=""></div>
             </div>
			 <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/sme.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/e-finance.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/union.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/ox-png.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/green.png" class="img-fluid" alt=""></div>
             </div>
			 <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/hmo.png" class="img-fluid" alt=""></div>
             </div>
			 <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/sumeru.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/adx.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/sun.png" class="img-fluid" alt=""></div>
             </div>
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/impact.png" class="img-fluid" alt=""></div>
             </div>
              <!-- <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/youth.png" class="img-fluid" alt=""></div>
             </div> -->
              <div class="item col" >
             	<div class="our-client-img"><img src="assets/img/icon/clients/jj.png" class="img-fluid" alt=""></div>
             </div>
         </div>
		<!-- </div> -->
	</div>
</section>
<!--  Services End -->

	<section id="greensage-outsourcing-newslletter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php if($msg != ""):?>
                                    <div class="col-md-6 offset-md-3 alert <?php echo $msgClass; ?>" role="alert" style="background: teal">
                                        <strong style="color:rgba(255,255,255, .8)"><?php  echo $msg; ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                              
                                 <?php endif; ?>
				<div class="card desktop">
						<h2 class="title">SUBSCRIBE NOW</h2>
						<p class="text">Subscribe to our newsletter. Please enter your email and press enter</p>
						<svg class="line" viewBox="0 0 340 110">
							<path d="m 20,62 h 300 c 5.07319,0 8,1.670904 8,7 0,5.329096 -2.73823,7 -8,7 -24.40669,0 -93.75,-28.499714 -145,-28.499714 -13.29554,0 -24.13778,10.98399 -24.13778,24.285714 0,13.301723 10.44743,24.237614 23.78064,24.285714 13.33321,0.0481 24.42131,-10.813044 24.42131,-24.071428 0,-13.258384 -10.82413,-24.5 -24.06417,-24.5 -46.6329,0 -128.373847,2.554751 -134.142712,-0.714429 -6.526479,-3.774256 26.308057,-20.255082 34.999996,-9.643143 4.903867,7.581481 -24.727058,37.748285 -20.714286,41.071429 5.780539,4.585834 41.58559,-45.698305 42.857143,-44.285714 1.788869,2.052458 -26.042394,35.843635 -22.946429,38.125 1.087036,0.763507 10.593224,-22.190977 18.660715,-15.982143 2.161943,1.842808 -9.534575,14.127851 -5.357143,17.5 1.588146,1.140006 10.876171,-3.735915 12.142856,-6.785715 4.42342,-9.489522 20.62535,-12.439397 19.28571,-14.285714 -2.58964,-1.846317 -18.17185,8.21922 -19.64285,13.571429 -0.667432,2.762923 0.003,7.475416 2.94643,8.214285 8.14685,2.711358 14.2347,-20.563532 17.03825,-18.181019 1.15308,0.952082 -9.13954,14.501641 -5.34183,17.823876 2.19057,1.447235 9.43338,-3.42711 12.5,-6.785714 3.06662,-3.090747 5.78766,-12.398459 8.21429,-10.714286 1.47961,1.226912 -10.72645,15.162377 -8.83929,16.964286 1.05558,0.891874 7.64823,-23.58045 18.69629,-17.321714 3.66503,2.357086 -9.07288,14.177268 -5.57129,17.143143 1.5373,1.537304 5.32487,0.597632 11.78572,-4.910715 6.46085,-5.508346 21.19805,-33.351382 23.30357,-32.053571 1.48053,1.208524 -25.5179,35.835564 -23.92858,37.589286 1.58933,1.843006 16.25079,-25.121326 22.76786,-19.107143 7.23135,7.353468 -15.77045,11.573353 -15.71428,13.839286 0.0562,2.53379 4.17316,5.462985 7.67857,5.803571 3.50541,0.340586 2.8953,-2.53583 9.82143,-6.517857 6.92613,-3.982027 30.53313,-16.352772 32.5,-14.642857 0.97719,0.939557 -22.54277,16.133127 -9.28571,18.928571 4.90102,0.88702 18.14747,-15.862165 19.28571,-15 1.11657,0.829669 -20.39244,29.235854 -16.42857,32.142857 1.05257,0.88407 8.21065,-16.928914 15.99374,-23.200825 7.7831,-6.271911 19.42199,-11.35048 18.64912,-12.51346 -1.83981,-2.419325 -12.6417,6.752679 -13.57143,11.428571 -0.92973,4.675892 0.64137,9.149855 5,9.642857 4.35863,0.493002 7.78601,-9.507611 8.76532,-12.843682 0.97931,-3.336071 3.34127,-6.934435 1.21487,-7.266498 -1.76926,-0.242777 -3.15302,6.045268 -2.95091,8.311776 0.20211,2.266508 0.10348,6.38561 3.43432,6.756934 2.88441,0.371324 11.99135,-16.657801 14.89354,-14.95853 1.31485,0.967808 -14.93493,13.219228 -8.21429,17.678572 6.72064,4.459344 20.01106,-20.369503 21.25,-19.196429 2.81731,2.873219 -15.21778,16.979645 -9.46428,20.803571 9.94993,6.770354 35.49608,-39.767387 37.85714,-37.5 3.2143,2.809447 -16.97303,19.144321 -16.42857,24.642858 0.54446,5.498537 2.14464,-0.117739 2.5,2.5 0.35536,2.617739 -3.91382,11.36668 -6.07143,10.714285 -2.06832,-0.384538 -0.81191,-3.639808 -0.0893,-4.910715 0.72263,-1.270907 1.69643,3.571429 1.69643,3.571429" />
						</svg>
						<svg class="line2" viewBox="0 0 50 52">
							<path style="fill:none;stroke:#000000;stroke-width:2" d="m 38.391765,17.110953 -16.66751,16.667516 -7.81073,-7.201053 c -2.56639,-2.366065 -3.80148,-3.574166 -6.56097,-5.722314 l -4.6426304,-1.736535"/>
						</svg>
						<!--<form class="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">-->
						<!--	<div class="news-wrap">-->
						<!--		<input class="input" type="email" required placeholder="Enter Your Email" name="email" value="<?php echo isset($_POST['email']) ? $email: '';?>">-->
						<!--			<input class="input" type="email" required placeholder="Enter Your Email" name="email" value="po@po.po">-->
						<!--	<input class="btn " type="submit" value="Subscribe">-->
						<!--	</div>-->
							
						<!--</form>-->
						
						
						
						 <form id="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                	<div class="news-wrap">
                     <input type="email" class="input" id="email" name="email" placeholder="Email" autocomplete="email" required  >
                          
                     <input type="submit" class="btn "  value="Send" name="submit">
                    	</div>
                  </form>
						
						</div>
				</div>
				<div class="card mobile">
						<h2 class="title">SUBSCRIBE NOW</h2>
						<p class="text">Subscribe to our newsletter. Please enter your email and press enter</p>

						<!--<form class="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">-->
						<!--	<div class="news-wrap">-->
						<!--		<input class="input" type="email" required placeholder="Enter Your Email" name="email" value="<?php echo isset($_POST['email']) ? $email: '';?>">-->
						<!--	<input class="btn " type="submit" value="Subscribe">-->
						<!--	</div>-->
							
						<!--</form>-->
						
						 <form id="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                	<div class="news-wrap">
                     <input type="email" class="input" id="email" name="email" placeholder="Email" autocomplete="email" required  >
                          
                     <input type="submit" class="btn "  value="Send" name="submit">
                    	</div>
                  </form>
						</div>
				</div>
			</div>
		</div>
	</section>


<!-- </div> -->


<!--=========================footer =============================================-->
 <!-- ----------footer---------------------------------- -->
 <?php
	$page ="home";
	include "includes/footer.php";
?>
<!-- ---------------end footer ---------------------------- -->





