<?php
/**
 * Created by PhpStorm.
 * User: djurovic
 * Date: 20.11.17.
 * Time: 19.45
 */
return [
    /*
    |--------------------------------------------------------------------------
    | Use hash name
    |--------------------------------------------------------------------------
    |
    */
    'name_hashing'      => TRUE,

    /*
    |--------------------------------------------------------------------------
    | Default storage
    |--------------------------------------------------------------------------
    |
    | TRUE  => use storage_path()
    | FALSE => use public_path()
    */
    'storage'        => TRUE,

    /*
    |--------------------------------------------------------------------------
    | Type of files - relations
    |--------------------------------------------------------------------------
    |
    */
    'types'          => [
        'file',
        'avatar',
        'thumbnail',
    ],
    /*
    |--------------------------------------------------------------------------
    | Use author
    |--------------------------------------------------------------------------
    |
    */
    'author'         => TRUE,
    /*
    |--------------------------------------------------------------------------
    | Author model
    |--------------------------------------------------------------------------
    |
    */
    'author_model'   => "App\User",
    /*
    |--------------------------------------------------------------------------
    | Default folder
    |--------------------------------------------------------------------------
    |
    | TRUE  => use storage_path()
    | FALSE => use public_path()
    */
    'default_folder' => "lara-files",
];