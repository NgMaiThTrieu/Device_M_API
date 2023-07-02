<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TypeOfDeviceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BatchOfGoodController;
use App\Http\Controllers\BodDetailController;
use App\Http\Controllers\EquipmentBorrowingFormController;
use App\Http\Controllers\BorrowingDetailController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ConfigurationDetailController;
use App\Http\Controllers\ConfigurationSpecificationController;
use App\Http\Controllers\DetailConController;
use App\Http\Controllers\DisposalController;
use App\Http\Controllers\ReportEmailController;
use App\Http\Controllers\RequireController;
use App\Http\Controllers\TeacherInformationController;
use App\Models\Brand;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Khoa
Route::get('faculties', [FacultyController::class, 'index']);
Route::post('faculties', [FacultyController::class, 'store']);
Route::get('faculties/{id}', [FacultyController::class, 'show']);
Route::put('faculties/{id}', [FacultyController::class, 'update']);
Route::delete('faculties/{id}', [FacultyController::class, 'destroy']);
Route::patch('faculties/{id}', [FacultyController::class, 'destroy']);

//Thiết bị
Route::get('devices', [DeviceController::class, 'index']);
Route::post('devices', [DeviceController::class, 'store']);
Route::get('devices/{id}', [DeviceController::class, 'show']);
Route::put('devices/{id}', [DeviceController::class, 'update']);
Route::delete('devices/{id}', [DeviceController::class, 'destroy']);

//Nhà cung cấp
Route::get('suppliers', [SupplierController::class, 'index']);
Route::post('suppliers', [SupplierController::class, 'store']);
Route::get('suppliers/{id}', [SupplierController::class, 'show']);
Route::put('suppliers/{id}', [SupplierController::class, 'update']);
Route::delete('suppliers/{id}', [SupplierController::class, 'destroy']);

//Loại thiết bị
Route::get('type-of-devices', [TypeOfDeviceController::class, 'index']);
Route::post('type-of-devices', [TypeOfDeviceController::class, 'store']);
Route::get('type-of-devices/{id}', [TypeOfDeviceController::class, 'show']);
Route::get('type-of-devices/{Type_Of_Device_Name}', [TypeOfDeviceController::class, 'show']);
Route::put('type-of-devices/{id}', [TypeOfDeviceController::class, 'update']);
Route::delete('type-of-devices/{id}', [TypeOfDeviceController::class, 'destroy']);

//Phòng
Route::apiResource('rooms', RoomController::class);

//Lô hàng
Route::apiResource('batch-of-goods', BatchOfGoodController::class);

//Chi tiết lô hàng
Route::apiResource('bod-details', BodDetailController::class);

//phiếu mượn trả
Route::apiResource('equipment-borrowing-forms', EquipmentBorrowingFormController::class);

//Chi tiết phiếu mượn
Route::apiResource('borrowing-details', BorrowingDetailController::class);

//Bảng cấu hình
Route::apiResource('configurations', ConfigurationController::class);

//Bảng chi tiết cấu hình
Route::apiResource('configuration-details', ConfigurationDetailController::class);

//Bảng thông số cấu hình
Route::apiResource('configuration-specifications', ConfigurationSpecificationController::class);

//Bảng thanh lý
Route::apiResource('disposals', DisposalController::class);

//Bảng hòm thư báo cáo
Route::apiResource('report-mails', ReportEmailController::class);

//Bảng thông tin giáo viên
Route::apiResource('teacher-informations', TeacherInformationController::class);

//bảng yêu cầu
Route::apiResource('requires', RequireController::class);

//Bảng chi tiết thiết bị
Route::apiResource('detail-cons', DetailConController::class);

//Bảng thương hiệu
Route::apiResource('brands', BrandController::class);
