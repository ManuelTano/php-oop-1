<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $vote;

public function __construct($title, $genre, $year, $vote){
    $this->title = $title;
    $this->genre = $genre;
    $this->year = $year;
    $this->vote = $vote;
}
}


$movie1 = new Movie('Interstellar', 'Sci-fi', '2014', '8.6');
$movie2 = new Movie('Lord of the Rings', 'Fantasy', '2001', '8.8');
$movie3 = new Movie('Sopravvisuto - The Martian', 'Sci-fi', '2015', '8.0');
$movie4 = new Movie('Scarface', 'Gangster', '1983', '8.3');
$movie5 = new Movie('The Conjuring', 'Horror', '2013', '7.5');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    
</body>
</html>