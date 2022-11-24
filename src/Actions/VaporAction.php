<?php

namespace Astrogoat\Vapor\Actions;

use Helix\Lego\Apps\Actions\Action;

class VaporAction extends Action
{
    public static function actionName(): string
    {
        return 'Vapor action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
