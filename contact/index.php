<?php
if(isset($_POST['action']) && $_POST['action'] == 'save'){
  echo '<pre>we need to process this information';
  var_dump($_POST);
  echo "<br/>but thats for another lesson</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>The Lazy Fox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:bold,light,regular">
    <!-- Bootstrap -->
    <link href="/css/default.css" rel="stylesheet" media="screen">
</head>
<body>
<div id="home">
    <nav class="navbar navbar-wrapper navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">the lazy fox</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="/illustration/"> Illustration </a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="/web/"> Web </a>
                    <li class="divider-vertical"></li>
                    <li><a href="/design/"> Design </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">CV</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="/contact/">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form role="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="action" name="action" value="save" />
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="10" name="message" id="message">say something!</textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload">File input</label>
                        <input type="file" id="upload">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="checkbox" value="yes"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hr">
                    <span class="hr-span">
                        Copyright TheLazyFox 2014. All rights reserved
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>