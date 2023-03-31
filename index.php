<?php
    class Movies{
        public $title;
        public $plot;
        public $actors;
        public $director;
        public $vote;

        function __construct($title, $vote, $director, $genre, $plot){
            $this->title = $title;
            $this->vote = $vote;
            $this->director = $director;
            $this->genre = $genre;
            $this->plot = $plot;
        }
    }

    $johnWick4 = new Movies('John Wick 4', '4', 'Chad Stahelski', 'Azione, Drammatico, Thriller', 'John Wick 4 è un film di genere azione, drammatico, thriller del 2023, diretto da Chad Stahelski, con Keanu Reeves e Donnie Yen. Uscita al cinema il 23 marzo 2023. Durata 169 minuti. Distribuito da 01 Distribution.');
    $dungeonsAndDragons = new Movies("Dungeons & Dragons - L'onore dei ladri", '4', 'John Francis Daley, Jonathan M. Goldstein', 'Azione, Avventura, Fantasy', "Dungeons & Dragons - L'onore dei ladri è un film di genere azione, avventura, fantasy del 2023, diretto da John Francis Daley, Jonathan M. Goldstein, con Chris Pine e Regé-Jean Page. Uscita al cinema il 29 marzo 2023. Durata 134 minuti. Distribuito da Eagle Pictures.")
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <title>Php Oop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

  <main class="container pb-5">
    <h1 class="my-5">Movies List</h1>

    <div class="d-flex">

        <div class="card p-3">
            <h3 class="card-title"><?php echo $johnWick4->title ?></h3>
            <div class="card-title">Voto: <?php echo $johnWick4->vote ?>/5</div>
            <div class="card-title">Regista: <?php echo $johnWick4->director ?></div>
            <div class="card-title">Genere: <?php echo $johnWick4->genre ?></div>
            <div class="card-title">Trama: <?php echo $johnWick4->plot ?></div>
        </div>

        <div class="card p-3">
            <h3 class="card-title"><?php echo $dungeonsAndDragons->title ?></h3>
            <div class="card-title">Voto: <?php echo $dungeonsAndDragons->vote ?>/5</div>
            <div class="card-title">Regista: <?php echo $dungeonsAndDragons->director ?></div>
            <div class="card-title">Genere: <?php echo $dungeonsAndDragons->genre ?></div>
            <div class="card-title">Trama: <?php echo $dungeonsAndDragons->plot ?></div>
        </div>

    </div>
  </main>
</body>

</html>