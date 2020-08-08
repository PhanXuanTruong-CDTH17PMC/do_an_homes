    <?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/', 'HomePageController' );
// Route::get('/home-page',function(){
//     return view('layout');
// });
Route::resource('/log-in','LoginController');
Route::post('getLogin','LoginController@getLogin');
Route::get('logout','LoginController@logout')->name('logout');


Route::get('/admin-info',function(){
    return view('quan-tri-vien.trang-ca-nhan');
});
/*Route::get('/danh-sach-nhan-vien',function(){
    return view('nhan-vien.danh-sach-nhan-vien');
});*/

//Quản lý thông tin nhân viên
Route::resource('danh-sach-nhan-vien','NhanVienController');
Route::resource('danh-sach-bo-phan','BoPhanController');

// Route::resource('danh-sach-tin-tuc','TinTucController');
// Route::resource('danh-sach-thong-bao','ThongBaoController');
//Quản lý thông tin căn hộ
/*Route::get('/can-ho', function () {
    return view('can-ho.danh-sach-can-ho');
});*/
Route::resource('can-ho','CanHoController');





Route::resource('loai-account', 'LoaiAccountController');
/*Route::get('/bo-phan', function () {
    return view('nhan-vien.bo-phan.danh-sach-bo-phan');
});*/

Route::resource('loai-can-ho', 'LoaiCanHoController');

/*Route::get('/loai-account', function () {
    return view('nhan-vien.loai-account.danh-sach-loai-account');
});*/

Route::resource('quan-he', 'MoiQuanHeController');

Route::resource('cu-dan', 'CuDanController');

Route::resource('khu-vuc', 'KhuVucController');

Route::resource('loai-phuong-tien', 'LoaiPhuongTienController');

Route::resource('phuong-tien', 'PhuongTienController');

Route::resource('danh-sach-thong-bao','ThongBaoController');

Route::resource('danh-sach-tin-tuc','TinTucController');




Route::resource('dich-vu', 'DichVuController');
Route::prefix('tin-tuc')->group(function(){
    Route::get('/','TinTucController@index')->name('danh-sach-tin-tuc');
    Route::get('them','TinTucController@create')->name('them-tin-tuc');
    Route::post('them','TinTucController@store')->name('xu-ly-them-tin-tuc');
});


Route::resource('hoa-don','HoaDonController' );

 Route::get('/user', function () {
     return view('user.layout.user-layout');
 });
// Route::get('/home-page', function () {
//     return view('user.home-page');
// });