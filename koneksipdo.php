<?php
try{
$con = new PDO("mysql:host=localhost;dbname=inventory","root","");

}catch(PDOException $e){
echo $e->getMassage();
}
?>