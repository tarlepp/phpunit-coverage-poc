<?php
declare(strict_types = 1);

/**
 * @param mixed $var
 * @return string
 */
function whatAmINotWorking($var)
{
    if (is_scalar($var)) {
        return 'string';
    } elseif ($var instanceof \stdClass) {
        return '\stdClass';
    }

    return 'dunno!';
}

/**
 * @param $var
 * @return string
 */
function whatAmIWorking($var)
{
    if (is_scalar($var)) {
        return 'string';
    } else if ($var instanceof \stdClass) {
        return '\stdClass';
    }

    return 'dunno!';
}