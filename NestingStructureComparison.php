<?php

function same_structure_as(array $a, array $b): bool {
    $a = has_recursive($a);
    $b = has_recursive($b);

    $aa = json_encode($a);
    $bb = json_encode($b);

    return $a == $b;
}

function has_recursive($required)
{
    foreach ($required as $key => $value) {
        if (is_array($required[$key])) {
            $required[$key] = has_recursive($required[$key]);
        } else {
            $required[$key] = 0;
        }
    }
    return $required;
}
