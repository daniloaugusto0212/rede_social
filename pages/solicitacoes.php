<section class="comunidade">
    <div class="container">
        <div class="w100">
            <h2 class="title">Solicitações pendentes</h2>
            <table class="solicitacoes-table" >

            <?php
                $solicitacoesPendentes = $arr['controller']->listarSolicitacoes();
                foreach ($solicitacoesPendentes as $key => $value) {
                //Puxar informações do solicitante
                $membro = \models\membrosModel::getMembroById($value['id_from']);
                   ?>
                   <tr>
                    <td>
                        <img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/'.$membro['imagem'] ?>" alt="Foto de <?php echo $membro['nome'] ?>">
                        <p><?php echo $membro['nome'] ?></p>
                    </td>
                    <td>
                        <a href="">Aceitar!</a>
                        <a href="">Rejeitar!</a>
                    </td>
                   </tr>
                <?php } ?>

            </table>

        </div>  
    </div>  
</section>  