<?php
    
    namespace Http\forms;
    use Core\Validator;
    
    class LoginForm
    {
        protected $errors = [] ;
        
        public function validate($email, $password)
        {
            
            $password = trim($password);
            
            if (!Validator::email($email)) {
                $this->errors["body"]["email"] = "please provide a valid email ! ";
            };
            
            if (!Validator::String($password, 6, 50)) {
                
                $this->errors["body"]["password"] = "password cannot be empty or more less than 6 chars";
            }
            
        return count($this->errors);
        }
        
        public function errors(){
            return $this->errors;
        }
        
    }