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
            <div style="clear: both"></div>
        </div>
		
		
		
<?php header('Content-Type: text/html;charset=UTF-8');
$conn = mysqli_connect('localhost', 'root', ''); //łączy z bazą
$datab = mysqli_select_db($conn ,'komis'); // wybiera baze
$select = "select *";
$skad = "from auto ";
$gdzie = "where";
$kolor = $_POST["kat"];
$cena = $_POST["cena"];
$przebieg = $_POST["przebieg"];
$co = $_POST["1"];
//$co = "'".mysqli_real_escape_string($conn, stripslashes($co))."'"; 	// dodaje automatycznie quoty do nazwy
$array = array($co);
$values = implode(", ", $array);
if ($kolor === "" && $co === "" && $przebieg === "" && $cena === "") { 		// zasady działania dla pustych pól
ob_start(); 												// zapisuje echo do stringa
echo $select,' ', $skad;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "" && $co === "" && $przebieg === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' ', $cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "" && $co === "" && $cena === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' ', $przebieg;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "" && $cena === "" && $przebieg === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' ', $co;
$all = ob_get_contents();
ob_end_clean();
}elseif ($przebieg === "" && $cena === "" && $co === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' kolor like ', $kolor;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "" && $co === "") {
ob_start();
echo $select,' ', $skad, $gdzie, ' ', $przebieg, ' and ',$cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($co === "" && $przebieg === ""){
ob_start();
echo $select,' ', $skad,$gdzie,' kolor like ', $kolor, ' and ',$cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "" && $przebieg === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' ', $co, ' and ',$cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "" && $cena === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' ', $co, ' and ', $przebieg;
$all = ob_get_contents();
ob_end_clean();
}elseif ($przebieg === "" && $cena === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' ', $co, ' and ', 'kolor like ', $kolor;
$all = ob_get_contents();
ob_end_clean();
}elseif ($co === "" && $cena === "") {
ob_start();
echo $select,' ', $skad, $gdzie,' kolor like ', $kolor,' and ', $przebieg;
$all = ob_get_contents();
ob_end_clean();
}elseif ($co === ""){
ob_start();
echo $select,' ', $skad,$gdzie,' ', 'kolor like ', $kolor, ' and ', $cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($kolor === "") {
	ob_start();
echo $select,' ', $skad,$gdzie,' ',$cena,' and ', $przebieg, ' and ',$co, ' and ',$cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($przebieg === ""){
ob_start();
 echo $select,' ', $skad,$gdzie, ' ','kolor like ',$kolor ,' and ', $co, ' and ',$cena;
$all = ob_get_contents();
ob_end_clean();
}elseif ($cena === ""){
ob_start();
 echo $select,' ', $skad,$gdzie, ' ','kolor like ',$kolor ,' and ', $co;
$all = ob_get_contents();
ob_end_clean();
}
else{
	ob_start();
 echo $select,' ', $skad,$gdzie, ' ','kolor like ',$kolor , ' and ',$cena,' and ', $co,' and ', $przebieg;
$all = ob_get_contents();
ob_end_clean();
};
//echo $all;
	
    $query2 = mysqli_query($conn, $all); // zapytanie
    $times = mysqli_num_rows($query2);
        for ($i=0; $i < $times; $i++) {  //wykonuje tyle razy ile powyżej zwrócił wyników dla każdego wiersza
	$forrow = mysqli_fetch_row($query2);
	echo '</br>';
	foreach ($forrow as $key) {
	echo ' ', $key;
	}
	echo '</br>';
}
echo '</br>';
?>
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