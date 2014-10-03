<?php
	class Email extends AppModel {
        public $useTable = 'emails';
        public $order = array('email' => 'ASC');
        public $displayField = 'email';
		//public $hasMany = array('Palestra');

		/*public $validate = array(

			'nome' => array(
				'rule' => 'notEmpty', // Nуo vazio
				'message' => 'Preencha o nome'
			),

			'descricao' => array(
				'rule' => 'notEmpty', // Nуo vazio
				'message' => 'Preencha descriчуo'
			),

			'url' => array(
				'rule' => 'url', // Nуo vazio
				'message' => 'Preencha a URL corretamente'
			)

		);*/

	}
?>