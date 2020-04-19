<?php
    require_once "classes/movie.php";
    $movieID = $_GET['id'];
    $movie = new Movie();
    $details = $movie->getMovie($movieID);
    $posterPath = "https://image.tmdb.org/t/p/w400/".$details['poster_path'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Home</title>
  </head>
  <body>
    
    <header>
        <div id="header"></div>
    </header>
    <main>
        <div class="container show-movie-container">
            <div class="movie-poster-container">
                <img  src="<?=$posterPath?>">
            </div>
            <div class="movie-details-container">
                <h2 class="display-4"><?=$details['original_title']?></h2>
                <div class="movie-stats-container">
                    <span class="movie-stat lead"><?=$details['release_date']?> |</span>
                    <span class="movie-stat lead"><?php
                        foreach($details['genres'] as $genre){
                            echo($genre['name']." |");
                        }
                    ?></span>
                </div>
                <div class="overview-container">
                    <h3 class="h3">Overview</h3>
                    <p class="lead"><?=$details['overview']?></p>
                </div>
                <div class="movie-crew-container">
                    <div class="crew-item">
                        <span class="crew-name lead">crew name</span>
                        <span class="crew-position lead">crew position</span>
                    </div>
                    <div class="crew-item">
                        <span class="crew-name lead">crew name</span>
                        <span class="crew-position lead">crew position</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary rent-btn" onclick="location.href = 'payment.php?id=<?=$movieID?>'">Rent</button>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer"></div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        
        $("#header").load("includes/header.html"); 
        $("#footer").load("includes/footer.html"); 
        
    </script>
  </body>
</html>