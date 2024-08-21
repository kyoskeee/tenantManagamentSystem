<?php require_once("../Home-assets/header.php") ?>
<?php require_once("../Home-assets/sidebar.php") ?>
<?php require_once("../Home-assets/H-navbar.php") ?>
<!-- This Line is For Contents -> -->
<main class="p-3 container-fluid">

  <div class="title text-white">
    <h1>TENANTS </h1>
  </div>

  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">List of Tenants</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Filter
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">New</a></li>
              <li><a class="dropdown-item" href="#">Date</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Archive History</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <!-- table -->
  <div class="table-responsive-sm table-responsive-md">

    <table class="table table-success table-striped ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">FullName</th>
          <th scope="col">Contact</th>
          <th scope="col">Branch</th>
          <th scope="col">Room</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark Masipag</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>101</td>
          <td>In</td>
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Josep Gosepus</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>102</td>
          <td>Out</td>
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Gregor Magdangal</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>103</td>
          <td>In</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>jonathan Abu</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>104</td>
          <td>In</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Mark Toni</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>105</td>
          <td>Out</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Jin Jero</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>106</td>
          <td>Out</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Toy Bunite</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>201</td>
          <td>Out</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Hahey Huhoy</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>202</td>
          <td>Out</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Nore Metere</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>203</td>
          <td>In</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Loki Doki</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>204</td>
          <td>Out</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              Edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              Archive
            </button>
          </td>

        </tr>

        </tr>
      </tbody>

    </table>
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

<!-- Modals -->
<!-- Button trigger modal -->


<!-- Modal -->
<!-- edit -->
<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tenant Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Archive -->
<div class="modal fade" id="archive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Deleting Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-danger">Are you sure You want to delete?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<?php require_once("../Home-assets/H-footer.php") ?>