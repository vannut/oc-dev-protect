<?php

namespace Vannut\WipProtect\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    use \October\Rain\Database\Traits\Validation;
    public $rules = [
        'digits' => 'required_if:is_enabled,1,true|numeric',
    ];
    // A unique code
    public $settingsCode = 'vannut_wipprotect_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public function afterValidate()
    {
        $postData = post('Settings');

        if (!$postData['is_enabled']) {
            return true;
        }

        if (!is_numeric($postData['digits'])) {
            throw new \ValidationException(['digits' => 'The authorization code must only contain numbers (no letters or special characters).']);
        }
    }
}
