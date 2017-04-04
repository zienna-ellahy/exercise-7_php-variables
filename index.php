<?php
  $title = 'Variables';
  $name = 'Zienna';
  $sum = 4+4;
  $sum2 = 3+3;
  $sum3 = $sum + $sum2;

  // Let's get the age based on birth year
  $currentYear = date("Y");
  $birthYear = 1991;
  $roughAge = $currentYear - $birthYear;

  $dob = "07/03/1991"
  $currentmonth = date("M")
  $currentday = date("D")
  $curyear = date("Y")
  $age = $curyear - $dob

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1 class="pb-4">Hello, <?php echo $name; ?></h1>
      <?php echo '<p>You were born in '.$birthYear.', so you&rsquo;re about '.$roughAge.' years old.</p>'; ?>
      <p><strong>The first <code>$sum</code> variable is:</strong> <?php echo $sum; ?></p>
      <p><strong>The second <code>$sum2</code> variable is:</strong> <?php echo $sum2; ?></p>
      <p><strong>The third <code>$sum3</code> variable is:</strong> <?php echo $sum3; ?></p>
    </main>
  </body>
</html>