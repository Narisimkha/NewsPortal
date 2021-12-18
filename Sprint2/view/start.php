<?php
ob_start();
?>
<h1>TOP 3 NEWS</h1>
<br>
<?php
//echo 'start site4';
ViewNews::NewsByCategory($arr);
//echo 'start site5';
$content = ob_get_clean();

include_once 'view/layout.php';

?>