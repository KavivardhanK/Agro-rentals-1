<?php
include 'server.php';
$success = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm'])) {
    $email = $_POST['email'];

    // 1. Update the rent count
    $sql = "UPDATE agro SET rent = rent + 1 WHERE email='$email'";
    mysqli_query($con, $sql);
    
    // 2. Check if the user exists to confirm success
    $sql = "SELECT * FROM agro WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $success = 1; // Added the missing semicolon here
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm Rent</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #head{
            
            color: rgb(47, 244, 106);
            h4{
                color: rgb(223, 239, 239);
            } 
        }
        .hvr:hover{
            padding: 5px 5px;
                background: rgb(52, 51, 51);
                color: rgb(10, 241, 37);
                 border: none;
                 transition: background 0.3s ease;
                 text-decoration: none;
                 border-radius: 25px;


        }
        body{
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
            url(truck-working-field-sunny-day.jpg);
            background-size: cover;
            min-height: 100vh;
            color: white;
        }

        .box{
            background: rgba(0,0,0,0.75);
            border-radius: 20px;
            padding: 30px;
            margin-top: 80px;
            box-shadow: 0 0 25px rgba(0,0,0,0.6);
        }

        input{
            border-radius: 10px;
        }

        img{
            border-radius: 15px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</script>
</head>

<body>
    <div id="head" class="my-3">
        <center><h1 class="bg-dark rounded-1 d-inline  px-3">AGRO RENTALS</h1>
        <h4 class="my-2">Emphasis on cost-saving for small farmers</h4><hr></center>
    </div>
   <div class="container-fluid bg-black rounded ps-10 ">
       <div class="row text-center">
           <div class="col mx-5 p-2 hvr">
               <a href="index.php
               " class="text-white text-decoration-none ">Home</a>
           </div>
           <div class="col mx-5 p-2 hvr">
               <a href="abt.php" class="text-white text-decoration-none">About</a>
           </div>
           <div class="col mx-5 p-2 hvr">
               <a href="spt.php" 
               class="text-white text-decoration-none"
                data-bs-toggle="offcanvas"
               data-bs-target="#demo"
                role="button">Support</a>
           </div>
           <div class="col mx-5 p-2 hvr">
               <a href="login.php" class="text-white text-decoration-none">Log In</a>
           </div>
       </div>
   </div>
   <div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title bg-white rounded p-3 text-primary">Support</h1>
    <button
      type="button"
      class="btn-close text-reset"
      data-bs-dismiss="offcanvas">
    </button>
  </div>

  <div class="offcanvas-body">
   <div class=" container-fluid bg-dark rounded text-white  p-3 my-3"> <p><a href="spt.php" class="hvr text-decoration-none text-white h4">Complaint</a></p>
    <hr><p><a href="spt.php" class="text-decoration-none hvr text-white h4">Feedback</a></p>
    </div><button class="btn btn-secondary  my-1 px-2"data-bs-toggle="offcanvas" type="button">Back</button>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 box text-center">

            <img src="ChatGPT 1 Image Feb 4, 2026, 10_57_24 PM.png" width="100%" height="280">

            <p class="mt-4">
                Reliable tractors harvesters and cultivator rentals for tilling, hauling, and soil preparation.
                Flexible pricing and well-maintained equipment.
            </p>

            <!-- FORM -->
            <form method="POST" class="mt-4">
                <input type="email" name="email" class="form-control mb-3"
                       placeholder="Enter your email" required>

                <button type="submit" name="confirm" class="btn btn-success px-5 me-3">
                    Confirm
                </button>

                <a href="index.php" class="btn btn-danger px-5">
                    Cancel
                </a>
            </form>

        </div>
    </div>
</div>
<?php
if($success){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Confirmed,</strong> You Will be contacted soon!.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Not registered,</strong> Kindy login and continue your request.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
 ?>


</body>
</html>
