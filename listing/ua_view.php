<!doctype html>
<html lang="en">
<?php require_once('../static/header.php');?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md text-black bg-white px-5 py-3">
			<h1 class="font-weight-bold fs-49">Listings</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mb-5">
		<div class="col-md p-0">
			<a href="http://localhost/FE/listing/sold_view.php" class="fc-link">
				<div id="pr-btn" class="border myborder-color-blue p-4 text-center mycursor tab-btn">
					Sold
				</div>
			</a>
		</div>
		<div class="col-md p-0">
			<a href="http://localhost/FE/listing/ua_view.php" class="fc-link">
				<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor font-weight-bold tab-btn">
					Under Agreement
				</div>
			</a>
		</div>		
		<div class="col-md p-0">
			<a href="http://localhost/FE/listing/available_view.php" class="text-white">
				<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 boxed-darkblue-bg text-center mycursor tab-btn">
					Available
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

	<!--
		***
		Listing Tiles 
		***
	-->	
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