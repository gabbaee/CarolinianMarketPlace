<?php
session_start();

if (isset($_SESSION["id"]) && $_SESSION["type"] == "tenant") {
    include("../included_files/connect.php");
    $tenant_id = $_SESSION["id"]; 

    // Mark all notifications as read for this tenant
    $update_sql = "UPDATE Notifications SET Notif_Status = 1 WHERE Tenant_ID = ? AND Sent_To = 'Tenant' AND Notif_Status = 0";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("i", $tenant_id);
    $update_stmt->execute();
    $update_stmt->close();

    echo "Tenant Notifications marked as read";
}
elseif (isset($_SESSION["id"]) && $_SESSION["type"] == "landlord") {
    include("../included_files/connect.php");

    // Mark all notifications as read for landlord
    $update_sql = "UPDATE Notifications SET Notif_Status = 1 WHERE Sent_To = 'Landlord' AND Notif_Status = 0";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->execute();
    $update_stmt->close();

    echo "Landlord Notifications marked as read";
}  
else {
    http_response_code(403);
    echo "Unauthorized";
}
?>