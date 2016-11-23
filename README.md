Shopware SDK
================
[![Build Status](https://api.travis-ci.org/eosnewmedia/ShopwareSdk.svg?branch=master)](https://travis-ci.org/eosnewmedia/ShopwareSdk)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/be6857ac-682b-4f62-8ac1-c3e743d36e59/mini.png)](https://insight.sensiolabs.com/projects/be6857ac-682b-4f62-8ac1-c3e743d36e59)

This library provides an extendable abstraction for the Shopware REST-API.
The provided default implementation is based on `jms/serializer` and `guzzlehttp/guzzle`.
All provided interfaces can be used without installing Guzzle or the Serializer.

## Installation

    composer require enm/shopware-sdk

If you want to use the default implementation you also have to run:

    composer require guzzlehttp/guzzle
    
    composer require jms/serializer

## Usage

    \Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
        'JMS\Serializer\Annotation', __DIR__.'/../vendor/jms/serializer/src'
    );

    $client = new \Enm\ShopwareSdk\Http\GuzzleAdapter(new \GuzzleHttp\Client());
    $client->withConfig('http://example.com', 'user', 'apiKey');
    
    $serializer = \JMS\Serializer\SerializerBuilder::create()->build();


    $entryPoint = new \Enm\ShopwareSdk\EntryPoint($client);
    
    $entryPoint->addSerializer(new \Enm\ShopwareSdk\Response\ArticleHandler($serializer));
    $entryPoint->addSerializer(new \Enm\ShopwareSdk\Response\OrderHandler($serializer));
    
    $entryPoint->addDeserializer(new \Enm\ShopwareSdk\Response\ArticleHandler($serializer));
    $entryPoint->addDeserializer(new \Enm\ShopwareSdk\Response\OrderHandler($serializer));

OR
    
    $entryPoint = \Enm\ShopwareSdk\EntryPoint::buildDefault('http://example.com', 'user', 'apiKey');

The endpoints can be called like this:

    $entryPoint->articles()->findAll();
    $entryPoint->articles()->find(1);
    
    $entryPoint->orders()->findAll();
    $entryPoint->orders()->find(1);

## Concepts
### Entry Point
An entry point should implement `\Enm\ShopwareSdk\EntryPointInterface` and is responsible for creation and management
of endpoint instances.

The default entry point (`\Enm\ShopwareSdk\EntryPoint`) needs a configured http client and a serializer and deserializer for each endpoint.

A serializer can be added by calling:

        $entryPoint->addSerializer($serializer);
        
A deserializer can be added by calling:

        $entryPoint->addDeserializer($serializer);

### Endpoints
An endpoint is responsible for providing access to a specific sub part of the shopware api.

The `ArticelEndpoint` for example is responsible to access all api routes under `/api/articles`.

All default endpoints extending the abstract endpoint which needs a http client and a response handler.

### (HTTP-)Client
The http client is responsible to request an api route and create a PSR-7 response object with the result.

The default client (`\Enm\ShopwareSdk\Http\GuzzleAdapter`) uses the Guzzle http client.

### Serializer / Deserializer
A serializer is responsible for converting a given PHP object into the needed json string.

A deserializer is responsible for converting the json response into the needed PHP object.

The default handlers (serializer and deserializer) are based on JMS Serializer.

If you don't want to use it, you can write your own which have to implement `\Enm\ShopwareSdk\Serializer\JsonSerializerinterface`
and/or `\Enm\ShopwareSdk\Serializer\JsonDeserializerinterface`.

A (de)serializer must return all supported types if `getSupportedTypes` is called.
A type is the class name of the models interface, for example: `\Enm\ShopwareSdk\Model\Order\OrderInterface` for the `OrderEnpoint`.
