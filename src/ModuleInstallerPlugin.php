<?php

namespace Xoops\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Composer plugin for XOOPS module installer
 */
class ModuleInstallerPlugin implements PluginInterface
{
    /**
     * activate - add our installer to composer
     *
     * @param Composer    $composer composer instance
     * @param IOInterface $io       composer i/o
     *
     * @return void
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ModuleInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
