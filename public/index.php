<?php
	use App\Core\Template;
	use App\Helpers\Pdf;
	require '../vendor/autoload.php';
	$data = array(
		"nombre" => "Kevin Mike Herrera Vega",
		"curso" => "PROGRAMACION"
	);

	/*require '../Course/Template.php';
	require '../Course/Pdf.php';*/
	
	//die($html);
	//var_dump($html);
	//exit;

	//Test::hello();
	$html = Template::render("pdf/certificate",$data);
	
	Pdf::render("certificate",$html);

?>