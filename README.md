# bing.php

A simple class client for Microsoft's Bing API REST GET.

# Usage

```php

$appid = 'your-api-key';

$q = 'MooTools';

$obj = new Bing($appid);

$obj->search( $q );

echo$out = $obj->getHTML();

```

# License

MIT