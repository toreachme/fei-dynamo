<!doctype html>
<html lang="en">
<?php require_once('../../static/header.php');?>

<div class="container-fluid">
	<div class="my-3 mx-3">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link fc-link border-bottom-profile font-weight-bold" href="#">Buying</a>
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
			<a href="http://localhost/FE/profile/buying/saved_listing_view.php" class="fc-link">
				<div id="pr-btn" class="border myborder-color-blue p-4 text-center mycursor tab-btn">
					<span class="pr-2"><i class="fas fa-lock"></i></span>Saved Listings
				</div>
			</a>
		</div>
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/buying/available_listing_view.php" class="text-white">
				<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 boxed-darkblue-bg text-center mycursor font-weight-bold tab-btn">
					<!-- <span class="pr-2"><i class="fas fa-lock"></i></span> -->Available Listings
				</div>
			</a>
		</div>		
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/buying/helpful_links_view.php" class="fc-link">
				<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn">
					Helpful links
				</div>
			</a>
		</div>
	</div>
</div>


<!--Saved Listings-->
<div class="container-fluid pt-2 pb-5">
	<div class="row">
		<div class="ml-4 mb-4 pl-3">
			<span class="font-weight-bold fc-grey">Filter:</span>
			<span class="ml-4 fc-link font-weight-bold border-bottom-profile">All</span>
			<span class="ml-3 fc-link">SaaS</span>
			<span class="ml-3 fc-link">eCommerce</span>
			<span class="ml-3 fc-link">Content</span>
		</div>
	</div>

	<div class="row mt-3 mb-5 mx-3 px-2">
		<div class="col-md-3 px-1 mb-4">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-card-grey text-white mycard-header">
					Listed <span class="float-right">$5000</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">Direct (Traditional) - Books <span class="float-right"><i class="far fa-star fs-20"></i></span></div>
					<div class="mycard-title mb-2 fc-link">App and Software Blog</div>
					<div class="fs-14 font-weight-bold fc-dark-blue">
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$1,000</span>
						</div>						
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$4,000</span>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-3 px-1 mb-4">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-card-grey text-white mycard-header">
					Prospectus Requested
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">Direct (Traditional) - Books <span class="float-right"><i class="far fa-star fs-20"></i></span></div>
					<div class="mycard-title mb-2 fc-link">App and Software Blog</div>
					<div class="fs-14 font-weight-bold fc-dark-blue">
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$1,000</span>
						</div>						
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$4,000</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1 mb-4">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-card-grey text-white mycard-header">
					Available <span class="float-right">$5000</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">Direct (Traditional) - Books <span class="float-right"><i class="far fa-star fs-20"></i></span></div>
					<div class="mycard-title mb-2 fc-link">App and Software Blog</div>
					<div class="fs-14 font-weight-bold fc-dark-blue">
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$1,000</span>
						</div>						
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$4,000</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1 mb-4">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-card-grey text-white mycard-header">
					Available <span class="float-right">$5000</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">Direct (Traditional) - Books <span class="float-right"><i class="far fa-star fs-20"></i></span></div>
					<div class="mycard-title mb-2 fc-link">App and Software Blog</div>
					<div class="fs-14 font-weight-bold fc-dark-blue">
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$1,000</span>
						</div>						
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$4,000</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1 mb-4">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-color bg-card-grey text-white mycard-header">
					Available <span class="float-right">$5000</span>
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">Direct (Traditional) - Books <span class="float-right"><i class="far fa-star fs-20"></i></span></div>
					<div class="mycard-title mb-2 fc-link">App and Software Blog</div>
					<div class="fs-14 font-weight-bold fc-dark-blue">
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$1,000</span>
						</div>						
						<div class="border-bottom py-3">
							<span>Yearly Revenue</span>
							<span class="float-right">$4,000</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>


<!--footer container fluid-->
<?php require_once('../../static/footer.php');?>


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