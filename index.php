<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modni kutak</title>
    
    <!-- h1 font -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- glavni css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- javascript -->
    <script src="javascript/index.js"></script>
</head>
<body>
    <?php include 'php/connection.php' ?>
    <div id="gore-levo">
        <img src="images/gore levo.png" alt="">
    </div>
    <div id="gore-desno">
        <img src="images/gore levo.png" alt="">
    </div>
    <h1>Modni <span id="kutak">kutak</span></h1>
    
    <div id="first-img" >
        <img src="images/fashion.png" alt="">
    </div>
    
    <div class="tekst">
        <p><span id="m">M</span>odni kutak je mesto na kom možete pronaći sve što Vam je potrebno. Imamo širok asortiman odeće, obuće, 
            kao i raznih aksesoara. Ukoliko želite, možete se prijaviti na naš <a href="#newsletter">Newsletter</a>  kako bi Vam svakodnevno
            stizale informacije o novim komadima u našem raznovrsnom asortimanu. Ovo je mesto na kom možete ostavljati svoje komentare, 
            sugestije i ocene i na taj način nam pomognete da postanemo Vaše omiljeno mesto za kupovinu.

        </p>
    </div>

    <div class="citati">
        <div class="row justify-content-around">
            <div class="col-3">
                <p>"Vaša odeća predstavlja način da se predstavite svetu,
                naročito sada, kada komunikacija postaje tako brza. Moda je instant jezik."</p> 
                <p>Miuccia Prada</p>
            </div>

            <div class="col-1"></div>
 
            <div class="col-3">
                <p>"Nikad se ne možeš previše brinuti o izboru svojih cipela. Neke žene misle da je to nebitno, no pravi dokaz njihove elegancije je na izboru cipela."</p> 
                <p>Christian Dior</p>  
            </div>
            <div class="col-1"></div>
            <div class="col-3">
                <p>"Delovi jezika, kulture, pejzaža, hrane i dizajna koje otkrivam širom sveta mogu se pronaći u svakom komadu nakita koje posedujem."</p>
                <p>Ivanka Tramp</p> 
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>Odeća</h3>
                <a href="pages/odeca.php" target="_blank"><img src="images/odeca.jpg" alt=""></a>
            </div>
            <div class="col-4">
                <h3>Obuća</h3>
                <a href="pages/obuca.php" target="_blank"><img src="images/obuca.jpg" alt=""></a>
            </div>
            <div class="col-4">
                <h3>Aksesoari</h3>
                <a href="pages/aksesoari.php" target="_blank"><img src="images/aksesoari.jpg" alt=""></a> 
            </div>
          </div>
    </div>

    <div id="newsletter">
        <p>Prijavite se za Newsletter i budite uvek u toku!</p>
        <form method="POST" action="" id="forma_news">
            <input type="text" placeholder="Ime" name="ime" id="ime">
            <br>
            <input type="text" placeholder="Email adresa" name="mail" id="mail">
            <br>
            <button type="submit" class="btn btn-dark" name="prijava" id="prijava">Prijavi se!</button>
        </form>
    </div>


</body>
</html>

