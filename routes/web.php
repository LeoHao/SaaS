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
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/colors', function () {
            return view('dashboard.colors');
        });
        Route::get('/typography', function () {
            return view('dashboard.typography');
        });
        Route::get('/charts', function () {
            return view('dashboard.charts');
        });
        Route::get('/loading-buttons', function () {
            return view('dashboard.loading-buttons');
        }); //PRO
        Route::get('/multi-select', function () {
            return view('dashboard.multi-select');
        }); //PRO
        Route::get('/advanced-forms', function () {
            return view('dashboard.advanced-forms');
        }); //PRO
        Route::get('/validation', function () {
            return view('dashboard.validation');
        }); //PRO
        Route::get('/toastr', function () {
            return view('dashboard.toastr');
        }); //PRO
        Route::get('/datatables', function () {
            return view('dashboard.datatables');
        }); //PRO

        Route::get('/widgets', function () {
            return view('dashboard.widgets');
        });
        Route::get('/404', function () {
            return view('dashboard.404');
        });
        Route::get('/500', function () {
            return view('dashboard.500');
        });

        Route::prefix('base')->group(function () {
            Route::get('/breadcrumb', function () {
                return view('dashboard.base.breadcrumb');
            });
            Route::get('/cards', function () {
                return view('dashboard.base.cards');
            });
            Route::get('/carousel', function () {
                return view('dashboard.base.carousel');
            });
            Route::get('/collapse', function () {
                return view('dashboard.base.collapse');
            });

            Route::get('/forms', function () {
                return view('dashboard.base.forms');
            });
            Route::get('/jumbotron', function () {
                return view('dashboard.base.jumbotron');
            });
            Route::get('/list-group', function () {
                return view('dashboard.base.list-group');
            });
            Route::get('/navs', function () {
                return view('dashboard.base.navs');
            });

            Route::get('/pagination', function () {
                return view('dashboard.base.pagination');
            });
            Route::get('/popovers', function () {
                return view('dashboard.base.popovers');
            });
            Route::get('/progress', function () {
                return view('dashboard.base.progress');
            });
            Route::get('/scrollspy', function () {
                return view('dashboard.base.scrollspy');
            });

            Route::get('/switches', function () {
                return view('dashboard.base.switches');
            });
            Route::get('/tables', function () {
                return view('dashboard.base.tables');
            });
            Route::get('/tabs', function () {
                return view('dashboard.base.tabs');
            });
            Route::get('/tooltips', function () {
                return view('dashboard.base.tooltips');
            });
        });
        Route::prefix('buttons')->group(function () {
            Route::get('/buttons', function () {
                return view('dashboard.buttons.buttons');
            });
            Route::get('/button-group', function () {
                return view('dashboard.buttons.button-group');
            });
            Route::get('/dropdowns', function () {
                return view('dashboard.buttons.dropdowns');
            });
            Route::get('/brand-buttons', function () {
                return view('dashboard.buttons.brand-buttons');
            });
        });
        Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
            Route::get('/coreui-icons', function () {
                return view('dashboard.icons.coreui-icons');
            });
            Route::get('/flags', function () {
                return view('dashboard.icons.flags');
            });
            Route::get('/brands', function () {
                return view('dashboard.icons.brands');
            });
        });
        Route::prefix('notifications')->group(function () {
            Route::get('/alerts', function () {
                return view('dashboard.notifications.alerts');
            });
            Route::get('/badge', function () {
                return view('dashboard.notifications.badge');
            });
            Route::get('/modals', function () {
                return view('dashboard.notifications.modals');
            });
        });
    });


    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'   => 'resource.index', 'create' => 'resource.create', 'store' => 'resource.store', 'show' => 'resource.show', 'edit' => 'resource.edit', 'update' => 'resource.update',
        'destroy' => 'resource.destroy',
    ]);

    Route::group(['middleware' => ['role:user']], function () {
        Route::resource('bread', 'BreadController');   //create BREAD (resource)
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
            Route::get('/show', 'DeviceController@show')->name('device.show');     //查看
            Route::get('/create', 'DeviceController@create')->name('device.create'); //创建
            Route::post('/store', 'DeviceController@store')->name('device.store');   //插入
            Route::get('/edit', 'DeviceController@edit')->name('device.edit');       //编辑
            Route::post('/update', 'DeviceController@update')->name('device.update');//更新
            Route::get('/delete', 'DeviceController@delete')->name('device.delete'); //删除
        });

        //公司
        Route::prefix('company/')->group(function () {
            Route::get('/', 'CompanyController@index')->name('company.index');         //展示
            Route::get('/show', 'CompanyController@show')->name('company.show');     //查看
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
    });
});
