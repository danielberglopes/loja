<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\style.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body
    {
        background-color: #adb5bd7a;
    }
    .logo{
        height: 82px;
        width: 82px;
        border-radius: 17px;
    }
    .logopainel{height: 246px;

}
  </style>
  <body >

  
  <nav class="navbar navbar-expand-lg text-bg-success p-3">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img  src="https://tse1.mm.bing.net/th?id=OIP.3Jb-SfOaQElWqJzLn-PB-gHaHa&pid=Api&P=0&h=180" alt="" class="navbar-brand logo">
<!--  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button type="button" class="btn btn-primary btn-lg">Large </button>
      </form>
    </div> -->
  </div>
</nav>

</div>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://tse3.mm.bing.net/th?id=OIP.E8rR1-BUCOWIHpS78uukkAHaEK&pid=Api&P=0&h=180" class="d-block w-100 logopainel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="https://thypix.com/wp-content/uploads/2018/05/Sommerlandschaft-Bilder-30.jpg" class="d-block w-100 logopainel" alt="...">                       
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://thypix.com/wp-content/uploads/2018/05/Sommerlandschaft-Bilder-25.jpg" class="d-block w-100 logopainel logopainel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<main class="cards">
        <section class="card contact">
            <div class="icon">
                <img src="assets/Chat.png" alt="Contact us.">
            </div>
            <h3>Contact us.</h3>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            <button>Learn More</button>
        </section>
        <section class="card shop">
            <div class="icon">
                <img src="assets/Bag.png" alt="Shop here.">
            </div>
            <h3>Shop here.</h3>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            <button>Learn More</button>
        </section>
        <section class="card about">
            <div class="icon">
                <img src="assets/Play.png" alt="About us.">
            </div>
            <h3>About us.</h3>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            <button>Learn More</button>
        </section>

        <section class="card contact">
            <div class="icon">
                <img src="assets/Chat.png" alt="Contact us.">
            </div>
            <h3>Contact us.</h3>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            <button>Learn More</button>
        </section>

        <section class="card shop">
            <div class="icon">
                <img src="assets/Bag.png" alt="Shop here.">
            </div>
            <h3>Shop here.</h3>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            <button>Learn More</button>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>