<?php
    class User {
        private $db;

        public function __construct() {
            // $this->db = new Database;
        }

        //Find user by email. Email is passed in by the Controller.
        public function findUserByEmail($email) {
            //Prepared statment
            $this->db->query('SELECT * FROM users WHERE email = :email');

            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);

            //Check if email is already registered
            if ($this->statment->rowCount > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
