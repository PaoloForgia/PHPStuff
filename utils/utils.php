<?php
/**
 * Print stuff
 */
function cool_dump($value)
{
    if ($value instanceof PDO) {
        echo 'Nope';
        return;
    }

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function brecho($value)
{
    echo $value . "<br />";
}

/**
 * Number
 */
// Check if is a number
function isNumber($value): bool
{
    return is_int($value);
}

// Return true for 10 and '10'
function isNumericString($value): bool
{
    return ctype_digit($value);
}

/**
 * String
 */
function isString($value): bool
{
    return is_string($value);
}

function con🐱($value1, $value2): string
{
    return $value1 . $value2;
}

// String and arrays
function length($value): int
{
    return is_array($value) ? count($value) : strlen($value);
}

function isEmpty($value): bool
{
    return $value === null || length($value) === 0;
}

function isNotEmpty($value): bool
{
    return !isEmpty($value);
}

function substring($value, $position, $length = null): string
{
    return subs($value, $position, $length);
}

function capitalize($value, $eachWords = false): string
{
    return $eachWords ? ucwords($value) : ucfirst($value);
}

/**
 * Object
 */
function isObject($value): bool
{
    return is_object($value);
}

/**
 * Serialize
 */
function getUnserializedValue($value)
{
    return isSerialized($value) ? unserialize($value) : $value;
}

function isSerialized($data, $strict = true): bool
{
    // If it isn't a string, it isn't serialized.
    if (!is_string($data)) {
        return false;
    }
    $data = trim($data);
    if ('N;' === $data) {
        return true;
    }
    if (strlen($data) < 4) {
        return false;
    }
    if (':' !== $data[1]) {
        return false;
    }
    if ($strict) {
        $lastc = substr($data, -1);
        if (';' !== $lastc && '}' !== $lastc) {
            return false;
        }
    } else {
        $semicolon = strpos($data, ';');
        $brace = strpos($data, '}');
        // Either ; or } must exist.
        if (false === $semicolon && false === $brace) {
            return false;
        }
        // But neither must be in the first X characters.
        if (false !== $semicolon && $semicolon < 3) {
            return false;
        }
        if (false !== $brace && $brace < 4) {
            return false;
        }
    }
    $token = $data[0];
    switch ($token) {
        case 's':
            if ($strict) {
                if ('"' !== substr($data, -2, 1)) {
                    return false;
                }
            } elseif (false === strpos($data, '"')) {
                return false;
            }
        // Or else fall through.
        case 'a':
        case 'O':
            return (bool)preg_match("/^{$token}:[0-9]+:/s", $data);
        case 'b':
        case 'i':
        case 'd':
            $end = $strict ? '$' : '';
            return (bool)preg_match("/^{$token}:[0-9.E+-]+;$end/", $data);
    }
    return false;
}