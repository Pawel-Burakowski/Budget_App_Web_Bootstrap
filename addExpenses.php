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

            <div class="col-12 d-flex justify-content-center">
                <div class="field">

                    <div class="input-group mt-2 mb-4">
                        <span class="input-group-text" id="igName">Kwota</span>
                        <input type="number" class="form-control" aria-label="Kwota" step="0.01" min="0.01">
                        <span class="input-group-text" id="right">zł</span>
                    </div>

                    <div class="input-group mt-0 mb-4">
                        <div class="input-group date" data-provide="datepicker">
                            <span class="input-group-text" id="igName">Data</span>
                            <input class="form-control" type="date" name="date" value="" required>
                        </div>
                    </div>

                    <div class="input-group mt-0 mb-4">
                        <span class="input-group-text" id="pay_method">Sposób płatności:</span>
                        <select name="Sposób płatności" aria-label="Sposób płatności" id="" class="form-select">
                            <option selected>Wybierz...</option>
                            <option value="1">Gotówka</option>
                            <option value="2">Karta debetowa</option>
                            <option value="3">Karta kredytowa</option>
                        </select>
                    </div>

                    <div class="input-group mt-0 mb-4">
                        <span class="input-group-text">Kategoria</span>
                        <select name="Kategoria" aria-label="Kategoria" id="" class="form-select">
                            <option selected>Wybierz...</option>
                            <option value="1">Jedzenie</option>
                            <option value="2">Mieszkanie</option>
                            <option value="3">Transport</option>
                            <option value="4">Telekomunikacja</option>
                            <option value="5">Opieka zdrowotna</option>
                            <option value="6">Ubranie</option>
                            <option value="7">Higiena</option>
                            <option value="8">Dzieci</option>
                            <option value="9">Rozrywka</option>
                            <option value="10">Wycieczka</option>
                            <option value="11">Szkolenia</option>
                            <option value="12">Książki</option>
                            <option value="13">Oszczędności</option>
                            <option value="14">Na złotą jesień, czyli emeryturę</option>
                            <option value="15">Spłata długów</option>
                            <option value="16">Darowizna</option>
                            <option value="17">Inne wydatki</option>
                        </select>
                    </div>

                    <div class="input-group mt-0 mb-4">
                        <span class="input-group-text">Komentarz</span>
                        <textarea class="form-control" rows="1" aria-label="Komentarz"
                            placeholder="(opcjonalnie)"></textarea>
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

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>