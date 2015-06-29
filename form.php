<?php session_start(); ?>

<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
?>

<?php
switch (get_post_action('excel', 'visualizar')) {
    case 'excel':
        header("location:calculadora2.php", TRUE, 307);
        break;

    case 'visualizar':
        header("location:calculadora.php", TRUE, 307);
        break;
}
?>
