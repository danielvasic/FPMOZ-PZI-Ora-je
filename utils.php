<?php

function load_view($view_path, $params=array()) {
    extract($params);
    return include($view_path);
}

?>