<? include 'middleware-page.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/css/style.css'  >
    <title>XBOOKING</title>
</head>
<body>
    <?
        include './template/header.php';        
                  
        include "./template/{$page}.php";   
        
        include './template/footer.php';
    ?>

    
</body>
</html>