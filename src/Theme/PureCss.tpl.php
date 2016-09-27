<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="stylesheet" href="/combo/1.18.13?/css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="/_composer-components/bors-theme-purecss/asset/main-blue-1.18.13.css">
    <!--<![endif]-->

<!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
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
        <a href="#menu" id="menuLink" class="menu-link">
    <span></span>
</a>
<div id="menu">
    <div class="pure-menu">
        <a class="pure-menu-heading" href="/">Pure</a>
        <ul class="pure-menu-list">
          
            <li class="pure-menu-item pure-menu-selected">
                <a href="/start/" class="pure-menu-link">Get Started</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/layouts/" class="pure-menu-link">Layouts</a>
            </li>
          
            <li class="pure-menu-item menu-item-divided">
                <a href="/base/" class="pure-menu-link">Base</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/grids/" class="pure-menu-link">Grids</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/forms/" class="pure-menu-link">Forms</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/buttons/" class="pure-menu-link">Buttons</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/tables/" class="pure-menu-link">Tables</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/menus/" class="pure-menu-link">Menus</a>
            </li>
          
            <li class="pure-menu-item menu-item-divided">
                <a href="/tools/" class="pure-menu-link">Tools</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/customize/" class="pure-menu-link">Customize</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="/extend/" class="pure-menu-link">Extend</a>
            </li>
          
            <li class="pure-menu-item">
                <a href="http://blog.purecss.io/" class="pure-menu-link">Blog</a>
            </li>
            <li class="pure-menu-item">
                <a href="https://github.com/yahoo/pure/releases/" class="pure-menu-link">Releases</a>
            </li>
        </ul>
    </div>
</div>


        <div id="main">

<div class="content">
		<?= $self->layout()->breadcrumbs(); ?>
</div>

<div class="header">
			<h1><?= $self->page_title() ?></h1>
			<?php if($self->description()) echo "<h2>".htmlspecialchars($self->description())."</h2>"; ?>
</div>


<div class="content">

		<?= $self->body() ?>

</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
