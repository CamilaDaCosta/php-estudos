<h1>Álbum</h1>

<a href="?page=new_album" class="btn btn-success">New Álbum</a><hr>
<div class="row">
    <?php
        $albums = getAlbums();        

        //for ($i = 1;$i <= 10; $i++):
        foreach ($albums as $album):
            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            //$imgAlbum = $album .'/' . $nameAlbum .'.jpg';
            $imgAlbum = "{$album}/{$nameAlbum}.jpg";
            //var_dump($imgAlbum);
    ?>

    <div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$album?>" class="img-album">
            <h5><?=$nameAlbum?></h5>
        </a>
    </div>

    <?php
        //endfor;
        endforeach;
    ?>
</div>