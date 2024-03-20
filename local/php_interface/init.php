<?php

foreach (new DirectoryIterator($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include') as $element){
    if($element->isFile())
        require_once $element->getPathname();
}
