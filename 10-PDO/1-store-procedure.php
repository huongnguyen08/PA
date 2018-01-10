<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=php2509_banhang2', 'root', '');
    $db->exec("SET NAMES UTF8");
}
catch(PDOException $e){
    echo $e->getMessage();
    die;
}

$sql = "CREATE PROCEDURE GetAllProducts()
        BEGIN
        SELECT * FROM foods WHERE id<=5;
        END";
/*
call sp
CALL GetAllProducts();
*/

/**
 * delete SP
 * DROP PROCEDURE IF EXISTS `GetAllProducts`
 */

/* Update sp
DROP PROCEDURE IF EXISTS `GetAllProducts`;
CREATE PROCEDURE `GetAllFoodss`()
BEGIN
    SELECT * FROM foods WHERE id<=9;
END

*/

/**
 * SP with variables
 * Định nghĩa biến: DECLARE variable_name datatype(size) DEFAULT default_value
 */
$sql = "DROP PROCEDURE IF EXISTS tinhTong;
        CREATE PROCEDURE tinhTong()
        BEGIN
            DECLARE a INT (11) DEFAULT 0;
            DECLARE b INT (11) DEFAULT 0;
            DECLARE tong INT (11) DEFAULT 0;
            
            SET a = 200;
            SET b = 300;
            SET tong = a + b;
            
            SELECT tong;
            
        END";
$sql = "Call tinhTong()";



$stmt = $db->prepare($sql);
$check = $stmt->execute();
if($check){
    $datas = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>";
    print_r($datas);
}
else
    var_dump($check);
echo 'done';
?>