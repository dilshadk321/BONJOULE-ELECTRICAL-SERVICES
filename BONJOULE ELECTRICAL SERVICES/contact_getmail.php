<?php

$confirmationnot="";
$confirmation="";
if(isset($_POST['submit'])){
      $mailto="projects@bonjoule.co.in";

      $fname=$_POST['contact_us_fname'];
      $lname=$_POST['contact_us_lname'];
      $phone=$_POST['contact_us_phone'];
      $email=$_POST['contact_us_email'];
      $description=$_POST['description'];


      $subject1="BONJOULE ENQUIRY";
      $mesg1=" Name: ".$fname." ".$lname."\n Phone :".$phone." \n Email: ".$email." \n Description: ". $description;
      $header1="From: ".$email;
      $result1=mail($mailto,$subject1,$mesg1,$header1);


     //  $subject2="ut meg submited";
     //  $mesg2="Dear ".$fname.$lname." thnak your for contacting us ";
     //   $header2="From: ".$mailto;
     //  $result2=mail($email,$subject2,$mesg2,$header2);

     
    if($result1){
      $confirmation="You Query Has Been Submitted";
    }
      else{
        $confirmationnot="Failed To Submit";
      }


}
 


?>