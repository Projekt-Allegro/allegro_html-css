<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Komis używanych samochodów</title>
        <link rel="stylesheet" type="text/css" href="alegro.css">
    </head>
    
        <body>  
        <div class="container_oferta">
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
                  <li><a href="/alegro1.php">Oferta</a></li>
                  <li><a href="/alegro_gal.php">Galeria</a></li>
                  <li><a href="/alegro_log.php">Konto</a></li>
            </ol>
        </div>
		
		<div id="zaloguj">
			<h2> Zaloguj się </h2>
			
			<form action="action_page.php">
			  <div class="imgcontainer">
				<img src="login.png" alt="" class="avatar">
			  </div>

			  <div class="log_form">
				<label for="login"><b>Login</b></label>
				<input type="text" placeholder="Wpisz login" name="login" required class="login"></br>

				<label for="hsl"><b>Hasło</b></label>
				<input type="password" placeholder="Wpisz hasło" name="hsl" required class="login"></br>

				<button type="submit" id="przycisk">Zaloguj się </button></br>	
			  </div>
			</form>
		</div>
		
		<div id="rejestr">
			<h2> Zarejestruj </h2>
			<form>
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Wpisz email" name="email" required></br>

				<label for="hsl"><b>Hasło</b></label>
				<input type="password" placeholder="Wpisz hasło" name="hsl" required></br>

				<label for="hsl-repeat"><b>Powtóz hasło</b></label>
				<input type="password" placeholder="Powtórz hasło" name="hsl-repeat" required></br>
				
				<p>Zakładając konto zgadzasz się z <a href="#" style="color:dodgerblue"> Regulaminem strony</a>.</p></br>

				<div class="clearfix">
				  <button type="submit" id="przycisk">Zarejestruj się</button>
				</div>
				
				</form>
			  </div> 
			
			<div style="clear:both"></div>
		
			
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