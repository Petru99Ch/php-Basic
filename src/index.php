<h1>Welcome to our HOTEL booking</h1>
<?php 
    $days_till_openning = 30 ; 
    $bonusPlaces = 10; 

    // HW: 
    $city  = "Chisinau";
    $street = "Str. Mihail Sadoveanu 4/1";
    $postal_code ="MD-2044";  
    $phone = "060066691";
    $email = "booking@example.com";
    $geo_cord = "47.036930, 28.878878";


    
?>

<p>To reserve, contact us</p>
<p>City: <?php print($city) ?></p>
<p>Adress: <?php print($street." ".$postal_code); ?></p>
<p>Phone: <a href="tel:+37360066691"><?php print($phone) ?></a></p>
<p>Send message to email: <a href="mailto:booking@example.com"><?php print($email) ?></a></p>
<p>Open adress to map: <a href="https://maps.app.goo.gl/LjGwitmaVtZD74jS6"> <?php print($geo_cord) ?></a></p>


