![Kirby snippetWhen Helper](.github/title.png)

**snippetWhen** is a helper function for [Kirby 3](https://getkirby.com) to conditionally embed snippets.

## Installation

### Download

Download and copy this repository to `/site/plugins/snippetwhen-helper`.

### Git submodule

```
git submodule add https://github.com/hananils/kirby-snippetwhen-helper.git site/plugins/snippetwhen-helper
```

### Composer

```
composer require hananils/kirby-snippetwhen-helper
```

# Usage

## snippetWhen($snippet, $condition, $expected, $data)

Conditionally embeds a snippet:

-   **`$snippet`:** the name of the snippet
-   **`$condition`:** a condition that either evaluates to `true` or `false`
-   **`$expected`:** the expected result of the condition, defaults to `true`
-   **`$data`:** data object passed to the snippet

```php
snippetWhen('article', $page->category()->isNotEmpty());
```

# License

This plugin is provided freely under the [MIT license](LICENSE.md) by [hana+nils · Büro für Gestaltung](https://hananils.de).  
We create visual designs for digital and analog media.
