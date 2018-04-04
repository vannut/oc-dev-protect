<?php

Route::get('/wip', function () {
    //
    return View::make('vannut.wipprotect::wip');
});

Route::post('/wip', function () {
    //
    $validator = new Vannut\WipProtect\Classes\Validator;

    $valid = $validator->validate(request()->get('code'));

    if ($valid) {
        return redirect('/');
    } else {
        return redirect('/wip')
            ->with('status', 'Error');
    }
});