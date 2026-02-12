<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$registered = 0;
$userexists = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'server.php';

    $email   = $_POST['email'];
    $pass    = $_POST['password'];   // keep as-is
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    // FIXED: space before AND + correct variable
    $sql = "SELECT * FROM agro WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    }

    if (mysqli_num_rows($result) > 0) {
        $userexists = 1;
    } else {

        // FIXED: added complaint (empty) + correct variable
        // Added 'complaint' to the column list and '' to the values list
// Added 'complaint' and 'rent' to columns, and '' and '0' to values
$insert = "INSERT INTO agro (email, contact, password, address, complaint, rent)
           VALUES ('$email', '$contact', '$pass', '$address', '', '0')";
        if (mysqli_query($con, $insert)) {
            $registered = 1;
        } else {
            die(mysqli_error($con));
        }
    }
}
?>

<html>
    <head>
        <title>signup</title>
        <style>
          #head { color: rgb(47, 244, 106); }
#head h4 { color: white; }

        
        .hvr:hover{
            padding: 5px 5px;
                background: rgb(154, 150, 150);
                color: rgb(10, 241, 37);
                 border: none;
                 transition: background 0.3s ease;
                 text-decoration: none;
                 border-radius: 25px;


        }
          body{
           
           background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(jeremy-bishop-G9i_plbfDgk-unsplash.jpg);
            height: 1200px;
         
            background-size: cover;
         
            background-repeat: no-repeat;
        }
            #h{
              
             border: 2px solid #22d3ee;
  box-shadow:
    0 0 5px #22d3ee,
    0 0 15px #22d3ee,
    0 0 30px #22d3ee;


                background-color:rgb(143, 147, 147);
                border:2px solid rgb(108, 212, 212) ;
                padding: 25px;
                display: inline-block;
                margin-top: 170px;
                margin-bottom: 70px;
                border-radius: 20px;
            }
            body{
              height: 1500px;
              background-color: rgb(248, 246, 246);
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</script>
    </head>
<body>
    <?php if($userexists): ?>
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> User already exists.
  <button class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<?php if($registered): ?>
<div class="alert alert-success alert-dismissible fade show">
  <strong>Congrats!</strong> Registration successful.
  <button class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>
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


<form method="POST">
   <center><div id="h">
   
  <div class="mb-3 mt-3">
    <p class="bg-dark rounded text-danger">Signup</p>
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div><br>
  <div class="mb-3">
    <label for="passwords" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div><br>
<div class="mb-3">
  <label for="contact" class="form-label">Contact:</label>
  <input type="number" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
</div><br>
 <div class="mb-3 mt-3">
    <label for="address" class="form-label">Address:</label><br>
    <textarea name="address" rows="8" cols="40">
</textarea></div><br>
  <div class="form-check mb-3">
    
  <br><br>
  <input type="submit" value="Sign up" class="btn btn-primary"></div><br>
  <a href="index.php" class="text-decoration-none text-white ms-4 border-2 rounded p-1 bg-dark ">Home</a></center>
</div></form>
</body>
</html>