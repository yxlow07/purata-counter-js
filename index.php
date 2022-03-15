<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>Purata Calculator for CLHS students</title>
    <meta name="title" content="Purata Calculator for CLHS students">
    <meta name="description" content="Lazy of inputting everything into your calculator? Well you could do that here without a single click! Just input your results and leave the rest to us">

    <!-- Open Graph / Facebook / Discord-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://purata-counter-js.herokuapp.com/">
    <meta property="og:title" content="Purata Calculator for CLHS students">
    <meta property="og:description" content="Lazy of inputting everything into your calculator? Well you could do that here without a single click! Just input your results and leave the rest to us">
    <meta property="og:image" content="./assets/pics/home.png">
    <meta name="theme-color" content="#E0E0E0">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://purata-counter-js.herokuapp.com/">
    <meta property="twitter:title" content="Purata Calculator for CLHS students">
    <meta property="twitter:description" content="Lazy of inputting everything into your calculator? Well you could do that here without a single click! Just input your results and leave the rest to us">
    <meta property="twitter:image" content="./assets/pics/home.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/pics/favicon.ico" type="image/x-icon">
    <title>Purata Calculator</title>
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="container p-5">
        <div class="row align-content-start">
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
            <div class="col align-self-center col-sm-2">
                <div class="row m-2">
                    <div class="col outline-white">1</div>
                    <div class="col outline-white">2</div>
                    <div class="col outline-white">3</div>
                </div>
                <div class="row m-2">
                    <div class="col outline-white">4</div>
                    <div class="col outline-white">5</div>
                    <div class="col outline-white">6</div>
                </div>
                <div class="row m-2">
                    <div class="col outline-white">7</div>
                    <div class="col outline-white">8</div>
                    <div class="col outline-white">9</div>
                </div>
                <div class="row m-2">
                    <div class="col outline-white">&nbsp;</div>
                    <div class="col outline-white">0</div>
                    <div class="col outline-white">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="errorToast" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        Value should be 0 to 100
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="script.js"></script>
</body>
</html>