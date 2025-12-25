<style type="text/css">


strong { font-weight: 600; }


.form-box2 {
	padding-top: 40px;
	padding-bottom: 40px;
  justify-content: right;
}

.form-top2 {
	padding: 15px 25px 5px 25px;
	background: rgba(210, 77, 87, 1);
	text-align: center;
	color:white;
}

.form-top2 h3 { margin-top: 0;margin-bottom: 15px;}

.form-bottom2 {
	padding: 0 25px 20px 25px;
 background: rgba(210, 77, 87, 1);
 color:white;

}

.form-bottom2 form textarea {
	height: 100px;
}

.form-bottom2 form .input-error {
	border-color: rgba(210, 77, 87, 1);
}



.form-control3 {
	width: 100%;
  font-size: 14px;
  padding: 10px;
  border: 1px solid rgba(150, 40, 27, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: white;
  color: black;
	height: 70%;
  outline: none;

}

.form-control3 {
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 30px;
}

.form-control3:focus {
	top: -20px;
	  left: 0;
	  color: black;
	  font-size: 12px;
}


label {
	font-weight: 400;
}



button.btn2 {
	border: 1px solid rgba(150, 40, 27, 1);
  background: rgba(20, 20, 20, .6);
  font-size: 14px;
  color: white;
  cursor: pointer;
  transition: .4s;
	padding: 0 20px;
height: 40px;
}
.pd-l{
	padding-left: 0;
}
.mgl{
	padding-right: 40px;
	margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.mgb .form-group{
	margin-bottom: 0!important;
}
@media(max-width:991.98px){
	.mgl{
		padding-right:0;
    margin: 80px auto;
		position: relative;
		top:0;
		-ms-transform: translateY(0);
		transform: translateY(0);
	}
}
button.btn2:hover { opacity: 0.6; color: #fff; }

button.btn2:active { outline: 0; opacity: 0.6; color: #fff; -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none; }

button.btn2:focus { outline: 0; opacity: 0.6; background: rgba(20, 20, 20, .8); color: #fff; }

button.btn2:active:focus, button.btn2.active:focus { outline: 0; opacity: 0.6; background:rgba(20, 20, 20, .8); color: #fff; }

</style>
<div style="	overflow-x: hidden!important;background-color: #ffe6e6;"">

    <div class="container">
        <div class="">

            <div class="row form-box2">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="text-lg-left sm-no-padding width-100 mgl">
										<div class="">
											<h1 class="h3 font-weight-700 alt-font text-extra-dark-gray">Why choose Kryoss? </h1> 
											<ul class="p-0 list-style-3">
												<li>Team of Dedicated Professionals    </li>
												<li>Smooth Interaction with our Developers</li>
												<li>Highly Effective Software Solutions</li>
												<li>On-time Delivery of Projects </li>
												<li>Guaranteed Satisfaction</li>
												<li>24/7 Support  </li>
												<li>Frequent Reports About Project Development</li>

											</ul>
										</div>
								</div>

							</div>
                <div class="col-md-12 col-lg-6 col-sm-12 col-sm-offset-3 ">
                  <div class="form-top2">
                  <h3>Request a Quote</h3>
                    </div>
                    <div class="form-bottom2 contact-form">
                  <form role="form" action="mailer/assets/quote.php" method="post">
										<div class="row mgb">
											<div class="form-group col-lg-6  ">
													<input type="text" name="name" placeholder="Name..." class="contact-name form-control3" id="contact-email" required>
												</div>
												<div class="form-group col-lg-6">
														<input type="tel" name="phone" placeholder="Phone..." class="contact-name form-control3" id="contact-phone" required>
													</div>
										</div>
                    <div class="mgb">
											<div class="form-group">
													<input type="text" name="email" placeholder="Email..." class="contact-email form-control3" id="contact-email" required>
												</div>
												<div class="form-group">
													<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control3" id="contact-subject" required>
												</div>
												<div class="form-group">
													<textarea name="message" placeholder="Message..." class="contact-message form-control3" id="contact-message" required></textarea>
												</div>
												<div class="form-group">
													<label for="contact-antispam">Antispam question: 7 + 5 = ?</label>
													<input type="text" name="antispam" placeholder="Your answer..." class="contact-antispam form-control3" id="contact-antispam" required>
												</div>
                    </div>

                      <button type="submit" class="btn btn2">SUBMIT</button>
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="mailer/assets/js/jquery-1.11.1.min.js"></script>

<script src="mailer/assets/js/jquery.backstretch.min.js"></script>
<script src="mailer/assets/js/scripts2.js"></script>
