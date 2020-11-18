<!-- New with bootstrap -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blood Donation Camp</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }

    .bg-danger {
        background-color: #fff2f2 !important;
    }

    .navbar-light .navbar-brand {
        color: #db4f4f;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #db4f4f;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        border-bottom: 2px solid #db4f4f;
        color: #db4f4f;
    }

    #bg-image {
        /* The image used */

        /* Add the blur effect *
  
  /* Full height */
        max-height: 30%;
        max-width: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .top-text {
        font-size: 50px;
        color: white;
        font-weight: bold;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }

    .card {
        margin: auto;
        min-height: 370px;
        border-color: #397FFF;
    }

    @media screen and (max-width:768px) {
        .top-text {
            font-size: 30px;
        }
    }
    </style>
</head>

<body>
    <?php require 'partials/_header.php';?>
    <?php require 'partials/_dbconnect.php';?>

    <h1 class="ongoing">Ongoing</h1>

    <div class="container my-3">
        <div class="row">
            <?php
            $sql = "SELECT * FROM `ongoing`";
            $result = mysqli_query($conn,$sql);
            $num = 1;
            while($row = mysqli_fetch_assoc($result)){
                // echo $row['category_name'];
              $id =  $row['ongoing_id'];
              $place = $row['event_place'];
              $event_info = $row['event_info'];

              // Use loop to iterate through categories
            echo '<div class="col-md-4 my-2">
                    <div class="card" style="width: 18rem; margin: auto;">
                      <img src="./images/card'.$num.'.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><a href="./eventlist.php?eventid='.$id.'">'.$place.'</a></h5>
                          <p class="card-text">'.substr($event_info, 0 ,90).'...</p>
                          <a href="./eventlist.php?eventid='.$id.'" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                  </div>';
                  $num+=1;
            }

          ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="upcomming">Upcomming</h1>

    <div class="container my-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>