<section class="perfil-info">
    <div style="max-width:1280px;" class="container">
        <div class="w30">
        <h2 class="title" ><?php echo $_SESSION['nome_membro'] ?></h2>
        <div class="container-img">
            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img_membro'] ?>" alt="Imagem do perfil">
        </div>
        <div class="lista-amigos">
        <?php 
            $amigos = \models\membrosModel::listarAmigos();
            
        ?>
            <h3><i class="fa fa-users"></i> Minhas amizades (<?php echo count($amigos) ?>)</h3>
            
           <?php
                foreach ($amigos as $key => $value) {
                    $membro = \models\membrosModel::getMembroById($value);
                ?>
                <div class="img-single-amigo">
                    <div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL.'uploads/'.$membro['imagem'] ?>')" class="img-single-amigo-wraper"></div>
                </div>

                <?php } ?>
            <div class="clear"></div>
        </div>
        </div>
    </div>
</section>

<section class="feed">
    <div style="max-width:1280px;" class="container">
        <div class="w70">        
            <h2 class="title" >O que está pensando hoje?</h2>
            <form method="post">
                    <textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
                    <input type="submit" value="Enviar!" name="feed_post">
            </form>
                </br>
                <?php
                    $postFeed = \MySql::conectar()->prepare("SELECT * FROM `tb_site.feed` ORDER BY id DESC");
                    $postFeed->execute();
                    $postFeed = $postFeed->fetchAll();
                    foreach ($postFeed as $key => $value) {
                        $membro = \models\membrosModel::getMembroById($value['membro_id']);
                        ?>
               
            <div class="post-single-user">
                <div class="img-user-post">
                    <img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/' ?><?php echo $membro['imagem'] ?>" alt="Imgem de perfil">
                </div>

                <div class="post-user-single">
                    <p style="color:blue;" ><?php echo $membro['nome'] ?></p>
                    <p><?php echo $value['post'] ?></p>
                </div>
                <div class="clear"></div>
            </div>
                    <?php } ?>
        </div>
    </div>
</section>

