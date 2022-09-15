<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('landing_page');
    return "hello";
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about', function () {
    return view('about_us');
})->name('aboutzz');

Route::get('/aboutzz', function () {
    return redirect()->route('aboutzz');
})->name('about_us');

// Route::group('/about', function () {
//     Route::get('#services', function () {
//         return view('about_us');
//     });

//     Route::get('#philosophy', function () {
//         return view('about_us');
//     });
// });

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/project/adiwana-jeevalokha', function () {
    return view('projects.adiwanaJeevalokha');
});

Route::get('/project/beachouse', function () {
    return view('projects.beachouse');
});

Route::get('/project/harris-hotel-batam', function () {
    return view('projects.harrisHotelBatam');
});

Route::get('/project/harris-hotel-tebet', function () {
    return view('projects.harrisHotelTebet');
});

Route::get('/project/harris-hotel-tuban', function () {
    return view('projects.harrisHotelTuban');
});

Route::get('/project/hooten-residence', function () {
    return view('projects.hootenResidence');
});

Route::get('/project/karma-residence', function () {
    return view('projects.karmaResidence');
});

Route::get('/project/laguna-luxury', function () {
    return view('projects.lagunaLuxury');
});

Route::get('/project/mixed-use-area-lampung', function () {
    return view('projects.mixedUseAreaLampung');
});

Route::get('/project/mu-residence', function () {
    return view('projects.muResidence');
});

Route::get('/project/noaa-social-dining', function () {
    return view('projects.noaaSocialDining');
});

Route::get('/project/ocean-palm-residence', function () {
    return view('projects.oceanPalmResidence');
});

Route::get('/project/permata-hijau-residence', function () {
    return view('projects.permataHijauResidence');
});

Route::get('/project/ulaman-retreat', function () {
    return view('projects.ulamanRetreat');
});

Route::get('/project/villa-ali-agung', function () {
    return view('projects.villaAliAgung');
});

Route::get('/project/villa-beraban', function () {
    return view('projects.villaBeraban');
});

Route::get('/project/villa-kevin', function () {
    return view('projects.villaKevin');
});

Route::get('/project/villa-sentul', function () {
    return view('projects.villaSentul');
});
