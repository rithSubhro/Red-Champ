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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
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
    .display-1{
        text-align: center;
        padding: 5px;
        margin: 66px;
        font-family: 'Cinzel', serif;
    }
    </style>
</head>

<body>
    <?php require 'partials/_header.php';?>
    <?php require 'partials/_dbconnect.php';?>

    <h1 class="display-1">Prestigious Donor List</h1>



    <?php
        echo'<table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Event Participated in</th>
          </tr>
        </thead>
        <tbody>';
    ?>

    <?php
        $sql="SELECT * FROM `event_form_handler`";
        $result = mysqli_query($conn,$sql);
        $num=1;
        while($row = mysqli_fetch_assoc($result)){
            $name=$row['name'];
            $blood_grp=$row['blood_group'];
            $id2=$row['event_id'];
            $sql2="SELECT * FROM `ongoing` WHERE ongoing_id=$id2";
            $result2= mysqli_query($conn,$sql2);
            $row2= mysqli_fetch_assoc($result2);
            $event_place=$row2['event_place'];

            echo '

            
              <tr>
                <th scope="row">'.$num.'</th>
                <td>'.$name.'</td>
                <td>'.$blood_grp.'</td>
                <td>'.$event_place.'</td>
              </tr>
            
            ';
            $num+=1;
        }
    ?>
    <?php
        echo '</tbody>
        </table>';
    ?>



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