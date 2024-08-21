<?php require_once("../Home-assets/header.php") ?>
<?php require_once("../Home-assets/sidebar.php") ?>
<?php require_once("../Home-assets/H-navbar.php") ?>
<!-- This Line is For Contents -> --> <?php require_once("../listContents/list-main.php") ?>
<main class="p-3 ">
  <!-- 1 -->
  <div class="title text-white">
    <h1>ACCOUNTS </h1>
  </div>


  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">List of Accounts</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li> -->
          <li class="nav-item">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
              add
            </button>
          </li>
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


  <div class="table-responsive-sm table-responsive-md">
    <table class="table table-success table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">FullName</th>
          <th scope="col">Contact</th>
          <th scope="col">Branch</th>
          <th scope="col">Room</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>101</td>

          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Josep Gosepus</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>102</td>
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
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
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Loki Doki</td>
          <td>09546842361</td>
          <td>CSJDM</td>
          <td>204</td>
          <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
              edit
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archive">
              archive
            </button>
          </td>
        </tr>

        </tr>
      </tbody>

    </table>
  </div>








</main>
</div>




<!-- Button trigger modal -->

<!-- add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Adding New</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="title text-white">
          <h1> ADDING ACCOUNTS </h1>
        </div>

        <section class="container my-2 bg-dark w-100 text-light p-2">
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
                <input type="text" class="form-control" id="validationDefaultUsername"
                  aria-describedby="inputGroupPrepend2" required>
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
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editing Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Data present here</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- archive -->
<div class="modal fade" id="archive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-danger">Are you sure you want to delete this data?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
<?php require_once("../Home-assets/H-footer.php") ?>