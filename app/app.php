<?php 
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/Scrabble.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app) {
		return $app['twig']->render('home_page.html.twig');
	});
	
	$app->get("/scrabble_score", function() use ($app) {
		$game = new Scrabble;
		$scra_score = $game->score($_GET['word']);
		return $app['twig']->render('scrabble_score.html.twig', array('score' => $scra_score));
	});
	
	return $app;
?>