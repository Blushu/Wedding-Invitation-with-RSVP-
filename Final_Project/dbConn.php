<?php

    function getDB(){

    $mysql = new mysqli("localhost","root","root","wedding_db", 3306);

    if($mysql -> connect_errno){
        echo("Failed to connect to Mysql: (". $mysql->connect_error .")");
    }

    return $mysql;
    }

    function registerUser($first, $last, $email, $attending){
        $mysql = getDB();
        $stmt = $mysql->prepare("insert into guest_list (first, last, email, attending) values (?,?,?,?)");
        $stmt->bind_param("sssi", $first, $last, $email, $attending);
        $stmt->execute();

        $retval = ($stmt->errno == 0);
        $stmt->close();
        return $retval;
    }

    function userExists($email){
        $mysql = getDB();
        $result = $mysql->query("select count(*) as thing1 from users where email = '$email'");
        $result->data_seek(0);
        $aRow = $result->fetch_assoc();
        return ($aRow['thing1'] > 0);

        $retval = ($stmt->errno == 0);
        $stmt->close();
        return $retval;
}


?>
