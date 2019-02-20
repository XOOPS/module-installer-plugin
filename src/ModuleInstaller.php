<?php

namespace Xoops\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * Composer installer for XOOPS modules
 */
class ModuleInstaller extends LibraryInstaller
{
    /**
     * getPackageBasePath
     *
     * @param PackageInterface $package package being installed
     *
     * @return string install path relative to composer.json
     */
    public function getInstallPath(PackageInterface $package)
    {
        $moddir = explode('/', $package->getName());

        $xoops_modules = './htdocs/modules';

        $extra = $this->composer->getPackage()->getExtra();
        if (isset($extra['xoops_modules_path'])) {
            $xoops_modules = $extra['xoops_modules_path'];
        }

        return $xoops_modules . '/' . $moddir[1];
    }

    /**
     * supports - determine if this supports a given package type
     *
     * @param string $packageType package type name
     *
     * @return boolean true if packageType is supported
     */
    public function supports($packageType)
    {
        return 'xoops-module' === $packageType;
    }
}
