<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Rentals</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</script>
    <link rel="stylesheet" href="st.css">
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
        
        
    </style>
 


</head>
<body bgcolor=#121212>
   
   
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

    <br>
    <div id="herodemo" class="carousel slide" data-bs-ride="carousel">

  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="truck-working-field-sunny-day.jpg" alt="Los Angeles" class="d-block w-100">
      <div class="carousel-caption">
    <h3>Big Deal</h3>
    <p>Just experiance them</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="truck-working-field-sunny-day (1).jpg" alt="Chicago" class="d-block w-100">
    <div class="carousel-caption">
    <h3>NOW AT 50% OFF!</h3>
    <p>Make your work easier</p>
  </div></div>
    <div class="carousel-item">
      <img src="pexels-jk04-2933243.jpg" alt="New York" class="d-block w-100">
    <div class="carousel-caption">
    <h3>Raw Powers!</h3>
    <p>At No Maintainance</p>
  </div></div>
  </div>

  
  <button class="carousel-control-prev" type="button" data-bs-target="#herodemo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#herodemo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
    
    <br><p ><h3 style="color: aliceblue;text-align: center;">A place where farmers can view and request agricultural equipment for rent instead of buying it.</h3></p>
    <br>
    
      
   <div class="product ">
        <div class="pdetails">
            <img src="Swaraj-Tractor-Transparent-File.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹2499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div>
    </div></div>
     
    <div class="product ">
        <div class="pdetails">
            <img src="pngwing.com.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹3499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    
    
    <div class="product ">
        <div class="pdetails">
            <img src="pngwing.com (2).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹2999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p> 

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div>
    </div>
     
    <div class="product ">
        <div class="pdetails">
            <img src="pngwing.com (1).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹2499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div>
    </div>
    
 
    <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="cultivator-agriculture-disc-harrow-machine-tractor-tractor-e7e5af0c77875cdf3fd50db8da48f084.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="agricultural-machinery-agriculture-disc-harrow-cultivator-farmer-india-7ee8c5219741bd00bc93accd7dfcf6ba.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹599/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
 <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="cultivator-tiller-tractor-agriculture-plough-tractor-0f638d99af536024a5d15506eed0602e.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹799/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngfind.com-tractor-png-758736.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
    <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="two-wheel-tractor-plough-international-harvester-cultivator-tractor-3cbd99f39b7bee2c511f7d4fad1e4a81.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹1499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngwing.com (3).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
    <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngwing.com (5).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹1199/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
    <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="lawn-mowers-husqvarna-group-zero-turn-mower-machine-jet-233bf107cd23008a146416167d50cd46.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹799/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
    <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngwing.com (6).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹4999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
    
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngwing.com (4).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹3999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="john-deere-india-pvt-ltd-combine-harvester-agriculture-wheat-fealds-1b3082583a8264d05ac6de7f7f9fb04b.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹3999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="5be1bf27118bf-8b760cd851745834e96630982ffc7474.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹2499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="caterpillar-inc-jcb-excavator-heavy-machinery-skid-steer-loader-excavator-b73ac31cec4d8c8f8de47153c3200d05.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹6999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="agricultural-machinery-sugarcane-harvester-combine-harvester-manufacturing-sugar-cane-334926440af639f7b0311a8d39131898.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹2899/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="india-crane-heavy-machinery-fn-fnx-agricultural-machinery-crane-85773e7fa407c7bdf8628c7d7f11b95c.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹3999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngwing.com (7).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="tool-insecticide-sprayer-agriculture-machine-firman-ff950588332035c08a589113fc12986a.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="machine-pt-firman-indonesia-alat-dan-mesin-pertanian-architectural-engineering-chainsaw-pt-kawasaki-motor-indonesia-f5aa4ac66088ad040ae313c0c35e90c8.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹699/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngfind.com-leaf-blower-png-6841583.png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹499/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>
     <div class="product" style="margin-top: 45px;">
        <div class="pdetails">
            <img src="pngwing.com (8).png" alt="tractor" height="200px" width="250px">
        <hr><div class="pinfo">
            <p class="rnt" style="color: rgb(8, 254, 0);display: inline;">₹999/day</p>
            <p class="sts" style="color: rgb(38, 149, 247); font-size: 20px;">Available</p>

        
         <p class="rntbtn" style="display: inline;"><a href="rent.php">Rent Now</a></p>
        </div></div></div>
    </div></div>





    <div class="footer py-2">
        <div class="fcont">
           <div class="rts py-2"><p style="color: aliceblue;">@All Rights Reserved | agrorentals</p>
            </div> 



            
           <div class="lst"><ul>
                <li>📍 Location: Erode, Tamil Nadu</li> 
<li>📞 Phone: +91 XXXXX XXXXX</li>
<li>📧 Email: agrorentals@gmail.com</li></div> 
            </ul>
        </div>

    </div>
 


</body>
</html>