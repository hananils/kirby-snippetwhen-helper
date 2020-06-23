# Kirby Conditional Snippets

Helper function for Kirby to embed snippets only when a condition is met.

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

## Usage

### snippetWhen($snippet, $condition, $expected, $data)

- `$snippet`: the name of the snippet
- `$condition`: a condition that either evaluates to `true` or `false`
- `$expected`: the expected result of the condition, defaults to `true`
- `$data`: data object passed to the snippet

```php
snippetWhen('article', $page->category()->isNotEmpty())
```

## License

MIT

## Credits

- hana+nils · Büro für Gestaltung
