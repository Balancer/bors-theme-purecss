<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title><?= htmlspecialchars($self->browser_title());?></title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<?= $self->template_metas("\t\t"); ?>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
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
<?php
	echo $body;
?>
</body>
</html>
