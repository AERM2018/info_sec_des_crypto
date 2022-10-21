<?php
    require_once "./encryption.php";
    require_once "./file_handler.php";

    $encrypted_text = read_file(upload_file('file','files',false));
    $key = read_file(upload_file('key','files',false));

    $result = decrypt($encrypted_text,$key);
    echo "<h2>The file contents:</h2>";
    echo "<br>";
    print $result;

    ?>