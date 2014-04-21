<?php
	namespace RMD\FormTemplate;
	
	class DataScheme {
		protected $scheme_name;
		protected $form_elements = array();
		
		public function __construct($schema_name) {
			$this->schema_name = $schema_name;
			$this->loadSchema();
		}
		
		protected function loadSchema() {
			$json = file_get_contents(SCHEME_FOLDER.$this->schema_name.".json");
			$json = json_decode($json, 1);
			
			foreach($json["fields"] as $field) {
				$element = new FormElement($field);
				array_push($this->form_elements, $element);
			} 
		}
		
		public function getSchemeName(){
			return $this->scheme_name;
		}
		
		public function getFormElements() {
			return $this->form_elements;
		}
	}
?>