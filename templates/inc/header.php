<!DOCTYPE html>
<html>
    <head>
    <title>JobLister</title>
        <link rel="stylesheet" href="style/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/css/styles.css">
        <!-- Bootstrap core CSS
        <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="https://getbootstrap.com/docs/3.4/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
        <![endif] -->
    </head>

    <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Create Listing</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE ?></h3>
      </div>
 
 <?php displayMessage(); ?>