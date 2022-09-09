<?php

class Movie
{
    public $title;
    public $year;
    public $genre;
    public $vote;

public function __construct($id, $title, $year, $genre, $vote){
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
    $this->vote = $vote;
}
}



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