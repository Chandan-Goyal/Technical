<!DOCTYPE html>

<html lang="en">

 

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<style>

    .card1 {

        width: 70%;

        margin: 7% 15%;

        padding: 32px;

    }

 

    .bttn {

        border-radius: 50px;

        width: 110px;

        border: 1px solid transparent;

        height: 50px;

        margin: 0 40%;

        color: white;

        font-weight: 700;

    }

</style>

 

<body>

 

    <header>

        <nav class="navbar bg-primary" data-bs-theme="dark">

 

            <div class="container-fluid">

                <a class="navbar-brand" href="#">Navbar scroll</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"

                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarScroll">

                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="#">Home</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#">Link</a>

                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"

                                aria-expanded="false">

                                Link

                            </a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">Action</a></li>

                                <li><a class="dropdown-item" href="#">Another action</a></li>

                                <li>

                                    <hr class="dropdown-divider">

                                </li>

                                <li><a class="dropdown-item" href="#">Something else here</a></li>

                            </ul>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link disabled" aria-disabled="true">Link</a>

                        </li>

                    </ul>

                    <form class="d-flex" role="search">

                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                        <button class="btn btn-outline-success" type="submit">Search</button>

                    </form>

                </div>

            </div>

        </nav>

 

    </header>

 

    <main>

        <div class="card card1">

            <form method="post" action="proj_2.php">

                <div class="row mb-4">

                    <div class="col">

                        <div class="form-outline">

                            <label class="form-label" for="form6Example1">First name</label>

                            <input type="text" name="first" class="form-control" />

                        </div>

                    </div>

                    <div class="col">

                        <div class="form-outline">

                            <label class="form-label" for="form6Example2">Last name</label>

                            <input type="text" name="last" class="form-control" />

                        </div>

                    </div>

                </div>

 

                <div class="form-outline mb-4">

                    <label class="form-label" for="form6Example4">Address</label>

                    <input type="text" name="address" class="form-control" />

                </div>

 

                <div class="form-outline mb-4">

                    <label class="form-label" for="form6Example6">Pincode</label>

                    <input type="number" name="pincode" class="form-control" />

                </div>

 

                <div class="form-outline mb-4">

                    <label class="form-label" for="form6Example6">Phone</label>

                    <input type="number" name="phone" class="form-control" />

                </div>

 

                <button type="submit" class="bg-info bttn" name="submit">Submit</button>

            </form>

        </div>

    </main>

</body>

 

</html>

<?php

 

$conn = mysqli_connect("localhost", "root", 'Welcome@123', 'Maheshdb') or die();

 

if (isset($_POST['submit'])) {

    $fname = $_POST['first'];

    $lname = $_POST['last'];

    $address = $_POST['address'];

    $phone = $_POST['phone'];

    $pincode = $_POST['pincode'];

 

    $query = mysqli_query($conn, "Insert into proj2 values('$fname','$lname','$address',$pincode,$phone)");

 

    if ($query) {

        echo "Inserted Data Successful";

    } else {

        echo "Error Occurred";

    }

}

 

 

?>

