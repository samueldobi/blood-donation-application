<?php

require_once '../config_session.php';
require_once '../dbh.inc.php';
$pdo = Database::getConnection();

    
if (!isset($_SESSION["user_id"])){
    header("Location:../../index.php");
}
    
function uploadProfilePicture($pdo, $userId) {
    if (!isset($_FILES['profile_picture'])) {
        return false;
    }

    $file = $_FILES['profile_picture'];
    $fileName = uniqid() . '_' . basename($file['name']);
    $uploadDir = __DIR__ . '/uploads/';
    
    // Create directory if it doesn't exist
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $uploadPath = $uploadDir . $fileName;
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    if (!in_array($file['type'], $allowedTypes)) {
        throw new Exception('Invalid file type. Only JPG, PNG and GIF allowed.');
    }

    if ($file['size'] > 5000000) { // 5MB limit
        throw new Exception('File is too large. Maximum size is 5MB.');
    }

    if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
        throw new Exception('Failed to upload file.');
    }

    $stmt = $pdo->prepare('UPDATE users SET profile_picture = ? WHERE id = ?');
    if (!$stmt->execute([$fileName, $userId])) {
        unlink($uploadPath);
        throw new Exception('Failed to update database.');
    }

    return $fileName;
}

// Rest of the code remains the same

try {
    // Assume user ID is stored in session after login
    $userId = $_SESSION['user_id'];
    
    $fileName = uploadProfilePicture($pdo, $userId);
    // echo "Profile picture updated successfully!";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}



