<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mess Finders</title>
  <link rel="stylesheet" href="asset/bootstrap/bs.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--============= Nav start ====================-->
  <div class="container-fluid">
    <div class="container mt-3">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" ;>
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mess Finders</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="regi.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <select class="form-select text-center" aria-label="Default select example">
                <option selected>Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              <select class="form-select text-center" aria-label="Default select example">
                <option selected>Division</option>
                <option value="1">Dhaka</option>
                <option value="2">Chittagong</option>
                <option value="3">Rajshahi</option>
                <option value="4">Barishal</option>
                <option value="5">Khulna</option>
                <option value="6">Sylhet</option>
                <option value="7">Mymensingh</option>
                <option value="8">Rangpur</option>
              </select>
              <select class="form-select text-center" aria-label="Default select example">
                <option selected>District</option>
                <option value="1">Dhaka</option>
                <option value="2">Chittagong</option>
                <option value="3">Rajshahi</option>
                <option value="1">Barishal</option>
                <option value="2">Sylhet</option>
                <option value="3">Khulna</option>
                <option value="1">Rangpur</option>
                <option value="2">Mymensingh</option>
              </select>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Selete 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Dhaka</a></li>
                  <li><a class="dropdown-item" href="#">Chittagong</a></li>
                  <li><a class="dropdown-item" href="#">Rajshahi</a></li>
                  <li><a class="dropdown-item" href="#">Barishal</a></li>
                  <li><a class="dropdown-item" href="#">Sylhet </a></li>
                  <li><a class="dropdown-item" href="#">Khulna</a></li>
                  <li><a class="dropdown-item" href="#">Rangpur</a></li>
                  <li><a class="dropdown-item" href="#">Mymensingh</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </nav>
    </div>
  </div>
  <!--============= Nav End ====================-->
  <!--============= Main Card start ====================-->
  <div class="container-fluid">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        <div class="col">
          <div class="card h-100">
            <img src="image/card/Photo.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/card/Medilab.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/card/Hero.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--============= Main Card END ====================-->

  <!--============= Main two Card Strat ====================-->
  <div class="container-fluid">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <div class="col">
          <div class="card">
            <img src="image/card/Arsha.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/card/Gp.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/card/Hero.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/card/Yummy.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--============= Main two Card End ====================-->



  <!-- 
<div class="container-fluid">
  <div class="container">
    <div class="card col-6" style="width: 18rem;">
     <img src="image/card/Photo.webp" class="card-img-top" alt="...">
      <div class="card-body">
     <h5 class="card-title">Card title</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
   </div>
  </div>
  <div class="card" style="width: 18rem;">
     <img src="" class="card-img-top" alt="...">
      <div class="card-body">
     <h5 class="card-title">Card title</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
     <img src="" class="card-img-top" alt="...">
      <div class="card-body">
     <h5 class="card-title">Card title</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
     <img src="" class="card-img-top" alt="...">
      <div class="card-body">
     <h5 class="card-title">Card title</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div> -->

  <div class="container-fluid">
    <div class="container">
      <nav aria-label="...">
        <ul class="pagination  pagination-lg mt-3 justify-content-center">
          <li class="page-item disabled">
            <span class="page-link">Previous</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item" aria-current="page">
            <span class="page-link">2</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>



  <script src="asset/js/bs.min.js"></script>
</body>

</html>