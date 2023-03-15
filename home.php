<?php include 'isloggedin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
</head>

<body class="container">
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg background-color">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">University Demo Website</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="login.php">Sign Out</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/61eed744ecb68.webp" width="100%" height="600px" class="d-block" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/61eed744ecb68.webp" width="100%" height="600px" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="features">
        <div class="card text-center">
            <div class="card-header">
                Seminars
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="features">
        <div class="card text-center">
            <div class="card-header">
                Academics
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="image/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="sticky-bottom">
        <ul class="nav justify-content-center background-color-middle-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Academics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Students Life</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Addmission</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Research</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News & Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
            </li>
        </ul>
    </div>





</body>

</html>