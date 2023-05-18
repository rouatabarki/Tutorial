<?php 
if (isset($_POST['Envoyer']))
{
    if (isset($_POST['user_email']) AND isset ($_POST['user_pass']))
    {
        if (!empty($_POST['user_email']) AND !empty($_POST['user_pass']))
        { 
            $email =htmlspecialchars($_POST['user_email']) ;
            $password =htmlspecialchars($_POST['user_pass']) ;
            echo "<h1> Bienvenue </h1> $name "  ;  
        }

    }

}
?>