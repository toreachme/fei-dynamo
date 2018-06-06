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
				<a class="nav-link fc-link border-bottom-profile font-weight-bold" href="#">Recent Activity</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fc-link" href="#">Profile</a>
			</li>
		</ul>
	</div>
</div>





<!--Recent Activity Container fluid-->
<div class="container-fluid">
	<div class="mx-2 mt-4 mb-5 px-4 pb-5">
		<h1 class="font-weight-bold fs-49">Recent Activity</h1>
	</div>

	<div class="row flex-column my-3 py-3 px-3 mx-1">
		<div class="px-3" id="time">
			<h4 class="font-weight-bold">Today</h4>
		</div>
		<div class="my-3 px-3 fs-18" id="activity">
			<ul class="list-group list-group-flush">
				<li class="list-group-item py-4 px-0">You favorited <a href="#" class="fc-link">Best Poutine Company</a></li>
				<li class="list-group-item py-4 px-0">You favorited <a href="#" class="fc-link">Another Company</a></li>
				<li class="list-group-item py-4 px-0">Morbi leo risus</li>
			</ul>
		</div>
	</div>

	<div class="row flex-column my-3 py-3 px-3 mx-1">
		<div class="px-3" id="time">
			<h4 class="font-weight-bold">Yesterday</h4>
		</div>
		<div class="my-3 px-3 fs-18" id="activity">
			<ul class="list-group list-group-flush">
				<li class="list-group-item py-4 px-0">You favorited <a href="#" class="fc-link">Best Poutine Company</a></li>
				<li class="list-group-item py-4 px-0">You favorited <a href="#" class="fc-link">Another Company</a></li>
			</ul>
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