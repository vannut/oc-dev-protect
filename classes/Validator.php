<?php

namespace Vannut\WipProtect\Classes;

use Session;
use Vannut\WipProtect\Models\Settings;

class Validator
{
    public function validate($code)
    {
        if ($code === Settings::get('digits')) {
            return true;
        }
        return false;
    }
}