<!-- header -->
<?php include "header.php"?>

<!-- contact_getmail -->
<?php include "contact_getmail.php"?>



<!-- contact start -->
<div class="container-fluid " style="background:url(image/contact_us_bg2.jpeg) no-repeat top left;background-size: 100% 100%;padding-bottom:100px;padding-top:40px ">
<div class="row container">
  

  <!-- col1_start -->
  <div class="col-sm-4 " id="contact_us_col1">
  <br>
      <p><a href="tel:+919653260521"><strong><i class="fas fa-phone-square-alt"></i>&nbsp +91 9653 260 521</strong></a></p><br>
      <p><a href="mailto:projects@bonjoule.co.in"><strong><i class="fas fa-envelope"></i>&nbsp projects@bonjoule.co.in</strong></a></p><br>
      <p><strong><i class="fas fa-map-marker-check"></i>&nbsp Located in vidyavihar(W), Mumbai 86,Maharashtra.</strong></p><br>
      <p><strong><i class="fas fa-clock"></i>&nbsp Mon - Sat , 9:00am to 7:00pm</strong></p>
    
  </div>
  <!-- col1_end -->

   

  <!-- col2_start -->
  <div class="col-sm-8" id="contact_us_col2">

  <h2 class="text-center bt-2"><b>ENQUIRY</b></h2>
     <form method="POST" action="#" onsubmit="return contact_us()">
         <div class="row">
         
          <div class="col-sm-6 form-group">
                 <input type="text" name="contact_us_fname"  id="contact_us_fname" class="form-control" placeholder="First Name">
                 <span id="fnameErr"></span>
          </div>
          <div class="col-sm-6 form-group">
                  <input type="text" name="contact_us_lname"  id="contact_us_lname" class="form-control" placeholder="Last Name">
                  <span id="lnameErr"></span>
          </div>

         </div>

         <div class="row">
         
         <div class="col-sm-6 form-group">
                 <input type="text" name="contact_us_phone"  id="contact_us_phone" class="form-control" placeholder="Phone">
                 <span id="phoneErr"></span>
         </div>
         <div class="col-sm-6 form-group ">
                 <input type="email" name="contact_us_email"  id="contact_us_email" class="form-control" placeholder="Email">
                 <span id="emailErr"></span>
         </div>
        </div>

        <div class="form-group">
            <textarea name="description" id="description"  rows="6" placeholder="Description" class="form-control"></textarea>
            <span id="descriptionErr"></span>
        </div>

       <span  id="confirmation"><?php echo  $confirmation; ?></span>
       <span  id="confirmationnot"><?php echo  $confirmationnot; ?></span>

        <input type="submit"  name="submit"  value="Submit" class="mt-2"  >
     </form>
  </div>
  <!-- col2_End -->
</div>
</div>

<div style="height:30px;background-color:black" ></div>
<!-- contact end -->




<!-- footer -->
<?php  include 'footer.php'?>


<script>
  function contact_us(){

        // firstname
         var firstname=document.getElementById('contact_us_fname').value;
        if(firstname=="" || firstname==null){
                document.getElementById('fnameErr').innerHTML="*Please Enter Your First Name ";
                return false;
        } 
        else if(firstname.length < 4 || firstname.length > 20 ){
                document.getElementById('fnameErr').innerHTML="*Character Should be 4 to 20 ";
                return false;
        }
        else if(/^[a-zA-Z ]+$/.test(firstname)==false){
                document.getElementById('fnameErr').innerHTML="*Only Letter Allowed ";
                return false;
        }else {
                document.getElementById("fnameErr").innerHTML=" ";
        }



        
          // lastname
        var  lastname=document.getElementById('contact_us_lname').value;
        if(lastname=="" || lastname==null){
                document.getElementById('lnameErr').innerHTML="*Please Enter Your Last Name ";
                return false;
        } 
        else if(lastname.length < 4 || lastname.length > 20 ){
                document.getElementById('lnameErr').innerHTML="*Character Should be 4 to 14 ";
                return false;
        }
        else if(/^[a-zA-Z ]+$/.test(lastname)==false){
                document.getElementById('lnameErr').innerHTML="*Only Letter Allowed ";
                return false;
        }
         else {
                document.getElementById("lnameErr").innerHTML="";
               
        }




        //number
        var  phone=document.getElementById('contact_us_phone').value;
        if(phone=="" || phone==null){
                document.getElementById('phoneErr').innerHTML="*Please Enter Your Phone Number ";
                return false;
        }  else if(isNaN(phone)){
                document.getElementById('phoneErr').innerHTML="*Please Enter Only Number";
                return false;
        }
        else if(phone.length!==10){
                document.getElementById('phoneErr').innerHTML="*Please Enter 10 Digit Only";
                return false;
        }
         else {
                document.getElementById("phoneErr").innerHTML="";
               
        }



        //email
        var  email=document.getElementById('contact_us_email').value;
        if(email=="" || email==null){
                document.getElementById('emailErr').innerHTML="*Please Enter Your Email ";
                return false;
        }
        if((email.charAt(email.length-4)!==".") && (email.charAt(email.length-3)!==".")){
                document.getElementById('emailErr').innerHTML="*Invalid Dot(.) Position";
                return false;
        }
         else {
                document.getElementById("emailErr").innerHTML="";
               
        }
  }

</script>