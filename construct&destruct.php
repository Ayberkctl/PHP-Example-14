<?php

    class  DB   {
        private $db;
        public function __construct($host,$userN, $pswd){
            $this->db=new PDO('mysql:host='.$host, $userN, $pswd);
        }
        public function getData(){
            //$this->db->query('');
            return 'db data'.PHP_EOL;
        }
        public function __destruct(){
            $this->db=null;
        }

    }

    $db = new DB('localhost','root','');

    echo $db->getData();
?>