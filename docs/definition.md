SimplyRETS definition endpoint
==============================

[Back to index](index.md)

The definition endpoint provides metadata that is useful when utilizing the
other SimplyRETS API endpoints. It is recommended that you cache this data as
it does not change often, and provides an explicit expiration date.

**Make sure you've followed the [autoloading instructions](index.md)**

Calling the definition endpoint
-------------------------------

The following snippet is an example of the simplest way to call the definition
endpoint from your scripts.

```php
use NRM\SimplyRetsClient\SimplyRetsClient;
use NRM\SimplyRetsClient\Model\Definition;

// API demo credentials
$username = "simplyrets";
$password = "simplyrets";

$client = new SimplyRetsClient($username, $password);

/** @var Definition */
$definition = $client->getDefinition();

// Do something with the definition
```

Getting raw definition response
-------------------------------

Instead of calling `$client->getDefinition()` in the above example; you may call
`$client->getRawDefinition()` which will return the raw JSON instead of parsing
it into a `Definition` object.

Using the definition object
---------------------------

The property object structure and hierarchy can be found in the API docs for
the [Definition object](docs/api/class-NRM.SimplyRetsClient.Model.Definition.html).

Caching the definition object
-----------------------------

You may wish to cache the definition object in order to avoid the need to call
the API each request. There is currently **no** internal support for doing this.
Instead, the `Definition` model implements PHP's `Serializable` interface,
allowing it to be saved in any way you see fit.

Here's a simple example which extends the earlier one:

```php
// ...

/** @var Definition */
$definition = null;
$definitionCacheFile = sys_get_temp_dir() . '/srdefinition.ser';

if (file_exists($definitionCacheFile) && is_readable($definitionCacheFile)) {
    $definition = unserialize(file_get_contents($definitionCacheFile));
} else {
    $definition = $client->getDefinition();
}

```
