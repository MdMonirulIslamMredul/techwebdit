<?php

use App\Domains\Contacts\Http\Controllers\ContactController;
use App\Domains\Page\Http\Controllers\PageController;
use App\Domains\Products\Http\Controllers\BrandController;
use App\Domains\Products\Http\Controllers\WarehouseController;
use App\Domains\Products\Http\Controllers\ProductController;
use App\Domains\Products\Http\Controllers\StatusController;
use App\Domains\Products\Http\Controllers\ShippingController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\Content\SettingController;
use App\Http\Controllers\Backend\Content\AccountController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('search', [DashboardController::class, 'search'])->name('order.search');

Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::resources([
        'brand' => BrandController::class,
        'warehouse' => WarehouseController::class,
        'inhouse' => ProductController::class,
        'status' => StatusController::class,
        // 'updatestatus' => UpdateStatusController::class,
        'shipping' => ShippingController::class,
        'product' => ProductController::class,
    ]);
});

Route::resource('page', PageController::class);

Route::group(['prefix' => 'messaging', 'as' => 'messaging.'], function () {
    Route::resources([
        'contact' => ContactController::class,
    ]);
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
    Route::get('price', [SettingController::class, 'price'])->name('price');
    Route::get('notice', [SettingController::class, 'notice'])->name('notice');
    Route::post('notice/store', [SettingController::class, 'noticestore'])->name('notice.store');
    Route::post('noticecolor/store', [SettingController::class, 'noticecolorstore'])->name('noticecolor.store');
    Route::post('notice/update', [SettingController::class, 'noticeupdate'])->name('notice.update');
    Route::get('notice/edit/{id}', [SettingController::class, 'noticeedit']);

    Route::get('slider', [SettingController::class, 'slider'])->name('slider');
    Route::post('slider/store', [SettingController::class, 'sliderstore'])->name('slider.store');
    Route::post('slider/update', [SettingController::class, 'sliderupdate'])->name('slider.update');
    Route::get('slider/edit/{id}', [SettingController::class, 'slideredit']);


    Route::get('event', [SettingController::class, 'event'])->name('event');
    Route::post('event/store', [SettingController::class, 'eventstore'])->name('event.store');
    Route::post('event/update', [SettingController::class, 'eventupdate'])->name('event.update');
    Route::get('event/edit/{id}', [SettingController::class, 'eventedit']);

    Route::get('gallery', [SettingController::class, 'gallery'])->name('gallery');
    Route::post('gallery/store', [SettingController::class, 'gallerystore'])->name('gallery.store');
    Route::post('gallery/update', [SettingController::class, 'galleryupdate'])->name('gallery.update');
    Route::get('gallery/edit/{id}', [SettingController::class, 'galleryedit']);

    Route::get('activity', [SettingController::class, 'activity'])->name('activity');
    Route::post('activity/store', [SettingController::class, 'activitystore'])->name('activity.store');
    Route::post('activity/update', [SettingController::class, 'activityupdate'])->name('activity.update');
    Route::get('activity/edit/{id}', [SettingController::class, 'activityedit']);

    Route::get('brand', [SettingController::class, 'brand'])->name('brand');
    Route::post('brand/store', [SettingController::class, 'brandstore'])->name('brand.store');
    Route::post('brand/update', [SettingController::class, 'brandupdate'])->name('brand.update');
    Route::get('brand/edit/{id}', [SettingController::class, 'brandedit']);

    Route::get('page', [SettingController::class, 'page'])->name('page');
    Route::post('page/store', [SettingController::class, 'pagestore'])->name('page.store');
    Route::post('page/update', [SettingController::class, 'pageupdate'])->name('page.update');
    Route::get('page/edit/{id}', [SettingController::class, 'pageedit']);

    Route::get('info', [SettingController::class, 'info'])->name('info');
    Route::post('info/store', [SettingController::class, 'infostore'])->name('info.store');
    Route::post('info/update', [SettingController::class, 'infoupdate'])->name('info.update');
    Route::get('info/edit/{id}', [SettingController::class, 'infoedit']);

    Route::get('donate', [SettingController::class, 'donate'])->name('donate');
    Route::post('donate/store', [SettingController::class, 'donatestore'])->name('donate.store');
    Route::post('donate/update', [SettingController::class, 'donateupdate'])->name('donate.update');
    Route::get('donate/edit/{id}', [SettingController::class, 'donateedit']);

    Route::post('donates/store', [SettingController::class, 'donatesadd'])->name('donates.store');


    // Route::get('info', [SettingController::class, 'eventsponsor'])->name('eventsponsor');
    Route::post('eventsponsor/store', [SettingController::class, 'eventsponsorstore'])->name('eventsponsor.store');
    Route::post('eventsponsor/update', [SettingController::class, 'eventsponsorupdate'])->name('eventsponsor.update');
    Route::get('eventsponsor/edit/{id}', [SettingController::class, 'eventsponsoredit']);

    Route::post('airShippingStore', [SettingController::class, 'airShippingStore'])->name('airShippingStore');
    Route::post('logo-store', [SettingController::class, 'logoStore'])->name('logoStore');
    Route::post('social-store', [SettingController::class, 'socialStore'])->name('socialStore');
    Route::get('general', [SettingController::class, 'general'])->name('general');
    Route::get('cache-control', [SettingController::class, 'cacheControl'])->name('cache.control');
    Route::post('cache-control-store', [SettingController::class, 'cacheClear'])->name('cache.control.store');
    Route::post('short-message', [SettingController::class, 'shortMessageStore'])->name('short.message.store');
    Route::post('banner-message', [SettingController::class, 'bannerstore'])->name('banner.store');
    Route::post('bottombanner-message', [SettingController::class, 'bottombanner'])->name('bottombanner.store');
    Route::post('about-message', [SettingController::class, 'aboutstore'])->name('about.store');
    Route::post('highlight', [SettingController::class, 'highlightstore'])->name('highlight.store');
    Route::post('work-message', [SettingController::class, 'workstore'])->name('work.store');
    Route::post('api_store', [SettingController::class, 'apiStore'])->name('api.store');
    Route::get('top-notice', [SettingController::class, 'topNoticeCreate'])->name('topNotice.create');
    Route::post('top-notice', [SettingController::class, 'topNoticeStore'])->name('topNotice.store');
    Route::post('homebg', [SettingController::class, 'homebg'])->name('homebg.store');
    Route::post('volunteerSetting', [SettingController::class, 'volunteerSetting'])->name('volunteerSetting.store');
});

Route::get('order/local', [OrderController::class, 'walletOrders'])->name('order.local');
Route::get('order/local/{id}', [OrderController::class, 'walletDetails'])->name('order.local.details');
Route::get('order/recent', [OrderController::class, 'recentOrders'])->name('order.recent');
Route::post('order/recent/status', [OrderController::class, 'recentorderStatusUpdate'])->name('order.status.update');
Route::post('order/recent/update/{id}', [OrderController::class, 'orderitemUpdate'])->name('order.recent.singleorder');

Route::post('order/coupon-update/{id}', [OrderController::class, 'updateCoupon'])->name('order.coupon.update');
Route::post('order/deposit-update/{id}', [OrderController::class, 'depositCoupon'])->name('order.deposit.update');

Route::resource('order', OrderController::class);

Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
    Route::get('skybuy', [AccountController::class, 'skybuyIndex'])->name('skybuy');
    Route::get('skybuytable', [AccountController::class, 'skybuyTable'])->name('skybuytable');

    Route::get('skyone', [AccountController::class, 'skyoneIndex'])->name('skyone');
    Route::get('skyonetable', [AccountController::class, 'skyoneTable'])->name('skyonetable');
});