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

Route::get('/',[
   'uses' => 'App\Http\Controllers\InfoHubController@index',
    'as'        => '/'
]);

Route::get('/redirect-page',[
    'uses' => 'App\Http\Controllers\InfoHubController@home',
    'as'        => 'redirect,page'
]);

//======Password
Route::get('/change-password',[
    'uses' => 'App\Http\Controllers\PasswordController@index',
    'as'        => 'change-password',
    'middleware' => 'is_admin_teacher_student_guest'
]);
Route::post('/new-password',[
    'uses' => 'App\Http\Controllers\PasswordController@changePassword',
    'as'        => 'new.password',
    'middleware' => 'is_admin_teacher_student_guest'
]);

//======library====//
Route::get('/show-books', [
    'uses' => 'App\Http\Controllers\StudentLibraryController@index',
    'as'   => 'books.show',
    'middleware' => 'is_teacher_student_guest_teacher'
]);
//===============Student section Start===================//
//Student login

Route::post('/student-login',[
    'uses' => 'App\Http\Controllers\CustomLoginController@index',
    'as'        => 'student-login'
]);

Route::get('/student-dashboard',[
    'uses' => 'App\Http\Controllers\StudentDashboardController@index',
    'as'        => 'student-dashboard',
    'middleware' => 'is_student'
]);

//===Student-Profile===//

Route::get('/edit-student-profile', [
    'uses' => 'App\Http\Controllers\StudentProfileController@index',
    'as'   => 'stu-profile.edit',
    'middleware' => 'is_student'
]);

Route::get('/view-student-profile', [
    'uses' => 'App\Http\Controllers\StudentProfileController@view',
    'as'   => 'stu-profile.view',
    'middleware' => 'is_student'
]);

Route::post('/update-student-profile/{id}', [
    'uses' => 'App\Http\Controllers\StudentProfileController@updateStudentProfile',
    'as'   => 'stu-profile.update',
    'middleware' => 'is_student'
]);

//===Student-skill===//

Route::get('/add-skill', [
    'uses' => 'App\Http\Controllers\StudentSkillController@index',
    'as'   => 'skill.add',
    'middleware' => 'is_student'
]);
Route::post('/new-skill/{id}', [
    'uses' => 'App\Http\Controllers\StudentSkillController@addStudentSkill',
    'as'   => 'skill.new',
    'middleware' => 'is_student'
]);
//========= Incourse Marks ====
Route::get('/student-Incourse-marks', [
    'uses' => 'App\Http\Controllers\ResultController@index',
    'as'   => 'incourse.student',
    'middleware' => 'is_student'

]);

//===== Attendance ====
Route::get('/student-attendance', [
    'uses' => 'App\Http\Controllers\AttendanceStudentController@index',
    'as'   => 'attendance.student',
    'middleware' => 'is_student'
]);

//================ Classmates==================//

Route::get('/classmate', [
    'uses' => 'App\Http\Controllers\ClassmateController@index',
    'as'   => 'classmate',
    'middleware' => 'is_student'
]);

//==================== Routine ==========================//
Route::get('/routine', [
    'uses' => 'App\Http\Controllers\RoutineController@view',
    'as'   => 'routine',
]);


//Route::get('/dl-books', [
//    'uses' => 'App\Http\Controllers\StudentLibraryController@downloadPDF',
//    'as'   => 'books.dl',
//]);


//===Teacher-desk===//
Route::get('/faculty', [
    'uses' => 'App\Http\Controllers\TeacherDeskController@index',
    'as'   => 'faculty',
    'middleware' => 'is_student_teacher'
]);
 //===== Notes =====//
Route::get('/view-note', [
    'uses' => 'App\Http\Controllers\NoteController@view',
    'as'   => 'view.note',
    'middleware' => 'is_student'
]);




//=============================Student section End =============================//


//==============================Teacher section Start===================//

//teacher login

Route::post('/teacher-login',[
    'uses' => 'App\Http\Controllers\CustomLoginController@teacher',
    'as'        => 'teacher-login'
]);

// teacher dashboard
Route::get('/teacher-dashboard',[
    'uses' => 'App\Http\Controllers\TeacherDashboardController@index',
    'as'        => 'teacher-dashboard',
    'middleware' => 'is_teacher'
]);



