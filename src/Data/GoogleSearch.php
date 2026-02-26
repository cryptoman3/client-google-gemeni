 <?php

  declare(strict_types=1);

  namespace Gemini\Data;

  use Gemini\Contracts\Arrayable;
  use stdClass;

  /**
   * GoogleSearch tool type. Tool to support Google Search in Model. Powered by Google.
   *
   * https://ai.google.dev/api/caching#GoogleSearch
   */
  final class GoogleSearch implements Arrayable
  {
      public function __construct(
          public readonly ?SearchTypes $searchTypes = null,
      ) {
      }

      public static function from(array $attributes = []): self
      {
          return new self(
              searchTypes: isset($attributes['searchTypes']) ? SearchTypes::from($attributes['searchTypes']) : null,
          );
      }

      public function toArray(): stdClass|array
      {
          if (! is_null($this->searchTypes)) {
              return ['searchTypes' => $this->searchTypes->toArray()];
          }

          return new stdClass;
      }
  }
