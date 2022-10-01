<?php

namespace App\Http;

use App\Http\Middleware\AdminMiddlewarere;
use App\Http\Middleware\AdminTeacherGuestTeacherMiddleware;
use App\Http\Middleware\AdminTeacherStudentGuestMiddleware;
use App\Http\Middleware\GuestTeacherMiddleware;
use App\Http\Middleware\RegisterMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Middleware\StudentTeacherMiddleware;
use App\Http\Middleware\TeacherAdminMiddleware;
use App\Http\Middleware\TeacherGuestTeacherMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use App\Http\Middleware\TeacherStudentGuestTeacherMiddleware;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Laravel\Jetstream\Http\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        'is_admin'=> AdminMiddlewarere::class,
        'is_student'=> StudentMiddleware::class,
        'is_teacher'=> TeacherMiddleware::class,
        'is_guest_teacher'=> GuestTeacherMiddleware::class,
        'is_teacher_guest_teacher'=> TeacherGuestTeacherMiddleware::class,
        'is_student_teacher'=> StudentTeacherMiddleware::class,
        'is_teacher_student_guest_teacher'=>TeacherStudentGuestTeacherMiddleware::class,
        'is_admin_teacher_guest_teacher'=>AdminTeacherGuestTeacherMiddleware::class,
        'is_teacher_admin'=>TeacherAdminMiddleware::class ,
        'is_admin_teacher_student_guest'=>AdminTeacherStudentGuestMiddleware::class ,
        'is_register'=> RegisterMiddleware::class
    ];
}
