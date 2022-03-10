<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Purata Calculator</title>
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="container p-5">
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