<?php 
        include_once './header.php';
 ?>
<!-- Section Background -->
	<section class="section-background cbg">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">&nbsp;contact</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


<!-- Contact with us -->
	<section class="contact section-wrapper" id="contact">
		<div class="container">
			<div class="row">
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-location"></i>
	                <h3>Address</h3>
	                <p class="contact">
	                    uncle Ben , 353 <br>
	                    Kumasi , Ghana.
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-telephone"></i>
	                <h3>Phone</h3>
	                <p class="contact">
	                    Local: 233-345-232<br>
	                    Mobile: 233-2344-123
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-printer"></i>
	                <h3>Fax</h3>
	                <p class="contact">
	                    Office: 233-287-8300 <br>
	                    Home: 2233-782-8200
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-email"></i>
	                <h3>Email Address</h3>
	                <p class="contact">
	                    <a href="">info@unclebenbakey.com</a> <br>
	                    <a href="">www.unclebenbakey.com</a>
	                </p>
	            </div>


	        </div> <!-- /.row -->
	        <form class="row form">
                <h3>Leave A Message</h3>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Name</label>
                    <input name="name" class="form-control" type="text" placeholder="First Name">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Email address">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Website</label>
                    <input name="website" class="form-control" type="text" placeholder="Your website">
                </div> <!-- /.form-group -->
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="sr-only">Message</label>
                        <textarea class="message form-control" placeholder="Write message"></textarea>
                    </div> <!-- /.form-group -->
                    <input class="btn btn-sub" type="submit" value="Send Message">
                </div>
            </form> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.contact -->





<?php
include_once './footer.php';
?>