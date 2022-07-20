<?php

function verifierAdmin(): bool {
    if (isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['role'] === 'admin') 
        return true;
    else
        return false;
<<<<<<< HEAD
}
=======
}
>>>>>>> 06c41c50bc0f18afbf452100737d28c52a6c3b3f
