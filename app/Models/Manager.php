<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manager extends Model
{

    use HasFactory,SoftDeletes;

    protected $fillable=[
        'name',
        'email',
        'password',

    ];
}

// <?php

// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('admin.index');
// });


// Route::get('/dashboard/new', function () {
//     return view('admin.new');
// });



// // Route::get('/dashboard/see', function () {
// //     return 'hhh';
// // });
