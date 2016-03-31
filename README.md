SimplyRETS API client
======================

The SimplyRETS API client is a PHP library which provides simplified access to
the [SimplyRETS API](https://docs.simplyrets.com/api/index.html) and the data
it returns.

> This plugin is currently in development with no stable release. Stay tuned for
> an actual release soon.

Requirements
------------

- PHP 5.6 and above
- See the `require` section of [composer.json](composer.json)

Documentation
-------------

(Provide a link to the documentation)

Installation
------------

### Include the bundle

Open a command console, enter your project directory and execute the following
command to download the latest stable release:

```bash
$ composer require nrm/simply-rets-client "~1.0"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Quick Start
-----------

To use the SimplyRETS API client, you will need your username and password.

```php

use NRM\SimplyRetsClient\SimplyRetsClient;
use NRM\SimplyRetsClient\PropertiesParameterSet as Params;

$username = '<username>';
$password = '<password>';

$client = new SimplyRetsClient($username, $password);
$params = Params::create()->addType(Params::TYPE_RENTAL);
$properties = $client->getProperties($params);

```

Thanks
------

- [SimplyRETS](http://simplyrets.com) - API creator
- [GuzzleHTTP](http://docs.guzzlephp.org) - Base client library
