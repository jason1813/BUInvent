<?php

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $j = "jason";

    echo "Hello  $username your password is $password and your name is $j";

    $username = stripcslashes($username);
    $password = stripcslashes($password);

    echo "Hello  $username your password is $password and your name is $j";

    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);

    mysql_connect("buinvent.com:3306", "SlinkyMation", "poofart");
    mysql_select_db("UserLogin23");

    $result = mysql_query("select * from users where username = '$username' and password = '$password'")
                or die("Failed to query database ".mysql_error());
    // $row = mysql_fetch_array($result);
    // if ($row['username'] == $username && $row['password'] == $password){
    //     echo "Login success!!! Welcome ".$row['username'];
    // } else{
    //     echo "Failed to login!";
    // }

    echo "Hello  $username your password is $password and your name is $j";
?>