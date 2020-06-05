<?php
	namespace models;

	class membrosModel{
        
        public static function getMembroById($id){
            $info = \MySql::conectar()->prepare("SELECT * FROM `tb_site.membros` WHERE id = $id");
            $info->execute();
            return $info->fetch();
        }

	}
?>