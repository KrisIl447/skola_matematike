<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Math is cool5 - Početna</title>
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
#informacije{
    width: 100%;
    /*height: 5%;*/
    line-height: 30px;
    font-size: 30px;
    font-weight: bold;
    font-style: oblique;
    margin-top: 10%;
    position: relative;
    
}
#osnovno2{
    width: 100%;
    float: left;
    /*margin-top: 170px;*/
    background: radial-gradient(#d9d9d9,#fff);
    text-align: center;
    margin-top: 5%;
    margin-bottom: 5%;
    border-radius: 50px;
    opacity: 0.8; 
    font-family: 'Cormorant Garamond', serif;
    font-size: 20px;
    color: black;
    z-index: auto;
    /*z-index: 0;*/
}
</style>

<?php include 'header.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div>
<h1>Škola matemtike</h1>
<h2>Math is cool5</h2>
</div>
<div id="informacije">
             <marquee>NA PRVI ČAS <span id="popust">50% POPUSTA</span> !</marquee> 
 </div>  
 <div id="oNama" >
             <article id="osnovno2">

                <section id="oNamaNaslov">
                 <h1>O nama</h1>
                </section>

                <section id="text">
                  <p>
                  Math is cool5 je privatna škola matematike koja pomaže učenicima da savladaju gradivo
                koje uče u školi i dobiju ocene koje žele. Već godinu dana vredno radimo i zajedno postižemo
                odlične rezultate. Radimo sa decom iz Srbije, Bosna i Hercegovine, Crne Gore i Hrvatske. 
                  <i>Postani i ti deo naše ekipe!</i>                  </p>     
                <img data-u="thumb" src="imgs/math.jpg" width="500" height="356" />   
                <hr>     
                </section> 
              </article> 
          </div>



<?php include 'footer.php'; ?>
</body>
</html>