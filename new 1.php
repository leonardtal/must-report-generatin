<?php
if($row["emp_username"] == $uname && $row["emp_password"] == $pwd)
{
    // Set the header that will redirect the user to the given page
    // when this page's PHP script is done loading.
    header('Location: index.html');
    // Maybe we want to save some variables in a session. In that case,
    // example:
    $_SESSION['login'] = array(
        'user_id' => $uid, // Replace by the ID of the user you're logging in.
        'username' => $uname
    );
    // (In order for the session to work, you need to have used session_start();
    // before).
    // There is no need to output this message, as the user is being
    // redirected anyway, but I'll lave it in tact for you ;).
    echo "Welcome $uname";
}
else
{
    echo "Username and Password do not match";
}
?>