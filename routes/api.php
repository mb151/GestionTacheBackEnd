<?php

Route::get("tasks", "TaskController@index");
Route::post("task", "TaskController@store");
Route::get("task/{id}/complete", "TaskController@complete");
Route::get("task/{id}/delete", "TaskController@destroy");
Route::post("task/{id}/update", "TaskController@update");
