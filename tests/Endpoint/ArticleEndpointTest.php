<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Endpoint;

use Enm\ShopwareSdk\Endpoint\ArticleEndpoint;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Model\RootModelInterface;
use Enm\ShopwareSdk\Model\Wrapper\ArticleCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\ArticleWrapper;
use Enm\ShopwareSdk\Serializer\JsonDeserializerInterface;
use Enm\ShopwareSdk\Serializer\JsonSerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class ArticleEndpointTest extends TestCase
{
    public function testFindAll()
    {
        $endpoint = new ArticleEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserializeCollection' => $this->createMock(ArticleCollectionWrapper::class),
                ]
            )
        );

        self::assertCount(0, $endpoint->findAll());
    }

    public function testFind()
    {
        $endpoint = new ArticleEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserialize' => $this->createConfiguredMock(
                        ArticleWrapper::class,
                        [
                            'getData' => $this->createMock(ArticleInterface::class),
                        ]
                    ),
                ]
            )
        );

        $order = $endpoint->find(1);

        self::assertInstanceOf(ArticleInterface::class, $order);
    }

    /**
     * @expectedException \LogicException
     */
    public function testFindAllInvalidObject()
    {
        $endpoint = new ArticleEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserializeCollection' => $this->createConfiguredMock(
                        ArticleCollectionWrapper::class,
                        [
                            'getData' => [$this->createMock(RootModelInterface::class)],
                        ]
                    ),
                ]
            )
        );

        $endpoint->findAll();
    }

    /**
     * @expectedException \LogicException
     */
    public function testFindInvalidObject()
    {
        $endpoint = new ArticleEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserialize' => $this->createMock(ArticleWrapper::class),
                ]
            )
        );

        $endpoint->find(1);
    }
}
