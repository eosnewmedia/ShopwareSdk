<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Encoder;

use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ShopwareEncoder implements EncoderInterface, DecoderInterface
{

    /**
     * Decodes a string into PHP data.
     *
     * @param string $data    Data to decode
     * @param string $format  Format name
     * @param array  $context options that decoders have access to
     *
     * The format parameter specifies which format the data is in; valid values
     * depend on the specific implementation. Authors implementing this interface
     * are encouraged to document which formats they support in a non-inherited
     * phpdoc comment.
     *
     * @return array
     *
     * @throws UnexpectedValueException
     */
    public function decode($data, $format, array $context = array())
    {
        return \GuzzleHttp\json_decode($data, true)['data'];
    }

    /**
     * Checks whether the deserializer can decode from given format.
     *
     * @param string $format format name
     *
     * @return bool
     */
    public function supportsDecoding($format)
    {
        return 'json' === $format;
    }

    /**
     * Encodes data into the given format.
     *
     * @param mixed  $data    Data to encode
     * @param string $format  Format name
     * @param array  $context options that normalizers/encoders have access to
     *
     * @return string
     *
     * @throws UnexpectedValueException
     */
    public function encode($data, $format, array $context = array())
    {
        return \GuzzleHttp\json_encode(
            ['data' => $data]
        );
    }

    /**
     * Checks whether the serializer can encode to given format.
     *
     * @param string $format format name
     *
     * @return bool
     */
    public function supportsEncoding($format)
    {
        return 'json' === $format;
    }

}
