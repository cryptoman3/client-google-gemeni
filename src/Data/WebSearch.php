<?php

declare(strict_types=1);

namespace Gemini\Data;

use stdClass;

/**
 * Web search tool type.
 *
 * https://ai.google.dev/api/caching#WebSearch
 */
final class WebSearch
{
    public function __construct()
    {
    }

    public static function from(): self
    {
        return new self;
    }

    public function toArray(): stdClass
    {
        return new stdClass;
    }
}
