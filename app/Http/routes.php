<?php

Route::get('/',  function(){
	return "Hellow";
});

Route::get('/parks',  'Skate\ParkController@showParks');
