<?php

/**
 *   ConfigServiceProvider
 *
 * @version 210822
 **/

declare(strict_types=1);

namespace Concerto\conf;

use Concerto\container\provider\AbstractServiceProvider;
use Concerto\conf\
  Config,
  ConfigReaderArray,
};

class ConfigServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'configSystemPath',
        'configSystem',
    ];

    public function register()
    {
        $this->share(
            'configSystemPath',
            realpath(__DIR__ . '/../../../_config/common/system.php')
        );
        
        $this->share(
            'configSystem',
            function ($container) {
                return new Config(
                    new ConfigReaderArray($container->get('configSystemPath'))
                );
            }
        );
    }
}
