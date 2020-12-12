<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<style>
body {
  background: linear-gradient(white,gray);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:15px;
  text-align: center;
  margin: 15px 300px 5px 200px;
}

#kontInfo{
    font-family: 'Bowlby One SC', cursive;
    width:40%;
    float:right;
    margin-top:30px;
    padding: 5px;
    text-align: center;
    
}

#konForma {
    width:400px;
    margin-top: 30px;
    padding:10px;
    background: #e6e6e6;
    float:left;
    border-radius: 10px;
    
    
}



</style>
<?php include 'header.php'; ?>
<div id="map">
        <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2833.03052013105!2d20.500630715045965!3d44.759792288188805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70df0e794f55%3A0x4530c0224a40f8cc!2z0JLQvtGY0LLQvtC00LUg0JLQu9Cw0YXQvtCy0LjRm9CwIDQ3LCDQkdC10L7Qs9GA0LDQtCwg0KHRgNCx0LjRmNCw!5e0!3m2!1ssr!2sba!4v1607270137535!5m2!1ssr!2sba" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
        </p>
    </div>

    <form id="konForma">
        <fieldset>
            <legend>Kontaktiraj nas</legend>

            <label>Vaše Ime i Prezime:</label><br>
            <input id="imePrezime" type="text" placeholder="Unesite Vaše ime i prezime" required>
            <br>

            <label>E-mail:</label><br>
            <input id="email" type="email" placeholder="Unesite Vaš e-mail" required>
            <br>

            <label>Oznacite vrstu časa koja vas zanima:</label>
            <br>

            <input type="checkbox">Online čas<br>
            <input type="checkbox">Čas uživo<br>

            <label>Mobilni:</label><br>
            <input id="phone" type="tel" placeholder="(+381)" required>
            <br>
            <label>Poruka</label><br>
            <textarea></textarea><br>

            <input id="send" type="submit" value="Pošalji">
            <input type="reset" value="Izbriši">

        </fieldset>
    </form>

<div id="kontInfo">
        <h2 id="hkont">Kontakt informacije:</h2>
        <p id="info1">
            Škola matematike <i> #mathiscool5</i> <br>
            Vojvode Vlahovića 47T<br>
            Mobilni: 064/923-40-85<br>
            email: <span id="e1">ikristina523@gmail.com</span><br>
        </p>
    </div>
    
    <?php include 'footer.php'; ?>
</body>

</html>