<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title><?= htmlspecialchars($self->browser_title());?></title>
		<meta name="description" content="<?= htmlspecialchars($self->description());?>">

<?= $self->template_metas("\t\t"); ?>

		<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

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

	<div id="layout" class="pure-g">
		 <div class="content pure-u-1 pure-u-md-3-4">
			<div class="header">

<h1><?= $self->page_title(); ?></h1>
			</div>

<?php
	echo $body;
?>

	</div>
</div>

</body>
</html>
