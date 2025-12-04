<?php
// 1. Initialize the session.
// We need to do this to access the current session data to destroy it.
session_start();

// 2. Unset all of the session variables.
// This clears the $_SESSION array (removes username, email, etc.).
$_SESSION = array();

// 3. Destroy the session cookie.
// This is a security step. It invalidates the cookie on the browser side.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 4. Destroy the session.
// This deletes the session file on the server.
session_destroy();

// 5. Redirect to the login page (or home page).
header("Location: login.php");
exit;
?>