<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\TrackingController;
use App\Http\Controllers\Frontend\d2dController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */


Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });
    Route::get('notice/details/{id}', [HomeController::class, 'noticedetails']);
    Route::get('info/details/{id}', [HomeController::class, 'infodetails']);
    Route::get('notice/all', [HomeController::class, 'noticeall']);
    Route::get('page/{slug}', [HomeController::class, 'pageshow']);
    Route::get('info/all', [HomeController::class, 'infoall']);
    Route::get('/donate', [HomeController::class, 'donatenow']);
    Route::get('/portfolio', [HomeController::class, 'allevent']);
    Route::get('/all/gallery', [HomeController::class, 'allgallery']);
    Route::get('/event/details/{id}', [HomeController::class, 'eventdetails']);
    Route::get('/all/brand', [HomeController::class, 'allbrand']);
    Route::get('/all/activities', [HomeController::class, 'allactivities']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('//team', [HomeController::class, 'team']);
    Route::post('/contact/submit', [HomeController::class, 'contactsubmit']);
    Route::post('/event/submit', [HomeController::class, 'eventsubmit']);
    Route::post('/volunteer/submit', [HomeController::class, 'volunteersubmit']);
    Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });

Route::get('/about', [HomeController::class, 'about']);
Route::get('/clients', [HomeController::class, 'clients']);
    


// Route::get('contact', [ContactController::class, 'index'])
//     ->name('pages.contact')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->parent('frontend.index')
//             ->push(__('_contact'), route('frontend.pages.contact'));
//     });
// Route::post('contact', [ContactController::class, 'store']);



Route::get('tracking', [TrackingController::class, 'Tracking'])
    ->name('pages.tracking')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('_track'), route('frontend.pages.tracking'));
    });
Route::get('track', [TrackingController::class, 'Track'])
    ->name('pages.shippingInformationModal')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('_track'), route('frontend.pages.shippingInformationModal'));
    });

Route::get('d2d', [d2dController::class, 'd2d'])
    ->name('pages.d2d')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('_d2d'), route('frontend.pages.d2d'));
    });
Route::get('/info/{shipped_from}', [HomeController::class, 'index']);