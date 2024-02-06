<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


////////////////// PÁGINAS //////////////////

// Home
Route::get('/', function () { return view('app.home'); })->name('home');

// Búsqueda de empleo
Route::get('/busqueda', function () { return view('app.jobs.index'); })->name('jobs');

// Detalle de anuncio
Route::get('/busqueda/{url}', function () { return view('app.jobs.show'); })->name('jobs.show');

// Planes de suscripción
Route::get('/planes', function () { return view('app.membership_info'); })->name('membership_info');

// Perfil Candidatos
Route::get('/perfil/{url}', function () { return view('app.profiles.worker'); })->name('profiles.worker');
// Perfil Empresas
Route::get('/perfil/{url}', function () { return view('app.profiles.company'); })->name('profiles.company');

// Contacto
Route::get('/contact', function () { return view('app.contact'); })->name('contact');

// Términos y Condiciones
Route::get('/contact', function () { return view('app.terms'); })->name('terms');


////////////////// USUARIOS //////////////////

// Dash principal
Route::get('/dash', function () { return view('dash.index'); })->name('dash');

// Anuncios (Jobs)
Route::get('/dash/anuncios', function () { return view('dash.jobs.index'); })->name('dash.jobs');
Route::get('/dash/anuncios/crear', [JobController::class, 'create'])->name('dash.jobs.create');
Route::post('/dash/anuncios/crear', [JobController::class, 'store'])->name('dash.create.jobs');
Route::get('/dash/anuncios/{id}/editar', function () { return view('dash.jobs.edit'); })->name('dash.jobs.edit');

// Candidatos (Workers)

// Mensajería

// Perfil
Route::get('/dash/perfil', function () { return view('dash.profile'); })->name('dash.profile');
Route::get('/dash/perfil/planes', function () { return view('dash.profile.membership'); })->name('dash.profile.membership');
Route::get('/dash/perfil/planes/confirmar', function () { return view('dash.profile.checkout'); })->name('dash.profile.checkout');

// Feedbacks
Route::get('/dash/feedbacks', function () { return view('dash.feedbacks'); })->name('dash.feedbacks');


// sacar:
Route::post('/register', function () {  })->name('register');

// Fortify routes
require __DIR__.'/fortify.php';
