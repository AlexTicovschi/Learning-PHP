<html>
<head>
	<title>Classes and Objects in PHP</title>		
</head>

<body>
	
<?php 


class Movie {
	const BR = '<br />';

	var $price;
	var $name;
	var $photo;
	var $dir = 'movies/';

	public function print_movie() {
		echo "<div style='margin-right: 40px; margin-top: 30px; text-align: center;'>";
		echo "<div style='font-size=5px;'>{$this->name}</div>".self::BR;
		echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
		echo '$'.$this->price;
	}

	public function set_movie($name, $price, $photo) {
		$this->name = $name;
		$this->price = $price;
		$this->photo = $photo;
	}
}

$movie = new Movie;
$movie->name = 'Inheirt the Wind';
$movie->price = 2.99;
$movie->photo = 'inherit_the_wind.jpg';

$movie->print_movie();

$movie->name = 'Judgement at Nuremberg';
$movie->price = 5.00;
$movie->photo = 'judgement_at_nuremberg.jpg';

$movie->print_movie();

$movie->set_movie('Unforgiven', 5.99, 'unforgiven.jpg');
$movie->print_movie();

?>



</body>
</html>

