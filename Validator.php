

<?php

class Validator {
    public $errors = [] ;


    public static function String($input, $min=1, $max= INF){
        $value = trim($input);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // public function input_validate($name, $input, $length){
        

    //     if(strlen($input) === 0)
    //     {
    //         $this->errors["empty"] = $name . ' cannot be empty' ;
    //     }
    // }
}