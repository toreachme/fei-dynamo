<!doctype html>
<html lang="en">
<?php require_once('../../static/header.php');?>

<div class="container-fluid">
	<div class="my-3 mx-3">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Selling</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link border-bottom-profile" href="#">Selling</a>
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
			<a href="http://localhost/FE/profile/selling/sales_view.php" class="text-white">
				<div id="pr-btn" class="border myborder-color-blue p-4 boxed-darkblue-bg text-center mycursor font-weight-bold tab-btn"><!-- <span class="pr-2"><i class="fas fa-lock"></i></span> -->Sales
				</div>
			</a>
		</div>
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/get_a_valuation.php" class="fc-link">
				<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn"><!-- <span class="pr-2"><i class="fas fa-lock"></i></span> -->Get a Valuation
				</div>
			</a>
		</div>		
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/helpful_links_view.php" class="fc-link">
				<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn">Helpful links
				</div>
			</a>
		</div>
	</div>
</div>


<!--Saved Listings-->
<div class="container-fluid pt-2 pb-5 saved-list">
	<div class="row">
		<h4 class="font-weight-bold pl-5">Sales in Progress</h4>
	</div>
	<div class="row mt-3 mb-5 mx-3 px-2">
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-top-green text-white mycard-header fs-16">
					Due Diligence
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">SaaS - B2B <span class="float-right"><i class="fas fa-exclamation-circle fs-24 fc-color-red"></i></span></div>
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
				<div class="footer mycard-footer p-4">
					<div class="fc-link font-weight-bold float-right">
						<span>Details</span>
						<span><i class="fas fa-arrow-right fs-14"></i></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 px-1">
			<div class="border mycard-min-height">
				<div class="header px-4 py-3 bg-top-green text-white mycard-header fs-16">
					Valuation
				</div>
				<div class="body px-4 pt-3">
					<div class="mycard-subheader pb-2 fs-14 fc-grey">SaaS - B2B</div>
					<div class="mycard-title mb-2 fc-link">My Other Business Name</div>
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
				<div class="footer mycard-footer p-4">
					<div class="fc-link font-weight-bold float-right">
						<span>Details</span>
						<span><i class="fas fa-arrow-right fs-14"></i></span>
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