<?php

namespace Vannut\WipProtect;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'WipProtect',
            'description' => 'Shield your WIP from perky eyes with a simple 6-digit code',
            'author'      => 'Richard - vannut.nl',
            'icon'        => 'icon-eye-slash'
        ];
    }

    public function boot()
    {
        \Cms\Classes\CmsController::extend(function ($controller) {
            $controller->middleware(\Vannut\WipProtect\Classes\Middleware::class);
        });
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'WipProtect Settings',
                'description' => 'Shield your WIP from perky eyes.',
                'category'    => SettingsManager::CATEGORY_SYSTEM,
                'icon'        => 'icon-eye-slash',
                'class'       => 'Vannut\WipProtect\Models\Settings',
                'order'       => 500,
                'keywords'    => 'security location wip',
                'permissions' => ['vannut.wipprotect.*']
            ]
        ];
    }
}
