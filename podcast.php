<!doctype html>
<html lang="en">
<?php require_once('./static/header.php');?>

<!--Top Title Container fluid-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md text-black bg-white p-5">
			<h1 class="font-weight-bold fs-49">Podcast</h1>
			<p class="text-secondary w-75 fs-20">
			Hear FE International experts talk about all aspects of SaaS, e-commerce and content businesses management, valuation and exit planning.</p>
		</div>
	</div>
</div>


<!--Podcast Tab-->
<div class="container">
	<div class="row mb-5">
		<div class="col-md p-0">
			<div class="border myborder-color-blue p-4 boxed-darkblue-bg text-center font-weight-bold mycursor fc-link" onclick="resources_switch_nodes('.bbs-podcast-list','.guest-podcast-list','block',this);">Build Buy Sell Podcast</div>
		</div>
		<div class="col-md p-0">
			<div class="border myborder-color-blue border-left-0 p-4 text-center mycursor fc-link" onclick="resources_switch_nodes('.guest-podcast-list','.bbs-podcast-list','block',this);">Guest Podcasts</div>
		</div>
	</div>
</div>


<!--
	*******
	Build Buy Sell Podcast
	*******
-->
<div class="container-fluid pt-2 bbs-podcast-list">
	<div class="row">
		<div class="col-md-6">
			<img data-src="holder.js/607x480/industrial" class="img-fluid"/>
		</div>
		<div class="col-md-6 col-sm-6 p-5 bg-color text-white">
			<div class="px-5">
				<p>Mar 24, 2017</p>
				<h4 class="font-weight-bold">Building and Selling a Six-Figure SaaS Business with Brian Casel</h4>
				<p class="boxed-content">Today we had Brian Casel on the show, who recently sold a six-figure SaaS business through FE International. Brian talks about...</p>
				<div class="mycard-button d-table-cell bg-white text-dark"><i class="fas fa-headphones"></i></div>
				<p class="mycard-title pl-2 pt-2 m-0 d-table-cell text-white">Listen</p>
			</div>
		</div>
	</div>

	<div class="row border-top">
		<div class="pt-5 pb-5 pl-5">
			<div class="font-weight-light mb-4">Oct 27, 2015</div>
			<h3 class="font-weight-bold mb-5">Selling Businesses for 7 Figures with Thomas Smale</h3>
			<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
			<p class="mycard-title pl-2 pt-2 m-0 d-table-cell">Listen</p>
		</div>
	</div>
	<div class="row border-top">
		<div class="pt-5 pb-5 pl-5">
			<div class="font-weight-light mb-4">Oct 15, 2015</div>
			<h3 class="font-weight-bold mb-5">How To Exit Your Online Business</h3>
			<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
			<p class="mycard-title pl-2 pt-2 m-0 d-table-cell">Listen</p>
		</div>
	</div>

	<div class="row mx-3 my-5">
		<div class="col-md-4"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8">
			<div class="">
				<p>Mar 24, 2017</p>
				<h3 class="font-weight-bold">Learn How to Master Audience Outreach With Kai Davis</h3>
				<p class="fc-grey fs-18 font-weight-light">
					Kai Davis was on the show today – he is an expert in audience outreach, with a track record of 30% – 60% placement rate for clients by helping his clients to secure podcast recordings, editorial features and much more. Having experience consulting for 5-7 figure e-commerce businesses, Kai discusses his top two goals in … 
				</p>
				<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
				<p class="mycard-title pl-2 pt-2 m-0 d-table-cell">Listen</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="my-5">
					<div class="d-inline px-4 py-3 mr-3 border">1</div>
					<div class="d-inline px-4 py-3 mr-3 border">2</div>
					<div class="d-inline px-4 py-3 mr-3 border">3</div>
					<div class="d-inline px-4 py-3 border">4</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>




<!--
****
   Guest Podcast
*****
-->
<div class="container-fluid pt-2 hide-node guest-podcast-list">
	<div class="row">
		<div class="pt-5 pb-5 pl-5 border-top">
			<p class="text-muted">Oct 27, 2015</p>
			<h3 class="font-weight-bold pb-5">Selling Businesses for 7 Figures with Thomas Smale</h3>
			<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
			<p class="mycard-title pl-2 pt-2 m-0 d-table-cell">Listen</p>
		</div>
	</div>

	<div class="row">
		<div class="pt-5 pb-5 pl-5 border-top">
			<p class="text-muted">Oct 27, 2015</p>
			<h3 class="font-weight-bold pb-5">Selling Businesses for 7 Figures with Thomas Smale</h3>
			<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
			<p class="mycard-title pl-2 pt-2 m-0 d-table-cell">Listen</p>
		</div>
	</div>
	
	<div class="row mx-3 border-top">
		<div class="col-md-4 my-5"><img data-src="holder.js/306x280/industrial" class="img-fluid"/></div>
		<div class="col-md-8 my-5">
			<div class="">
				<h3 class="font-weight-bold">Building a SaaS Product for Technical SEOs With Patrick Hathaway</h3>
				<p class="fc-grey fs-18 font-weight-light">
					In this episode, we spoke to Patrick Hathaway, the Director of URL Profiler, a SEO backlink profile software company. The desktop software helps SEOs gather and analyze data of their backlink profile. He decided to quit his full-time job after spending time working on URL Profiler during his paternity leave in 2014 and realizing his … 
				</p>
				<div class="mycard-button d-table-cell pl-3"><i class="far fa-handshake"></i></div>
			</div>
		</div>
	</div>
</div>



<!--Mailing list Form Container-fluid-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md bg-top-grey text-secondary p-5">
			<h4 class="font-weight-bold">Join our Mailing List</h4>
			<p>Sign up to get news and content delivered weekly</p>

			<form>
				<div class="form-row mb-3">
					<div class="col-md-3">
						<label class="font-weight-bold">Name *</label>
						<input class="form-control" type="text">
					</div>
					<div class="col-md-3">
						<label class="font-weight-bold">Email *</label>
						<input class="form-control" type="email">
					</div>
					<div class="col-md-3 pt-4 mt-2">
						<button type="submit" class="btn btn-success px-5">Sign upt</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<!--footer container fluid-->
<?php require_once('./static/footer.php');?>



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