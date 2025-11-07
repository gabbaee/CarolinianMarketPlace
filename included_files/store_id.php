<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION["id"]) && isset($_SESSION["type"])) {
    include_once("connect.php");

    if ($_SESSION["type"] === "tenant") {
        $tenant_id = $_SESSION["id"];
    } 
    elseif ($_SESSION["type"] === "landlord") {
        $landlord_id = $_SESSION["id"];
    }
}
else {
    header("Location: ../index.php");
    exit();
}
?>