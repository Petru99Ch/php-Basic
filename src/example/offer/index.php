<?
    include 'data.php';
    
    $products_from_page = 3; 

// paginator
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    } else {
        $page = 1;
    }
    
    $page > 1 ? $prev_page = $page-1 : "" ;   
    $page < count($products) / $products_from_page ? $next_page = $page+1 : "" ;
// paginator

// price sort

    if(isset($_GET['sort'])){
        $direction = $_GET['sort'];
    } else {
        $direction = "descending";
    }

    if($direction == "descending"){
        usort($products , fn ($p1, $p2) => $p2['price']['amount'] - $p1['price']['amount'] ); 
    } else if ($direction == "ascending"){
        usort($products , fn ($p1, $p2) => $p1['price']['amount'] - $p2['price']['amount'] );
    }
    
    

?>

<style>

    a {
        text-decoration: none;
        margin:1em;
    }
    .underline{
        text-decoration: underline;
    }

</style>




    <?if($page != 1){?>
        <a href="?p=<?= $prev_page?>">&lt;</a>
    <?}?>

    <span>
            
            <? for ($i = 1; $i<= count($products) / $products_from_page ; $i++ ){
                if($page == $i){
                    print("<a href='?p=$i' class='underline'>$i</a>");
                } else {
                    print("<a href='?p=$i'>$i</a>") ;
                }
                
            }; ?>
    </span>

    <?if($page != count($products) / $products_from_page){?>
        <a href="?p=<?= $next_page?>">&gt;</a>
    <?}?>

    <div>
        <a href="?sort=descending">Expensive</a>
        <a href="?sort=ascending">Cheap</a>
    </div>
        


    <ul>

        <? if($page == 1) {?>
            <? for($i= 0; $i <  $products_from_page;  $i++ ) {?>
                <li>
                    <h2>
                        <?= $products[$i]['name']  ?>
                        <?if($products[$i]['new']) { ?> <img src="<?= NEW_STICKER?>" width='50'/> <? } ?>
                    </h2>
                    <h3><?= $products[$i]['category'] ?></h3>
                    <img src="<?= $products[$i]['image'] ?>" width='200'>
                    <div> <?= $products[$i]['price']['amount']?> <?=$products[$i]['price']['currency'] ?></div> <hr>
                </li>
            <?}?>
        <?} elseif ($page == 2)  {?>
            <? for($i = count($products) - $products_from_page; $i <  count($products);  $i++ ) {?>
                <li>
                    <h2>
                        <?= $products[$i]['name']  ?>
                        <?if($products[$i]['new']) { ?> <img src="<?= NEW_STICKER?>" width='50'/> <? } ?>
                    </h2>
                    <h3><?= $products[$i]['category'] ?></h3>
                    <img src="<?= $products[$i]['image'] ?>" width='200'>
                    <div> <?= $products[$i]['price']['amount']?> <?=$products[$i]['price']['currency'] ?></div> <hr>
                </li>
            <?}?>
        <? }?>
        
    </ul>