SimplyRETS single property listing endpoint
===========================================

[Back to index](index.md)

The property endpoint provides the ability to find single search listings by
their MLS identifier.

**Make sure you've followed the [autoloading instructions](index.md)**

Calling the property endpoint
-----------------------------

The following snippet is an example of the simplest way to call the property
endpoint from your scripts.

```php
use NRM\SimplyRetsClient\SimplyRetsClient;
use NRM\SimplyRetsClient\Model\Definition;

// API demo credentials
$username = "simplyrets";
$password = "simplyrets";

$client = new SimplyRetsClient($username, $password);

/** @var Listing */
$definition = $client->getProperty(12345);

// Do something with the property
```

Using the property object
-------------------------

The property object structure and hierarchy can be found in the API docs for
the [Listing object](docs/api/class-NRM.SimplyRetsClient.Model.Listing.html).
