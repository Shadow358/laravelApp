<?php

/*Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');


Route::get('users'), function()
{

  $user = User::all();

});*/

/*Route::get('/', function()
{
	$users =  DB::table('users')->where('username','=','Preslav')->get();

	return $users;
});*/


/*Route::get('/', function()
{
	$users =  DB::table('users')->get();

	return $users;
});*/

/*Route::get('/', function()
{
	$user =  new User;
	$user->username = "George";
	$user->password = "blank";
	$user->save();

	return User::all();
});*/

/*Route::get('/', function()
{
	User::create([
	'username' => 'AnotherUser2',
	'password' => 'anotherPassword2'
		]);
	return User::all();
});*/

/*Route::get('/', function()
{
	$user = User::find(2);
	$user->username='UpdatedUsername';
	$user->save();

	return User::all();
});*/


//Route::get('users', 'UsersController@index');

/*Route::get('users', function()
{
	$users = User::all();

	return View::make('users/index')->with('users', $users);
});*/


//Route::get('users/{username}','UsersController@show');
/*Route::get('articles/{username}', function($username)
{
	$user = User::whereUsername($username)->first();

	return View::make('articles.show',['user'=>$user]);
});
*/
Route::resource('users','UsersController');

/*Route::get('users/articles', function()
	{
		$articles =  DB::table('articles')->get();

		return $articles;
	});*/
