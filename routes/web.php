<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ArtistesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use app\Http\Controllers\Bands;
use app\Http\Controllers\Musics;
use app\Http\Controllers\Clients;
use app\Http\Controllers\Artists;
use App\Http\Controllers\BandsController;
use App\Http\Controllers\MusicsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PlaylistsController;
use App\Models\Playlist;

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
// Generale routing 
Route::get('/', [PagesController::class, 'Main'])
    ->middleware(['auth', 'auth:web']);

// Register routing 
Route::get('/register' , [UsersController::class , 'registerPage']);
Route::post('/register/authentication', [UsersController::class, 'storeUserData']);

// Login routing 

Route::get('/login', [UsersController::class, 'loginPage'])->name('login');
Route::post('/login/authentication', [UsersController::class, 'credentialsVerification']);

// logout route
Route::get('/logout', [UsersController::class, 'logout']);

// ADMIN ROUTING 
Route::get('/dashbaord', [AdminsController::class, 'dashbaordPage']);
Route::get('/artisteDashbaord', [AdminsController::class, 'dashbaordArtistePage']);
Route::get('/bandDashbaord', [AdminsController::class , 'dashbaordBand']);
// Add / Update Pages for artistes music .... 

Route::get('/addMusic', [AdminsController::class , 'addMusicPage']);
Route::get('/updateMusic/{music}', [AdminsController::class, 'updateMusicPage']);

Route::get('/addArtiste', [AdminsController::class, 'addAritstePage']);
// Music routing 
Route::get('/songs', [MusicsController::class, 'displayMusic']); //read
Route::post('/music/create',[MusicsController::class, 'createMusic']); // create
Route::post('/music/update/{music}', [MusicsController::class,'updateMusic']);
Route::delete('/deleteMusic/{music}', [MusicsController::class, 'deleteMusic']);

// Artiste routing 
Route::post('/artiste/create', [ArtistesController::class, 'createArtiste']);
Route::put('/artiste/update/{artiste}', [ArtistesController::class, 'updateArtiste']); // update
Route::get('/updateArtiset/{artiste}', [AdminsController::class , 'updateArtistePage']); // read
Route::delete('/deleteArtiste/{artiste}', [ArtistesController::class, 'deleteArtiste']);

// Band routing 
Route::get('/addBand', [AdminsController::class , 'addBandPage']); // display 
Route::post('/band/create', [BandsController::class, 'createBand']); //  create
Route::get('/updateband/{band}', [AdminsController::class, 'updateBandPage']); // update page
Route::post('/update/band/{band}', [BandsController::class, 'updateBand']); // update method 
Route::delete('/deleteband/{band}', [BandsController::class, 'deleteband']);

// Playlist Routing 
Route::get('/playlists', [PlaylistsController::class , 'playlistPage']);

Route::get('/createPlaylist', [PlaylistsController::class, 'createPlaylistPage']);
Route::get('/updatePlaylist/{playlist}', [PlaylistsController::class, 'updatePlaylistPage']);

Route::post('/playlist/create', [PlaylistsController::class, 'createPlaylist']);
Route::post('/playlist/update/{playlist}', [PlaylistsController::class, 'updatePlaylist']);
Route::delete('/deletePlaylist/{playlist}', [PlaylistsController::class, 'deletePlaylist']);

// == Songs searching routes == //

Route::get('/songs/search', 'SongsController@search')->name('songs.search');