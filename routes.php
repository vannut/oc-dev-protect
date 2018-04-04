<?php

Route::get('/set', function () {
    Session::keep('vannut_wipprotect', true);

    return Session::all();
});

Route::get('/test', function () {
    return 'test-route';
});