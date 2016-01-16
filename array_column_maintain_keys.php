<?php

/**
 * @param array $input
 * @param string $columnKey
 */
function array_column_maintain_keys(array $input, $columnKey)
{
    return array_combine(array_keys($input), array_column($input, $columnKey));
}
