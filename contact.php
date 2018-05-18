<!doctype html>
<html lang="en">
<?php require_once('./static/header.php');?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md text-black bg-white px-5 pt-4">
      <h1 class="font-weight-bold fs-49">Contact</h1>
      <p class="text-secondary w-75 fs-20">
        With conveniently located offices in London and Boston, FE International are well positioned for clients globally
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div>
        <div class="card m-5">
          <div class="p-3 bg-color text-white mycard-header">United States, headquaters</div>
          <div class="card-body">
            <div class="card-title mycard-title">Address:</div>
            <p class="card-text mycard-text">
              112 Water Street<br>
              Suite 500<br>
              Boston,<br>
              MA 02109
            </p>
            <div class="mycard-title my-4">Phone:</div>
            <p class="mycard-text my-3">(855) 483-3547</p>
            <p class="font-weight-bold fc-link float-right">Map<span>&nbsp</span><i class="fas fa-arrow-right"></i></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div>
        <div class="card m-5">
          <div class="p-3 bg-color text-white mycard-header">United Kingdom</div>
          <div class="card-body">
            <div class="card-title mycard-title">Address:</div>
            <p class="card-text mycard-text">
              Chester House<br>
              Studio 1.05<br>
              Kennington Park<br>
              1-3 Brixton Road<br>
              London, SW9 6DE
            </p>
            <div class="mycard-title my-4">Phone:</div>
            <p class="mycard-text my-3">+44 (0)203 176 4554</p>
            <p class="font-weight-bold fc-link float-right">Map<span>&nbsp</span><i class="fas fa-arrow-right"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md bg-light text-secondary p-5">
      <h4 class="font-weight-bold">Get in Touch</h4>

      <form>
        <div class="form-row mb-3">
          <div class="col-md-3">
            <label class="font-weight-bold">Your Name *</label>
            <input class="form-control" type="text">
          </div>
          <div class="col-md-3">
            <label class="font-weight-bold">Email *</label>
            <input class="form-control" type="email">
          </div>
          <div class="col-md-3">
            <label class="font-weight-bold">I have an enquiry about... *</label>
            <select  class="form-control myselect-input">
              <option selected>Choose...</option>
              <option value="Buying">Buying</option>
              <option value="Selling">Selling</option>
              <option value="General">General</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 pt-4">
            <label class="font-weight-bold">Further comments</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3 pt-4">
            <button type="submit" class="btn btn-success px-5">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="container-fluid bg-color sticky-footer">
  <footer class="py-4 text-white text-center">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex justify-content-between">
          <p class="font-weight-light">Follow us</p>
          <a href="#"><i class="fab fa-facebook-f fa-lg text-white"></i></a>
          <a href="#"><i class="fab fa-twitter fa-lg text-white"></i></a>
          <a href="#"><i class="fab fa-linkedin-in fa-lg text-white"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <img data-src="holder.js/180x102/industrial" class="img-fluid"/>
      </div>
      <div class="col-md-4">
        <div class="d-flex justify-content-between">
          <p class="font-weight-light">Policy</p>
          <p class="font-weight-light">Terms of Use</p>
          <p class="font-weight-light">Contact</p>
        </div>
      </div>
    </div>
  </footer>
</div>


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js"></script>

    </body>
    </html>
