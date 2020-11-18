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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <title>Blood Donation Camp</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }
    body{
        background: #FF5F6D;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFC371, #FF5F6D);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFC371, #FF5F6D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



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
        font-size: 100px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
        font-family: 'Cinzel', serif;
        letter-spacing: 10px;
    }

    .card {
        margin: auto;
        min-height: 317px;
    }

    @media screen and (max-width: 978px) {
        .top-text {
            font-size: 70px;
            top: 40%;
        }
    }
    @media screen and (max-width: 741px) {
        .top-text {
            font-size: 50px;
            top: 40%;
        }
    }
    @media screen and (max-width: 598px) {
        .top-text {
            font-size: 30px;
            top: 30%;
        }
    }
    
    </style>
</head>

<body>
    <?php require 'partials/_header.php';?>


    <div><img id="bg-image" src="./images/pawel-czerwinski-XyeOs09XKCk-unsplash.jpg"></div>
    <div class="top-text">
        <p>WELCOME TO </p>
        <p>RED CHAMP</p>
        <h2>Blood Donation Camp</h2>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">“We make a living by what we get. We make a life by what we give.” –
                            Winston Churchill</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">“Your blood is replaceable. A life is not.”</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/obi-onyeador-PMnbMcJeftk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">“A drop of blood can save a life! Don’t waste it and donate blood.”</p>
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