<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudientController;
use App\Http\Controllers\Admin\VideoController;


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

Route::middleware(['auth-user'])->group(function () {

       // Dashboard 

        Route::redirect("/",'/dashboard');

        Route::get('/dashboard', [DashboardController::class,"index"]);


       // ***************************************************************************
    
       // Teacher

            // Add Teacher
            Route::get('new-teacher', [TeacherController::class, "create"]);

            // Add Teacher - submit
            Route::post('new-teacher', [TeacherController::class, "store"]);

            // View Teachers
            Route::get('teachers', [TeacherController::class, "index"]);

            // Edit Teachers
            Route::get('edit-teacher/{id}', [TeacherController::class, "edit"]);

            // Edit Teachers - submit
            Route::post('edit-teacher/{id}', [TeacherController::class, "update"]);

            // View Teachers
            Route::get('delete-teacher/{id}', [TeacherController::class, "destroy"]);

       //**************************************************************************** */    


       // Studient

            // Add Studient
            Route::get('new-studient', [StudientController::class, "create"]);

            // Add Studient - submit
            Route::post('new-studient', [StudientController::class, "store"]);

            // View Studient
            Route::get('studients', [StudientController::class, "index"]);

            // Edit Studient
            Route::get('edit-studient/{id}', [StudientController::class, "edit"]);

            // Edit Studient - submit
            Route::post('edit-studient/{id}', [StudientController::class, "update"]);

            // View Studient
            Route::get('delete-studient/{id}', [StudientController::class, "destroy"]);

       //**************************************************************************** */    

       // Video

            // Add Video
            Route::get('new-video', [VideoController::class, "create"]);

            // Add Video - submit
            Route::post('new-video', [VideoController::class, "store"]);

            // View Video
            Route::get('videos', [VideoController::class, "index"]);

            // Edit Video
            Route::get('edit-video/{id}', [VideoController::class, "edit"]);

            // Edit Video - submit
            Route::post('edit-video/{id}', [VideoController::class, "update"]);

            // View Video
            Route::get('delete-video/{id}', [VideoController::class, "destroy"]);
            
       //**************************************************************************** */    

       // Cars
    
           // New Car 
           Route::get('/new-car', [CarsController::class,"create"]);
    
           // New Car - Store
           Route::post('/new-car', [CarsController::class,"store"]);
    
           // Edit Car 
           Route::get('/edit-car/{id}', [CarsController::class,"edit"]);
    
           // Edit Car - Update
           Route::post('/edit-car/{id}', [CarsController::class,"update"]);
    
           // Delete Car 
           Route::get('/delete-car/{id}', [CarsController::class,"destroy"]);
    
           // New Car Import File
           Route::get('/new-car-import', [CarsController::class,"import_page"]);
    
           // New Car Import File - Store
           Route::post('/new-car-import', [CarsController::class,"import_store"]);
    
          
    
           // Cars View
           Route::get('/cars', [CarsController::class,"index"] );
           
           // Download Cars File
           Route::get('/download-file', function () {
               $path = public_path("Cars-Example.xlsx");
               $response = response()->download($path);
               // $response->headers->set('Refresh', '2;url=/cars');
               
               return $response;
               
           } );
    
    
    
    
       // ***************************************************************************
    
       // Users
    
           // New User 
           Route::get('/new-user', [UsersController::class,"create"]);
    
           // New Car - Store
           Route::post('/new-user', [UsersController::class,"store"]);
    
           // Delete Car 
           Route::get('/delete-user/{id}', [UsersController::class,"destroy"]);
    
           // Users View
           Route::get('/users', [UsersController::class,"index"] );
    
           // Change Password 
           Route::get('/change-password', [UsersController::class,"change_password_page"] );
    
           // Change Password - Logic
           Route::post('/change-password', [UsersController::class,"change_password_logic"] );
       // ***************************************************************************
    
});


Route::middleware(['un-auth-user'])->group(function () {

    // Auth 

        // Login Page
        Route::get('/login', [UsersController::class,"login_page"]);

        // Login - submit
        Route::post('/login', [UsersController::class,"login_logic"]);

        

    // ***************************************************************************
});
 

// Logout 
Route::get('/logout', [UsersController::class,"logout"]);
