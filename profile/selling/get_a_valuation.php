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
					<span class="pr-2"><i class="fas fa-lock"></i></span>Sales
				</div>
			</a>
		</div>
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/get_a_valuation.php" class="text-white">
				<div id="int-btn" class="border myborder-color-blue border-left-0 p-4 boxed-darkblue-bg font-weight-bold text-center mycursor tab-btn">
					Get a Valuation
				</div>
			</a>
		</div>		
		<div class="col-md p-0">
			<a href="http://localhost/FE/profile/selling/helpful_links_view.php" class="fc-link">
				<div id="gp-btn" class="border myborder-color-blue border-left-0 p-4 text-center mycursor tab-btn">
					Helpful links
				</div>
			</a>
		</div>
	</div>
</div>


<!--Get a Valuation container-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md text-secondary p-5">
			<h4 class="font-weight-bold mb-3">Get a Valuation</h4>
			<form>
				<div class="form-row mb-5">
					<div class="col-md-3">
						<label class="font-weight-bold">Your Name *</label>
						<input class="form-control" type="text">
					</div>
					<div class="col-md-3">
						<label class="font-weight-bold">Email *</label>
						<input class="form-control" type="email">
					</div>
				</div>
				<div class="form-row mb-5">
					<div class="col-md-3">
						<label class="font-weight-bold">First Name *</label>
						<input class="form-control" type="text">
					</div>
					<div class="col-md-3">
						<label class="font-weight-bold">Last Name *</label>
						<input class="form-control" type="text">
					</div>					
					<div class="col-md-3">
						<label class="font-weight-bold">Phone Number</label>
						<input class="form-control" type="text">
					</div>					
					<div class="col-md-3">
						<label class="font-weight-bold">Skype</label>
						<input class="form-control" type="text">
					</div>
				</div>
				<div class="form-row mb-5">
					<div class="col-md-3">
						<label class="font-weight-bold">Annual Gross *</label>
						<input class="form-control" type="text">
					</div>
					<div class="col-md-3">
						<label class="font-weight-bold">Annual Net *</label>
						<input class="form-control" type="text">
					</div>					
					<div class="col-md-3">
						<label class="font-weight-bold">USD</label>
						<select  class="form-control myselect-input">
							<option selected>$</option>
							<option value="USD">USD</option>
							<option value="EUR">EUR</option>
							<option value="GBP">GBP</option>							
						</select>
					</div>					
					<div class="col-md-3">
						<label class="font-weight-bold">Date Established</label>
						<input class="form-control" type="text">
					</div>
				</div>
				<div class="form-row mb-5">
					<div class="col-md-3">
						<label class="font-weight-bold">How did you find us? *</label>
						<select  class="form-control myselect-input">
							<option selected>Select</option>
							<option value="Buying">Article</option>
							<option value="Selling">Conference</option>
							<option value="General">Interview</option>							
							<option value="Buying">Podcast</option>
							<option value="Selling">Referral</option>
							<option value="General">Search</option>
							<option value="General">Social Media</option>
						</select>
					</div>
				</div>
				<div class="form-row mb-3">
					<div class="col-md-6 pt-4">
						<label class="font-weight-bold">Comments</label>
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