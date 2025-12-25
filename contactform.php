<?php include 'header (1).php';?>		
<section class="wow fadeIn cover-background background-position-top top-space half-section inner-banner" style="background: url(assets/images/headerImg/content-marketing.png)">
				<div class="container">
						<div class="row">
								<div class="col-7 page-title-large d-flex flex-column justify-content-center">
									<h3 class="h1 title-large alt-font text-black font-weight-600 mb-0">Contact Us</h3>
								</div>
						</div>
				</div>
		</section>
		<!-- breadcrumb start -->
		<div class="breadcrumb-strip">
			<div class="container">
				<div class="row">
					<div class="breadcrumb text-small sm-margin-10px-top">
						<ul>
							<li><a href="index.php" class="text-dark-gray">Home</a></li>
							<li><a href="services.php">Services</a></li>
							<li class="text-dark-gray">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<style type="text/css">


strong { font-weight: 600; }


.top-content .top-big-link {
	margin-top: 35px;
	
}

.form-box {
	padding-top: 40px;
  justify-content: center;
  	padding-bottom: 40px;
}

.form-top {
	padding: 25px 25px 15px 25px;
	background: #f7f4ed;
	text-align: left;
}

.form-top h3 { margin-top: 0; }

.form-bottom {
	padding: 25px 25px 30px 25px;
	background: #ebe6e0;
	text-align: left;
}

.form-bottom form textarea {
	height: 100px;
}

.form-bottom form .input-error {
	border-color: #d05a4e;
}


/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {

	.inner-bg { padding: 40px 0 110px 0; }

}


.form-control2 {
	height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #f7f4ed;
    border: 3px solid #d9d7cb;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 50px;
    color: #9d9892;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

.form-control2 {
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 30px;
}

.form-control2:focus {
	outline: 0;
	background: #f7f4ed;
    border: 3px solid #c4c0b4;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}

input[type="text"]:-moz-placeholder, textarea:-moz-placeholder, textarea.form-control2:-moz-placeholder { color: #9d9892; }
input[type="text"]:-ms-input-placeholder, textarea:-ms-input-placeholder, textarea.form-control2:-ms-input-placeholder { color: #9d9892; }
input[type="text"]::-webkit-input-placeholder, textarea::-webkit-input-placeholder, textarea.form-control2::-webkit-input-placeholder { color: #9d9892; }

label {
	font-weight: 400;
}



button.btn1 {
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #d05a4e;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 40px;
    color: #fff;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    text-shadow: none;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

button.btn1:hover { opacity: 0.6; color: #fff; }

button.btn1:active { outline: 0; opacity: 0.6; color: #fff; -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none; }

button.btn1:focus { outline: 0; opacity: 0.6; background: #d05a4e; color: #fff; }

button.btn1:active:focus, button.btn1.active:focus { outline: 0; opacity: 0.6; background: #d05a4e; color: #fff; }
.v-center {
    align-self: center;
    align-items: center;
}
.info-card{padding:30px;box-shadow:0 3.4px 2.7px -30px rgba(0,0,0,.059),0 8.2px 8.9px -30px rgba(0,0,0,.071),0 25px 40px -30px rgba(0,0,0,.2);color: #6a6a8e;}
.contact-card{background:#fff8f2;	margin-bottom: 30px;
}
.email-card{background:#ffecec;	margin-bottom: 30px;
}
.skype-card{background:#eafffd;	margin-bottom: 30px;
}
.info-card span i{margin-right:10px}
.info-card span{font-size:20px;font-weight:700}
.info-card p{font-size:16px;line-height:28px;margin:20px 0 10px}
.info-card a{font-size:20px;color:inherit;font-weight:600}

@media(max-width:991.98px){
	.contact-card{margin-top: 65px;}
}
</style>
<div class="top-content">

    <div class="">
        <div class="container">
            <div class="row form-box">
                <div class="col-sm-12 col-lg-7 col-sm-offset-3 ">
                  <div class="form-top">
                  <h3>Contact us</h3>
                    <p>Fill in the form below to send us a message:</p>
                    </div>
                    <div class="form-bottom contact-form">
                  <form role="form" action="mailer/assets/contact.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name..." class="contact-naem form-control2" id="contact-email">
                      </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email..." class="contact-email form-control2" id="contact-email">
                      </div>
                      <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control2" id="contact-subject">
                      </div>
                      <div class="form-group">
                        <textarea name="message" placeholder="Message..." class="contact-message form-control2" id="contact-message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="contact-antispam">Antispam question: 7 + 5 = ?</label>
                        <input type="text" name="antispam" placeholder="Your answer..." class="contact-antispam form-control2" id="contact-antispam">
                      </div>
                      <button type="submit" class="btn1">SUBMIT</button>
                  </form>
                </div>
                </div>
								<div class="col-lg-5 v-center">
									<div class="contact-details">
									<div class="contact-card wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
									<div class="info-card v-center">
									<span><i class="fa fa-phone"></i> Phone:</span>
									<div class="info-body">
									<p>Assistance hours: Monday – Friday, 9:30 am to 6:30 pm</p>
									<a href="tel:+91- 8939740984">(+91)8448987041</a>
									</div>
									</div>
									</div>
									<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
									<div class="info-card v-center">
									<span><i class="fa fa-envelope"></i> Email:</span>
									<div class="info-body">
									<p>Our support team will get back to in 24-h during standard business hours.</p>
									<a href="mailto:Info@kryossworks.com">
									info@kryossworks.com</a>
									</div>
									</div>
									</div>
									<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
									<div class="info-card v-center">
									<span><i class="fa fa-skype"></i> Skype:</span>
									<div class="info-body">
									<p>We Are Online: Monday – Friday, 9:30 am to 6:30 pm</p>
									<a href="#">Kryoss Work</a>
									</div>
									</div>
									</div>
									</div>
								</div>
            </div>
        </div>
    </div>

</div>
<script src="mailer/assets/js/jquery-1.11.1.min.js"></script>

<script src="mailer/assets/js/jquery.backstretch.min.js"></script>
<script src="mailer/assets/js/scripts.js"></script>

<?php include 'footer (1).php';?>
