<!-- Data Base -->

<? 
// HW: Constants
    define("PAGE_TITLE" , "Booking confirmation");
    define("SEAT_PRICE" , "100.50");
   

    $book_client_vip = true;
    $book_adults = 2; 

    // HW: format the total cost: 111.11 
    $book_cost =  number_format( $book_adults * SEAT_PRICE, 2, ".", " ");
    

?>


<!-- Template/ View -->
<h1><?= PAGE_TITLE ?></h1>
<p>Adults: <?= $book_adults ?></p>
<p>Total cost: <?= $book_adults?> x <?= SEAT_PRICE?> = <?= $book_cost ?></p>

<? if($book_client_vip): ?>
    <p>VIP client</p>
<? endif ?>