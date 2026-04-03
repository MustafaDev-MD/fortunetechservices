<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Livewire\AssessmentWizard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssessmentController;

/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/agency', [PageController::class, 'about'])->name('about');
Route::get('/solutions', [PageController::class, 'services'])->name('services');
Route::get('/insights', [PageController::class, 'blog'])->name('blog');
Route::get('/talent', [PageController::class, 'careers'])->name('careers');
Route::get('/help', [PageController::class, 'faqs'])->name('faqs');
Route::get('/connect', [PageController::class, 'contact'])->name('contact');
Route::get('/form', [PageController::class, 'form'])->name('form');

/*
|--------------------------------------------------------------------------
| Service Detail Pages 
|--------------------------------------------------------------------------
*/

Route::prefix('solutions')->name('services.')->group(function () {
    Route::get('/digital-growth', [ServiceController::class, 'digitalGrowth'])->name('digital-growth');
    Route::get('/creative-animation', [ServiceController::class, 'creativeAnimation'])->name('creative-animation');
    Route::get('/it-development', [ServiceController::class, 'itDevelopment'])->name('it-development');
    Route::get('/bpo-operations', [ServiceController::class, 'bpoOperations'])->name('bpo-operations');
    Route::get('/digital-forensics-assurance', [ServiceController::class, 'digitalForensics'])->name('digital-forensics-assurance');
});

/*
|--------------------------------------------------------------------------
| Legal Pages
|--------------------------------------------------------------------------
*/

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');

/*
|--------------------------------------------------------------------------
| Newsletter
|--------------------------------------------------------------------------
*/

Route::post('/subscribe', [PageController::class, 'subscribe'])->name('subscribe');

/*
|--------------------------------------------------------------------------
| Blog Detail Pages
|--------------------------------------------------------------------------
*/

Route::get('/insights/{slug}', [PageController::class, 'showBlog'])->name('blog.detail');

/*
|--------------------------------------------------------------------------
| Contact Form 
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/assessment', AssessmentWizard::class)
->name('assessment');
// ->middleware('guest')



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/assessments', [AssessmentController::class, 'show']);


/*
|--------------------------------------------------------------------------
| Fallback Route (404 page)
|--------------------------------------------------------------------------
*/

// Add this at the very end of web.php
Route::fallback(function () {
    return response()->view('404', [], 404);
});
