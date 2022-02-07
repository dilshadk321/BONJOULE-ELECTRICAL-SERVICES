<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- css link -->
  <link rel="stylesheet" href="css/styles.css">
  
  <!-- fontAwsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
  <title>BONJOULE ELECTRICAL SERVICES</title>

   
</head>
<body>
  <div class="container-fluid" >
   <div class="row " id="company">
    <div class="col-sm-7 text-sm-center" id="brandName">
      <img src="image/brand1.png" alt="logo"  width="150px" height="70px"> 
      <p> BONJOULE ELECTRICAL SERVICES</p>
    </div>
  
      <div class="col-sm-4 pt-2">

      <div class="row">
        
      <div class="col-sm-7"  id="contactus">
      <h4 >Contact us:  </h4>
        <p><a href="tel:+91 9653 260 521"><i class="fas fa-phone-alt"></i>&nbsp +91 9653 260 521 </a>
        <br><a href="mailto:projects@bonjoule.co.in"><i class="fas fa-envelope"> </i>&nbsp projects@bonjoule.co.in</a></p>
      </div>

      <div class="col-sm-5"  id="time">
         <p id="timepara"></p>
      </div>



     </div>
    </div>
   </div>
  </div>

  
   <!-- header -->
<nav class="navbar navbar-expand-sm pb-3  navbar-dark" id="navbar" >
  <a class="navbar-brand" href="#"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse "  id="collapsibleNavbar">

  
	<ul class="navbar-nav text-center" style="color:red;" style="margin-left: auto;">
		<li class="nav-item "><a class="nav-link" href="home.php">Home</a></li>
	  <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>
		<li class="nav-item dropdown"><a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown" >Service</a>
        <div class="dropdown-menu text-center" id="dropdown" > 
         <a href="electrical_service.php" class="dropdown-item text-light">Electrical Service</a >
         <a href="interior_projects.php" class="dropdown-item text-light">Interior Projects</a>
         <a href="maintenance_and_repair.php" class="dropdown-item text-light">Maintenance & Repair </a>
         <a href="energy_audit_and_pms.php" class="dropdown-item text-light">Energy Audit & PMS</a>
         <a href="electrical_service_and_audit_training.php" class="dropdown-item text-light">Electrical Service / Audit Training</a>
       </div>
    </li>
    <li class="nav-item  dropdown"><a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown" >Gallery</a>
        <div class="dropdown-menu text-center" id="dropdown" > 
         <a href="photos.php" class="dropdown-item text-light">Photos</a >
         <a href="video.php" class="dropdown-item text-light">Videos</a>
       </div>
    </li>
		<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
    <li class="nav-item"><a class="nav-link" href="bes_freelance.php">BES Freelance</a></li>
      
	</ul>
 
	</div>
</nav> 



<button class="btn" id="send_enquiry"><a href="contact.php">SEND ENQUIRY</a></button>

<!-- header end -->

<script>

function timeDisplay(){
  var date=new Date();
  var h=date.getHours();
  var m=date.getMinutes();
  var s=date.getSeconds();
  var session="AM";
  
  if(h==0){
    h=12;
  }

  if(h>12){
    h=h-12;
    session="PM";
  }

  h=(h<10)? "0"+h : h;
  m=(m<10)? "0"+m : m;
  s=(s<10)? "0"+s : s;


  var time= h +" : "+m+" : "+s +" "+ session ;
  document.getElementById('timepara').innerText=time;
  document.getElementById('timepara').textContent=time;

  setTimeout(timeDisplay, 1000);
}
timeDisplay();


</script>