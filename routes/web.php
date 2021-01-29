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
Auth::routes();
Route::group(['middleware' => ['navigation', 'login']], function () {
    Route::get('/', function () {
        return view('dashboard.homepage');
    });


    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'   => 'resource.index',
        'create' => 'resource.create',
        'store' => 'resource.store',
        'show' => 'resource.show',
        'edit' => 'resource.edit',
        'update' => 'resource.update',
        'destroy' => 'resource.destroy',
    ]);


    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('users', 'UsersController')->except(['create', 'store']);
        Route::resource('roles', 'RolesController');
        Route::resource('mail', 'MailController');
        Route::get('prepareSend/{id}', 'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}', 'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-up', 'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down', 'RolesController@moveDown')->name('roles.down');


        Route::prefix('menu/element')->group(function () {
            Route::get('/', 'MenuElementController@index')->name('menu.index');
            Route::get('/move-up', 'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down', 'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create', 'MenuElementController@create')->name('menu.create');
            Route::post('/store', 'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents', 'MenuElementController@getParents');
            Route::get('/edit', 'MenuElementController@edit')->name('menu.edit');
            Route::post('/update', 'MenuElementController@update')->name('menu.update');
            Route::get('/show', 'MenuElementController@show')->name('menu.show');
            Route::get('/delete', 'MenuElementController@delete')->name('menu.delete');
        });

        Route::prefix('menu/menu')->group(function () {
            Route::get('/', 'MenuController@index')->name('menu.menu.index');
            Route::get('/create', 'MenuController@create')->name('menu.menu.create');
            Route::post('/store', 'MenuController@store')->name('menu.menu.store');
            Route::get('/edit', 'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update', 'MenuController@update')->name('menu.menu.update');
            Route::get('/delete', 'MenuController@delete')->name('menu.menu.delete');
        });

        //设备
        Route::prefix('device/')->group(function () {
            Route::get('/', 'DeviceController@index')->name('device.index');         //展示
            Route::get('/show', 'DeviceController@show')->name('device.show');       //查看
            Route::get('/create', 'DeviceController@create')->name('device.create'); //创建
            Route::post('/store', 'DeviceController@store')->name('device.store');   //插入
            Route::get('/edit', 'DeviceController@edit')->name('device.edit');       //编辑
            Route::post('/update', 'DeviceController@update')->name('device.update');//更新
            Route::get('/delete', 'DeviceController@delete')->name('device.delete'); //删除

            Route::get('/special', 'DeviceController@special')->name('device.special'); //专网开通
            Route::post('/special-open', 'DeviceController@specialOpen')->name('device.special-open'); //专网开通

            Route::get('/site-speed', 'DeviceController@siteSpeed')->name('device.site-speed'); //站点加速
            Route::post('/site-speed-open', 'DeviceController@siteSpeedOpen')->name('device.site-speed-open'); //站点加速
        });

        //公司
        Route::prefix('company/')->group(function () {
            Route::get('/', 'CompanyController@index')->name('company.index');         //展示
            Route::get('/show', 'CompanyController@show')->name('company.show');       //查看
            Route::get('/create', 'CompanyController@create')->name('company.create'); //创建
            Route::post('/store', 'CompanyController@store')->name('company.store');   //插入
            Route::get('/edit', 'CompanyController@edit')->name('company.edit');       //编辑
            Route::post('/update', 'CompanyController@update')->name('company.update');//更新
            Route::get('/delete', 'CompanyController@delete')->name('company.delete'); //删除
        });

        //插件
        Route::prefix('plugin/')->group(function () {
            Route::get('/', 'PluginController@index')->name('plugin.index');          //列表
            Route::get('/show', 'PluginController@show')->name('plugin.show');        //查看
            Route::get('/create', 'PluginController@create')->name('plugin.create');  //创建
            Route::post('/store', 'PluginController@store')->name('plugin.store');    //插入
            Route::get('/edit', 'PluginController@edit')->name('plugin.edit');        //编辑
            Route::post('/update', 'PluginController@update')->name('plugin.update'); //更新
            Route::get('/delete', 'PluginController@delete')->name('plugin.delete');  //删除

            Route::get('/market', 'PluginController@market')->name('plugin.market');  //插件市场
            Route::post('/open', 'PluginController@open')->name('plugin.open');       //开通
        });

        //功能开通
        Route::prefix('application')->group(function () {
            Route::get('/', 'ApplicationController@index')->name('application.index');
            Route::get('/passed', 'ApplicationController@passed')->name('application.passed');
            Route::get('/rejected', 'ApplicationController@rejected')->name('application.rejected');
        });
    });

    Route::group(['middleware' => ['role:user']], function () {
        //设备
        Route::prefix('device/')->group(function () {
            Route::get('/', 'DeviceController@index')->name('device.index');         //展示
            Route::get('/show', 'DeviceController@show')->name('device.show');       //查看
            Route::get('/create', 'DeviceController@create')->name('device.create'); //创建
            Route::post('/store', 'DeviceController@store')->name('device.store');   //插入
            Route::get('/edit', 'DeviceController@edit')->name('device.edit');       //编辑
            Route::post('/update', 'DeviceController@update')->name('device.update');//更新
            Route::get('/delete', 'DeviceController@delete')->name('device.delete'); //删除

            Route::get('/special', 'DeviceController@special')->name('device.special'); //专网开通
            Route::post('/special-open', 'DeviceController@specialOpen')->name('device.special-open'); //专网开通

            Route::get('/site-speed', 'DeviceController@siteSpeed')->name('device.site-speed'); //站点加速
            Route::post('/site-speed-open', 'DeviceController@siteSpeedOpen')->name('device.site-speed-open'); //站点加速
        });
    });
});


