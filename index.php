<?php require 'random_quote.php'; ?>

<!DOCTYPE html>
<html lang = "en">
  <head>
      <meta charset = "UTF-8">
      <title>Random quote</title>
  </head>
  <body>
    <blockquote>
      <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2>
      <strong>- <?php echo $quoteAuthor; ?></strong>
    </blockquote>
  </body>
</html>
