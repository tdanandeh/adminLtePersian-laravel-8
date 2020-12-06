<?php


Route::get('/', function () { return view('admin.dashboard.index');});
Route::get('/index2', function () { return view('admin.dashboard.dashboard2');});
Route::get('/index3', function () { return view('admin.dashboard.dashboard3');});
Route::get('/widgets', function () { return view('admin.pages.widgets');});
//pages
Route::get('/chartjs', function () { return view('admin.pages.chartjs');});
Route::get('/flot', function () { return view('admin.pages.flot');});
Route::get('/inline', function () { return view('admin.pages.inline');});
//ui
Route::get('/general', function () { return view('admin.ui.general');});
Route::get('/icon', function () { return view('admin.ui.icon');});
Route::get('/button', function () { return view('admin.ui.button');});
Route::get('/slider', function () { return view('admin.ui.slider');});
//forms
Route::get('/form/general', function () { return view('admin.forms.general');});
Route::get('/form/advanced', function () { return view('admin.forms.advanced');});
Route::get('/form/editor', function () { return view('admin.forms.editor');});
//tables
Route::get('/form/table/simple', function () { return view('admin.table.simple');});
Route::get('/form/table/data', function () { return view('admin.table.data');});
//example
Route::get('/example/profile', function () { return view('admin.examples.example');});
Route::get('/example/cs', function () { return view('admin.examples.cs');});















?>
