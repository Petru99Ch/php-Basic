<?php

$images = array("https://fastly.picsum.photos/id/468/500/300.jpg?hmac=4vtzWB8lN1a7pNRCKp7he6pFXKiiJZiHHQslN67HyeM", 
                "https://fastly.picsum.photos/id/586/500/300.jpg?hmac=h8usu9QU-BpdBIEoHh-ki_yKG6hi5J8_FjLHBckpcG8", 
                "https://fastly.picsum.photos/id/649/500/300.jpg?hmac=-hbqVkLxhxidP4Wc3sjKAtuJO16oshnYAZtYwA9QLbk",
                "https://fastly.picsum.photos/id/574/500/300.jpg?hmac=iY841bE2HNT_lYHCLj5qy5a7nbVITmMUCP2jD_poKpY",
                "https://fastly.picsum.photos/id/998/500/300.jpg?hmac=9SprroSPSQSbtbgek2puP0wtDIfRqRvWvmE_4Sv13CY",
                "https://fastly.picsum.photos/id/566/500/300.jpg?hmac=26G7V2McR3vR9Un2PlxDBjsAXfI7E7vEwy26nPsgiYc",
                "https://fastly.picsum.photos/id/675/500/300.jpg?hmac=d-H_hQf2ElmS4MXbwEH7-gLVo6lYZ1nM_l5aFgQSIKI",
                "https://fastly.picsum.photos/id/1079/500/300.jpg?hmac=n47OXHeJ13N8wMZ-q2NHehdCbB0MDpDhI_DItxm1kzM"                
);

$size_img = 500;

if(isset($_GET['img'])){
    $image = $_GET['img'];
} else {
    $image = 0; 
}



if($image >= $size_img) {
    $prev_image = $image - $size_img * 3 ;
} else {

}

if($image < $size_img * count($images) - $size_img * 3) {
    $next_image = $image + $size_img * 3; 
}



?>

<style>

    .slider {
            margin: 100px auto;
            width:1500px;            
            overflow: hidden;
            
    }

    .slider .slide img {
        display: inline-block;
        
    }

    .slide {        
        display: flex;
        transform: translateX(-<?= $image?>px);
        
    }
    .button {
        width: 100px; 
        margin: 0 auto; 
        text-align: center;
    }

    .button a {
        display: inline-block; 
        margin: .5em;
        font-size: 1.5em;
        
    }

    

    
</style>



<div class="slider">
    <div class="slide">
        <?
            for($i=0; $i < count($images); $i++){
                print("<img src='$images[$i]'>");
            }
        ?>        
    </div>   
</div>

<div class="button">
    <a href="?img=<?= $prev_image?>">&lt;</a>
    <a href="?img=<?= $next_image?>">&gt;</a>
</div>