//===Teacher-Profile===//

Route::get('/edit-teacher-profile', [
    'uses' => 'App\Http\Controllers\TeacherProfileController@index',
    'as'   => 'tea-profile.edit',
    'middleware' => 'is_teacher_guest_teacher'

]);

Route::get('/view-teacher-profile', [
    'uses' => 'App\Http\Controllers\TeacherProfileController@view',
    'as'   => 'tea-profile.view',
    'middleware' => 'is_teacher_guest_teacher'

]);

Route::post('/update-teacher-profile/{id}', [
    'uses' => 'App\Http\Controllers\TeacherProfileController@updateTeacherProfile',
    'as'   => 'tea-profile.update',
     'middleware' => 'is_teacher_guest_teacher'
]);
//=====Routine
Route::get('/view-routine', [
    'uses' => 'App\Http\Controllers\TeacherRoutineController@view',
    'as'   => 'view.routine',
    'middleware' => 'is_teacher_guest_teacher'
]);
//======teacher- library====//
//
//Route::get('/teacher-show-books', [
//    'uses' => 'App\Http\Controllers\TeacherLibraryController@index',
//    'as'   => 'books.show-T',
//]);

//================= Student Corner ====//

//======= 9 Batch
Route::get('/nine-batch-A-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@nineBatchA',
    'as'   => 'nineBatchA.student',
    'middleware' => 'is_teacher_guest_teacher'

]);
Route::get('/nine-batch-B-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@nineBatchB',
    'as'   => 'nineBatchB.student',
    'middleware' => 'is_teacher_guest_teacher'
]);

//======= 10 Batch

Route::get('/ten-batch-A-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@tenBatchA',
    'as'   => 'tenBatchA.student',
    'middleware' => 'is_teacher_guest_teacher'

]);
Route::get('/ten-batch-B-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@tenBatchB',
    'as'   => 'tenBatchB.student',
    'middleware' => 'is_teacher_guest_teacher'
]);


//======= 11 Batch
Route::get('/eleven-batch-A-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@elevenBatchA',
    'as'   => 'elevenBatchA.student',
    'middleware' => 'is_teacher_guest_teacher'

]);
Route::get('/eleven-batch-B-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@elevenBatchB',
    'as'   => 'elevenBatchB.student',
    'middleware' => 'is_teacher_guest_teacher'
]);


//======= 12 Batch
Route::get('/twelve-batch-A-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@twelveBatchA',
    'as'   => 'twelveBatchA.student',
    'middleware' => 'is_teacher_guest_teacher'

]);
Route::get('/twelve-batch-B-student',[
    'uses' => 'App\Http\Controllers\StudentCornerController@twelveBatchB',
    'as'   => 'twelveBatchB.student',
    'middleware' => 'is_teacher_guest_teacher'
]);
// ====== View Single profile
Route::get('/view-student-info/{id}', [
    'uses' => 'App\Http\Controllers\StudentCornerController@studentView',
    'as'   => 'student.view',
    'middleware' => 'is_teacher_guest_teacher'
]);

//=======Courses =======//

Route::get('/view-courses-1S', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@view1S',
    'as'   => 'courses.view1S',
    'middleware' => 'is_teacher_guest_teacher'
]);
Route::get('/view-courses-5S', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@view5S',
    'as'   => 'courses.view5S',
    'middleware' => 'is_teacher_guest_teacher'
]);

//======================= Incourse ================/

Route::get('/Incourse-marks', [
    'uses' => 'App\Http\Controllers\IncourseController@index',
    'as'   => 'incourse.marks',
    'middleware' => 'is_teacher'
]);

Route::post('/new-Incourse-marks', [
    'uses' => 'App\Http\Controllers\IncourseController@create',
    'as'   => 'incourse.new',
    'middleware' => 'is_teacher_guest_teacher'

]);

