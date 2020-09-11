<?php

if (!function_exists('snippetWhen')) {
    function snippetWhen($snippet, $condition, $expected = true, $data = [])
    {
        if (is_string($condition)) {
            $condition = page()->is($condition);
        }

        if ($condition === $expected) {
            echo snippet($snippet, $data);
        }
    }
}
