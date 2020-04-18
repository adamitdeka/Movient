<?php
 class Movie{
    public static $apiKey = "a3d4743165b421443068d5467991b802";
    public function getGenre(){
        $endPoint = "https://api.themoviedb.org/3/genre/movie/list?api_key=".$this::$apiKey;
        $genres = file_get_contents($endPoint);
        $genres = json_decode($genres,true);
        $genres = $genres['genres'];
        return $genres;
    }

    public function getMovie($id){
        $endPoint = "https://api.themoviedb.org/3/movie/$id?api_key=".$this::$apiKey."&language=en-US";
        $details = file_get_contents($endPoint);
        $details = json_decode($details,true);
        return $details;
    }

    public function getPopMovies(){
        $endPoint = "https://api.themoviedb.org/3/movie/popular?api_key=".$this::$apiKey."&language=en-US&page=1";
        $popMovies = file_get_contents($endPoint);
        $popMovies = json_decode($popMovies,true);
        $popMovies = $popMovies['results'];
        $topPopMovies = [];
        for($i = 0; $i<=2; $i++){
            $topPopMovies[] = $popMovies[$i];
        }
        return($topPopMovies);
    }

    
 }
?>