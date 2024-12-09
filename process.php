<?php
session_start();
require_once 'validator.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    function purgeDate($data){
        $date = stripslashes($_POST["fullName"]);
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }
   // echo htmlspecialchars($_POST["email"])."<br>";
   // echo htmlspecialchars($_POST["pwd"]);
   echo purgeDate($_POST["fullName"]). "<br>";
   echo purgeDate($_POST["email"]). "<br>";
   echo purgeDate($_POST["pwd"])."<br>";
   echo purgeDate($_POST["confirmPwd"])."<br>";

   //form object validator

   $validator = new validator();

   $validator->validateEmpty(purgeDate($_POST["fullName"]), "fullName");
   $validator->validateEmpty(purgeDate($_POST["email"]), "email");
   $validator->validateEmpty(purgeDate($_POST["pwd"]), "pwd");
   $validator->validateEmpty(purgeDate($_POST["confirmPwd"]), "confirmPwd");


   //check for errors 

   if($validator->hasErrors()){
    $_SESSION["errors"] = $validator->getErrors();
    header("location: register.php");
    exit();
   }else{
    echo "registration successful";
    session_unset();
    session_destroy();
   }

}

?>