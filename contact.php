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
        <div class="card m-5 mycard-min-height">
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
            <p class="font-weight-bold fc-link mycursor float-right mt-2 mb-0" onclick="switch_nodes('loc-us','maptainer','block');">Map<span>&nbsp</span><i class="fas fa-arrow-right"></i></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div>
        <div class="card m-5 mycard-min-height">
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
            <div class="mycard-title my-2">Phone:</div>
            <p class="mycard-text my-3">+44 (0)203 176 4554</p>
            <p class="font-weight-bold fc-link mycursor float-right m-0" onclick="switch_nodes('loc-uk','maptainer','block');">Map<span>&nbsp</span><i class="fas fa-arrow-right"></i></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div>
        <div class="card m-5 mycard-min-height">
          <div class="p-3 bg-color text-white mycard-header">Singapore</div>
          <div class="card-body">
            <div class="card-title mycard-title">Address:</div>
            <p class="card-text mycard-text">
              71 Robinson Road<br>
              Singapore<br>
              068895
            </p>
            <div class="mycard-title my-4">Phone:</div>
            <p class="mycard-text my-4">(800)4039067</p>
            <p class="font-weight-bold fc-link mycursor float-right mt-4 mb-0" onclick="switch_nodes('loc-sg','maptainer','block');">Map<span>&nbsp</span><i class="fas fa-arrow-right"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md" id="maptainer">
      <div class="loc-us">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5896.534541903545!2d-71.05501!3d42.358143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e370869a87d745%3A0x17f6719e2f84bed3!2s112+Water+St+%23500%2C+Boston%2C+MA+02109!5e0!3m2!1sen!2sus!4v1527778903329" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="loc-uk hide-node">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9931.91235111693!2d-0.115874!3d51.513618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a64d8101d898960!2sAldwych+House!5e0!3m2!1sen!2slv!4v1527788579562" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="loc-sg hide-node">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7977.650703031553!2d103.848708!3d1.278315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da191241eefaa1%3A0x37b3e4cb3bce7ccd!2s71+Robinson+Rd%2C+Singapore+068895!5e0!3m2!1sen!2slv!4v1527781305927" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
      <script src="./js/onclick.js"></script>

    </body>
    </html>