Route::post('/update-Incourse-marks/{id}', [
    'uses' => 'App\Http\Controllers\IncourseController@update',
    'as'   => 'incourse.update',
    'middleware' => 'is_teacher_guest_teacher'
]);
//Route::get('/add-Incourse-1SA', [
//    'uses' => 'App\Http\Controllers\IncourseController@add1SA',
//    'as'   => 'incourse.view1SA',
//    'middleware' => 'is_teacher_guest_teacher'
//]);
//Route::get('/add-Incourse-1SB', [
//    'uses' => 'App\Http\Controllers\IncourseController@add1SB',
//    'as'   => 'incourse.add1SB',
//    'middleware' => 'is_teacher_guest_teacher'
//]);

// ==== add Marks
Route::get('/add-Incourse-5SA', [
    'uses' => 'App\Http\Controllers\IncourseController@add5SA',
    'as'   => 'incourse.add5SA',
    'middleware' => 'is_teacher'
]);

Route::get('/add-Incourse-5SB', [
    'uses' => 'App\Http\Controllers\IncourseController@add5SB',
    'as'   => 'incourse.add5SB',
    'middleware' => 'is_teacher'
]);

// ==== view Marks
Route::get('/view-Incourse-5S', [
    'uses' => 'App\Http\Controllers\IncourseController@view5S',
    'as'   => 'incourse.view5S',
    'middleware' => 'is_teacher_guest_teacher'
]);


//====================== Attendance====//
Route::get('/attendance', [
    'uses' => 'App\Http\Controllers\AttendanceController@index',
    'as'   => 'attendance',
  'middleware' => 'is_teacher'
]);

Route::post('/new-attendance', [
    'uses' => 'App\Http\Controllers\AttendanceController@create',
    'as'   => 'attendance.new',
    'middleware' => 'is_teacher_guest_teacher'

]);
Route::post('/attendance-update/{id}', [
    'uses' => 'App\Http\Controllers\AttendanceController@update',
    'as'   => 'attendance.update',
    'middleware' => 'is_teacher_guest_teacher'
]);
//========== 5th Semester Attendance
Route::get('/attendance-add5SA', [
    'uses' => 'App\Http\Controllers\AttendanceController@add5SA',
    'as'   => 'attendance.add5SA',
    'middleware' => 'is_teacher'
]);
Route::get('/attendance-add5SB', [
    'uses' => 'App\Http\Controllers\AttendanceController@add5SB',
    'as'   => 'attendance.add5SB',
    'middleware' => 'is_teacher'
]);


//====view 5th semester
Route::get('/attendance-view5S', [
    'uses' => 'App\Http\Controllers\AttendanceController@view5S',
    'as'   => 'attendance.view5S',
    'middleware' => 'is_teacher_guest_teacher'
]);



//=======Notes ==========/
Route::get('/add-note', [
    'uses' => 'App\Http\Controllers\NoteController@index',
    'as'   => 'note.add',
    'middleware' => 'is_teacher'
]);
Route::get('/get-course-code-note', [
    'uses' => 'App\Http\Controllers\NoteController@getCourseCode',
    'as'   => 'note.get-course-code',
    'middleware' => 'is_teacher'
]);
Route::post('/new-note', [
    'uses' => 'App\Http\Controllers\NoteController@create',
    'as'   => 'note.new',
    'middleware' => 'is_teacher_guest_teacher'
]);
Route::get('/manage-note', [
    'uses' => 'App\Http\Controllers\NoteController@manage',
    'as'   => 'manage.note',
    'middleware' => 'is_teacher_guest_teacher'
]);
Route::get('/edit-note/{id}',[
    'uses' => 'App\Http\Controllers\NoteController@edit',
    'as'   => 'note.edit',
    'middleware' => 'is_teacher_guest_teacher'

]);
Route::post('/update-note/{id}', [
    'uses' => 'App\Http\Controllers\NoteController@update',
    'as'   => 'note.update',
    'middleware' => 'is_teacher_guest_teacher'
]);
Route::post('/delete-note/{id}', [
    'uses' => 'App\Http\Controllers\NoteController@delete',
    'as'   => 'note.delete',
    'middleware' => 'is_teacher_guest_teacher'
]);
//=============Notice Board ==========//

Route::get('/add-teacher-notice', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@add',
    'as'   => 'add.notice',
    'middleware' => 'is_teacher_guest_teacher'
]);

