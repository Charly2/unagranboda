<?


$prod = $_DATOS[$_GET['id']];



$_TITULO = "Una Gran Boda - ".$prod['titulo'];
include_once 'header.php';
include_once 'vis/vis_productodetalle.php';
include_once 'fotter.php';

?>