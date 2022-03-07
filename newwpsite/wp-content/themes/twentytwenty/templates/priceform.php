<div  id="openFormpopup" class="modal modalpop">
	<div class="modal-content">
    	<span id="closeFormpopup" class="close closeBTN" onclick="closebutton()">&times;</span>
		<form action="#" method="POST" id="order-form">
			<input type="hidden" name="service" id="service" />
			<input type="hidden" name="package" id="package" />
			 <div class="row">
				  <div class="col small-12 large-12 pb-0">
					   <div class="form-wrapper">
							<h5>Book Your Order Now</h5>
						   	<h5 id="package-name"></h5>
							<p class="text-center"><small>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</small></p>
						    <div class="form-field-wrap">	
						    	<div class="row">
									 <div class="col small-12 large-12">
										  <div class="form-group ws--product_field ppd-input-field-block">
											   <input type="text" class="ppd-input-field" name="name" id="name" placeholder="Enter Full Name" />
										  </div>
									 </div>
									 <div class="col small-12 large-6">
										  <div class="form-group ws--product_field ppd-input-field-block">
											   <input type="email" class="ppd-input-field" name="email" id="email" placeholder="Enter Email @" />
										  </div>
									 </div>
									 <div class="col small-12 large-6">
										  <div class="form-group ws--product_field ppd-input-field-block">
											   <input type="tel" class="ppd-input-field" name="phone" id="phone" placeholder="Enter Phone Number" />
										  </div>
									 </div>
									 <div class="col small-12 large-12">
										  <div class="form-group ws--product_field ppd-input-field-block">
											  <textarea class="ppd-input-field" cols="12" rows="2" name="message" id="message" placeholder="Order Description"></textarea>
										  </div>
									 </div>
								</div>
						    </div>
							<div class="form-group text-center">
								 <button type="submit" id="order-submit" class="w-100 text-center button primary is-bevel is-large mb-0">Order Now</button>
							</div>
					   </div>
				  </div>
			 </div>
		</form>
	</div>
</div>