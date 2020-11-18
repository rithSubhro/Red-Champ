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

    body {
        background: #FF5F6D;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFC371, #FF5F6D);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFC371, #FF5F6D);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



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

    .jumbotron {
        background-image: url('images/photo-1602003812168-5c2219ab5ac6.jpg');
    }

    .jumbotron h1,
    .lead {
        color: black;
    }

    ul {
        list-style: none;
    }

    .ul-heading {
        margin-top: 20px;
        padding: 20px;
    }

    .ul-list {
        margin: 0px;
        padding: 20px;
    }
    </style>
</head>

<body>
    <?php require 'partials/_header.php';?>
    <?php require 'partials/_dbconnect.php';?>

    <?php
      $id=$_GET['eventid'];
      //echo $id;
      $sql = "SELECT * FROM `ongoing` WHERE ongoing_id=$id";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
          $place = $row['event_place'];
          $event_info = $row['event_info'];

      }
    ?>

    <!--Place description starts here-->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $place; ?></h1>
            <p class="lead"><?php echo $event_info; ?></p>
            <hr class="my-4">
            <p>
                <a class="btn btn-success btn-lg" data-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">You are Invited</a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body" style="background-color: #fff2f2;">
                    "Give me Blood I will give you Freedom"- Netaji Subhash Chandra Bose(Freedom Fighter)
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5" style="background-color: #fff2f2;">
        <h1 class="ul-heading">Some Important points</h1>
        <ul class="ul-list">
            <li>*One must be over 17 years of age to donate blood.</li>
            <li>*One must not have any medical blood related condition.</li>
            <li>*This event is overviewed by Beleghata ID hospital.</li>
            <li>*Our chief guest is our honorable Chief minister Miss Mamata Banerjee.</li>
            <li>*Please come and make this event a successful one.</li>
        </ul>
    </div>

    <?php

        $showAlert= false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            //Insert thread into db
            $name = $_POST['nam'];
            $age = $_POST['age'];
            $res=17-$age;
            if($age<17){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> You are not eligible for blood donation,come back after '.$res.'years
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                 </div>';
            }
            else{
                $blood_group = $_POST['blood-groups'];
                $sex = $_POST['sex'];
                $sql = "INSERT INTO `event_form_handler` (`name`, `age`, `blood_group`, `sex`, `event_id`) VALUES ('$name', '$age', '$blood_group', '$sex', '$id')";
                $result = mysqli_query($conn,$sql);
                $showAlert=true;
            }

        }
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your registration for the '.$place.' event has been completed.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                 </div>';
        }

    ?>

    <div class="container my-3">
        <?php
            echo '<div class="container">
            <h1>Please fill this Form</h1>
            <form action='. $_SERVER["REQUEST_URI"].' method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" class="form-control" id="nam" name="nam" aria-describedby="emailHelp" placeholder="write your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">AGE</label>
                    <input type="text" class="form-control" id="age" name="age" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                   <label for="exampleFormControlSelect1">BLOOD GROUP</label>
                   <select class="form-control" id="blood-groups"  name="blood-groups">
                   <option>A+</option>
                   <option>A-</option>
                   <option>A1+</option>
                   <option>A1-</option>
                   <option>A1B+</option>
                   <option>A1B-</option>
                   <option>A2+</option>
                   <option>A2-</option>
                   <option>A2B+</option>
                   <option>A2B-</option>
                   <option>AB+</option>
                   <option>AB-</option>
                   <option>B+</option>
                   <option>B-</option>
                   <option>O+</option>
                   <option>O-</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">SEX</label>
                    <select class="form-control" id="sex" name="sex">
                        <option>M</option>
                        <option>F</option>
                        <option>Others</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>';
        ?>
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