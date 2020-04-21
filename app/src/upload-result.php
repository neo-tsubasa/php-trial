<html>
<head>
  <?php include('./head.php'); ?>
  <title><?php echo('New Item | '.APP_TITLE) ?></title>
</head>
<body>
  <?php include('./components/header.php'); ?>
  <section>
    <?php include('./components/nav.php'); ?>
    <article>
      <?php include('./server/upload-file.php') ?>
    </article>
  </section>
</body>
</html>
