<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SubcontractorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\BillProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\VariationController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehiclelogController;
use App\Http\Controllers\HandbookController;

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

Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register', [CustomAuthController::class, 'register'])->name('register');
Route::post('/login', [CustomAuthController::class, 'loginUser'])->name('loginUser');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/staffdashboard', [CustomAuthController::class, 'staffdashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);

// Route::get('admin', [AdminController::class, 'dashboard']);
// Route::post('admin', [AdminController::class, 'dashboard']);

//Department Resource
Route::resource('department', DepartmentController::class);

//Employee Resource
Route::resource('employee', EmployeeController::class);
Route::post('api/fetch-locals', [EmployeeController::class, 'fetchLocal']);

//Subcontractor Resource
Route::resource('subcontractor', SubcontractorController::class);

//Client Resource
Route::resource('client', ClientController::class);

//Freelancer Resource
Route::resource('freelancer', FreelancerController::class);

//Position Resource
Route::resource('position', PositionController::class);

//Project Resource
Route::resource('project', ProjectController::class);

//Invoice Resource
Route::resource('invoice', InvoiceController::class);

//Bill Resource
Route::resource('bill', BillController::class);
Route::delete('billDetails/destroy', [BillController::class, 'destroyDetails']);

//ProjectUser Resource
Route::resource('user', UserController::class);

//Milestone Resource
Route::resource('milestone', MilestoneController::class);
Route::get('/milestoneProjectCreate/{id}', [
    MilestoneController::class,
    'createMilestone',
])->name('milestoneProjectCreate');
Route::get('/milestoneProjectEdit/{id}', [
    TaskController::class,
    'editMilestone',
])->name('milestoneProjectEdit');

//BillProject Resource
Route::resource('billProject', BillProjectController::class);

//Task Resource
Route::resource('task', TaskController::class);
Route::get('/taskProject/{id}', [TaskController::class, 'showProject'])->name(
    'taskProject'
);
Route::get('/taskProjectCreate/{id}', [
    TaskController::class,
    'createTask',
])->name('taskProjectCreate');
Route::get('/taskProjectEdit/{id}', [TaskController::class, 'editTask'])->name(
    'taskProjectEdit'
);
Route::put('/taskProjectUpdate/{id}', [
    TaskController::class,
    'updateTask',
])->name('taskProjectUpdate');
// Route::get('/user/{id}', [UserController::class, 'show']);

//Document Resource
Route::resource('document', DocumentController::class);
Route::get('/documentProjectCreate/{id}', [DocumentController::class,'createDocument'])->name('documentProjectCreate');
Route::get('/documentProjectEdit/{id}', [TaskController::class,'editDocument'])->name('documentProjectEdit');


//Comment Resource
Route::resource('comment', CommentController::class);

//Inventory Resource
Route::resource('inventory', InventoryController::class);

//Procurement Resource
Route::resource('procurement', ProcurementController::class);

//Variation Resource
Route::resource('variation', VariationController::class);

//Vehicle Resource
Route::resource('vehicle', VehicleController::class);

//Vehicle Resource
Route::resource('vehiclelog', VehiclelogController::class);

//Handbook Resource
Route::resource('handbook', HandbookController::class);



});

Route::get('/downloadDoc/{id}', [DocumentController::class, 'download'])->name('downloadDoc');