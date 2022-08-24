<?php
ob_start();
session_start();
require_once 'config.php';
            $sql = "UPDATE ".$tutu."_susu SET online = '0'  WHERE user_id like  '".htmlspecialchars($_GET['O'])."'";
            if ($db->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $db->error;
            }
$user_obj = new Cl_User();
$data = $user_obj->logout();