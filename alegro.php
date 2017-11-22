<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Komis używanych samochodów</title>
        <link rel="stylesheet" type="text/css" href="alegro.css">
        <script type="text/javascript">
            alert("Akceptuję politykę cookies i regulamin strony oraz sklepu internetowego")
        </script>
    </head>
    
        <body>  
        <div id="container">
            <div id="header">
                <div class="logo">
                    <img src="https://newcdn.iconfinder.com/data/icons/fast-cars-1/512/McLaren_F1_Red-128.png" style="float:left"/>
                    <span style="color:#c12230">retro</span>car.com
                    <div style="clear: both"></div>
                </div>
            </div>

        <div id="pasek">
            <ol>
                  <li><a href="/alegro.php">Start</a></li>
                  <li><a href="/alegro1.php">Oferta</a>
                    <ul>
                        <li><a href="#samochody">Samochody</a></li>
                        <li><a href="#mototcykle">Motocykle</a></li>
                        <li><a href="#inne">Inne</a></li>
                    </ul>
                  </li>
                  <li><a href="#marki">Marki</a>
                      <ul>
                        <li><a href="#ford">Ford</a></li>
                        <li><a href="#bmw">BMW</a></li>
                        <li><a href="#mazda">Mazda</a></li>
                        <li><a href="#volkswagen">Volkswagen</a></li>
                        <li><a href="#fiat">Fiat</a></li>
                    </ul>
                  </li>
                <li><a href="#ulubione">Ulubione</a></li>
            </ol>
            <div style="clear: both"></div>
        </div>
            
        <div class="opis">
            <p>  AUTO KOMIS RETROCAR <br>Skup, sprzedaż, zamiana, komis.<br><br>Godziny otwarcia<br>pon-piąt.: 10 : 00 - 17 : 00<br>sobota: 10 : 00 - 14 : 00<br>niedziela: 11 : 00 - 14 : 00<br><br>Adres<br>Wrocławska 96, 45-711 Opole, woj. opolskie<br><br>Telefony<br>tel. 77 4411899 &nbsp; kom. 600 012 741<br></p>
        </div>
            
        <div id="okomisie">
            <div id="naglowek2"><h2>Co można powiedzieć o naszym komisie?</h2></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis feugiat turpis condimentum aliquam. Aenean at sem sit amet purus efficitur egestas quis eu orci. Vestibulum faucibus luctus enim, in dictum odio ullamcorper a. Phasellus sed augue lorem. Praesent nunc lorem, cursus vel mattis nec, cursus non mauris. Quisque sodales, magna ac accumsan rutrum, risus eros aliquam dolor, id euismod dui libero quis dolor. Sed condimentum dolor lectus, vitae ornare urna semper quis. Quisque eu ipsum quis lorem laoreet eleifend. Phasellus ac elit nec ante vulputate tristique.</p>
            <p>Morbi imperdiet orci non felis molestie dictum. Quisque finibus fermentum diam in tempus. Phasellus in iaculis neque. Nunc nec ipsum nulla. Duis quis venenatis nunc. Cras eros ipsum, pulvinar in quam non, rhoncus tincidunt metus. Sed et ipsum a felis eleifend eleifend. Praesent finibus sagittis pulvinar. Mauris ornare ac arcu vitae tincidunt.</p>
            </div>
            <div style="clear:both"></div>
            
        <div id="szukacz" class="szukacz_graf">       <!--to się wrzuci do ofert i tam bd szukać z bazy-->
    <fieldset><legend>Wyszukiwarka samochodów</legend>
	<form action = "baza.php" method = "post">
		Czego szukasz?:<input type = "text" name = "1" value=""><br>

        Marka: <?php
        $con=mysqli_connect("localhost","root","","komis");
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql="select distinct marka FROM auto"; 
        if ($result=mysqli_query($con,$sql))
          {
          echo '<select name="nazwa" size="1">';
		  echo '<option disabled selected value></option>>';
          while ($row=mysqli_fetch_assoc($result)){
            echo '<option value="'. $row["marka"] .'">'. $row["marka"] .'</option>';
            }
            echo '</select>';

          mysqli_free_result($result);
        }
        mysqli_close($con);
        ?>
		
		Cena: <select name="cena">
              <option value="">brak</option>
              <option value="cena_pln < 10000">mniejsza od 10000</option>
              <option value="cena_pln < 20000">mniejsza od 20000</option>
              <option value="cena_pln < 30000">mniejsza od 30000</option>
              <option value="cena_pln < 50000">mniejsza od 50000</option>
              <option value="cena_pln < 70000">mniejsza od 70000</option>
              <option value="cena_pln < 100000">mniejsza od 100000</option>
        </select>
        
        Przebieg :<select name="przebieg">
              <option value="">brak</option>
              <option value="przebieg < 100000">mniejszy od 100000</option>
              <option value="przebieg < 200000">mniejszy od 200000</option>
              <option value="przebieg < 300000">mniejszy od 300000</option>
              <option value="przebieg < 500000">mniejszy od 500000</option>
              <option value="przebieg < 700000">mniejszy od 700000</option>
              <option value="przebieg < 1000000">mniejszy od 1000000</option>
			  </select>
        
		<input type = "submit" id = "przycisk" value = "sprawdź">
	   </form></fieldset>
            </div>
                   
        <div class="stopka">
            <a href="/onas/">O nas</a> 
            <a href="/kontakt/">Kontakt</a> 
            <a href="/pomoc/">Pomoc</a> 
            <a href="/regulamin/">Regulamin</a>
            <p>Stworzone przez: Grove Street™</p>
        </div>
    </div>     
  </body>
</html>