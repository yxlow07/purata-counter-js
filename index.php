<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>Purata Calculator</title>
    <meta name="title" content="Purata Calculator for CLHS students">
    <meta name="description" content="Lazy of inputting everything into your calculator? Well you could do that here without a single click! Just input your results and leave the rest to us">

    <!-- Open Graph / Facebook / Discord-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://purata-counter-js.herokuapp.com/">
    <meta property="og:title" content="Purata Calculator for CLHS students">
    <meta property="og:description" content="Lazy of inputting everything into your calculator? Well you could do that here without a single click! Just input your results and leave the rest to us">
    <meta property="og:image" content="https://purata-counter-js.herokuapp.com/assets/pics/home.png">
    <meta name="theme-color" content="#E0E0E0">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://purata-counter-js.herokuapp.com/">
    <meta property="twitter:title" content="Purata Calculator for CLHS students">
    <meta property="twitter:description" content="Lazy of inputting everything into your calculator? Well you could do that here without a single click! Just input your results and leave the rest to us">
    <meta property="twitter:image" content="https://purata-counter-js.herokuapp.com/assets/pics/home.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/pics/favicon.ico" type="image/x-icon">
    <title>Purata Calculator</title>
</head>
<body class="h-100 text-center text-white bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="text-black fw-bolder d-flex">
                <img src="./assets/pics/favicon.ico" alt="Icon" width="30px" class="d-inline-block align-text-top">
                Purata Calculator
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-3 fw-bolder">
                    <a class="nav-link" aria-current="page" href="credits.php">Credits</a>
                    <a class="nav-link" href="https://github.com/yxlow07/purata-counter-js" target="_blank">Source</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container p-5">
        <div class="main row align-content-start">
            <div class="col">
                <div class="align-content-md-center mb-3 text-capitalize fw-bolder text-wrap fs-3">
                <span class="badge btn-success btn" id="purata-badge">Your Purata: <span id="purata"></span> </span>
            </div>
                <table class="table table-dark table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Subject</th>
                        <th scope="col">Pemberat</th>
                        <th scope="col">Your marks</th>
                    </tr>
                </thead>
                <tbody id="tbody"></tbody>
            </table>
            </div>
            <div class="col align-self-center col-sm-2 keypad">
                <div class="row m-2">
                    <div id="1" class="col outline-white">1</div>
                    <div id="2" class="col outline-white">2</div>
                    <div id="3" class="col outline-white">3</div>
                </div>
                <div class="row m-2">
                    <div id="4" class="col outline-white">4</div>
                    <div id="5" class="col outline-white">5</div>
                    <div id="6" class="col outline-white">6</div>
                </div>
                <div class="row m-2">
                    <div id="7" class="col outline-white">7</div>
                    <div id="8" class="col outline-white">8</div>
                    <div id="9" class="col outline-white">9</div>
                </div>
                <div class="row m-2">
                    <div id="-" class="col outline-white">&nbsp;</div>
                    <div id="0" class="col outline-white">0</div>
                    <div id="<-" class="col outline-white"><i class="bi bi-arrow-return-left"></i></div>
                </div>
            </div>
        </div>
        <div class="err"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="script.js"></script>
</body>
</html>