<?php
	namespace RMD\FormTemplate;
	
	class FormRenderer {
		
		private static $default_settings = array("method" => "post", "submit-label" => "Absenden", "submit-class" => "btn btn-primary");
		
		public static function renderForm($form_elements, $errors, $options) {
			
			foreach(FormRenderer::$default_settings as $option => $val) {
				if(!isset($options[$option])) {
					$options[$option] = $val;
				}
			}
			
			$html = '<form action="'.$options["action"].'" method="'.$options["method"].'" role="form">';
			
			foreach($form_elements as $fe) {
				$html .= '<div class="input-group">';
				
				if($fe->getType() == "text") {
					$html .= '<input type="text" name="'.$fe->getId().'" class="form-control" placeholder="'.$fe->getPlaceholder().'"/>';
				}
				
				if($fe->getType() == "textarea") {
					$html .= '<textarea name="'.$fe->getId().'" class="form-control" placeholder="'.$fe->getPlaceholder().'"></textarea>';
				}
				
				$html .= '</div>';
			}
			
			$html .= '<button type="submit" class="'.$options["submit-class"].'">'.$options["submit-label"].'</button>';
			
			$html .= '</form>';
			
			return $html;
		}
	}