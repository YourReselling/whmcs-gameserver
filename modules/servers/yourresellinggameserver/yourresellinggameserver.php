<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Gameserver\Integration\WhmcsModule;

/** Gameserver: MetaData. */
function yourresellinggameserver_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · Gameserver', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** Gameserver: ConfigOptions. */
function yourresellinggameserver_ConfigOptions(): array
{
    return WhmcsModule::configOptions('gameserver');
}

/** Gameserver: CreateAccount. */
function yourresellinggameserver_CreateAccount(array $params): string
{
    return WhmcsModule::run('gameserver', 'create', $params);
}

/** Gameserver: TestConnection. */
function yourresellinggameserver_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** Gameserver: ClientArea. */
function yourresellinggameserver_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('gameserver', $params);
}

/** Gameserver: AdminCustomButtonArray. */
function yourresellinggameserver_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('gameserver');
}

/** Gameserver: RefreshStatus. */
function yourresellinggameserver_RefreshStatus(array $params): string
{
    return WhmcsModule::run('gameserver', 'refresh', $params);
}

/** Gameserver: TerminateAccount. */
function yourresellinggameserver_TerminateAccount(array $params): string
{
    return WhmcsModule::run('gameserver', 'termination', $params);
}
