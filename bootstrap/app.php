<?php

use App\Http\Middleware\EnsureSubscriptionActive;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSubcriber;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
       $middleware->alias([
        'admin' => IsAdmin::class,
        'subscriber' => IsSubcriber::class,
        'subscribed' => EnsureSubscriptionActive::class,
        ])->validateCsrfTokens(except: [
            '/midtrans/callback' // <-- exclude this route
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
