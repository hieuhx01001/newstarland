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

                    
// Start Routes for projectcategory 
Route::get('projectcategory','ProjectcategoryController@getIndex');
Route::get('projectcategory/show/{any?}','ProjectcategoryController@getShow');
Route::get('projectcategory/update/{any?}','ProjectcategoryController@getUpdate');
Route::get('projectcategory/comboselect','ProjectcategoryController@getComboselect');
Route::get('projectcategory/allcomboselect','ProjectcategoryController@getAllCategoriesSelect');
Route::get('projectcategory/download','ProjectcategoryController@getDownload');
Route::get('projectcategory/search','ProjectcategoryController@getSearch');
Route::get('projectcategory/export/{any?}','ProjectcategoryController@getExport');
Route::get('projectcategory/lookup/{id?}/{id2?}','ProjectcategoryController@getLookup');
// -- Post Method --
Route::post('projectcategory/save','ProjectcategoryController@postSave');
Route::post('projectcategory/filter','ProjectcategoryController@postFilter');
Route::post('projectcategory/delete/{any?}','ProjectcategoryController@postDelete');
Route::post('projectcategory/savepublic','ProjectcategoryController@postSavePublic');
// End Routes for projectcategory 

                    ?>