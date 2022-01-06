<?php

    if ($ajaxRequest) {
        require_once "../config/SERVE.php";
    } else {
        require_once "./config/SERVE.php";
    }
    

    class MainModel{

        /*--------- Function to connect to the DDBB --------- */
        public static function connect()
        {
            $connect = new PDO(SGBD,USER,PASS);
            $connect->exec("SET CHARACTER SET utf8");
            return $connect;
        }

        /*--------- Function to execute simple queries --------- */
        public static function execute_simple_query($query)
        {
            $sql = self::connect()->prepare($query);
            $sql->execute();
             return $sql;
        }
        /*--------- Encrypting Strings --------- */
        public function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}


        /*--------- Decrypt Strings --------- */
		protected static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}
    }
