<h3 class="page-header">Eventos</h3>
<?php foreach ($posts->result() as $post) { ?>
    <div class="row wpn-postagens">
        <div class="col-md-12">
            <h3><?php echo anchor('post/'.$post->link, $post->title); ?></h3>
            <p class="text-muted">
                <span><b>Data</b> <?php echo mdate('%d/%m/%Y', strtotime($post->created)); ?> | <b>Local</b> <?php echo $post->description; ?><br/></span>
            </p>
            <?php
            if ($post->image) {
                ?>
                <div class="wpn-capa">
                    <!-- Largura mínima de 700px -->
                    <?php
                    $img_data = array(
                        'src'=>'media/capas/'.$post->image, 
                        'class'=>'img-responsive', 
                        'style'=>'margin-top:5px;', 
                        'alt'=>$post->title, 
                        'title'=>$post->title
                    );
                    echo anchor('post/'.$post->link, img($img_data));
                    ?>
                </div>
                <?php
            }
            ?>
            <p><?php echo word_limiter(strip_tags($post->content), 60); ?></p>
        </div>
    </div>
    <?php
}
?>