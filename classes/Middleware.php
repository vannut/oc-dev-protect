<?php

namespace Vannut\WipProtect\Classes;

use Closure;
use Session;
use View;
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

        if (Settings::get('is_enabled')) {
            // do sessie check
            if (Session::get('vannut_wipprotect') !==    'akkoord') {
                // geen sessie var opgeslagen
                // hebben we een code doorgestuurd gekregen?
                if ($request->has('code')) {
                    // controleren van de code
                    $v = new Validator;
                    if ($v->validate($request->get('code'))) {
                        Session::put('vannut_wipprotect', 'akkoord');
                        return redirect()->back();
                    } else {
                        Session::forget('vannut_wipprotect');

                        return response(
                            View::make('vannut.wipprotect::wip')
                                ->with('status', 'fout')
                        );
                    }
                } else {
                    return response(View::make('vannut.wipprotect::wip'));
                }
            }
        };

        return $next($request);
    }
}
