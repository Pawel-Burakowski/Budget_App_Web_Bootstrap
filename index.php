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
                <h2 class="d-flex justify-content-center p-3 p-md-4 p-lg-5">Logowanie</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form>
                    <div class="user-box col m-3 mb-md-3 pt-2 pt-md-3">
                        <input type="text" name="" required="">
                        <label>Nazwa użytkownika</label>
                    </div>

                    <div class="user-box col m-3 mb-md-3 pt-2 pt-md-3">
                        <input type="password" name="" required="">
                        <label>Hasło</label>
                    </div>
                </form>
            </div>

            <div class="row justify-content-center align-items-center">

                <div class="col-12 col-md-6 mb-3 button">
                    <input id="submit" type="submit" value="Zaloguj się">
                </div>

                <div class="col-12 col-md-6 button" id="register">
                    Nie posiadasz konta? <br>
                    <a href="register.html">Zarejestruj się</a>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>