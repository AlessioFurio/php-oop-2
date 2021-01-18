<?php
    class User {
        private $name;
        private $lastname;
        private $email;
        private $pass;
        private $username;

        function __construct($_name, $_lastname, $_email, $_pass, $_username){
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->email = $_email;
            $this->pass = $_pass;
            $this->username = $_username;
        }

        public function printInformations(){
            echo "i dati dell' utente sono:".'<br>'.$this->name.'<br>'.$this->lastname.'<br>'.$this->email.'<br>'.$this->pass.'<br>'.$this->username.'<br>'.'<br>';
        }
    }
?>
