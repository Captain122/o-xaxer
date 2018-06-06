<?php
    class Database
    {
        private $link;

        public function  __construct(){
            $this->connect();
        }

        private  function connect(){
            $config = require_once 'config.php';

            $dsn = 'mysql:host='.$config['host'].';dbname='.$config['name'].';charset='.$config['charset'];
            $t1 = $config['username'];
            $t2 = $config['password'];
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            );

            //print_r($config);
            $this -> link = new PDO($dsn, $t1, $t2,$options);
            return $this;
        }

        public function execute($sql){
            $sth = $this->link->prepare($sql);
            return $sth->execute();
        }

        public function query($sql){
            $sth = $this->link->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);

            if ($result === false){
                return [];
            }
            return $result;
        }


    }
?>