<!doctype html>
<html lang="en">
<?php require_once('../../static/header.php');?>

<div class="container-fluid">
	<div class="my-3 mx-3">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Buying</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link border-bottom-profile font-weight-bold" href="#">Selling</a>
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
			<h1 class="font-weight-bold fs-49">Selling</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mb-5">
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/sales_view.php" class="fc-link">
				<div id="pr-btn" class="border myborder-color-blue p-4 text-center mycursor tab-btn">
					<span class="pr-2"><i class="fas fa-lock"></i></span>Saless
				</div>
			</a>
		</div>
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/get_a_valuation.php" class="fc-link">
				<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn">
					Get a Valuation
				</div>
			</a>
		</div>		
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/helpful_links_view.php" class="text-white">
				<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 boxed-darkblue-bg font-weight-bold text-center mycursor tab-btn">
					Helpful links
				</div>
			</a>
		</div>
	</div>
</div>


<!--Helpful links-->
<div class="container mb-5">
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