<?php
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