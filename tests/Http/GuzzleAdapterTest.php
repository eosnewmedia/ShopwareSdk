<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Http;

use Enm\ShopwareSdk\Http\GuzzleAdapter;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class GuzzleAdapterTest extends TestCase
{

    public function testGet()
    {
        $adapter = $this->createAdapter();

        $response = $adapter->get('/api/orders');

        self::assertInstanceOf(ResponseInterface::class, $response);
    }

    public function testPut()
    {
        $adapter = $this->createAdapter();

        $response = $adapter->put('/api/orders');

        self::assertInstanceOf(ResponseInterface::class, $response);
    }

    public function testPost()
    {
        $adapter = $this->createAdapter();

        $response = $adapter->post('/api/orders');

        self::assertInstanceOf(ResponseInterface::class, $response);
    }

    public function testDelete()
    {
        $adapter = $this->createAdapter();

        $response = $adapter->delete('/api/orders');

        self::assertInstanceOf(ResponseInterface::class, $response);
    }

    /**
     * @expectedException \Exception
     */
    public function testErrorRequest()
    {
        $adapter = new GuzzleAdapter(
            $this->createConfiguredMock(
                ClientInterface::class,
                [
                    'request' => $this->createConfiguredMock(
                        ResponseInterface::class,
                        ['getStatusCode' => 400]
                    ),
                ]
            )
        );

        $adapter->get('/invalid');
    }

    /**
     * @return GuzzleAdapter
     */
    private function createAdapter(): GuzzleAdapter
    {
        return new GuzzleAdapter(
            $this->createConfiguredMock(
                ClientInterface::class,
                [
                    'request' => $this->createMock(ResponseInterface::class),
                ]
            )
        );
    }
}
