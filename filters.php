<?php

if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['DATA'];

    //Remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email. '<br>';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email is valid';
    } else {
        echo 'Email is NOT valid';
    }
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<button type="submit">Submit</button>
</form>