<?php require_once("../Home-assets/header.php") ?>
<?php require_once("../Home-assets/sidebar.php") ?>
<?php require_once("../Home-assets/H-navbar.php") ?>
<!-- This Line is For Contents -> --> <?php require_once("../listContents/list-main.php") ?>
<main class="p-3">
  <!-- 1 -->
  <div class="title  text-white">
    <h1> NOTIFICATIONS </h1>
  </div>


  <div class="card bg-success text-white ">
    <h5 class="card-header">Payment</h5>
    <div class="card-body">
      <h5 class="card-title">Successful Payment!</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.
        This content is a little bit longer.</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view">
        View
      </button>
    </div>
  </div>

  <div class="card bg-danger text-white ">
    <h5 class="card-header">Facilities</h5>
    <div class="card-body">
      <h5 class="card-title">Maintenance is needed..</h5>
      <p class="card-text">!!!...</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view">
        View
      </button>
    </div>
  </div>

  <div class="card bg-warning text-white ">
    <h5 class="card-header">Remainders</h5>
    <div class="card-body">
      <h5 class="card-title">Tenants Rental Payment Due date in comming..</h5>
      <p class="card-text">Up Comming...</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view">
        View
      </button>
    </div>
  </div>

  <div class="card bg-info text-white ">
    <h5 class="card-header">New Application</h5>
    <div class="card-body">
      <h5 class="card-title">New Tenant is approaching</h5>
      <p class="card-text">Up Comming...</p>
      <!-- <a href="../facilities/rooms.php" class="btn btn-primary">View</a> -->

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view">
        View
      </button>



    </div>
  </div>

  <!-- Pagination -->
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>

  <!-- /pagination -->


</main>
</div>

<!-- Modal -->
<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Notification Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-dark">Message Here.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, numquam iste odio exercitationem fugiat, perferendis non id natus hic eos minima earum soluta? Recusandae perspiciatis laborum saepe architecto dolore quo?
        Molestias delectus doloribus odio, ratione nam quibusdam, nisi inventore repellat natus voluptate, quas placeat. Molestias quidem asperiores odio tempore est maiores sed fuga eos laborum, iusto nemo, temporibus, repudiandae error?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<?php require_once("../Home-assets/H-footer.php") ?>