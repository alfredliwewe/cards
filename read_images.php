<?php

// Specify the folder path
$folderPath = 'cards';

// Check if the folder exists
if (!file_exists($folderPath)) {
    echo json_encode(['error' => 'Folder not found']);
    exit;
}

// Get all image files in the folder
$imageFiles = [];
foreach (scandir($folderPath) as $file) {
    if (is_file($folderPath . '/' . $file)) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'bmp'])) {
            $imageFiles[] = $file;
        }
    }
}

// Output the image files as JSON
echo json_encode($imageFiles);

?>