<?
if(array_key_exists('color', $_GET) ){
    $color = $_GET["color"];

    switch ($color) {
        case "red":
            $color_red = "red";
            break;
        case "yellow":
            $color_yellow = "yellow";
            break;
        case "green":
            $color_green = "green";
            break;
        default : $color = "#bbb";
    };

    } else {
        $color="#bbb";
    }
        



?>

<style>
    a {
        display:block;
        border-radius: 100%;
        margin: 2em;
        width: 40px;
        height:40px;
        background: #aaa;
    }
</style>

<? if($color): ?>
    <a style="background: <?= $color_red ?> ;" href="./traffic-light.php?color=red"></a>
<? endif ?>

<?if($color) :?>
    <a style="background: <?= $color_yellow ?> ;" href="./traffic-light.php?color=yellow"></a>
<?endif?>

<?if($color) :?>
    <a style="background: <?= $color_green ?> ;" href="./traffic-light.php?color=green"></a>
<?endif?>





