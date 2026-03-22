 <?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::livewire('dash', 'pages::dash')->name('dash');
    Route::livewire('admin-home', 'admin.home')->name('admin-home');
    Route::livewire('contractor-home', 'contractor.home')->name('contractor-home');
    Route::livewire('join-us', 'contractor.join')->name('join-us');
    Route::livewire('user-home', 'user.home')->name('user-home');
    Route::livewire('service-skills', 'service.skills')->name('service-skills');
    Route::livewire('service-home', 'service.home')->name('service-home');
    Route::livewire('schedule-home', 'pages::schedule.home')->name('schedule-home');
    Route::livewire('add-skill', 'service.add-skill')->name('add-skill');
    Route::livewire('review-home', 'reviews.review')->name('review-home');
    Route::livewire('about-us', 'about.about-us')->name('about-us');
    Route::livewire('terms-and-conditions', 'about.terms')->name('terms-and-conditions');
    Route::livewire('notifications', 'pages::notifications.home')->name('notifications');
    Route::livewire('developers', 'about.dev')->name('developers');
});

require __DIR__.'/settings.php';
