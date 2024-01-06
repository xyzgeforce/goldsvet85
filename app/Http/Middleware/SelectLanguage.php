<?php

namespace VanguardLTE\Http\Middleware {

    class SelectLanguage
    {
        public function handle($request, \Closure $next)
        {
            if (auth()->check()) {
                \App::setLocale(auth()->user()->language);
            }

            if (isset($_COOKIE['language'])) {
                $language = htmlspecialchars($_COOKIE['language']);
                \App::setLocale($language);
            } else {
                \App::setLocale("ru");
            }

            return $next($request);
        }
    }

}
