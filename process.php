<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    function purgeDate($data){
        $date = stripslashes($_POST["email"]);
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }
   // echo htmlspecialchars($_POST["email"])."<br>";
   // echo htmlspecialchars($_POST["pwd"]);
   echo purgeDate($_POST["email"]). "<br>";
   echo purgeDate($_POST["pwd"])."<br>";
}

?>