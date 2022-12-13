<?php

session_start();

if ((!isset($_SESSION['isLogin'])) || ($_SESSION['isLogin']==false))
{
    header('Location: index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Personal Budget </title>
    <meta name="description" content="Aplikacja napisana w ramach nauki z kursu programowania Przyszły Programista">
    <meta name="author" content="Paweł Burakowski">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container" id="scr">
        <div class="row justify-content-center">

            <div class="col m-3 mb-md-5">
                <h2 class="d-flex justify-content-center p-3 p-md-4 p-lg-4">Dodaj wydatek</h2>
            </div>

            <form action="expenseAdd.php" method="post">

                <div class="col-12 d-flex justify-content-center">
                    <div class="field">
    
                        <div class="input-group mt-2 mb-4">
                            <span class="input-group-text" id="igName">Kwota</span>
                            <input type="number" class="form-control" id="amount" name="amount" aria-label="Kwota" step="0.01" min="0.01">
                            <span class="input-group-text" id="right">zł</span>
                            <?php
                            if (isset($_SESSION['e_amount']))
                            {
                            echo '<div style="color:red">'.$_SESSION['e_amount'].'</div>';
				            unset($_SESSION['e_amount']);
                            }
                            ?>
                        </div>
    
                        <div class="input-group mt-0 mb-4">
                            <div class="input-group date" data-provide="datepicker">
                                <span class="input-group-text" id="igName">Data</span>
                                <input class="form-control" type="date" id="date" name="date" value="" required>
                            </div>
                        </div>
    
                        <div class="input-group mt-0 mb-4">
                            <span class="input-group-text" for="payment" id="pay_method">Sposób płatności:</span>
                            <select name="payment" aria-label="Sposób płatności" id="payment" class="form-select">
                                <option selected>Wybierz...</option>
                                <option value="Cash">Gotówka</option>
                                <option value="Debit Card">Karta debetowa</option>
                                <option value="Credit Card">Karta kredytowa</option>
                            </select>
                        </div>
    
                        <div class="input-group mt-0 mb-4">
                            <span class="input-group-text" for="category">Kategoria</span>
                            <select name="category" aria-label="Kategoria" id="category" class="form-select">
                                <option selected>Wybierz...</option>
                                <option value="Food">Jedzenie</option>
                                <option value="Apartments">Mieszkanie</option>
                                <option value="Transport">Transport</option>
                                <option value="Telecommunication">Telekomunikacja</option>
                                <option value="Health">Opieka zdrowotna</option>
                                <option value="Clothes">Ubranie</option>
                                <option value="Hygiene">Higiena</option>
                                <option value="Kids">Dzieci</option>
                                <option value="Recreation">Rozrywka</option>
                                <option value="Trip">Wycieczka</option>
                                <option value="Coaching">Szkolenia</option>
                                <option value="Books">Książki</option>
                                <option value="Savings">Oszczędności</option>
                                <option value="For Retirement">Na złotą jesień, czyli emeryturę</option>
                                <option value="Debt Repayment">Spłata długów</option>
                                <option value="Gift">Darowizna</option>
                                <option value="Another">Inne wydatki</option>
                            </select>
                        </div>
    
                        <div class="input-group mt-0 mb-4">
                            <span class="input-group-text" for="comment">Komentarz</span>
                            <textarea class="form-control" rows="1" aria-label="Komentarz" id="comment" name="comment" placeholder="(opcjonalnie)"></textarea>
                            <?php
                            if (isset($_SESSION['e_comment']))
                            {
                            echo '<div style="color:red">'.$_SESSION['e_comment'].'</div>';
				            unset($_SESSION['e_comment']);
                            }
                            ?>
                        </div>
    
                    </div>
                </div>
    
                <div class="row justify-content-center align-items-center">
    
                    <div class="col-12 col-md-6 mb-3 button">
                        <input id="submit" type="submit" value="Dodaj wydatek">
                    </div>
    
                    <div class="col-12 col-md-6 button" id="register">
                        <a href="mainMenu.html">Anuluj</a>
                    </div>
    
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>