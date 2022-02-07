<?php

$confirmationnot_BES="";
$confirmation_BES="";
if(isset($_POST['submit_BES'])){
      $mailto="projects@bonjoule.co.in";

      $name=$_POST['BES_name'];
      $phone=$_POST['BES_phone'];
      $email=$_POST['BES_email'];
     

      $subject="BES_FREELANCE BONJOULE ENQUIRY";
      $message=" Name: ".$name."\n Phone :".$phone." \n Email: ".$email;
      $header="From: ".$email;
      $result=mail($mailto,$subject,$message,$header);
  

    if($result){
      $confirmation_BES="You Query Has Been Submitted";
    }
      else{
        $confirmationnot_BES="Failed To Submit";
      }


}
 


?>