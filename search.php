<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>search</title>

    <link rel="stylesheet" href="index.html">
    <!-- styles-->
      <link rel="stylesheet" href="css/styles.css">
    <!-- about -->
    <link rel="stylesheet" href="about.html">
    <!-- google fonts -->


    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- bootstrap css and js -->
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  </head>


  <body>

    <section class="Home">


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="C:\Users\dani9\Desktop\Web Development\Biodb\images\biodb logo.jpg" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="C:\Users\dani9\Desktop\Web Development\Biodb\search">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- <section class="search"> -->

<div class="search-div">
  <h1>Search</h1>
    <div class="container-fluid" >
      <form class="d-flex search-box" action="code.php" method="POST">
        <input name="name" class="form-control me-2 search-box" type="search" placeholder="Uniprot ID or Gene Name" aria-label="Search">
        <button class="search-button" type="submit" name="submit" value="submit">Search</button>
      </form>
    </div>
  </div>

<!--
    <div class="input-group mb-3">
      <input type="text" class="form-control search-box" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button">Button</button>
      </div>
    </div> -->

    <div class="about col-lg-4 col-md-6">
      <i class="icon-db fas fa-solid fa-circle"></i>
    </div>


<footer>
  <button type="button" class="btn btn-secondary button-footer">In Association with VIT</button>
</footer>



</body>
</html>
