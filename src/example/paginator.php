<style>
    body{
        background: #777;
        
    
    }

    a {
        color: #fff;
        text-decoration: none;
        margin:1em;
    }
    div:first-child {
        text-align: center;
    }

    div {
        width: 500px;
        margin: 0 auto;         
    }

    .underline{
        text-decoration: underline;
    }

    
    
</style>



<!-- LOGIC -->
<?

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else {
    $page = 1;
}



// HW 1<$page<5 

$page > 1 ? $prev_page = $page-1 : "" ;   
$page < 5 ? $next_page = $page+1 : "" ;


?>




<!-- Template -->

<div>
    You are on page <?= $page?>
</div>
<hr>

<div>
    <div>

    <!-- HW :  Hide &lt if $page == 1 -->
        <?if($page != 1):?>
            <a href="?p=<?= $prev_page?>">&lt;</a>
        <?endif?>

        
    
        <span>
            <!-- HW : using loop for render paginator and another method to underline the selected page number -->
            <? for ($i = 1; $i<= 5 ; $i++ ){
                if($page == $i){
                    print("<a href='?p=$i' class='underline'>$i</a>");
                } else {
                    print("<a href='?p=$i'>$i</a>") ;
                }
                
            }; ?>
        </span>


    <!-- HW :  Hide &gt if $page == 5 -->
        <?if($page != 5):?>
            <a href="?p=<?= $next_page?>">&gt;</a>
        <?endif?>

    </div>
    
        
       
    
</div>