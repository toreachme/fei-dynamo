<!doctype html>
<html lang="en">
<?php require_once('../static/header.php');?>

<div class="container-fluid">
	<div class="my-3 mx-3">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Buying</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Selling</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Recent Activity</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Profile</a>
			</li>
		</ul>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md text-black bg-white px-5 py-3">
			<h1 class="font-weight-bold fs-49">Buying</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mb-5">
		<div class="col-md p-0">
			<div id="pr-btn" class="border myborder-color-blue p-4 boxed-darkblue-bg text-center mycursor font-weight-bold fc-link tab-btn" onclick="resources_switch_nodes('.pr-list','.interviews-list, .guest-post-list','block',this);">Saved Listings</div>
		</div>
		<div class="col-md p-0">
			<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor fc-link tab-btn" onclick="resources_switch_nodes('.interviews-list','.pr-list, .guest-post-list','block',this);">Available Listings</div>
		</div>		
		<div class="col-md p-0">
			<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor fc-link tab-btn" onclick="resources_switch_nodes('.guest-post-list','.pr-list, .interviews-list','block',this);">Helpful links</div>
		</div>
	</div>
</div>


<!--Saved Listings-->
<div class="container-fluid pt-2 border-top pr-list">
	<div class="row mx-3 my-5">
		<div class="col-md-4"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8">
			<div class="">
				<h3 class="font-weight-bold">Top 100 Digital Conferences You Should Attend In 2017</h3>
				<p class="fc-grey fs-18 font-weight-light">
					Last Updated: February 9, 2017 It is time to start planning what conferences to attend this year! Need to network in a new space or brush up on some skills? There are several reasons you should attend a digital conference in 2017. Are you an event organiser looking for more awesome speakers? Click here! Here are … 
				</p>
				<div class="mycard-button p-3"><i class="far fa-handshake"></i></div>
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
				<div class="mycard-button p-3"><i class="far fa-handshake"></i></div>
			</div>
		</div>
	</div>
</div>

<!--Available Listings-->
<div class="container-fluid pt-2 border-top hide-node interviews-list">
	<div class="row mx-3 my-5">
		<div class="col-md-4"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8">
			<div class="">
				<h3 class="font-weight-bold">Interviews In 2017</h3>
				<p class="fc-grey fs-18 font-weight-light">
					Last Updated: February 9, 2017 It is time to start planning what conferences to attend this year! Need to network in a new space or brush up on some skills? There are several reasons you should attend a digital conference in 2017. Are you an event organiser looking for more awesome speakers? Click here! Here are … 
				</p>
				<div class="mycard-button p-3"><i class="far fa-handshake"></i></div>
			</div>
		</div>
	</div>	
	<div class="row mx-3 my-5">
		<div class="col-md-4"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8">
			<div class="">
				<h3 class="font-weight-bold">Interviews - Capitalism/Freedom Fastlane 2017</h3>
				<p class="fc-grey fs-18 font-weight-light">
					Austin, Texas
				</p>
				<div class="mycard-button p-3"><i class="far fa-handshake"></i></div>
			</div>
		</div>
	</div>
</div>

<!--Helpful links-->
<div class="container">
	<div class="mb-5">
		<h3 class="font-weight-bold pb-3">Helpful Links</h3>
		<div class="row pl-3 pb-3">
			<a href="#"><h4 class="font-weight-bold fc-link">Guides & Resources</h4></a>
		</div>
		<div class="row pl-3 pb-3">
			<a href="#"><h4 class="font-weight-bold fc-link">Client Case Studies</h4></a>
		</div>
		<div class="row pl-3 pb-3">
			<a href="#"><h4 class="font-weight-bold fc-link">Frequently Asked Questions</h4></a>
		</div>
	</div>
</div>


<!--footer container fluid-->
<?php require_once('../static/footer.php');?>


<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js"></script>
	<script src="http://localhost/FE/js/onclick.js"></script>

</body>
</html>