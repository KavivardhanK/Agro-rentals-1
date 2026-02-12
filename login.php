<?php
include 'server.php';
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){

 $email=$_POST['email'];
 $password=$_POST['password'];
 $sql="SELECT * FROM agro WHERE email='$email'
 AND password='$password'";
 $result=mysqli_query($con,$sql);
 if($result){
 $num=mysqli_num_rows($result);
 if($num>0){

 $logged=1;
 session_start(); //no need to login again a session method is started with this function
 $_SESSION['email']=$email;
 header('location:index.php');
 }
 else{
 //echo "Invalid Data";

 $invalid=1;
 }
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AR Login</title>    
    <head>
        <link rel="stylesheet" type="style/css" href="st.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</script>

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
            
           
           background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(truck-working-field-sunny-day.jpg);
            height: 1000px;
         
            background-size: cover;
         
            background-repeat: no-repeat;
        }
            #h{
              
  border: 2px solid #22d3ee;
  box-shadow:
    0 0 5px #22ee70,
    0 0 15px #22ee4b,
    0 0 30px #22ee47;


                background-color:rgb(78, 80, 80);
                border:2px solid rgb(138, 223, 169) ;
                padding: 45px;
                display: inline-block;
                margin-top: 250px;
                border-radius: 20px;
                color: aliceblue;
               
            }
            body{
              background-color: rgb(248, 246, 246);
            }
          
        </style>
    </head>
<body>
<?php      
  if($invalid){
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error</strong> Invalid Credentials.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
  }
?>
 

    <?php
if($logged){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Congrats</strong> You are successfully Logged In.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
 ?>
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
<form action="" method="POST">
      
  <center>
    <div id="h" class="mx-1">

      <div class="mb-3 mt-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" required>
      </div><br>

      <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" required>
      <br>
        <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label></div><br>
      <div class="div"><p d-inline>Don't have an account?
       <a href="sgnupp.php"
       class="text-decoration-none text-danger  p-2 hvr">Sign up</a>
     </p> </div><br>

      <input type="submit" name="Log In" value="Log In" class="btn btn-primary">
       
      

    </div>
  </center>
</form>

</body>
</html>
