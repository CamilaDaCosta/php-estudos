<?php

function getAlbums(){
    $albums = glob('albums/*'); //LER DIRETORIO ALBUMS
    return $albums;
}

function getMusics($album){
    $musics = glob("albums/{$album}/musics/*.mp3");
    return $musics;
}