<?php 
    $content = 'home';
    if (isset($_GET['p']) && file_exists('pages/'. $_GET['p'] . '.php')) {
       $content = $_GET['p'];
    } elseif (isset($_GET['p']) && !file_exists('pages/'. $_GET['p'] . '.php')) {
        $content = '404';
    }

?>
<!DOCTYPE html>
<html>
<head>
<!--<title>M & N Paints</title>-->
  <?php include __DIR__ . '/head.html';  ?> 
</head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
  <?php include __DIR__ . '/masthead.html';  ?> 
  <?php include __DIR__ . '/navigation.html';  ?> 
<!--   <h1>M & N Paints</h1>
    <p>Welcome to M & N Paints. We have the best granite paints and the best prices in the country.</p>
    <img src="http://jacksonmonumentworks.com/granite-colors/"
 alt="Color Options"/> -->
  <?php include __DIR__ . $content . '.php'; ?>




  <?php include __DIR__ . '/footer.php';  ?> 

</body>
</html>