Route::get('/manage-teacher-notice', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@manageByTeacher',
    'as'   => 'manage.notice',
    'middleware' => 'is_teacher_guest_teacher'
]);
Route::get('/edit-teacher-notice/{id}', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@editByTeacher',
    'as'   => 'edit.notice',
    'middleware' => 'is_teacher_guest_teacher'
]);
Route::post('/update-teacher-notice/{id}', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@updateByTeacher',
    'as'   => 'update.notice',
    'middleware' => 'is_teacher_guest_teacher'
]);

//=============Notice Board  View==========//
Route::get('/view-notice', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@view',
    'as'   => 'notice.view',
    'middleware' => 'is_teacher_student_guest_teacher'
]);

//=========================Teacher section End=======//

//============================== Guest Teacher section Start===================//
//Guest teacher login
Route::post('/guest-login',[
    'uses' => 'App\Http\Controllers\CustomLoginController@guest',
    'as'        => 'guest-login'
]);

//Guest teacher dashboard
Route::get('/guest-teacher-dashboard',[
    'uses' => 'App\Http\Controllers\GuestTeacherDashboardController@index',
    'as'        => 'guest_teacher-dashboard',
    'middleware' => 'is_guest_teacher'
]);
//=====================Attendances
Route::get('/attendances', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@index',
    'as'   => 'attendances',
    'middleware' => 'is_guest_teacher'
]);
//========== 5th Semester Attendance
Route::get('/attendance-GT-add5SA', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@attend5SA',
    'as'   => 'attendance.addGT5SA',
    'middleware' => 'is_guest_teacher'
]);
Route::get('/attendance-GT-add5SB', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@attend5SB',
    'as'   => 'attendance.addGT5SB',
    'middleware' => 'is_guest_teacher'
]);
//===Incourse
Route::get('/incourses', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@home',
    'as'   => 'incourses',
    'middleware' => 'is_guest_teacher'
]);
// ==== add Marks 5th semester
Route::get('/incourse-5SA', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@marks5SA',
    'as'   => 'incourse.addGT5SA',
    'middleware' => 'is_guest_teacher'
]);

Route::get('/incourse-5SB', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@marks5SB',
    'as'   => 'incourse.addGT5SB',
    'middleware' => 'is_guest_teacher'
]);
//=======Note
Route::get('/add-notes', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@note',
    'as'   => 'add.note',
    'middleware' => 'is_guest_teacher'
]);
Route::get('/get-code-note', [
    'uses' => 'App\Http\Controllers\GuestTeacherController@getCourseCode',
    'as'   => 'note.get-code',
    'middleware' => 'is_guest_teacher'
]);
//========================= Guest Teacher section End=======//

//======================= Blood Bank start ==========================//

//=======Blood Bank Home =======//
Route::get('/blood-bank',[
    'uses' => 'App\Http\Controllers\BloodController@index',
    'as'        => 'blood.bank',
    'middleware' => 'is_student_teacher'
]);


//=======================Student Blood add ================//


Route::get('/add-student-bg',[
    'uses' => 'App\Http\Controllers\StudentBloodController@index',
    'as'  => 'add.studentBg',
    'middleware' => 'is_student'
]);
Route::post('/new-student-bg/{id}',[
    'uses' => 'App\Http\Controllers\StudentBloodController@addStudentBG',
    'as'  => 'new.studentBg',
    'middleware' => 'is_student'
]);
Route::get('/view-student-bg-List',[
    'uses' => 'App\Http\Controllers\StudentBloodController@viewBloodList',
    'as'  => 'view.studentBg',
    'middleware' => 'is_student_teacher'
]);

//===============Teacher Blood Add =========//

Route::get('/add-teacher-bg',[
'uses' => 'App\Http\Controllers\TeacherBloodController@index',
 'as'  => 'add.teacherBg',
    'middleware' => 'is_teacher'
]);
Route::post('/new-teacher-bg/{id}',[
  'uses' => 'App\Http\Controllers\TeacherBloodController@addTeacherBG',
   'as'  => 'new.teacherBg',
    'middleware' => 'is_teacher'
 ]);
Route::get('/view-teacher-bg-List',[
    'uses' => 'App\Http\Controllers\TeacherBloodController@viewBloodList',
    'as'  => 'view.teacherBg',
     'middleware' => 'is_student_teacher'
]);

