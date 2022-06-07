<?php

// Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
//Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/project-detail', 'HomeController@projectDetail')->name('project-detail');
Route::get('/project-item', 'HomeController@projectItem')->name('project-item');

Route::get('portfolios/check_slug', 'PortfolioController@check_slug')->name('portfolios.check_slug');
Route::get('portfolios/{slug}/{portfolio}', 'PortfolioController@show')->name('portfolios.show');
Route::get('/portfolios', 'PortfolioController@index')->name('portfolios.index');

Route::get('categories/check_slug', 'CategoryController@check_slug')->name('categories.check_slug');
Route::get('categories/{slug}/{category}', 'CategoryController@show')->name('categories.show');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
Route::post('/contact-us', 'HomeController@postContact')->name('contact-us');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Currencies
    Route::delete('currencies/destroy', 'CurrencyController@massDestroy')->name('currencies.massDestroy');
    Route::resource('currencies', 'CurrencyController');

    // Transactiontypes
    Route::delete('transaction-types/destroy', 'TransactionTypeController@massDestroy')->name('transaction-types.massDestroy');
    Route::resource('transaction-types', 'TransactionTypeController');

    // Incomesources
    Route::delete('income-sources/destroy', 'IncomeSourceController@massDestroy')->name('income-sources.massDestroy');
    Route::resource('income-sources', 'IncomeSourceController');

    // Clientstatuses
    Route::delete('client-statuses/destroy', 'ClientStatusController@massDestroy')->name('client-statuses.massDestroy');
    Route::resource('client-statuses', 'ClientStatusController');

    // Projectstatuses
    Route::delete('project-statuses/destroy', 'ProjectStatusController@massDestroy')->name('project-statuses.massDestroy');
    Route::resource('project-statuses', 'ProjectStatusController');

    // Clients
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientController');

    // Projects
    Route::delete('projects/destroy', 'ProjectController@massDestroy')->name('projects.massDestroy');
    Route::resource('projects', 'ProjectController');

    // Portfolio Categories
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoryController');
    Route::post('categories/media', 'CategoryController@storeMedia')->name('categories.storeMedia');


    // Portfolios
    Route::delete('portfolios/destroy', 'PortfolioController@massDestroy')->name('portfolios.massDestroy');
    Route::resource('portfolios', 'PortfolioController');
    Route::post('portfolios/media', 'PortfolioController@storeMedia')->name('portfolios.storeMedia');

    // Notes
    Route::delete('notes/destroy', 'NoteController@massDestroy')->name('notes.massDestroy');
    Route::resource('notes', 'NoteController');

    // Documents
    Route::delete('documents/destroy', 'DocumentController@massDestroy')->name('documents.massDestroy');
    Route::post('documents/media', 'DocumentController@storeMedia')->name('documents.storeMedia');
    Route::resource('documents', 'DocumentController');

       // Samples
       Route::delete('samples/destroy', 'SampleController@massDestroy')->name('samples.massDestroy');
       Route::post('samples/media', 'SampleController@storeMedia')->name('samples.storeMedia');
       Route::resource('samples', 'SampleController');

    // Transactions
    Route::delete('transactions/destroy', 'TransactionController@massDestroy')->name('transactions.massDestroy');
    Route::resource('transactions', 'TransactionController');

    // Clientreports
    Route::delete('client-reports/destroy', 'ClientReportController@massDestroy')->name('client-reports.massDestroy');
    Route::resource('client-reports', 'ClientReportController');

     //contact
     Route::delete('contacts/destroy', 'ContactController@massDestroy')->name('contacts.massDestroy');
     Route::resource('contacts', 'ContactController');
});
