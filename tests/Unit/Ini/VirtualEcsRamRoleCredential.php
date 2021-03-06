<?php

namespace AlibabaCloud\Credentials\Tests\Unit\Ini;

/**
 * Class VirtualEcsRamRoleCredential
 *
 * @codeCoverageIgnore
 */
class VirtualEcsRamRoleCredential extends VirtualAccessKeyCredential
{

    /**
     * @return string
     */
    public static function noRoleName()
    {
        $content = <<<EOT
[phpunit]
enable = true
type = ecs_ram_role
EOT;

        return (new static($content))->url();
    }

    /**
     * @return string
     */
    public static function client()
    {
        $content = <<<EOT
[phpunit]
enable = true
type = ecs_ram_role
role_name = role_name
EOT;

        return (new static($content))->url();
    }
}