//===============================Donor Section start=========================//

//================= Donor Registration=======///

Route::get('/donor',[
    'uses' => 'App\Http\Controllers\BloodController@donor',
    'as'        =>'donor.reg',
    'middleware' => 'is_student_teacher'
]);
Route::post('/new-donor',[
    'uses' => 'App\Http\Controllers\BloodController@create',
    'as'  => 'new.donor',
     'middleware' => 'is_student_teacher'
]);

Route::get('/edit-donor', [
    'uses' => 'App\Http\Controllers\DonorController@edit',
    'as'   => 'donor.edit',
    'middleware' => 'is_student_teacher'

]);

Route::post('/update-donor/{id}', [
    'uses' => 'App\Http\Controllers\DonorController@update',
    'as'   => 'donor.update',
    'middleware' => 'is_student_teacher'

]);



//=================== Donor find list =========================//
//=============== AB ===
Route::get('/donor-ab-positive',[
    'uses' => 'App\Http\Controllers\DonorController@donorABPos',
    'as'        => 'donor.abP',
    'middleware' => 'is_student_teacher'
]);
Route::get('/donor-ab-negative',[
   'uses' => 'App\Http\Controllers\DonorController@donorABNeg',
  'as'        => 'donor.abN',
    'middleware' => 'is_student_teacher'
]);


//============ A =========

Route::get('/donor-a-positive',[
    'uses' => 'App\Http\Controllers\DonorController@donorAPos',
    'as'        => 'donor.aP',
    'middleware' => 'is_student_teacher'
]);
Route::get('/donor-a-negative',[
   'uses' => 'App\Http\Controllers\DonorController@donorANeg',
    'as'        => 'donor.aN',
    'middleware' => 'is_student_teacher'
]);


//================== B ==========

Route::get('/donor-b-positive',[
    'uses' => 'App\Http\Controllers\DonorController@donorBPos',
    'as'        => 'donor.bP',
    'middleware' => 'is_student_teacher'
]);
Route::get('/donor-b-negative',[
   'uses' => 'App\Http\Controllers\DonorController@donorBNeg',
  'as'        => 'donor.bN',
    'middleware' => 'is_student_teacher'
]);

//=========== O =========

Route::get('/donor-o-positive',[
   'uses' => 'App\Http\Controllers\DonorController@donorOPos',
  'as'        => 'donor.oP',
    'middleware' => 'is_student_teacher'
]);
Route::get('/donor-o-negative',[
   'uses' => 'App\Http\Controllers\DonorController@donorONeg',
  'as'        => 'donor.oN',
    'middleware' => 'is_student_teacher'
]);

//===============donor end====//

//================================== Blood Bank end =========//

 // ==================== Admin Section ================//


Route::get('/dashboard', [
    'uses' => 'App\Http\Controllers\AdminDashboardController@index',
    'as'   => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified','is_register']
]);

//======== Notice Board ========//

Route::get('/add-notice', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@index',
    'as'   => 'notice.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-notice', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@create',
    'as'   => 'notice.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin_teacher_guest_teacher']
]);

Route::get('/manage-notice', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@manage',
    'as'   => 'notice.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-notice/{id}', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@edit',
    'as'   => 'notice.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-notice/{id}', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@update',
    'as'   => 'notice.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-notice/{id}', [
    'uses' => 'App\Http\Controllers\NoticeBoardController@delete',
    'as'   => 'notice.delete',
    'middleware' => ['auth:sanctum', 'verified','is_admin_teacher_guest_teacher']
]);

//=========Semester start ========/


