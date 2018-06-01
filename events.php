<!doctype html>
<html lang="en">
<?php require_once('./static/header.php');?>

<!--Top Title Conatiner fluid-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md text-black bg-white p-5">
			<h1 class="font-weight-bold fs-49">Events and Talks</h1>
			<p class="text-secondary w-75 fs-20">
			Our team is constantly traveling around the globe to share our story, as well as success stories of our clients. Check out our events – the ones that we are hosting, sponsoring and attending.</p>
		</div>
	</div>
</div>



<!--Events Tab-->
<div class="container">
	<div class="row mb-5">
		<div class="col-md p-0">
			<div class="border myborder-color-blue p-4 boxed-darkblue-bg text-center font-weight-bold mycursor fc-link" onclick="resources_switch_nodes('.events-form','.events-list','block',this);">Upcoming Events</div>
		</div>
		<div class="col-md p-0">
			<div class="border myborder-color-blue border-left-0 p-4 text-center mycursor fc-link" onclick="resources_switch_nodes('.events-list','.events-form','block',this);">Past Events</div>
		</div>
	</div>
</div>



<!--Upcoming Events Form Container-fluid-->
<div class="container-fluid events-form">
	<div class="row">
		<div class="col-md bg-top-grey text-secondary p-5">
			<h4 class="font-weight-bold">Keep up to date with our Events schedule</h4>
			<p>Please fill out the form below to be notified when we host a webinar, sponsor a conference, or speak at events. Let us know if you are interested in inviting us to speak at the event you are hosting.
			</p>
			<form>
				<div class="form-row mb-3">
					<div class="col-md-3">
						<label class="font-weight-bold">Your Name *</label>
						<input class="form-control" type="text">
					</div>
					<div class="col-md-3">
						<label class="font-weight-bold">Email *</label>
						<input class="form-control" type="email">
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 pt-4">
						<label class="font-weight-bold">Message *</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3 pt-4">
						<button type="submit" class="btn btn-success px-5">Sign up</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



<!--Past Events Container-fluid-->
<div class="container-fluid pt-2 border-top hide-node events-list">
	<div class="row mx-3 my-5">
		<div class="col-md-4"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8">
			<div class="">
				<h3 class="font-weight-bold">Top 100 Digital Conferences You Should Attend In 2017</h3>
				<p class="fc-grey fs-18 font-weight-light">
					Last Updated: February 9, 2017 It is time to start planning what conferences to attend this year! Need to network in a new space or brush up on some skills? There are several reasons you should attend a digital conference in 2017. Are you an event organiser looking for more awesome speakers? Click here! Here are … 
				</p>
				<div class="mycard-button d-table-cell pl-3"><i class="far fa-handshake"></i></div>
			</div>
		</div>
	</div>	
	<div class="row mx-3 my-5">
		<div class="col-md-4"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8">
			<div class="">
				<h3 class="font-weight-bold">Capitalism/Freedom Fastlane 2017</h3>
				<p class="fc-grey fs-18 font-weight-light">
					Austin, Texas
				</p>
				<div class="mycard-button d-table-cell pl-3"><i class="far fa-handshake"></i></div>
			</div>
		</div>
	</div>
</div>



<!--Footer-->
<div class="container-fluid bg-color sticky-footer">
	<footer class="py-4 text-white text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="d-flex justify-content-between">
					<p class="font-weight-light">Follow us</p>
					<a href="#"><i class="fab fa-facebook-f fa-lg text-white"></i></a>
					<a href="#"><i class="fab fa-twitter fa-lg text-white"></i></a>
					<a href="#"><i class="fab fa-linkedin-in fa-lg text-white"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<img data-src="holder.js/180x102/industrial" class="img-fluid"/>
			</div>
			<div class="col-md-4">
				<div class="d-flex justify-content-between">
					<p class="font-weight-light">Policy</p>
					<p class="font-weight-light">Terms of Use</p>
					<p class="font-weight-light">Contact</p>
				</div>
			</div>
		</div>
	</footer>
</div>



<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js"></script>
	<script src="./js/onclick.js"></script>

</body>
</html>