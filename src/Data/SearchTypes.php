<?php

  declare(strict_types=1);

  namespace Gemini\Data;

  use Gemini\Contracts\Arrayable;

  /**
   * Search types configuration for GoogleSearch tool.
   *
   * https://ai.google.dev/api/caching#SearchTypes
   */
  final class SearchTypes implements Arrayable
  {
      public function __construct(
          public readonly ?WebSearch $webSearch = null,
          public readonly ?ImageSearch $imageSearch = null,
      ) {
      }

      public static function from(array $attributes): self
      {
          return new self(
              webSearch: isset($attributes['webSearch']) ? WebSearch::from() : null,
              imageSearch: isset($attributes['imageSearch']) ? ImageSearch::from() : null,
          );
      }

      public function toArray(): array
      {
          return array_filter([
              'webSearch' => $this->webSearch?->toArray(),
              'imageSearch' => $this->imageSearch?->toArray(),
          ]);
      }
  }
