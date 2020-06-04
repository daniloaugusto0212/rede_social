<?php
	namespace controller;
    use \views\mainView;
    
    class solicitacoesController
    {
        public function index(){
            if (!isset($_SESSION['email_membro'])) {
                \Painel::redirect(INCLUDE_PATH);
            }
            if (isset($_GET['sair'])) {
                session_unset();
                session_destroy();
                \Painel::redirect(INCLUDE_PATH);
            }
            mainView::render('solicitacoes.php',[],'pages/includes/headerLogado.php');
        }        
    }