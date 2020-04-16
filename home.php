<?php
    require_once "classes/movie.php";
    $movie = new Movie();
    $genres = $movie->getGenre();
    $topPopularMovies = $movie->getPopMovies();
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
        <div class="container" id="home-outer-container">
            <div id="home-inner-container">
                <!--Genre container-->
                <div id="genre-container">
                    <h2 class="display-4 h2" id="genre-heading">Genres</h2>
                    <ul id="genre-menu">
                        <!--genre names-->
                        <?php
                            foreach($genres as $genre){
                                echo("<li class='genre-menu-item lead'>".$genre['name']."</li>");
                            }
                        ?>
                    </ul>
                </div>
                
                <!--Genre container end-->
                <!--Movie Container-->
                <div id="movie-container">
                    <div id="popular-container">
                        <h2 class="display-4 h2" id="popular-movie-heading">Popular Movies</h2>
                        <div id="popular-item-container">
                            <div class="card-deck">
                                <!--Popular movie cards-->
                                <?php
                                    foreach($topPopularMovies as $movie){
                                        echo("
                                            <div class='card'>
                                                <a href='showMovie.php?id=".$movie['id']."'>
                                                    <img class='card-img-top' src='https://image.tmdb.org/t/p/w400/".$movie['poster_path']."' alt='Card image cap'>
                                                    <div class='card-body'>
                                                        <h5 class='card-title lead movie-title'>".$movie['title']."</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        ");
                                    }
                                ?>
                            </div>
                        </div>
                    <div id="list-movies-container">
                        <h2 class="display-4 h2" id="popular-movie-heading">Genre name</h2>
                        <div class="popular-item-container">
                            <!--movie card-->
                        </div>
                    </div>
                </div>
                <!--Movie container end-->
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