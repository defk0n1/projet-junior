<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post; 
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

Route::get('/', function () {
   
    return view('home' );
});
/*Cette route est associée à l'URL racine de votre application (/).
Lorsqu'un utilisateur accède à cette URL via une méthode HTTP GET, la fonction anonyme est exécutée.
À l'intérieur de cette fonction, tous les messages sont récupérés en utilisant Post::all(), qui récupère tous les enregistrements de la table de base de données associée au modèle Post.
Ensuite, la vue nommée 'home' est retournée en passant les messages récupérés sous forme de tableau associatif avec la clé 'posts'.
Cette vue sera utilisée pour afficher les messages sur la page d'accueil.*/
Route::post('/register', [UserController::class, 'register'])->name('register');//Cette route est associée à l'URL /register.
//Lorsqu'un utilisateur envoie un formulaire d'inscription via une méthode HTTP POST à cette URL, la méthode register du contrôleur UserController est appelée pour traiter la demande.


Route::POST('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

/*use App\Http\Controllers\ForgotPasswordController;

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

*/
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);


