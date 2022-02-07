<!-- header -->
<?php include "header.php"; ?>

<!-- bes_freelance_getmail -->
<?php include "bes_freelance_getmail.php"?>


<div style="background-color:black;font-size:120%">

<!-- BES Freelance Start-->
<p class="text-center text-bold "><b>______________________________________________________</b></p>
<div class="container-fluid text-light pt-2" id="bes_freelance">
    <span class="BF_span1">BES FREELANCE</span>

<div class="row">
 <div class="col-sm-6"><br>
<p>BES is offering a freelance job oppurtunity to BE /diploma in   electrical & architects . The complete details of the work will be shared on mail once you have registered to it. <br>
Also , training will be provided for the same in the course of time. <br>

For registration , Enter your details & submit.
We will try to revert you within 24 hours .</p> 


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="BES_form" onsubmit="return bes_freelance()"> 

  <div class="form-group">
    <input type="text" name="BES_name" id="BES_name" placeholder="Enter Your Name " class="form-control">
    <span id="BES_nameErr"></span>
  </div> 

  <div class="form-group">
    <input type="tel" name="BES_phone" id="BES_phone" placeholder="Phone" class="form-control">
    <span id="BES_phoneErr"></span>
  </div>


  <div class="form-group">
     <input type="email" name="BES_email" id="BES_email" placeholder="Email" class="form-control">
     <span id="BES_emailErr"></span>
  </div>


  <span  id="confirmation_BES"><?php echo  $confirmation_BES; ?></span>
  <span  id="confirmationnot_BES"><?php echo  $confirmationnot_BES; ?></span>

  <input type="submit" name="submit_BES" value="Submit" class=" mt-2">
  <br>
</form>

</div>
 
 <div class="col-sm-6">
      <img src="image/BES2.jpeg" alt="card" width="366px" class="d-block mx-auto" height="350px" id="BES2" ><br>

 </div>
</div>

</div>
<!-- BES Freelance end -->








<p class="text-center text-bold"><b>______________________________________________________</b></p>
<br>
</div>



<!-- footer -->
<?php include "footer.php"; ?>


<script>
  function bes_freelance(){

        // firstname
         var name=document.getElementById('BES_name').value;
        if(name=="" || name==null){
                document.getElementById('BES_nameErr').innerHTML="*Please Enter Your First Name ";
                return false;
        } 
        else if(name.length < 4 || name.length > 22 ){
                document.getElementById('BES_nameErr').innerHTML="*Character Should be 4 to 20 ";
                return false;
        }
        else if(/^[a-zA-Z ]+$/.test(name)==false){
                document.getElementById('BES_nameErr').innerHTML="*Only Letter Allowed ";
                return false;
        }else {
                document.getElementById("BES_nameErr").innerHTML="";
        }




        //number
        var  phone=document.getElementById('BES_phone').value;
        if(phone=="" || phone==null){
                document.getElementById('BES_phoneErr').innerHTML="*Please Enter Your Phone Number ";
                return false;
        }  else if(isNaN(phone)){
                document.getElementById('BES_phoneErr').innerHTML="*Please Enter Only Number";
                return false;
        }
        else if(phone.length!==10){
                document.getElementById('BES_phoneErr').innerHTML="*Please Enter 10 Digit Only";
                return false;
        }
         else {
                document.getElementById("BES_phoneErr").innerHTML="";
               
        }



        //email
        var  email=document.getElementById('BES_email').value;
        if(email=="" || email==null){
                document.getElementById('BES_emailErr').innerHTML="*Please Enter Your Email ";
                return false;
        }
        if((email.charAt(email.length-4)!==".") && (email.charAt(email.length-3)!==".")){
                document.getElementById('BES_emailErr').innerHTML="*Invalid Dot(.) Position";
                return false;
        }
         else {
                document.getElementById("BES_emailErr").innerHTML="";
               
        }
  }

</script>