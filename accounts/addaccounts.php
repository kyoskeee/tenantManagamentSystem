<?php require_once("../Home-assets/header.php") ?>
<?php require_once("../Home-assets/sidebar.php") ?>
<?php require_once("../Home-assets/H-navbar.php") ?>
<!-- This Line is For Contents -> --> <?php require_once("../listContents/list-main.php") ?>
<main class="p-3 container-fluid vh-100">
  <!-- 1 -->
  <div class="title text-white">
    <h1> ADDING ACCOUNTS </h1>
  </div>

  <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3">
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Username</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
          <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"
            required>
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12 d-flex">
        <button type="submit" class="btn btn-primary">Save</button>
        <div class="back">
          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-light" type="button" href="../Home/accounts.php">Back</button>
          </div>
        </div>
    </form>
  </section>


  </div>






</main>
</div>
<?php require_once("../Home-assets/H-footer.php") ?>