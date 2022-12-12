<?php

session_start();

require_once "connect.php";

if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}

	try
	{
        $connection = new mysqli($host, $db_user, $db_password, $db_name);
		
	    if ($connection->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }

        else 
        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $login = htmlentities($login, ENT_QUOTES, "UTF-8");

            if ($result = $connection->query(sprintf("SELECT * FROM users WHERE username='%s'",mysqli_real_escape_string($connection,$login))))
            {			
                $usersNumber= $result->num_rows;
                if($usersNumber > 0)
                {
                    $row = $result->fetch_assoc();

                    if (password_verify($password, $row['password']))
                    {
                        $_SESSION['isLogin'] = true;
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        
                        unset($_SESSION['error']);
                        $result->free_result();
                        header('Location: mainmenu.php');
                    }

                    else
                    {
                        $_SESSION['error'] = '<span style="color:red; text-align: center; margin-top: 30px; font-size: 1rem;">Nieprawidłowy login lub hasło!</span>';
                        header('Location: index.php');
                    }
                }

                else 
                {
                    $_SESSION['error'] = '<span style="color:red; text-align: center; font-size: 1rem;">Nieprawidłowy login lub hasło!</span>';
                    header('Location: index.php');
                }
            }

            else
            {
                throw new Exception($connection->error);
                header('Location: index.php');
            }	
        }

        $connection->close();
       }
        
	catch(Exception $e)
		{
			echo '<span style="color:red; font-size: 1rem;">Błąd serwera! Spróbuj ponownie później!</span>';
			echo '<br />Informacja developerska: error 404 :( '.$e;
		}

?>