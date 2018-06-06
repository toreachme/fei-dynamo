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
				<a class="nav-link fc-link" href="#">Selling</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Recent Activity</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link border-bottom-profile font-weight-bold" href="#">Profile</a>
			</li>
		</ul>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md text-black bg-white px-5 pt-2">
			<h1 class="font-weight-bold fs-49">My Profile</h1>
		</div>
	</div>
</div>



<!--Get a Valuation container-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md p-5">
			<form>
				<div class="py-5 border-bottom">
					<h4 class="font-weight-bold mb-5">Contact Information</h4>
					<div class="form-row mb-5">
						<div class="col-md-3">
							<label class="font-weight-bold">Your Name *</label>
							<input class="form-control" type="text">
						</div>
						<div class="col-md-3">
							<label class="font-weight-bold">Email *</label>
							<input class="form-control" type="email">
						</div>					
						<div class="col-md-3">
							<label class="font-weight-bold">Phone *</label>
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="form-row mb-5">
						<div class="col-md-3">
							<label class="font-weight-bold">Address *</label>
							<input class="form-control" type="text">
						</div>
						<div class="col-md-3">
							<label class="font-weight-bold">LCity *</label>
							<input class="form-control" type="text">
						</div>					
						<div class="col-md-3">
							<label class="font-weight-bold">State *</label>
							<input class="form-control" type="text">
						</div>					
						<div class="col-md-3">
							<label class="font-weight-bold">Zip Code *</label>
							<input class="form-control" type="text">
						</div>
					</div>
				</div>	

                <!--
                	***
                	Buying Preferences
                	***
                -->
                <div class="py-5 border-bottom">
                	<h4 class="font-weight-bold mb-5">Buying Preferences</h4>
                	<div class="form-row mb-5">
                		<div class="col-md-3">
                			<label class="font-weight-bold">Cash Available *</label>
                			<input class="form-control" type="number" placeholder="$0">
                		</div>
                		<div class="col-md-3">
                			<label class="font-weight-bold">Time Horizon *</label>
                			<input class="form-control" type="email">
                		</div>					
                		<div class="col-md-6">
                			<label class="font-weight-bold">Business Models Interested In *</label>
                			<select  class="form-control myselect-input">
                				<option selected>Select...</option>
                				<option value="Buying">SaaS</option>
                				<option value="Selling">eCommerce</option>
                				<option value="General">3PL</option>							
                				<option value="Buying">Direct (Traditional)</option>
                				<option value="Selling">FBA</option>
                				<option value="General">Content</option>
                			</select>
                		</div>
                	</div>
                	<div class="form-row mb-5">
                		<div class="col-md-3">
                			<label class="font-weight-bold">First Time Buyer *</label>
                			<input class="form-control" type="text">
                		</div>
                		<div class="col-md-3">
                			<label class="font-weight-bold">Looking to Use an SBA Loan? *</label>
                			<select  class="form-control myselect-input">
                				<option selected>Choose...</option>
                				<option value="Buying">No</option>
                				<option value="Selling">Yes</option>
                				<option value="General">Yes - Pre-Qualified</option>							
                			</select>
                		</div>					
                		<div class="col-md-3">
                			<label class="font-weight-bold">Your Available Resources *</label>
                			<select  class="form-control myselect-input">
                				<option selected>Select...</option>
                				<option value="Buying">SaaS</option>
                				<option value="Selling">eCommerce</option>
                				<option value="General">3PL</option>							
                				<option value="Buying">Direct (Traditional)</option>
                				<option value="Selling">FBA</option>
                				<option value="General">Content</option>
                			</select>
                		</div>					
                	</div>
                </div>

                
                <!--Your Requirements-->
                <div class="py-5">
                	<h4 class="font-weight-bold mb-5">Your Direct (Traditional) Requirements</h4>
                	<div class="form-row mb-5">
                		<div class="col-md-6">
                			<label class="font-weight-bold">Budget Range *</label>
                			<input class="form-control" type="number" placeholder="$0">
                		</div>					
                		<div class="col-md-6">
                			<label class="font-weight-bold">Direct (Traditional) Niches *</label>
                			<select  class="form-control myselect-input">
                				<option selected>Select...</option>
                				<option value="Buying">SaaS</option>
                				<option value="Selling">eCommerce</option>
                				<option value="General">3PL</option>							
                				<option value="Buying">Direct (Traditional)</option>
                				<option value="Selling">FBA</option>
                				<option value="General">Content</option>
                			</select>
                		</div>
                	</div>
                	<div class="row">
                		<h4 class="font-weight-bold mb-4">Your Direct (Traditional) Requirements</h4>
                	</div>
                	<div class="row">
                		<div class="col-md bg-top-grey fc-dark-grey py-4 px-5 mb-4">
                			<p class="fs-18 m-0"><span><i class="fas fa-exclamation"></i></span> You have 25 'priority points' to allocate, you can allocate no more than 10 points to any one priority.</p>
                		</div>
                	</div>
                	<div class="form-row mb-5">
                		<div class="col-md-3">
                			<label class="font-weight-bold">Growth</label>
                			<input class="form-control" type="text">
                		</div>                		
                		<div class="col-md-3">
                			<label class="font-weight-bold">Age</label>
                			<input class="form-control" type="text">
                		</div>                		
                		<div class="col-md-3">
                			<label class="font-weight-bold">Low Owner Input</label>
                			<input class="form-control" type="text">
                		</div>                		
                		<div class="col-md-3">
                			<label class="font-weight-bold">Stability</label>
                			<input class="form-control" type="text">
                		</div>                		
                		<div class="col-md-3 mt-5">
                			<label class="font-weight-bold">High Margin</label>
                			<input class="form-control" type="text">
                		</div>					
                	</div>
                </div>



                <div class="form-row">
                	<div class="col-md-3">
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