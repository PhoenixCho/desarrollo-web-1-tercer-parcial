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

        public static function getById(int $id) {
            $cnn = new PDO(
                "mysql:dbname=dbmvc;host=127.0.0.1;port=3308;user=myuser;password=123"
                 );
                 $smt = $cnn->prepare("select id,firstname,lastname,name,email from users where id=?");
                 $smt->execute([$id]);
        
                 if ($smt->rowCount() > 0) {
                     $usuario = new User();
                     $row = $smt->fetch(PDO::FETCH_ASSOC);
                     $usuario->id = $row["id"];
                     $usuario->firstname = $row["firstname"];
                     $usuario->lastname = $row["lastname"];
                     $usuario->name = $row["name"];
                     $usuario->email = $row["email"];

                     return $usuario;
                    } else {
                        return false;
                    }

        }

        public static function save(int $id, string $firstname, string $lastname) {
            $cnn = new PDO(
                "mysql:dbname=dbmvc;host=127.0.0.1;port=3308;user=myuser;password=123");
                 $smt = $cnn->prepare("update users set firstname=?, lastname=? where id=?");
                 $rst = $smt->execute([$firstname, $lastname, $id]);
                 if ($rst) {
                     // actualizado
                     header("Location: ".url("user"));
                 } else {
                     // fallo al actualizar
                     exit("error al actualizar el registro");
                 }
        }
    }