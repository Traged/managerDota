<?php

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

use App\News;
use App\Player;
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {return view('welcome');});
Route::get('/about', function () {return view('info.about');})->name('about');
Route::get('/news', function () {
    $news = News::all();
    if(count($news)==0)$news ='1';
    return view('info.news', compact('news'));})->name('news');
Route::get('/players', function () {
    $players=Player::all();
    return view('info.players', compact('players'));})->name('players');
Route::get('/rankings', function () {return view('info.rankings');})->name('rankings');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//
Route::get('/user ', function(){


//    dd($input);
    return redirect('user/team');
});

// USER PART

Route::resource('user/team', 'UserTeamController');
Route::get('user/team/{team}/{position}',['as' => 'add.player', 'uses'=> 'UserTeamController@add_player']);
Route::post('user/team/insert',['as'=>'insert.player','uses'=>'UserTeamController@insert_player',]);
Route::get('user/kick', ['as'=>'kick.player', 'uses'=>'UserTeamController@kick_player']);
Route::get('user/teams', ['as'=>'team.list', 'uses'=>'UserTeamController@show_teams']);
Route::get('user/player/{player}', ['as'=>'show.player', 'uses'=>'UserTeamController@show_player' ]);
Route::get('user/players', ['as'=>'show.players', 'uses'=>'UserTeamController@show_players']);

//Matches
Route::get('match/{team}', ['as'=>'match.teams', 'uses'=>'MatchmakingController@runmatch']);
Route::get('scrim/{team}', ['as'=>'scrim.teams', 'uses'=>'MatchmakingController@scrim']);
Route::get('allmatches', ['as'=>'allmatches', 'uses'=>'MatchmakingController@allmatches']);

//  ADMIN PART

Route::resource(    'admin/users', 'AdminUserController');
Route::resource(    'admin/players', 'AdminPlayerController');
