<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */

 

if (isset($_POST)) {
    require "config.php";
    require "common.php";
    // echo $_POST['surname'];
    // echo implode("|",$_POST);
    try  {
       
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
            "firstname" => $_POST['name'],
            "lastname"=> $_POST['surname'],
            "email" => $_POST['email'],
            "age"  => $_POST['age'],
            "location"  => $_POST['location'],
            
        );
        
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "users",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
        echo "Successfully inserted the value";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

