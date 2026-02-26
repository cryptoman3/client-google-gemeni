<?php

  declare(strict_types=1);

  namespace Gemini\Data;

  use Gemini\Contracts\Arrayable;
  use stdClass;

  /**
   * Image search tool type.
   *
   * https://ai.google.dev/api/caching#ImageSearch
   */
  final class ImageSearch implements Arrayable
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
