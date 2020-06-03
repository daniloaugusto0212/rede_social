<?php
	namespace controller;
	use \views\mainView;

	class homeController
	{
		public function index(){
			if (isset($_SESSION['email_membro'])) {
				\Painel::redirect(INCLUDE_PATH.'me');
			}
			if (isset($_POST['login'])) {
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$verifica = \MySql::conectar()->prepare("SELECT * FROM `tb_site.membros` WHERE email = ? AND senha = ?");
				$verifica->execute(array($email,$senha));
				if ($verifica->rowCount() == 1) {
					$info = $verifica->fetch();
					$_SESSION['email_membro'] = $email;
					$_SESSION['nome_membro'] = $info['nome'];
					$_SESSION['img_membro'] = $info['imagem'];
					\Painel::alertJS("Login efetuado com sucesso!");
					\Painel::redirect(INCLUDE_PATH.'me');
				}else{
					\Painel::alertJS("E-mail ou senha inválido!");
				}
			}
			if (isset($_POST['cadastro'])) {
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$senha_confirm = $_POST['senha_confirm'];
				$imagem = $_FILES['imagem'];
				if ($senha != $senha_confirm) {
					\Painel::alertJS("As senhas não coincidem!");
				}else if (\Painel::imagemValida($imagem) == false) {
					\Painel::alertJS("A imagem é inválida!");
				}else{
					//Realizar o cadastro!

					//Veriifica se o email ja existe no BD
					$verifica = \MySql::conectar()->prepare("SELECT email FROM `tb_site.membros` WHERE email = ?");
					$verifica->execute(array($email));
					if ($verifica->rowCount() == 0) {					
						$idImagem = \Painel::uploadFile($imagem); //Cria o ID para a imagem e envia para a pasta uploads
						$sql = \MySql::conectar()->prepare("INSERT INTO `tb_site.membros` VALUES(null,?,?,?,?,?)");
						$sql->execute(array($nome,$email,$senha,$senha_confirm,$idImagem));
						\Painel::alertJS("O cadastro foi realizado com sucesso!");
					}else{
						\Painel::alertJS("Já exite um usuário adastrado com este email!");
					}
				}
			}
			mainView::render('home.php');
		}
	}
?>