
<html lang="en" >
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel = "stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>TrekkerTrackerTravels</title>

</head>
<body>
<header class = "headOut">
<?php
    include("headerOut.php")
?>
</header>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" >
    <div class="carousel-indicators">
        <button type="button" data-target="#carouselExampleInterval" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-target="#carouselExampleInterval" data-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-target="#carouselExampleInterval" data-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="5000">
            <img src="https://images.unsplash.com/photo-1600664248836-bdeeb2d2b77e?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="https://images.unsplash.com/photo-1697644297524-ee2e2e098f37?q=80&w=1763&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">

          </div>
        <div class="carousel-item" data-interval="5000">
            <img src="https://images.unsplash.com/photo-1615880480595-f5f9b4fb530e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">

        </div>
    </div>
</div>
<hr>
<p style="font-size: 60px; color: white; font-weight: bold; position:absolute; bottom: 280px; left: 40px">Discover Your Flight Experience</p>

<div style="width: 100vw; justify-content: center; position: absolute; border: 5px transparent solid; top: 76%; z-index: 1; backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.1);">

    <div style="display: flex; flex-direction: row">
        <div class="dropdowns">
        <p class = "labels4Plane">From</p>
            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Location
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cebu</a></li>
                <li><a class="dropdown-item" href="#">Manila</a></li>
                <li><a class="dropdown-item" href="#">Chicago</a></li>
                <li><a class="dropdown-item" href="#">Tacloban</a></li>
                <li><a class="dropdown-item" href="#">London</a></li>
                <li><a class="dropdown-item" href="#">Tokyo</a></li>
            </ul>
        </div>

    </div>
        <div class="dropdowns">
        <p class = "labels4Plane">To</p>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Arrival
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cebu</a></li>
                <li><a class="dropdown-item" href="#">Manila</a></li>
                <li><a class="dropdown-item" href="#">Chicago</a></li>
                <li><a class="dropdown-item" href="#">Tacloban</a></li>
                <li><a class="dropdown-item" href="#">London</a></li>
                <li><a class="dropdown-item" href="#">Tokyo</a></li>
            </ul>

        </div>
        </div>
        <div class="dropdowns">
        <p class = "labels4Plane">Departure</p>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Date
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>

        </div>
        <div class="dropdowns">

            <input name = "Return" type="checkbox"> <label for="Return" class = "labels4Plane">Return</label>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Add Dates
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        </div>

        <div class="dropdowns">
        <p class = "labels4Plane">Passengers</p>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Add Passengers
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
            <button style="bottom: 10px; position:absolute; right: 210px; width: 150px; height: 50px;border: 1px black solid; border-radius: 25px;">Search -> </button>
        </div>

    </div>
    <div style="display: flex; flex-direction: row; margin-left: 40px; margin-top: 40px">
        <p class = "labels4Plane">Filter: </p>
        <button class="filterBut">First Class</button>
        <button class="filterBut">Business Class</button>
        <button class="filterBut">Economy Class</button>
    </div>
</div>


<div class ="section1">
    <h1>Destinations To Go TO</h1>
    <img src="https://cdn.dribbble.com/userupload/12509456/file/original-a39fd72dbec559ebf98cdc389b6cce23.png?resize=752x">
</div>
</body>
<script src = "script.js"></script>
</html>