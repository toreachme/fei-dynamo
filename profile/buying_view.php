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
			<div id="pr-btn" class="border myborder-color-blue p-4 boxed-darkblue-bg text-center mycursor font-weight-bold tab-btn" onclick="resources_switch_nodes('.pr-list','.interviews-list, .helpful-links-list','block',this);"><span class="pr-2"><i class="fas fa-lock"></i></span>Saved Listings</div>
		</div>
		<div class="col-md p-0">
			<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn" onclick="resources_switch_nodes('.interviews-list','.pr-list, .helpful-links-list','block',this);"><span class="pr-2"><i class="fas fa-lock"></i></span>Available Listings</div>
		</div>		
		<div class="col-md p-0">
			<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn" onclick="resources_switch_nodes('.helpful-links-list','.pr-list, .interviews-list','block',this);">Helpful links</div>
		</div>
	</div>
</div>


<!--Saved Listings-->
<div class="container-fluid pt-2 pb-5 pr-list">

	<!--
		***
		Saved Listing
		***
	-->
	<div class="row">
		<h4 class="font-weight-bold pl-5">Saved Listings</h4>
	</div>
	<div class="row mt-3 mb-5 mx-3 px-2">
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color text-white mycard-header fs-16">
					Need Feedback <span class="float-right"><i class="fas fa-arrow-right fs-16"></i></span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-title mb-2">Card title</div>
					<p class="card-text mycard-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
					</p>
				</div>
				<div class="footer mycard-footer p-4">
					<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
					<div class="d-table-cell">
						<p class="fs-18 font-weight-bold pl-2 m-0">Listen</p>
						<span class="fs-12 pl-2">12:00:00</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color text-white mycard-header fs-16">
					Prospectus Requested
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-title mb-2">Card title</div>
					<p class="card-text mycard-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
					</p>
				</div>
				<div class="footer mycard-footer p-4">
					<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
					<div class="d-table-cell">
						<p class="fs-18 font-weight-bold pl-2 m-0">Listen</p>
						<span class="fs-12 pl-2">12:00:00</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color text-white mycard-header fs-16">
					Available
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-title mb-2">SaaS Valuations: How to Value a SaaS Business in 2017</div>
					<p class="card-text mycard-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
					</p>
				</div>
				<div class="footer mycard-footer p-4">
					<div class="mycard-button d-table-cell"><i class="fa fa-align-right fa-rotate-180 fa-fw"></i></div>
					<div class="d-table-cell">
						<p class="fs-18 font-weight-bold pl-2 pt-2 m-0">Read</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--
		***
		Recommended Listing
		***
	-->
	<div class="row">
		<h4 class="font-weight-bold pl-5">Recommended Listings</h4>
	</div>
	<div class="row mt-3 mb-5 mx-3 px-2">
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color text-white mycard-header fs-16">
					Available <span class="float-right">$,1500,00</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-title mb-2">Card title</div>
					<p class="card-text mycard-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
					</p>
				</div>
				<div class="footer mycard-footer p-4">
					<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
					<div class="d-table-cell">
						<p class="fs-18 font-weight-bold pl-2 m-0">Listen</p>
						<span class="fs-12 pl-2">12:00:00</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color text-white mycard-header fs-16">
					Available <span class="float-right">$,1500,00</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-title mb-2">Card title</div>
					<p class="card-text mycard-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
					</p>
				</div>
				<div class="footer mycard-footer p-4">
					<div class="mycard-button d-table-cell"><i class="fas fa-headphones"></i></div>
					<div class="d-table-cell">
						<p class="fs-18 font-weight-bold pl-2 m-0">Listen</p>
						<span class="fs-12 pl-2">12:00:00</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color text-white mycard-header fs-16">
					Available <span class="float-right">$,1500,00</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-title mb-2">SaaS Valuations: How to Value a SaaS Business in 2017</div>
					<p class="card-text mycard-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
					</p>
				</div>
				<div class="footer mycard-footer p-4">
					<div class="mycard-button d-table-cell"><i class="fa fa-align-right fa-rotate-180 fa-fw"></i></div>
					<div class="d-table-cell">
						<p class="fs-18 font-weight-bold pl-2 pt-2 m-0">Read</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Available Listings-->
<div class="container-fluid pt-2 pb-5 hide-node interviews-list">
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
<div class="container hide-node helpful-links-list mb-5">
	<div class="pb-5">
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