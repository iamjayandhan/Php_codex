<?php
    // hashing = transforming sensitive data (password)
    //           into letters, numbers, and/or symbols
    //           via a mathematical process. (similar to encryption)
    //           Hides the original data from 3rd parties.

    $password = "killer5713Q";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo 'Hash: '. $hash .'<br>';
    
    if(password_verify('killer5713Q', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid Password!';
    }
?>