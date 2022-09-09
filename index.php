<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $vote;

    public function __construct($title, $genre, $year, $vote)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->vote = $vote;
    }
    public function getGenre()
    {
        return $this->genre;
    }
}


$movie1 = new Movie('Interstellar', 'Sci-fi', '2014', '8.6');
$movie2 = new Movie('Lord of the Rings: The Fellowship of the Ring', 'Fantasy', '2001', '8.8');
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
    <ul>
        <li><h1><?= $movie1->title ?></h1></li>
        <li><h3><?= $movie1->getGenre() ?></h3></li>
        <li><h3><?= $movie1->year ?></h3></li>
        <li><h3><?= $movie1->vote ?></h3></li>
    </ul>

    <ul>
        <li><h1><?= $movie2->title ?></h1></li>
        <li><h3><?= $movie2->getGenre() ?></h3></li>
        <li><h3><?= $movie2->year ?></h3></li>
        <li><h3><?= $movie2->vote ?></h3></li>
    </ul>

    <ul>
        <li><h1><?= $movie3->title ?></h1></li>
        <li><h3><?= $movie3->getGenre() ?></h3></li>
        <li><h3><?= $movie3->year ?></h3></li>
        <li><h3><?= $movie3->vote ?></h3></li>
    </ul>

    <ul>
        <li><h1><?= $movie4->title ?></h1></li>
        <li><h3><?= $movie4->getGenre() ?></h3></li>
        <li><h3><?= $movie4->year ?></h3></li>
        <li><h3><?= $movie4->vote ?></h3></li>
    </ul>

    <ul>
        <li><h1><?= $movie5->title ?></h1></li>
        <li><h3><?= $movie5->getGenre() ?></h3></li>
        <li><h3><?= $movie5->year ?></h3></li>
        <li><h3><?= $movie5->vote ?></h3></li>
    </ul>
</body>

</html>

<style>
    ul {
        list-style-type: none;
    }
</style>