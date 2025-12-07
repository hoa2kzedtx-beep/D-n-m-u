<?php 

session_start();

spl_autoload_register(function ($class) {    
    $fileName = "$class.php";

    $fileModel              = PATH_MODEL . $fileName;
    $fileControllerAdmin         = PATH_CONTROLLER_ADMIN . $fileName;
    $fileControllerClient         = PATH_CONTROLLER_CLIENT . $fileName;

    if (is_readable($fileModel)) {
        require_once $fileModel;
    } 
    else if (is_readable($fileControllerAdmin)) {
        require_once $fileControllerAdmin;
    }
    else if (is_readable($fileControllerClient)) {
        require_once $fileControllerClient;
    }
});

require_once './configs/env.php';
require_once './configs/helper.php';

// Điều hướng
$mode = $_GET['mode'] ?? 'client';
if ($mode == 'admin') {
    // require đường dẫn của admin
    require_once './routes/admin.php';
} else {
    // require đường dẫn của client
    require_once './routes/client.php';
}
