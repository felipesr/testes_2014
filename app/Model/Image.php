<?php
	/*
	class Image extends AppModel {
		public $actsAs = array(
			'Upload.Upload' => array(
				'resume' => array(
					'fields' => array(
						'dir' => 'resume_dir',
						'type' => 'resume_type',
						'size' => 'resume_size',
					)
				),
				'photo' => array(
					'fields' => array(
						'dir' => 'photo_dir',
						'type' => 'photo_type',
						'size' => 'photo_size',
					)
				)
			)
		);
	}*/
	
	class Image extends AppModel {
		
		public $actsAs = array(
			'Upload.Upload' => array(
				//'resume',
				'photo' => array(
								 
					/*'fields' => array(
						'dir' => 'photo_dir',
						'type' => 'resume_type',
						'size' => 'resume_size',
					),*/
					
					/*'thumbnailSizes' => array( // cria thumbnails nos tamanhos abaixo
						'xvga' => '1024x768',
						'vga' => '640x480',
						'thumb' => '80x80',
						'thumb2' => '100w'
					),*/
					
						'thumbnailMethod' => 'php'
				)
			)
		);
		
		// https://github.com/josegonzalez/cakephp-upload/blob/master/README.markdown#validation-rules
		public $validate = array(
			'photo' => array(
				'rule' => 'isCompletedUpload',
				'message' => 'File was not successfully uploaded'
			),
			
			'photo' => array(
				'rule' => array('isValidMimeType', array('application/pdf', 'image/png')),
				'message' => 'File is not a pdf or png'
    		),
			
			'photo' => array(
				'rule' => array('isValidExtension', array('pdf', 'png', 'txt')),
				'message' => 'File does not have a pdf, png, or txt extension'
			),
			
		);
		
	}
	
?>