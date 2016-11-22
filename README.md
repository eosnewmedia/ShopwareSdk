ENM Shopware SDK
================
This library provides an extendable abstraction for the Shopware REST-API.
The provided default implementation is based on `jms/serializer` and `guzzlehttp/guzzle`.
All provided interfaces can be used without installing Guzzle or the Serializer.

## Installation

    composer require enm/shopware-sdk

If you want to use the default implementation you also have to run:

    composer require guzzlehttp/guzzle
    
    composer require jms/serializer

## Usage

    $client = new \Enm\ShopwareSdk\Http\GuzzleAdapter(new \GuzzleHttp\Client());
    $client->withConfig('http://example.com', 'user', 'apiKey');
    
    $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
    
    $entryPoint = new \Enm\ShopwareSdk\EntryPoint($client);
    $entryPoint->addResponseHandler(new ArticleHandler($serializer));
    $entryPoint->addResponseHandler(new OrderHandler($serializer));

OR

    $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
    $entryPoint = \Enm\ShopwareSdk\EntryPoint::buildDefault($serializer, 'http://example.com', 'user', 'apiKey');

The endpoints can be called like this:

    $entryPoint->articles()->findAll();
    $entryPoint->articles()->find(1);
    
    $entryPoint->orders()->findAll();
    $entryPoint->orders()->find(1);

## Concepts
### Entry Point
An entry point should implement `\Enm\ShopwareSdk\EntryPointInterface` and is responsible for creation and management
of endpoint instances.

The default entry point (`\Enm\ShopwareSdk\EntryPoint`) needs a configured http client (`\Enm\ShopwareSdk\Http\ClientInterface`)
and a response handler (`\Enm\ShopwareSdk\Response`) for each endpoint.

A response handler can be added by calling:

        $entryPoint->addResponseHandler($handler);

### Endpoints
An endpoint is responsible for providing access to a specific sub part of the shopware api.

The `ArticelEndpoint` for example is responsible to access all api routes under `/api/articles`.

All default endpoints extending the abstract endpoint which needs a http client and a response handler.

### (HTTP-)Client
The http client is responsible to request an api route and create a PSR-7 response object with the result.

The default client (`\Enm\ShopwareSdk\Http\GuzzleAdapter`) uses the Guzzle http client.

### Response Handler
A response handler is responsible for converting the PSR-7 http response into the needed PHP object.

The default handlers are based on JMS Serializer.

If you don't want to use it, you can write your own response handlers which have to implement `\Enm\ShopwareSdk\Response\HandlerInterface`.

A response handler must return all supported types if `getSupportedTypes` is called.
A type is the class name of the models interface, for example: `\Enm\ShopwareSdk\Model\OrderInterface` for `orders`.
