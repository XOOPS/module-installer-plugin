module-installer-plugin
=======================

*This package is in development and may be subject to change. It is published to enable testing and feedback only.*

This is a plugin for [Composer](http://getcomposer.org/) that allows XOOPS 2.6 modules to be managed by composer. Managing XOOPS modules with composer enables dependency management for modules, as modules can require other libraries, or even other modules.

To use this plugin, your module should include a type property of **"xoops-module"** in its `composer.json`, and it should require **"XOOPS/module-installer-plugin"** as in the following example.

```JSON
    {
        "name": "geekwright/dummy",
        "type": "xoops-module",
        "description": "XOOPS dummy module for testing",
        "require": {
            "XOOPS/module-installer-plugin": "~1.0"
        }
    }
```

The package contents will be installed in the modules directory, in a subdirectory of the same name as the module package. See [geekwright/dummy](https://github.com/geekwright/dummy) for a simple example of a module enabled for composer management.

The `composer.json` of the main xoops-library package needs to set the filesystem path to the XOOPS modules directory in the "extra" property as shown here:

```JSON
    "extra": {
        "xoops_modules": "/home/user/htdocs/modules/"
    }
```

Normally, the XOOPS installer will have adjusted this setting during installation.

The composer install process only makes the module available to XOOPS. Traditional module installation and configuration are still accomplished in the XOOPS system adminstration area.
