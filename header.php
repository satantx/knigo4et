<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="wrapper" id="app">
	<div class="header">
	    <div class="header-title">
	        <h1><?= $title ?></h1>
	    </div>
	    <div class="header-search">
		<? if ($bookEdit) {?>
			<input type="text" class="search" placeholder="Поиск книги">
		<? } else { ?>
			<input type="text" class="search" placeholder="Поиск автора">
		<? } ?>
	    </div>
	</div>
	<div class="wrap">
