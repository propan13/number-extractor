<?php

declare(strict_types=1);

namespace Propan\NumberExtractor;

class NumberExtractor
{
    /**
     * @param string $data
     * @return array
     */
    public static function extract (string $data): array
    {
        preg_match_all('/(\+|-){0,1}\d+\.{0,1}\d*/', $data, $result);
        return $result[0];
    }
}
