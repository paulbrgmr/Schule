<?php
    echo "ajax-form-action";
    $testUser = "Paul";
    echo $testUser;


    // Prepaired Statement

    // function select($sql = "SELECT * FROM freunde WHERE id = :id", $params = array("id" => $id))
    // {
    //     $paramCount  = "";
    //     $prepared = $conn->prepare($sql);
    //     $count = count($params);
    //     for ($a = 0; $a < $count; $a++) {
    //         $paramCount .= "s";
    //     }
    //     foreach ($params as $key => $value) {
    //         $prepared->bindValue(":$key", $value);
    //     }
    //     $prepared->execute();
    //     return json_decode(json_encode($prepared->fetchAll(PDO::FETCH_OBJ)),true);
    // }
?>