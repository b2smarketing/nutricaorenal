<?php get_header();

/**
 * Project: Nome do seu projeto
 * Nome: Playlista
 * ID do cliente: 
 * Chave secreta do cliente: 
 * channelId: 
 */
$maxResults=16;
 $chaveSecreta = 'AIzaSyDM76hJEzM03UIsPB6bL01H0XHYMtDsnRA';
$channelId = 'UCGSPnu90EblzX8uQNykMy5w';
$ch = curl_init();
$options = array(
    CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/search?maxResults='.$maxResults.'&order=date&part=snippet&channelId=' . $channelId . '&key=' . $chaveSecreta . '&t=' . time(),
    CURLOPT_HEADER => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array('Accept-Encoding: gzip,deflate')
);
curl_setopt_array($ch, $options);
$arquivo = curl_exec($ch);
curl_close($ch);
$playListas = json_decode(gzdecode($arquivo));
?>


<section id="videos-receitas">
    <div class="bg-blue title">
        <h1>Vídeo Receitas</h1>
    </div>
    <section class="container">
        <!-- Videos -->
        <div class="row">
            <?php
            $contador = 1;
            foreach ($playListas->items as $getVideo) {
            ?>
                <?php
                if ($contador % 2) {
                ?>
                    <div class="col-md-6 video wow fadeInLeft">
                        <h3 class="texto"><?php echo $getVideo->snippet->title; ?></h3>
                        <iframe src="<?= 'https://www.youtube.com/embed/' . $getVideo->id->videoId ?>" frameborder="0" allowfullscreen></iframe>
                    </div>

                <?php } else { ?>
                    <div class="col-md-6 video wow fadeInRight">
                        <h3 class="texto"><?php echo $getVideo->snippet->title; ?></h3>
                        <iframe src="<?= 'https://www.youtube.com/embed/' . $getVideo->id->videoId ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
            <?php }
                $contador++;
            } ?>
        </div>
    </section>

</section>

<?php get_footer(); ?>