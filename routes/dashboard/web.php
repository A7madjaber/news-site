<?php

use Illuminate\Support\Facades\Route;



Route::prefix('dashboard')
    ->name('dashboard.')


    ->middleware(['auth','role:Super_admin|Admin'])

    ->group(function ()
    {
        Route::get('/home', function () {
            return view('dashboard.home');
        })->name('home');



        Route::group(
            ['prefix'=>'news','namespace'=>'Dashboard']
            ,function (){
            $Controller='NewsController';
            Route::get('/all',['as' => 'news.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'news.all.datatable', 'uses' => $Controller.'@getDataTableNews']);
            Route::get('/create',['as' => 'news.create', 'uses' => $Controller.'@create']);
            Route::post('/store',['as' => 'news.store', 'uses' => $Controller.'@store']);
            Route::get('/edit/{id}',['as' => 'news.edit', 'uses' => $Controller.'@edit']);
            Route::post('/update/{id}',['as' => 'news.update', 'uses' => $Controller.'@update']);
            Route::delete('/delete/{id}',['as' => 'news.delete', 'uses' => $Controller.'@destroy']);


        });

        Route::group(
            ['prefix'=>'categories','namespace'=>'Dashboard']
            ,function (){
            $Controller='CategoryController';
            Route::get('/all',['as' => 'category.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'category.all.datatable', 'uses' => $Controller.'@getDataTableCategories']);
            Route::get('/create',['as' => 'category.create', 'uses' => $Controller.'@create']);
            Route::post('/store',['as' => 'category.store', 'uses' => $Controller.'@store']);
            Route::get('/edit/{id}',['as' => 'category.edit', 'uses' => $Controller.'@edit']);
            Route::post('/update/{id}',['as' => 'category.update', 'uses' => $Controller.'@update']);
            Route::delete('/delete/{id}',['as' => 'category.delete', 'uses' => $Controller.'@destroy']);

        });

        Route::group(
            ['prefix'=>'roles','namespace'=>'Dashboard']
            ,function (){
            $Controller='RoleController';
            Route::get('/all',['as' => 'roles.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'roles.all.datatable', 'uses' => $Controller.'@getDataTableRoles']);
            Route::get('/create',['as' => 'role.create', 'uses' => $Controller.'@create']);
            Route::post('/store',['as' => 'role.store', 'uses' => $Controller.'@store']);
            Route::get('/edit/{id}',['as' => 'roles.edit', 'uses' => $Controller.'@edit']);
            Route::post('/update/{id}',['as' => 'roles.update', 'uses' => $Controller.'@update']);
            Route::delete('/delete/{id}',['as' => 'roles.delete', 'uses' => $Controller.'@destroy']);

        });


        Route::group(
            ['prefix'=>'admins','namespace'=>'Dashboard']
            ,function (){
            $Controller='AdminController';
            Route::get('/all',['as' => 'admins.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'admins.all.datatable', 'uses' => $Controller.'@getDataTableAdmins']);
            Route::get('/create',['as' => 'admin.create', 'uses' => $Controller.'@create']);
            Route::post('/store',['as' => 'admin.store', 'uses' => $Controller.'@store']);
            Route::get('/edit/{id}',['as' => 'admin.edit', 'uses' => $Controller.'@edit']);
            Route::post('/update/{id}',['as' => 'admin.update', 'uses' => $Controller.'@update']);
            Route::delete('/delete/{id}',['as' => 'admin.delete', 'uses' => $Controller.'@destroy']);

        });

        Route::group(
            ['prefix'=>'settings','namespace'=>'Dashboard']
            ,function (){
            $Controller='SettingsController';
            Route::get('/index',['as' => 'settings.index', 'uses' => $Controller.'@index']);
            Route::post('/update/{id}',['as' => 'settings.update', 'uses' => $Controller.'@update']);

        });


        Route::group(
            ['prefix'=>'videos','namespace'=>'Dashboard']
            ,function (){
            $Controller='VideoController';
            Route::get('/all',['as' => 'video.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'video.all.datatable', 'uses' => $Controller.'@getDataTableVideos']);
            Route::get('/create',['as' => 'video.create', 'uses' => $Controller.'@create']);
            Route::post('/store',['as' => 'video.store', 'uses' => $Controller.'@store']);
            Route::get('edit/{id}',['as' => 'video.edit', 'uses' => $Controller.'@edit']);
            Route::post('update/{id}',['as' => 'video.update', 'uses' => $Controller.'@update']);
            Route::delete('/delete/{id}',['as' => 'video.delete', 'uses' => $Controller.'@destroy']);
        });

        Route::group(
            ['prefix'=>'pages','namespace'=>'Dashboard']
            ,function (){
            $Controller='PageController';
            Route::get('/all',['as' => 'page.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'page.all.datatable', 'uses' => $Controller.'@getDataTablePages']);
            Route::get('/create',['as' => 'page.create', 'uses' => $Controller.'@create']);
            Route::post('/store',['as' => 'page.store', 'uses' => $Controller.'@store']);
            Route::get('edit/{id}',['as' => 'page.edit', 'uses' => $Controller.'@edit']);
            Route::post('update/{id}',['as' => 'page.update', 'uses' => $Controller.'@update']);
            Route::delete('/delete/{id}',['as' => 'page.delete', 'uses' => $Controller.'@destroy']);

        });


        Route::group(
            ['prefix'=>'mails','namespace'=>'Dashboard']
            ,function (){
            $Controller='MailController';
            Route::get('/all',['as' => 'mail.all', 'uses' => $Controller.'@index']);
            Route::get('/all/data',['as' => 'mail.all.datatable', 'uses' => $Controller.'@getDataTableMails']);
            Route::get('/show/{id}',['as' => 'mail.show', 'uses' => $Controller.'@show']);
            Route::post('/replay/{id}',['as' => 'mail.replay', 'uses' => $Controller.'@replay']);
            Route::delete('/delete/{id}',['as' => 'mail.delete', 'uses' => $Controller.'@destroy']);

        });

           Route::group(
            ['prefix'=>'profile','namespace'=>'Dashboard']
            ,function (){
            $Controller='ProfileController';
            Route::get('/show',['as' => 'profile.show', 'uses' => $Controller.'@show']);
            Route::post('/update/{id}',['as' => 'profile.update', 'uses' => $Controller.'@update']);

        });

    });


