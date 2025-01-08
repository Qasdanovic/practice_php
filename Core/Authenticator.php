<?php
    
    namespace Core;
    
    class Authenticator
    {
        public function attempt($email, $password)
        {
            
            $user = App::resolve(Database::class)
                ->query("SELECT * FROM users WHERE email = ?", [$email])
                ->fetchOne();
            
            if($user){
                if(password_verify($password, $user["password"])) {
                    $this->login($user);
                }
                return false;
            }
            
            return false;
        }
        
        
        public function login($user)
        {
            $_SESSION["user"] = $user;
            session_write_close();
            session_start();
            redirect("/");
            exit();
        }
        
        
        
    }