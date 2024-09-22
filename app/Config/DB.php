<?php

declare(strict_types=1);

namespace App\Config;

use PDO;
use PDOException;


class DB
    {
        private static $pdo = null;

        public static function getConnection()
            {
                try
                    {
                        if(!static::$pdo)
                        {
                            $host = 'mysql';
                            $database = 'my_store';
                            $user = 'user';     
                            $password = 'password';

                            $dsn ="mysql:host=$host;dbname=$database";

                            static::$pdo = new PDO($dsn,$user,$password,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);


                            static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                        }
                        return static::$pdo;
                    }
                catch(PDOException $e)
                    {
                        die('Connection failed:' . $e->getMessage());
                    }   
            }


    }

    ?>