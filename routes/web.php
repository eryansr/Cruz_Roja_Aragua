<?php
				//Rutas JSON de los Estados para Censo
Route::get('censo/json-ciudads', 'CensoController@ciudads');
Route::get('censo/json-municipios', 'CensoController@municipios');
Route::get('censo/json-parroquias', 'CensoController@parroquias');
Route::get('censo/{censo}/json-ciudads', 'CensoController@ciudads');
Route::get('censo/{censo}/json-municipios', 'CensoController@municipios');
Route::get('censo/{censo}/json-parroquias', 'CensoController@parroquias');

Route::get('/', 'CensoController@contador')->name('home');
Route::get('censo/{censo}/destroyCarga', 'CensoController@destroyCarga')->name('censos.destroyCarga');
Route::resource('censo', 'CensoController')->names('censos');
			//Fin de las Rutas JSON de los Estados para Censo

			//Rutas JSON de los Estados para Voluntarios
Route::get('voluntario/json-ciudads', 'VoluntarioController@ciudads');
Route::get('voluntario/json-municipios', 'VoluntarioController@municipios');
Route::get('voluntario/json-parroquias', 'VoluntarioController@parroquias');
Route::get('voluntario/{voluntario}/json-ciudads', 'VoluntarioController@ciudads');
Route::get('voluntario/{voluntario}/json-municipios', 'VoluntarioController@municipios');
Route::get('voluntario/{voluntario}/json-parroquias', 'VoluntarioController@parroquias');
Route::name('pdf.voluntario')->get('/pdf/{id}', 'VoluntarioController@pdf');
Route::resource('voluntario', 'VoluntarioController')->names('voluntarios');
			//Fin de las Rutas JSON de los Estados para Voluntarios

Route::get('historia', 'HistoriaController@index')->name('historias.index');
Route::post('historia', 'HistoriaController@store')->name('historias.store');
Route::get('historia/crear', 'HistoriaController@create')->name('historias.create');
Route::delete('historia/{historia}', 'HistoriaController@destroy')->name('historias.destroy');
Route::patch('historia/{historia}', 'HistoriaController@update')->name('historias.update');
Route::get('historia/{historia}', 'HistoriaController@show')->name('historias.show');
Route::get('historia/{historia}/editar', 'HistoriaController@edit')->name('historias.edit');

		//Ruta Pagina web
Route::get('cr', 'WebController@index')->name('cr');
Route::get('info', 'WebController@info')->name('info');
Route::get('address', 'WebController@direccion')->name('address');
Route::get('censoinfo', 'WebController@censoView')->name('censoinfo');
Route::post('censoinfo', 'WebController@censo')->name('processCenso');
Route::get('voluntarioinfo', 'WebController@voluntario')->name('voluntarioinfo');

Route::get('papelera', 'PapeleraController@index')->name('papeleras.index');
Route::get('papelera/restore/{id}', 'PapeleraController@restore')->name('voluntarios.restore');
Route::get('papelera/force/{id}', 'PapeleraController@force')->name('voluntarios.force');

Route::get('papeleracenso', 'PapeleracensoController@index')->name('papelerascenso.index');
Route::get('papeleracenso/restore/{id}', 'PapeleracensoController@restore')->name('papelerascenso.restore');
Route::get('papeleracenso/force/{id}', 'PapeleracensoController@force')->name('papelerascenso.force');

			// Ruta de las graficas  
Route::get('/charts/charts', 'ChartsController@charts')->name('charts.charts');

Route::resource('usuario', 'UsuarioController')->names('usuarios');
Auth::routes(['register' => false,]);

