<?php
class validator {
    //my errors verable
private $errors = [];

//method
public function validateEmpty($value, $fieldName){
    if(empty($value)) {
        if($fieldName == "FullName"){
            $this->errors[$fieldName] = "please enter full name";
        }elseif($fieldName == "email"){
            $this->errors[$fieldName] = "please enter email address";
        }elseif($fieldName == "pwd"){
            $this->errors[$fieldName] = "please enter password";
        }elseif($fieldName == "confirmPwd"){
            $this->errors[$fieldName] = "please enter confirm Password";
        }else{
            $this->error[$fieldName] = "field is required";
        }
    }
}

// to check if the registration has errors

public function hasErrors(){
    return !empty($this->errors);
}
public function geterrors(){
    return $this->errors;
}
}

?>