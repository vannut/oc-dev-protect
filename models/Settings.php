<?php

namespace Vannut\WipProtect\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    use \October\Rain\Database\Traits\Validation;
    public $rules = [
        'digits'                => 'required_if:is_enabled,1,true',
    ];
    // A unique code
    public $settingsCode = 'vannut_wipprotect_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
