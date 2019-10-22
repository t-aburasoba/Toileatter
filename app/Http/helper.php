<?php
// app/Http/helper.php

function delete_form($url, $label = '削除')
{
    $form = Form::open(['method' => 'DELETE', 'url' => $url, 'class' => 'd-inline']);
    $form .= Form::submit($label, ['class' => 'cp_btn']);
    $form .= Form::close();

    return $form;
}