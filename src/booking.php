<? 

    const TICKET_PRICE = 100; 


    if(array_key_exists('quantity', $_GET)){

        
        
        $quantity = $_GET['quantity'];      

        if(is_numeric($quantity)){

            if(preg_match('/^[ 0-9]+$/', $quantity)){
                $total = TICKET_PRICE * $quantity ; 

                $output = $total;
            } else {
                $errors = "Sppecify integer number !";
            }
            

            
        } else {
            $errors = "Sppecify number !";
        }
      
        
    } else {
       $errors = "You didn't sppecify any quantity!";
    }



?>

<a href="/booking.php?quantity=1">Buy 1 ticket</a> <br>
<a href="/booking.php?quantity=2">Buy 2 tickets</a> <br>
<a href="/booking.php?quantity=3">Buy 3 tickets</a> <br>

<hr>

<form method="GET" action="/booking.php">
    <input type="text" name="quantity" placeholder = "enter desired value...">
    <button>BUY</button>
</form>

<hr>

<? if (isset($output)): ?>

    <div>
    <?= $quantity?> tickets x <?= TICKET_PRICE ?> =   <?= $output ?>
    </div>

<? endif ?>

<? if (isset($errors)): ?>
    
    <div style = "color: red;">
        <?= $errors ?>
    </div>

<? endif ?>
   