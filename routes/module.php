<?php
        
// Start Routes for category 
Route::get('category','CategoryController@getIndex');
Route::get('category/show/{any?}','CategoryController@getShow');
Route::get('category/update/{any?}','CategoryController@getUpdate');
Route::get('category/comboselect','CategoryController@getComboselect');
Route::get('category/download','CategoryController@getDownload');
Route::get('category/search','CategoryController@getSearch');
Route::get('category/export/{any?}','CategoryController@getExport');
Route::get('category/lookup/{id?}/{id2?}','CategoryController@getLookup');
// -- Post Method --
Route::post('category/save','CategoryController@postSave');
Route::post('category/filter','CategoryController@postFilter');
Route::post('category/delete/{any?}','CategoryController@postDelete');
Route::post('category/savepublic','CategoryController@postSavePublic');
// End Routes for category 

                    ?>