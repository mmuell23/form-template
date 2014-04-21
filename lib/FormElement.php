<?php
	namespace RMD\FormTemplate;

	class FormElement {
		private $id;
		private $name;
		private $type;
		private $length;
		private $placeholder;
		
		public function __construct($options) {
			$this->id = isset($options["id"]) ? $options["id"] : false;
			$this->name = isset($options["name"]) ? $options["name"] : false;
			$this->type = isset($options["type"]) ? $options["type"] : false;
			$this->length = isset($options["length"]) ? $options["length"] : false;
			$this->placeholder = isset($options["placeholder"]) ? $options["placeholder"] : false;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getType() {
			return $this->type;
		}
		
		public function getLength() {
			return $this->length;
		}
		
		public function getPlaceholder() {
			return $this->placeholder;
		}
		
	}