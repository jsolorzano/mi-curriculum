<?php
ini_set('max_execution_time', 60);

// Librería de pdf
require_once dirname(__FILE__).'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

// Generación del curriculum en formato pdf.

if(isset($_POST['download_cv'])){
	
	ob_start();
    include dirname(__FILE__).'/views/example01.php';
    $content = ob_get_clean();

	$html2pdf = new Html2Pdf();
	$html2pdf->writeHTML($content);
	$html2pdf->output('example.pdf', 'D');

}
?>
