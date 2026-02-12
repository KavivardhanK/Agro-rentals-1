<?php
include 'server.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $feedback = $_POST['complaint'];

    $sql = "UPDATE agro SET complaint='$feedback' WHERE email='$email'";
    mysqli_query($con, $sql);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AG Support</title>
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
            url(blue-white-yellow-background.jpg);
            height: 900px;
            background-size: cover;
            background-repeat: no-repeat;
        }
        #h{
            box-shadow:
    0 0 5px #f7110d,
    0 0 15px #fb0e0e,
    0 0 30px #df1d0f;
            background-color: rgb(108, 110, 110);
            border: 2px solid rgb(235, 160, 139);
            padding: 25px;
            display: inline-block;
            margin-top: 150px;
            border-radius: 20px;
        }
        label{ color: white; }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
               <a href="erh" 
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
<form action="" method="POST">
    <center>
        <div id="h">
            <label>Email :</label>
            <input type="text" name="email" class="form-control" placeholder="Email" required>

            <h5 style="color: aliceblue;">Complaints :</h5>

            <textarea name="complaint" class="form-control" rows="10" cols="50" required placeholder="Complaint or feedback"></textarea><br><br>

            <button type="submit">Submit</button>
        </div>
    </center>
</form>
</body>
</html>
