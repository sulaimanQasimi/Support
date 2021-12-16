<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/12/2021
 * Time: 10:11 PM
 */

namespace support;
/**
 * Class Arr
 * @package support          Version 1.0
 */
class Arr
{
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return Str::$name($arguments[0]);

    }

    /**
     * @param array $array
     * @param int $case
     * @return array
     */
    public static function changeByCase(array $array, $case = CASE_UPPER): array
    {
        return array_change_key_case($array, $case);

    }

    /**
     * @param array $array
     * @param int $length
     * @param bool $preserve_keys
     * @return array
     */
    public static function chunk(array $array, int $length, bool $preserve_keys = false): array
    {
        return array_chunk($array, $length, $preserve_keys);

    }

    /**
     * @param array $array
     * @param $column_key
     * @param null $index_key
     * @return array
     */
    public static function column(array $array, $column_key, $index_key = null): array
    {
        return array_column($array, $column_key, $index_key);

    }

    /**
     * @param array $array
     * @param array $value
     * @return array
     */
    public static function combine(array $array, array $value): array
    {
        return array_combine($array, $value);

    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function diff(array $array, array $arrays): array
    {
        return array_diff($array, $arrays);

    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function diffAssoc(array $array, array $arrays): array
    {
        return array_diff_assoc($array, $arrays);
    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array Returns an array containing all the entries from array whose keys are absent from all of the other arrays.
     */
    public static function diffKey(array $array, array $arrays): array
    {
        return array_diff_key($array, $arrays);
    }

    /**
     * @param array $array
     * @param $arrays
     * @param callable $key_compare_func
     * @return array
     */
    public static function diffUassoc(array $array, $arrays, callable $key_compare_func): array
    {
        return array_diff_uassoc($array, $arrays, $key_compare_func);
    }

    /**
     * @param array $array
     * @param array $value
     * @return array
     */
    public static function fillKey(array $array, array $value): array
    {
        return array_fill_keys($array, $value);

    }

    /**
     * @param int $start_index
     * @param int $count
     * @param mixed $value
     * @return array
     */
    public static function fill(int $start_index, int $count, mixed $value): array
    {
        return array_fill($start_index, $count, $value);
    }

    /**
     * @param array $array
     * @param callable $callable
     * @param int $mode
     * @return array
     */
    public static function filter(array $array, callable $callable, $mode = 0): array
    {
        return array_filter($array, $callable, $mode);

    }

    /**
     * @param array $array
     * @return array
     */
    public static function flip(array $array): array
    {
        return array_flip($array);
    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function intersectAssoc(array $array, array $arrays): array
    {
        return array_intersect_assoc($array, $arrays);

    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function intersectKey(array $array, array $arrays): array
    {
        return array_intersect_key($array, $arrays);
    }

    /**
     * @param array $array
     * @param array $arrays
     * @param callable $key_compare_func
     * @return array
     */
    public static function intersectUKey(array $array, array $arrays, callable $key_compare_func): array
    {
        return array_intersect_ukey($array, $arrays, $key_compare_func);
    }

    /**
     * @param array $array
     * @param $arrays
     * @param callable $key_compare_func
     * @return array
     */
    public static function intersectUassoc(array $array, $arrays, callable $key_compare_func): array
    {
        return array_intersect_uassoc($array, $arrays, $key_compare_func);
    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function intersect(array $array, array $arrays): array
    {
        return array_intersect($array, $arrays);

    }

    /**
     * @param array $array
     * @param mixed $key
     * @return bool
     */
    public static function keyExist(array $array, mixed $key)
    {
        return array_key_exists($key, $array);
    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function keyFirst(array $array): mixed
    {
        return array_key_first($array);

    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function keyLast(array $array): mixed
    {
        return array_key_last($array);

    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function keys(array $array): mixed
    {
        return array_keys($array);

    }

    /**
     * @param callable $function
     * @param array $array
     * @return array
     */
    public static function map(callable $function, array $array): array
    {
        return array_map($function, $array);

    }

    /**
     * An array of values resulted from merging the arguments together.If called without any arguments, returns an empty array.
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function mergeRecursive(array $array, array $arrays): array
    {
        return array_merge_recursive($array, $arrays);

    }

    /**
     * @param array $array
     * @param array $arrays
     * @return array
     */
    public static function merge(array $array, array $arrays): array
    {
        return array_merge($array, $arrays);

    }

    /**
     * array1_sort_flags
     * Sort options for the previous array argument:
     * Sorting type flags:
     * SORT_REGULAR - compare items normally(don't change types)
     * SORT_NUMERIC - compare items numerically
     * ◦ SORT_STRING - compare items as strings
     * ◦ SORT_LOCALE_STRING - compare items asstrings, based on the current locale. It uses the locale
     * @param array $array
     * @param mixed $array_sort_order
     * @param mixed $array_sort_flags
     * @return array
     */
    public static function multiSort(array $array, mixed $array_sort_order = SORT_ASC, mixed $array_sort_flags = SORT_REGULAR): array
    {
        array_multisort($array, $array_sort_order);
        return $array;
    }

    /**
     * @param array $array
     * @param int $length
     * @param mixed $value
     * @return array
     */
    public static function pad(array $array, int $length, mixed $value): array
    {
        return array_pad($array, $length, $value);

    }

    /**
     * @param array $array
     * @return array
     */
    public static function pop(array $array): array
    {
        array_pop($array);
        return $array;
    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function product(array $array): mixed
    {
        return array_product($array);
    }

    /**
     * @param array $array
     * @param int $num
     * @return mixed
     */
    public static function rand(array $array, int $num): mixed
    {
        return array_rand($array, $num);
    }

    /**
     * @param array $array
     * @param callable $callback
     * @param mixed|null $initial
     * @return mixed
     */
    public static function reduce(array $array, callable $callback, mixed $initial = null): mixed
    {
        return array_reduce($array, $callback, $initial);
    }

    /**
     * @param array $array
     * @param array $replacements
     * @return array
     */
    public static function replaceRecursive(array $array, array $replacements): array
    {
        return array_replace_recursive($array, $replacements);

    }

    /**
     * @param array $array
     * @param bool $preserve_keys
     * @return array
     */
    public static function reverse(array $array, bool $preserve_keys = false): array
    {
        return array_reverse($array, $preserve_keys);

    }

    /**
     * @param mixed $value
     * @param array $array
     * @param bool $strict
     * @return mixed
     */
    public static function search(mixed $value, array $array, bool $strict = false): mixed
    {
        return array_search($value, $array, $strict);
    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function shift(array $array): mixed
    {
        return array_shift($array);

    }

    /**
     * @param array $array
     * @param int $offset
     * @param int|null $length
     * @param bool $preserve_keys
     * @return array
     */
    public static function slice(array $array, int $offset, int $length = null, bool $preserve_keys = false): array
    {
        return array_slice($array, $offset, $length, $preserve_keys);
    }


    /**
     * @param array $array
     * @param int $offset
     * @param int|null $length
     * @param mixed $replacement
     * @return array
     */
    public static function splice(array $array, int $offset, int $length = null, mixed $replacement = []): array
    {
        return array_splice($array, $offset, $length, $replacement);
    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function sum(array $array): mixed
    {
        return array_sum($array);
    }

    /**
     * @param array $array
     * @param string $sort
     * SORT_REGULAR - compare items normally(don't change types)
     * ◦ SORT_NUMERIC - compare items numerically
     * ◦ SORT_STRING - compare items as strings
     * ◦ SORT_LOCALE_STRING - compare items asstrings, based on the current locale
     * @return array
     */
    public static function unique(array $array, string $sort = SORT_STRING): array
    {
        return array_unique($array, $sort);
    }

    /**
     * @param array $array
     * @return array
     */
    public static function values(array $array): array
    {
        return array_values($array);
    }

    /**
     * @param array $value
     * @param mixed $values
     * @return array
     */
    public static function compact(array $value, mixed $values):array
    {
        return compact('value','values');

    }
    /*
     *
     *
     * Other function will be add in version 2
     * */
}
