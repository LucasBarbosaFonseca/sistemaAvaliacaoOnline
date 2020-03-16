<?php
    error_reporting(0);
	ini_set("display_errors",0);

    require_once 'class/classUsers.php';

    if (isset($_POST['registerUser'])) {

        if (!isset($_SESSION))
            session_start();

        foreach ($_POST as $key => $value) 
            $_SESSION[$key] = $value;

        $user = new Users();
        
        if ($user->passwordConfirm($_SESSION['password'], $_SESSION['confirmPassword']) == 'confirm') {

            if ($user->validateDatas($_SESSION['name'], $_SESSION['email'], $_SESSION['password']) == true) {
                $user->insertUser($_SESSION);

                echo "<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso!.');</script>";

                session_start();
                unset($_SESSION['name'],
                      $_SESSION['email'],
                      $_SESSION['password'],
                      $_SESSION['confirmPassword'],
                      $_SESSION['type']);
            }
            
        }
        else {
            echo "<script language='javascript' type='text/javascript'>alert('As senhas não confirmam.');</script>";
        }

    }
        
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de usuário</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" value="<?php session_start(); echo $_SESSION['name']; ?>" placeholder="Seu nome:">
            <input type="text" name="email" value="<?php session_start(); echo $_SESSION['email']; ?>" placeholder="Seu melhor E-mail:">
            <input type="text" name="password" value="<?php session_start(); echo $_SESSION['password']; ?>" placeholder="Sua senha:">
            <input type="text" name="confirmPassword" placeholder="Confirme sua senha:">
            <select name="type" <?php session_start(); ?> >
                <option value="admin" <?php if ($_SESSION['type'] == "admin") echo "selected" ?> >Administrador</option>
                <option value="professor" <?php if ($_SESSION['type'] == "professor") echo "selected" ?> >Professor</option>
                <option value="aluno" <?php if ($_SESSION['type'] == "aluno") echo "selected" ?> >Aluno</option>
            </select>
            <input type="submit" name="registerUser" value="Cadastrar">
        </form>
    </body>
</html>