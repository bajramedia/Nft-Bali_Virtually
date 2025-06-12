<?php
use App\Http\Controllers\PageController; 
use Illuminate\Support\Facades\Route;

// halaman home
Route::get('/', [PageController::class, 'showHome'])->name('home');
// halaman virtual tours
Route::get('/VirtualTours', [PageController::class, 'showVirtualTours'])->name('VirtualTours');
// halaman nft
Route::get('/Nft', [PageController::class, 'showNftPage'])->name('Nft');
// halaman impact & giving
Route::get('/Impact&Giving', [PageController::class, 'showImpactGiving'])->name('Impact&Giving');
// halaman funded project goa gajah
Route::get('/funded-project-goa-gajah', [PageController::class, 'showFundedProjectGoaGajah'])->name('funded-project-goa-gajah');

// routes untuk detail pages
Route::get('/tours/{slug}', [PageController::class, 'showTourDetail'])->name('tour.detail');
Route::get('/nfts/{slug}', [PageController::class, 'showNftDetail'])->name('nft.detail');
Route::get('/projects/{slug}', [PageController::class, 'showProjectDetail'])->name('project.detail');
?>
