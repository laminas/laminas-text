<?php
/**
 * @see       https://github.com/zendframework/zend-text for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-text/blob/master/LICENSE.md New BSD License
 */

if (! class_exists(\PHPUnit\Framework\Error\Deprecated::class)) {
    class_alias(\PHPUnit_Framework_Error_Deprecated::class, \PHPUnit\Framework\Error\Deprecated::class);
}
