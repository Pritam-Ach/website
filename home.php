<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BookBites(home)</title>
</head>

<body>
    <!----navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./home.php">BookBites</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./book.php">Books</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Information
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./about.php">About</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="./contact.php">Contact</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./support.php">Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!----dissmissin bar removeable-->
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Hola, bienvenido al Centro de libros electrónicos en línea!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<!----dissmissin bar -->
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    Check Out book section!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>



    <!----carousal-->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1400x700/?book" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x700/?quote" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x700/?motivation" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!----custom-->
    <div class="container marketing my-4">

        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="photos/9.jpg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <h2 class="fw-bold">William Shakespeare.</h2>
                <h6 class="fw-bold">British Playwrite</h6>
                <p>“A beggar's book out-worths a noble's blood.” </p>

            </div>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="photos/8.jpg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <h2 class="fw-bold">Jane Austen</h2>
                <h6 class="fw-bold">Novelist</h6>
                <p>“I declare after all there is no enjoyment like reading! How much sooner one tires of any thing than of a book! When I have a house of my own, I shall be miserable if I have not an excellent library.” </p>

            </div>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="photos/11.jpg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <h2 class="fw-bold">T.S Eliot</h2>
                <h6 class="fw-bold">Poet</h6>
                <p>“We read many books, because we cannot know enough people.” </p>

            </div>
            </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="photos/1.jpg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <h2 class="fw-bold">Ronald Dahl</h2>
                <h6 class="fw-bold">British writer and poet</h6>
                <p>“If you are going to get anywhere in life you have to read a lot of books.” </p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="photos/2.jpg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <h2 class="fw-bold">Mary McCleod Bethune</h2>
                <h6 class="fw-bold">American educator</h6>
                <p>“The whole world opened up to me when I learned to read”</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="photos/3.jpg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <h2 class="fw-bold">Groucho Marx</h2>
                <h6 class="fw-bold">American comedian</h6>
                <p>“I find television very educating. Every time somebody turns on the set, I go into the other room and
                    read a book.” </p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette my-4">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-bold lh-1">Why Should we read books? <span
                        class="text-body-secondary"></span></h2>
                <p class="lead fw-bold">Reading is good for you because it improves your focus, memory, empathy, and
                    communication skills. It can reduce stress, improve your mental health, and help you live longer.
                    Reading also allows you to learn new things to help you succeed in your work and relationships.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img " width="350" height="350" src="photos/5.webp">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-bold lh-1">Necessity of Reading!! <span class="text-body-secondary">See
                        for yourself.</span></h2>
                <p class="lead fw-bold">Reading is important because it makes you more empathetic, and knowledgeable and
                    stimulates your imagination. A study conducted by the University of Sussex showed that reading
                    reduces stress by 68%. It helps in reducing tension and relax muscles which in turn helps people
                    sleep better and stay healthy.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img " width="350" height="350" src="photos/6.webp">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-bold lh-1">Why just Books?? </h2>
                <p class="lead fw-bold">They are the best solutions to every problem that comes our way. Reading various
                    books
                    helps change the way we look at the world and develop a positive attitude towards life.</p>
            </div>
            <div class="col-md-3">
                <img class="bd-placeholder-img " width="350" height="350" src="photos/7.webp">

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div>

    <!---footer-->
    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">Online Ebook Center,2023</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="./home.php" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="./book.php" class="nav-link px-2 text-body-secondary">Books</a></li>
      <li class="nav-item"><a href="./contact.php" class="nav-link px-2 text-body-secondary">Contact</a></li>
      <li class="nav-item"><a href="./support.php" class="nav-link px-2 text-body-secondary">Support</a></li>
      <li class="nav-item"><a href="./about.php" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>