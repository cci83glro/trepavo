<?php

    function getRenderedHTML($path)
    {
        ob_start();
        include($path);
        $var=ob_get_contents(); 
        ob_end_clean();
        return $var;
    }

    $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    if (array_key_exists('serviceDetailUrl', $_POST)) {

        $html = getRenderedHTML('partials/services/' . $_POST['serviceDetailUrl']);
        
        $response = [
            "status" => true,
            "message" => $html
    ];

    if ($isAjax) {
        header('Content-type:application/json;charset=utf-8');
        echo json_encode($response);
        exit();
    }
}
?>