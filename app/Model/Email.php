<?php
	class Email extends AppModel {
        public $useTable = 'emails';
        public $order = array('email' => 'ASC');
        public $displayField = 'email';
		//public $hasMany = array('Palestra');

		/*public $validate = array(

			'nome' => array(
				'rule' => 'notEmpty', // N�o vazio
				'message' => 'Preencha o nome'
			),

			'descricao' => array(
				'rule' => 'notEmpty', // N�o vazio
				'message' => 'Preencha descri��o'
			),

			'url' => array(
				'rule' => 'url', // N�o vazio
				'message' => 'Preencha a URL corretamente'
			)

		);*/

	}
?>