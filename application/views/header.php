<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Home</title>
</head>

<body>
    <div class="content-wrapper">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">SiPerak</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#Welcome/aspirasi" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Aspirasi</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <hr>
                                <div class="dropdown pb-4">
                                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                        <span class="d-none d-sm-inline mx-1">loser</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                        <li><a class="dropdown-item" href="#">New project...</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="card">
                <div class="row align-items-start">
                    <div class="col align-self-center"></div>
                </div>
            </div> -->
            <div class="container">
                <div class="row">
                    <div class="scene">
                        <div class="carousel">
                            <div class="carousel__cell">1</div>
                            <div class="carousel__cell">2</div>
                            <div class="carousel__cell">3</div>
                            <div class="carousel__cell">4</div>
                            <div class="carousel__cell">5</div>
                            <div class="carousel__cell">6</div>
                            <div class="carousel__cell">7</div>
                            <div class="carousel__cell">8</div>
                            <div class="carousel__cell">9</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="center">
                            <p style="text-align: center;">
                                <button class="previous-button">Previous</button>
                                <button class="next-button">Next</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var carousel = document.querySelector('.carousel');
        var cellCount = 9;
        var selectedIndex = 0;

        function rotateCarousel() {
            var angle = selectedIndex / cellCount * -360;
            carousel.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
        }

        var prevButton = document.querySelector('.previous-button');
        prevButton.addEventListener('click', function() {
            selectedIndex--;
            rotateCarousel();
        });

        var nextButton = document.querySelector('.next-button');
        nextButton.addEventListener('click', function() {
            selectedIndex++;
            rotateCarousel();
        });
    </script>
</body>

</html>