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
// route to login and logout


     Route::get('/', 'HomeController@index')->name('index');
     Route::post('/enquiry', 'HomeController@enquiry')->name('enquiry');
     Route::get('/contact-us', 'HomeController@contact_us')->name('contact-us');
     Route::get('/enquiries', 'HomeController@enquiries')->name('enquiries');
     Route::get('/find-a-dealer', 'HomeController@find_a_dealer')->name('find-a-dealer');

     Route::get('/about-us', 'HomeController@about_us')->name('about-us');
     Route::get('/about-us/company-milestones', 'HomeController@company_milestones')->name('company-milestones');
     Route::get('/about-us/offices', 'HomeController@offices')->name('offices');
     Route::get('/about-us/learn-about-solar', 'HomeController@learn_about_solar')->name('learn-about-solar');

     Route::get('/large-projects', 'HomeController@large_projects')->name('large-projects');
     Route::get('/large-projects/solutions-for-businesses', 'HomeController@solutions_for_businesses')->name('solutions-for-businesses');
     Route::get('/large-projects/solutions-for-power-producers', 'HomeController@solutions_for_power_producers')->name('solutions-for-power-producers');
     Route::get('/large-projects/operation-and-maintenance', 'HomeController@operation_and_maintenance')->name('operation-and-maintenance');

     Route::get('/careers', 'HomeController@careers')->name('careers');

     Route::get('/rooftops', 'HomeController@rooftops')->name('rooftops');
     Route::get('/rooftops/residential', 'HomeController@residential')->name('residential');
     Route::get('/rooftops/commertial-industrial', 'HomeController@commercial_industrial')->name('commercial-industrial');
     Route::get('/about-us/company-documents', 'HomeController@document')->name('document');
     Route::get('/rooftops/financing', 'HomeController@financing')->name('financing');
     Route::get('/rooftops/remote-monitoring', 'HomeController@remote_monitoring')->name('remote-monitoring');

     Route::get('/products', 'HomeController@products')->name('products');
     Route::get('/products/solar-roof', 'HomeController@solar_roof')->name('solar-roof');
     Route::get('/products/solar-tree', 'HomeController@solar_tree')->name('solar-tree');
     Route::get('/products/solar-heater', 'HomeController@solar_heater')->name('solar-heater');
     Route::get('/products/solar-street-light', 'HomeController@solar_street_light')->name('solar-street-light');
     Route::get('/products/solar-pump', 'HomeController@solar_pump')->name('solar-pump');
     Route::get('/products/solar-lantern', 'HomeController@solar_lantern')->name('solar-lantern');

     Route::get('/download', 'HomeController@download')->name('download');


