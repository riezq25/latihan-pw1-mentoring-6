<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/utils/helpers/UrlHelper.php';

function route()
{
    return [
        'dashboard' => url('/'),
        'galery'    => [
            'index'     => url('/pages/galery/index.php'),
            'create'    => url('/pages/galery/create.php'),
            'store'     => url('/pages/galery/store.php'),
            'edit'      => url('/pages/galery/edit.php'),
            'update'      => url('/pages/galery/update.php'),
            'delete'    => url('/pages/galery/delete.php'),
        ]
    ];
}