Route::get('/add-semester', [
    'uses' => 'App\Http\Controllers\SemesterController@index',
    'as'   => 'semester.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-semester', [

    'uses' => 'App\Http\Controllers\SemesterController@create',
    'as'   => 'semester.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-semester', [
    'uses' => 'App\Http\Controllers\SemesterController@manage',
    'as'   => 'semester.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-semester/{id}', [
    'uses' => 'App\Http\Controllers\SemesterController@edit',
    'as'   => 'semester.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-semester/{id}', [
    'uses' => 'App\Http\Controllers\SemesterController@update',
    'as'   => 'semester.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-semester/{id}', [
    'uses' => 'App\Http\Controllers\SemesterController@delete',
    'as'   => 'semester.delete',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

//=========Semester end ========/


//========= Course start ========/


Route::get('/add-course', [
        'uses' => 'App\Http\Controllers\CourseController@index',
        'as'   => 'course.add',
        'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-course', [
      'uses' => 'App\Http\Controllers\CourseController@create',
      'as'   => 'course.new',
      'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-course', [
    'uses' => 'App\Http\Controllers\CourseController@manage',
    'as'   => 'course.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-course/{id}', [
    'uses' => 'App\Http\Controllers\CourseController@edit',
    'as'   => 'course.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-course/{id}', [
    'uses' => 'App\Http\Controllers\CourseController@update',
    'as'   => 'course.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-course/{id}', [
    'uses' => 'App\Http\Controllers\CourseController@delete',
    'as'   => 'course.delete',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


//========= Course end ========/

//=============Batch start ========/


Route::get('/add-batch',[
 'uses' => 'App\Http\Controllers\BatchController@index',
 'as'   => 'batch.add',
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-batch', [
  'uses' => 'App\Http\Controllers\BatchController@create',
  'as'   => 'batch.new',
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-batch', [
   'uses' => 'App\Http\Controllers\BatchController@manage',
    'as'   => 'batch.manage',
 'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
Route::get('/edit-batch/{id}', [
  'uses' => 'App\Http\Controllers\BatchController@edit',
    'as'   => 'batch.edit',
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-batch/{id}', [
 'uses' => 'App\Http\Controllers\BatchController@update',
    'as'   => 'batch.update',
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-batch/{id}', [
  'uses' => 'App\Http\Controllers\BatchController@delete',
    'as'   => 'batch.delete', 
 'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


//=============Batch end ========/


//=======Student start ========/

Route::get('/add-student', [

 'uses' => 'App\Http\Controllers\StudentController@index',
    'as'   => 'student.add',
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/get-session-by-name', [
    'uses' => 'App\Http\Controllers\StudentController@getSession',
    'as'   => 'routine.get-session',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/get-semester-by-name', [
    'uses' => 'App\Http\Controllers\StudentController@getSemester',
    'as'   => 'routine.get-semester',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-student', [
  'uses' => 'App\Http\Controllers\StudentController@create',
    'as'   => 'student.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
  ]);

Route::get('/manage-student', [
 'uses' => 'App\Http\Controllers\StudentController@manage',
    'as'   => 'student.manage',
    
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-basic-student', [
 'uses' => 'App\Http\Controllers\StudentController@manageBasic',
    'as'   => 'student.manageBasic',
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-academic-student', [
 'uses' => 'App\Http\Controllers\StudentController@manageAcademic',
    'as'   => 'student.manageAcademic',
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-contact-student', [
   
 'uses' => 'App\Http\Controllers\StudentController@manageContact',
    'as'   => 'student.manageContact',
    
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-academic-student/{id}', [
  
  'uses' => 'App\Http\Controllers\StudentController@editAcademic',
    'as'   => 'student.editAcademic',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-basic-student/{id}', [
  
  'uses' => 'App\Http\Controllers\StudentController@editBasic',
    'as'   => 'student.editBasic',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-contact-student/{id}', [
  
  'uses' => 'App\Http\Controllers\StudentController@editContact',
    'as'   => 'student.editContact',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-basic-student/{id}', [
   
 'uses' => 'App\Http\Controllers\StudentController@updateBasic',
    'as'   => 'student.updateBasic',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-academic-student/{id}', [
   
 'uses' => 'App\Http\Controllers\StudentController@updateAcademic',
    'as'   => 'student.updateAcademic',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-contact-student/{id}', [
   
 'uses' => 'App\Http\Controllers\StudentController@updateContact',
    'as'   => 'student.updateContact',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-student/{id}', [
  
  'uses' => 'App\Http\Controllers\StudentController@delete',
    'as'   => 'student.delete',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


//========Teacher

Route::get('/add-teacher', [
        'uses' => 'App\Http\Controllers\TeacherController@index',
        'as'   => 'teacher.add',
        'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-teacher', [
    'uses' => 'App\Http\Controllers\TeacherController@create',
    'as'   => 'teacher.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-teacher', [
        'uses' => 'App\Http\Controllers\TeacherController@manage',
        'as'   => 'teacher.manage',
        'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-basic-teacher', [
 'uses' => 'App\Http\Controllers\TeacherController@manageBasic',
    'as'   => 'teacher.manageBasic',
    
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-contact-teacher', [
 'uses' => 'App\Http\Controllers\TeacherController@manageContact',
    'as'   => 'teacher.manageContact',
    
'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-basic-teacher/{id}', [
  
  'uses' => 'App\Http\Controllers\TeacherController@editBasic',
    'as'   => 'teacher.editBasic',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-contact-teacher/{id}', [
  
  'uses' => 'App\Http\Controllers\TeacherController@editContact',
    'as'   => 'teacher.editContact',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-basic-teacher/{id}', [
   
 'uses' => 'App\Http\Controllers\TeacherController@updateBasic',
    'as'   => 'teacher.updateBasic',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-contact-teacher/{id}', [
   
 'uses' => 'App\Http\Controllers\TeacherController@updateContact',
    'as'   => 'teacher.updateContact',
  
  'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-teacher/{id}', [
  
  'uses' => 'App\Http\Controllers\TeacherController@delete',
    'as'   => 'teacher.delete',
   
 'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

// ========= Guide Teachers

Route::get('/add-guide-teacher', [
    'uses' => 'App\Http\Controllers\GuideTeacherController@index',
    'as'   => 'guideTeacher.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
Route::get('/get-guide-teacher-by-id', [
    'uses' => 'App\Http\Controllers\GuideTeacherController@getGuideTeacher',
    'as'   => 'get-teacher',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/get-asst-guide-teacher-by-id', [
    'uses' => 'App\Http\Controllers\GuideTeacherController@getAsstGuideTeacher',
    'as'   => 'get-asst-teacher',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::post('/new-guide-teacher', [
    'uses' => 'App\Http\Controllers\GuideTeacherController@create',
    'as'   => 'guideTeacher.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-guide-teacher', [
        'uses' => 'App\Http\Controllers\GuideTeacherController@manage',
        'as'   => 'guideTeacher.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
    ]);

Route::get('/edit-guide-teacher/{id}', [
    'uses' => 'App\Http\Controllers\GuideTeacherController@edit',
    'as'   => 'guideTeacher.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-guide-teacher/{id}', [

    'uses' => 'App\Http\Controllers\GuideTeacherController@update',
    'as'   => 'guideTeacher.update',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-guide-teacher/{id}', [
    'uses' => 'App\Http\Controllers\GuideTeacherController@delete',
    'as'   => 'guideTeacher.delete',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

// ====== Course Teacher =======//

Route::get('/add-course-teacher', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@index',
    'as'   => 'courseTeacher.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/get-course-teacher-by-id', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@getCourseTeacher',
    'as'   => 'get.course.teacher',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-course-teacher', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@create',
    'as'   => 'courseTeacher.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-course-teacher', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@manage',
    'as'   => 'courseTeacher.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-course-teacher/{id}', [
    'uses' => 'App\Http\Controllers\CourseTeacherController@edit',
    'as'   => 'courseTeacher.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-course-teacher/{id}', [

    'uses' => 'App\Http\Controllers\CourseTeacherController@update',
    'as'   => 'courseTeacher.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-course-teacher/{id}', [

    'uses' => 'App\Http\Controllers\CourseTeacherController@delete',
    'as'   => 'courseTeacher.delete',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

//==========Room

Route::get('/add-room', [
        'uses' => 'App\Http\Controllers\RoomController@index',
        'as'   => 'room.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
    ]);

Route::get('/manage-room', [
    'uses' => 'App\Http\Controllers\RoomController@manage',
    'as'   => 'room.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-room', [
    'uses' => 'App\Http\Controllers\RoomController@create',
    'as'   => 'room.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-room/{id}', [
  'uses' => 'App\Http\Controllers\RoomController@edit',
    'as'   => 'room.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-room/{id}', [
   
 'uses' => 'App\Http\Controllers\RoomController@update',
    'as'   => 'room.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-room/{id}', [
  
  'uses' => 'App\Http\Controllers\RoomController@delete',
    'as'   => 'room.delete',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


//==========Routine

// student routine
Route::get('/add-routine', [
    'uses' => 'App\Http\Controllers\RoutineController@index',
     'as'   => 'routine.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
    ]);

Route::get('/get-course-code-by-name', [
    'uses' => 'App\Http\Controllers\RoutineController@getCourseCode',
    'as'   => 'routine.get-course-code',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/get-course-name-by-name', [
    'uses' => 'App\Http\Controllers\RoutineController@getCourseName',
    'as'   => 'routine.get-course-name',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/get-semester-in-routine', [
    'uses' => 'App\Http\Controllers\RoutineController@getSemester',
    'as'   => 'routine.get-semester-in-routine',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/manage-routine', [
      'uses' => 'App\Http\Controllers\RoutineController@manage',
        'as'   => 'routine.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
    ]);

Route::post('/new-routine', [
'uses' => 'App\Http\Controllers\RoutineController@create',
  'as'   => 'routine.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


Route::get('/edit-routine/{id}', [

    'uses' => 'App\Http\Controllers\RoutineController@edit',
    'as'   => 'routine.edit',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-routine/{id}', [

    'uses' => 'App\Http\Controllers\RoutineController@update',
    'as'   => 'routine.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-routine/{id}', [
    'uses' => 'App\Http\Controllers\RoutineController@delete',
    'as'   => 'routine.delete',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


// teacher routine
Route::get('/add-teacher-routine', [
    'uses' => 'App\Http\Controllers\TeacherRoutineController@index',
    'as'   => 'add.routine',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/new-teacher-routine', [
    'uses' => 'App\Http\Controllers\TeacherRoutineController@create',
    'as'   => 'new.routine',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
Route::get('/manage-teacher-routine', [
    'uses' => 'App\Http\Controllers\TeacherRoutineController@manage',
    'as'   => 'manage.routine',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
Route::get('/edit-teacher-routine/{id}', [

    'uses' => 'App\Http\Controllers\TeacherRoutineController@edit',
    'as'   => 'edit.routine',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-teacher-routine/{id}', [

    'uses' => 'App\Http\Controllers\TeacherRoutineController@update',
    'as'   => 'update.routine',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-teacher-routine/{id}', [
    'uses' => 'App\Http\Controllers\TeacherRoutineController@delete',
    'as'   => 'delete.routine',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


//====== Library =======
//===book
Route::get('/add-pdf', [
  'uses' => 'App\Http\Controllers\LibraryController@index',
      'as'   => 'pdf.add',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
    ]);

Route::post('/new-pdf', [
'uses' => 'App\Http\Controllers\LibraryController@create',
  'as'   => 'pdf.new',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/manage-library', [

        'uses' => 'App\Http\Controllers\LibraryController@manage',
        'as'   => 'library.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
    ]);

Route::get('/manage-pdf', [

    'uses' => 'App\Http\Controllers\LibraryController@managePdf',
    'as'   => 'pdf.manage',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::get('/edit-pdf/{id}', [

    'uses' => 'App\Http\Controllers\LibraryController@editPdf',
    'as'   => 'pdf.edit',

    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/update-pdf/{id}', [

    'uses' => 'App\Http\Controllers\LibraryController@updatePdf',
    'as'   => 'pdf.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

Route::post('/delete-pdf/{id}', [

    'uses' => 'App\Http\Controllers\LibraryController@deletePdf',
    'as'   => 'pdf.delete',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);


//====== User Module =====//
Route::get('/all-user',[
    'uses' => 'App\Http\Controllers\UserController@index',
    'as'   => 'all.user',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
Route::post('/delete-user/{id}', [

    'uses' => 'App\Http\Controllers\UserController@delete',
    'as'   => 'user.delete',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);

//=====Admin Profile =======//
Route::get('/admin-profile-view',[
    'uses' => 'App\Http\Controllers\AdminProfileController@index',
    'as'   => 'admin.profile.view',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
Route::post('/admin-profile-update',[
    'uses' => 'App\Http\Controllers\AdminProfileController@updateProfile',
    'as'   => 'admin.profile.update',
    'middleware' => ['auth:sanctum', 'verified','is_admin']
]);
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
