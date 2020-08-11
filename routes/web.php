<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/', function () {
    return view('dashboard');
}); */

Route::get('/dashboardnew', function () {

    return view('dashboard', $data);
});

Route::get('/', function () {
    $data = array('projekte'=>array('p1'=>array(
        'projectname' => 'OnlineShop',
        'projectmanager'=>'Ivan Gartsev',
        'pshortcut'=>'ZW',
        'projectdetails'=>array(
            'starttime'=>"12.12.2020",
            'deadline'=>"31.12.2020",
            'customeremail'=>"customer@zentralweb.de",
            "linktoplay"=>'zentralweb.de'
        )
    ),
        'p2'=>array(
            'projectname' => 'OnlineShop',
            'projectmanager'=>'Ivan Gartsev',
            'pshortcut'=>'ZW',
            'projectdetails'=>array(
                'starttime'=>"12.12.2020",
                'deadline'=>"31.12.2020",
                'customeremail'=>"customer@zentralweb.de",
                "linktoplay"=>'zentralweb.de'
            )
        )
    ));
    return view('dashboard', $data);
});


