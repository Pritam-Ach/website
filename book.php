<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BookBites(books)</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./home.php">BookBites</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./book.php">Books</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <!--Books--->
    <div class="container marketing my-4">
    <div class="row">
    <div class="col-lg-4">
    <div class="card text-bg-danger mb-3">
                <img src="./photos/7.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Einsteiner</h5>
                    <h5 class="card-text">Vk Fourstone</h5>
                    <p class="card-text">One of the packs went flying into the center of the hall....</p>
                    <a href="./books/einstain.php" class="btn btn-primary">Continue Reading!</a>

                </div>
            </div>
    </div>

    <div class="col-lg-4">
    <div class="card text-bg-danger mb-3">
                <img src="./photos/7.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Metropolish</h5>
                    <h5 class="card-text">Thea Von Harbou</h5>
                    <p class="card-text">Now the rumbling of the great organ swelled to a roar,
ing, like a rising giant...</p>
                    <a href="./books/metropolish.php" class="btn btn-primary">Continue Reading!</a>

                </div>
            </div>
    </div>

    <div class="col-lg-4">
    <div class="card text-bg-danger mb-3">
                <img src="./photos/7.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Shadows</h5>
                    <h5 class="card-text">Alex North</h5>
                    <p class="card-text">t was my mother who took me to the police station.

The officers...</p>
                    <a href="./books/shadow.php" class="btn btn-primary">Continue Reading!</a>

                </div>
            </div>
    </div>

   


       
    </div>
    </div>


    <!---second row of books---->
    <div class="container marketing my-4">
    <div class="row">
    <div class="col-lg-4">
    <div class="card text-bg-danger mb-3">
                <img src="./photos/7.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <h5 class="card-text">Author</h5>
                    <p class="card-text">More Books Are comming....</p>
                    <a href="#" class="btn btn-primary">Continue Reading!</a>

                </div>
            </div>
    </div>

   

   


       
    </div>
    </div>



































            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!---footer-->
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-body-secondary">Online Ebook Center,2023</p>

                    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
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
</body>

</html>