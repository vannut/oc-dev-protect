<?php

namespace Vannut\WipProtect\Classes;

use Closure;
use Session;
use Vannut\WipProtect\Models\Settings;

class Middleware
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

        if (Settings::get('is_enabled') && !$request->is('wip')) {
            // do sessie check
            if (!Session::get('vannut.wipprotect', false)) {
                // geen sessie var opgeslagen, dus
                // naar pagina redirecten
                return redirect('wip');

            }
        };

        return $next($request);
    }
}
