@extends('layouts.header')
@section('content')

		<!-- //Top-Bar -->
		<div class="banner">
			<div class="bann-info">
			</div>
		</div>
		<!-- //Slider -->
	</div>
	<!-- //Header -->
<div class="contact wthree-3">
	<div class="container">
	<h2 class="tittle">Contact</h2>
	<div class="col-md-4 content-pro-head content-pro-head3 agile-6">
			<h4>Information</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum  Ipsum as their default model text now use Lorem Ipsum as their default model text</p>
		<h4>Address</h4>
		<ul class="contact-list agileits-6">
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>756 global Place, New York.</li>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 2222 222</li>
			</ul>
    </div>
  <div class="col-md-8 content-pro-head1 w3agile-6">
   		<form action="#" method="post">
				<div class=" grid-contact agileinfo-6">
					<div class="your-top">
						
						<input type="text" placeholder="Name" name="Name" required="">								
						<div class="clearfix"> </div>
					</div>
					<div class="your-top">
						
						<input type="text" placeholder="E-mail" name="E-mail" required="">								
						<div class="clearfix"> </div>
					</div>
					<div class="your-top">
						
						<input type="text" placeholder="Website" name="Website" required="">								
						<div class="clearfix"> </div>
					</div>
					
			
					<textarea placeholder=" Message" name=" Message" required=""></textarea>
					<input type="submit" value="Send">
				
				</div>
				</form>
  </div>
  
	<div class="clearfix"> </div>
	</div>
</div>
<div class="w3l-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.8400883834!2d-74.25818885297905!3d40.70583164034001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1471602679873" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!--/ w3l-1 -->
	<div class="footer-bottom agileits-w3layouts-1">
		<div class="container">
			<h3>Newsletter</h3>
			<p class="ttt">when an unknown printer took a galley of type and scrambled Lorem Ipsum passages, and more recently it to make a type specimen book.</p>
			<form action="#" method="post">
				<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
@endsection