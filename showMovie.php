<?php
   
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
        <div id="poster-outer-container">
            <div class="container" id="home-outer-container">
                <div id="movie-poster-container">
                    <img id="movie-poster" src="...">
                </div>
            </div>
            <div id="movie-details-container">
                <div id="movie-title-container">
                    <h1 class="h1">Movie Title</h1>
                    <div id="movie-facts">
                        <span id="release-date">12/11/2018</span>
                        <span></span>
                        <span id="movie-genre">Genre</span>
                    </div>
                </div>
            </div>
            <a href="payment.php"><button>Rent</button></a>
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