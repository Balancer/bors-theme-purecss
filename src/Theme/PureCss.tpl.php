<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= htmlspecialchars($self->description());/*"*/?>">
	<title><?= htmlspecialchars($self->browser_title()); ?></title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<!--[if lte IE 8]>
	<link rel="stylesheet" href="/combo/1.18.13?/css/layouts/marketing-old-ie.css">
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->

<?php
	if(!empty($css_list))
		foreach($css_list as $css)
			echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{$css}\" />\n";

	if(!empty($style))
		echo bors_pages_helper::style($style);

	if(!empty($javascript))
	{
		echo "<script type=\"text/javascript\"><!--\n";
		foreach($javascript as $s)
			echo $s,"\n";
		echo "--></script>\n";
	}
?>

</head>

<body>


<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Company</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Services</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

	<div id="main">
        <div class="header">
            <h1>Page Title</h1>
            <h2>A subtitle for your page goes here</h2>
        </div>
	</div>

</div>

	<div class="container theme-showcase" role="main">

		<div class="jumbotron">
			<h1><?= $self->page_title() ?></h1>
			<?php if($self->description()) echo "<p>".htmlspecialchars($self->description())."</p>"; ?>
		</div>

<?php require __DIR__.'/elements/breadcrumbs.tpl.php'; ?>

		<?= $self->body() ?>

	</div> <!-- /container -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script src="../../assets/js/docs.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php

	if(!empty($js_include))
		foreach($js_include as $s)
			echo "<script type=\"text/javascript\" src=\"{$s}\"></script>\n";

	if(!empty($js_include_post))
		foreach($js_include_post as $s)
			echo Element::script()->type("text/javascript")->src($s);

	if(!empty($javascript_post) || !empty($jquery_document_ready))
	{
		echo "<script type=\"text/javascript\"><!--\n";
		if(!empty($javascript_post))
		{
			foreach($javascript_post as $js)
				echo $js;
		}

		if(!empty($jquery_document_ready))
		{
//			echo "\$(document).ready(function() {\n";
			echo "\$(function() {\n";
			foreach($jquery_document_ready as $js)
				echo $js, "\n";
			echo "})\n";
		}

		echo "--></script>\n";
	}
?>

</body>
</html>
