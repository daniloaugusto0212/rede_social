<?php
	namespace controller;
    use \views\mainView;
    
    class solicitacoesController
    {
        public function index(){
            if (!isset($_SESSION['email_membro'])) {
                \Painel::redirect(INCLUDE_PATH);
            }
           
            mainView::render('solicitacoes.php',['controller'=>$this],'pages/includes/headerLogado.php');
        }        

        public function listarSolicitacoes(){
            $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_site.solicitacoes` WHERE id_to = ? AND status = 0");
            $sql->execute(array($_SESSION['id_membro']));

            return $sql->fetchAll();
        }
    }