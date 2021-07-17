<?php

namespace App\Http\Middleware;

use Closure;

class CheckTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->usertype == 'admin') {
            return redirect()->route('admin.home');
        } else if (auth()->user()->usertype == 'teacher') {
            return $next($request);
        } else if (auth()->user()->usertype == 'student') {
            return redirect()->route('student.home');
        } else {
            return redirect()->route('parent.home');
        }
    }
}
