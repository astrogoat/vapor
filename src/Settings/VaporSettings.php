<?php

namespace Astrogoat\Vapor\Settings;

use Astrogoat\Vapor\Actions\VaporAction;
use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class VaporSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     VaporAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Vapor.';
    }

    public static function group(): string
    {
        return 'vapor';
    }
}
