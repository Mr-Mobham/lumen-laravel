<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use App\Model_Notification;
use App\Http\Resources\Article as Run_Prog;
/**
 *
 */

/** notification **/
$router->get('notification','notification@index');
$router->get('notification/{id}','notification@show');
$router->post('notification','notification@store');
$router->put('notification','notification@store');
$router->delete('notification/{id}','notification@destroy');

/** tab **/
$router->get('notification_tab','Tab@index');

/** posts **/
$router->get('answer_posts/{id}/{post_create}','Answer_Posts@show');
