<?php

namespace Laminas\Text;

use Laminas\Stdlib\Exception\InvalidArgumentException;
use Laminas\Stdlib\StringUtils;

use function sprintf;
use function trigger_error;

use const E_USER_DEPRECATED;
use const STR_PAD_RIGHT;

/**
 * Contains multibyte safe string methods
 */
class MultiByte
{
    /**
     * @deprecated Please use {@see \Laminas\Stdlib\StringUtils} instead
     *
     * @param  string  $string string
     * @param  int     $width
     * @param  string  $break
     * @param  bool $cut
     * @param  string  $charset
     * @throws Exception\InvalidArgumentException
     * @return string
     */
    public static function wordWrap($string, $width = 75, $break = "\n", $cut = false, $charset = 'utf-8')
    {
        trigger_error(sprintf(
            "This method is deprecated, please use '%s' instead",
            'Laminas\Stdlib\StringUtils::getWrapper(<charset>)->wordWrap'
        ), E_USER_DEPRECATED);

        try {
            return StringUtils::getWrapper($charset)->wordWrap($string, $width, $break, $cut);
        } catch (InvalidArgumentException $e) {
            throw new Exception\InvalidArgumentException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * String padding
     *
     * @deprecated Please use {@see \Laminas\Stdlib\StringUtils} instead
     *
     * @param  string  $input
     * @param  int $padLength
     * @param  string  $padString
     * @param  int $padType
     * @param  string  $charset
     * @return string
     */
    public static function strPad($input, $padLength, $padString = ' ', $padType = STR_PAD_RIGHT, $charset = 'utf-8')
    {
        trigger_error(sprintf(
            "This method is deprecated, please use '%s' instead",
            'Laminas\Stdlib\StringUtils::getWrapper(<charset>)->strPad'
        ), E_USER_DEPRECATED);

        return StringUtils::getWrapper($charset)->strPad($input, $padLength, $padString, $padType);
    }
}
