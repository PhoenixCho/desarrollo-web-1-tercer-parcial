<?php
namespace Models;
use \PDO;

class User {
    function getAllUsers() {
        $cnn = new PDO(
        "mysql:dbname=dbmvc;host=127.0.0.1;port=3308;user=myuser;password=123"
         );
         $sql = "select id,firstname,lastname,name,email from users";
         $rst = $cnn->query($sql);

         if ($rst->rowCount() > 0) {
             return $rst->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        }

        public function getById(int $id) {
            $cnn = new PDO(
                "mysql:dbname=dbmvc;host=127.0.0.1;port=3308;user=myuser;password=123"
                 );
                 $smt = $cnn->prepare("select id,firstname,lastname,name,email from users where id=?");
                 $smt->execute([$id]);
        
                 if ($smt->rowCount() > 0) {
                     return $smt->fetchAll(PDO::FETCH_ASSOC);
                    } else {
                        return false;
                    }

        }

    }