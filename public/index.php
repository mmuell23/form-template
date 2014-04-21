<?php 
	use RMD\FormTemplate\StandardArticleScheme;
	use RMD\FormTemplate\FormRenderer;

	require_once("../lib/config.php");
	$scheme = new StandardArticleScheme();
	$h = FormRenderer::renderForm($scheme->getFormElements(), array(), array("action" => "index.php", "method" => "post"));
	
	require_once("../inc/header.php");
	echo $h;
	require_once("../inc/footer.php");
?>