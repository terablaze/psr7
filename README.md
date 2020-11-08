# PSR-7 implementation

A super lightweight PSR-7 implementation. Very strict and very fast.


## Installation

```bash
composer require terablaze/psr7
```

If you are using Symfony Flex then you get all message factories registered as services.

## Usage

The PSR-7 objects do not contain any other public methods than those defined in
the [PSR-7 specification](https://www.php-fig.org/psr/psr-7/).

### Create objects

Use the PSR-17 factory to create requests, streams, URIs etc.

```php
$psr17Factory = new \TeraBlaze\Psr7\Factory\Psr17Factory();
$request = $psr17Factory->createRequest('GET', 'https://teraboxx.com');
$stream = $psr17Factory->createStream('foobar');
```

### Sending a request

With [HTTPlug](http://httplug.io/) or any other PSR-18 (HTTP client) you may send
requests like:

```bash
composer require kriswallsmith/buzz
```

```php
$psr17Factory = new \TeraBlaze\Psr7\Factory\Psr17Factory();
$psr18Client = new \Buzz\Client\Curl($psr17Factory);

$request = $psr17Factory->createRequest('GET', 'https://teraboxx.com');
$response = $psr18Client->sendRequest($request);
```

### Create server requests

The [`terablaze/psr7-server`](https://github.com/terablaze/psr7-server) package can be used
to create server requests from PHP superglobals.

```bash
composer require terablaze/psr7-server
```

```php
$psr17Factory = new \TeraBlaze\Psr7\Factory\Psr17Factory();

$creator = new \TeraBlaze\Psr7Server\ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$serverRequest = $creator->fromGlobals();
```

### Emitting a response

```bash
composer require zendframework/zend-httphandlerrunner
```

```php
$psr17Factory = new \TeraBlaze\Psr7\Factory\Psr17Factory();

$responseBody = $psr17Factory->createStream('Hello world');
$response = $psr17Factory->createResponse(200)->withBody($responseBody);
(new \Zend\HttpHandlerRunner\Emitter\SapiEmitter())->emit($response);
```
