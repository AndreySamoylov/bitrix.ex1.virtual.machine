<?php
function print_r_preformatted(mixed $variable)
{
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
}
