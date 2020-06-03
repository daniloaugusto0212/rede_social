<?php
	namespace controller;
    use \views\mainView;
    
    class comunidadeController
    {
        public function index(){
            if (!isset($_SESSION['email_membro'])) {
                \Painel::redirect(INCLUDE_PATH);
            }
            
            mainView::render('comunidade.php',[],'pages/includes/headerLogado.php');
        }        
    }