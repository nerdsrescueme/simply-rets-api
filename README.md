SimplyRETS API client
======================

[![Build Status](https://travis-ci.org/nerdsrescueme/simply-rets-api.svg?branch=master)](https://travis-ci.org/nerdsrescueme/simply-rets-api)
[![Build Status](https://travis-ci.org/nerdsrescueme/simply-rets-api.svg?branch=1.0)](https://travis-ci.org/nerdsrescueme/simply-rets-api)

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

For information on how to utilize the various components provided by this
library please read [the documentation](docs/index.md).

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

Contributing
------------

If there is anything you believe to be missing or an error, please send a pull
request with your changes. I'd really appreciate the help! Please make sure to
include working unit tests, and that any changes you make have been tested and
do not break current features.

Testing
-------

We hope to remain at 100% unit test coverage for the entire lifespan of this
project; lofty goal, for sure, but doable. To run the test suite first install
the library then run the following command from the root folder of the project:

```bash
$ ./vendor/bin/phpunit
```

Or, if you already have phpunit installed globally this will do:

```bash
$ phpunit
```

Thanks
------

- [SimplyRETS](http://simplyrets.com) - API creator
- [GuzzleHTTP](http://docs.guzzlephp.org) - Base client library
- [JMS Serializer](http://jmsyst.com/libs/serializer) - JSON deserializer
- [PHPUnit](https://phpunit.de/) - PHP testing framework
