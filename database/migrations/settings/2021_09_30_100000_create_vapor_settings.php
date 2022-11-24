<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateVaporSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('vapor.enabled', false);
        // $this->migrator->add('vapor.url', '');
        // $this->migrator->addEncrypted('vapor.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('vapor.enabled');
        // $this->migrator->delete('vapor.url');
        // $this->migrator->delete('vapor.access_token');
    }
}
