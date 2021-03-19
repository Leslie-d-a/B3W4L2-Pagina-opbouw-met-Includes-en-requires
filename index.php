<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div id='wrapper'>
      <?php include 'includes/header.php';?>
      <section class='content'>
      <?php 
        if (empty($_GET)) {
          include_once 'pages/onderwerp1.php';
        } else {
          include_once($_GET['pageContent']);
        }
      ?>
      </section>
      <?php include 'includes/footer.php';?>
    </div>
</body>
</html>