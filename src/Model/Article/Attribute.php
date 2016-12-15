<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Attribute implements AttributeInterface {

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr1")
     */
    private $attr1;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr2")
     */
    private $attr2;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr3")
     */
    private $attr3;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr4")
     */
    private $attr4;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr5")
     */
    private $attr5;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr6")
     */
    private $attr6;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr7")
     */
    private $attr7;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr8")
     */
    private $attr8;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr9")
     */
    private $attr9;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr10")
     */
    private $attr10;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr11")
     */
    private $attr11;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr12")
     */
    private $attr12;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr13")
     */
    private $attr13;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr14")
     */
    private $attr14;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr15")
     */
    private $attr15;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr16")
     */
    private $attr16;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr17")
     */
    private $attr17;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr18")
     */
    private $attr18;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr19")
     */
    private $attr19;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attr20")
     */
    private $attr20;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("articleId")
     */
    private $articleId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("articleDetailId")
     */
    private $articleDetailId;

    /**
     * @return string
     */
    public function getAttr1(): string {
        return $this->attr1;
    }

    /**
     * @param string $attr1
     * @return AttributeInterface
     */
    public function setAttr1(string $attr1): AttributeInterface {
        $this->attr1 = $attr1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr2(): string {
        return $this->attr2;
    }

    /**
     * @param string $attr2
     * @return AttributeInterface
     */
    public function setAttr2(string $attr2): AttributeInterface {
        $this->attr2 = $attr2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr3(): string {
        return $this->attr3;
    }

    /**
     * @param string $attr3
     * @return AttributeInterface
     */
    public function setAttr3(string $attr3): AttributeInterface {
        $this->attr3 = $attr3;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr4(): string {
        return $this->attr4;
    }

    /**
     * @param string $attr4
     * @return AttributeInterface
     */
    public function setAttr4(string $attr4): AttributeInterface {
        $this->attr4 = $attr4;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr5(): string {
        return $this->attr5;
    }

    /**
     * @param string $attr5
     * @return AttributeInterface
     */
    public function setAttr5(string $attr5): AttributeInterface {
        $this->attr5 = $attr5;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr6(): string {
        return $this->attr6;
    }

    /**
     * @param string $attr6
     * @return AttributeInterface
     */
    public function setAttr6(string $attr6): AttributeInterface {
        $this->attr6 = $attr6;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr7(): string {
        return $this->attr7;
    }

    /**
     * @param string $attr7
     * @return AttributeInterface
     */
    public function setAttr7(string $attr7): AttributeInterface {
        $this->attr7 = $attr7;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr8(): string {
        return $this->attr8;
    }

    /**
     * @param string $attr8
     * @return AttributeInterface
     */
    public function setAttr8(string $attr8): AttributeInterface {
        $this->attr8 = $attr8;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr9(): string {
        return $this->attr9;
    }

    /**
     * @param string $attr9
     * @return AttributeInterface
     */
    public function setAttr9(string $attr9): AttributeInterface {
        $this->attr9 = $attr9;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr10(): string {
        return $this->attr10;
    }

    /**
     * @param string $attr10
     * @return AttributeInterface
     */
    public function setAttr10(string $attr10): AttributeInterface {
        $this->attr10 = $attr10;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr11(): string {
        return $this->attr11;
    }

    /**
     * @param string $attr11
     * @return AttributeInterface
     */
    public function setAttr11(string $attr11): AttributeInterface {
        $this->attr11 = $attr11;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr12(): string {
        return $this->attr12;
    }

    /**
     * @param string $attr12
     * @return AttributeInterface
     */
    public function setAttr12(string $attr12): AttributeInterface {
        $this->attr12 = $attr12;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr13(): string {
        return $this->attr13;
    }

    /**
     * @param string $attr13
     * @return AttributeInterface
     */
    public function setAttr13(string $attr13): AttributeInterface {
        $this->attr13 = $attr13;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr14(): string {
        return $this->attr14;
    }

    /**
     * @param string $attr14
     * @return AttributeInterface
     */
    public function setAttr14(string $attr14): AttributeInterface {
        $this->attr14 = $attr14;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr15(): string {
        return $this->attr15;
    }

    /**
     * @param string $attr15
     * @return AttributeInterface
     */
    public function setAttr15(string $attr15): AttributeInterface {
        $this->attr15 = $attr15;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr16(): string {
        return $this->attr16;
    }

    /**
     * @param string $attr16
     * @return AttributeInterface
     */
    public function setAttr16(string $attr16): AttributeInterface {
        $this->attr16 = $attr16;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr17(): string {
        return $this->attr17;
    }

    /**
     * @param string $attr17
     * @return AttributeInterface
     */
    public function setAttr17(string $attr17): AttributeInterface {
        $this->attr17 = $attr17;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr18(): string {
        return $this->attr18;
    }

    /**
     * @param string $attr18
     * @return AttributeInterface
     */
    public function setAttr18(string $attr18): AttributeInterface {
        $this->attr18 = $attr18;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr19(): string {
        return $this->attr19;
    }

    /**
     * @param string $attr19
     * @return AttributeInterface
     */
    public function setAttr19(string $attr19): AttributeInterface {
        $this->attr19 = $attr19;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttr20(): string {
        return $this->attr20;
    }

    /**
     * @param string $attr20
     * @return AttributeInterface
     */
    public function setAttr20(string $attr20): AttributeInterface {
        $this->attr20 = $attr20;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId(): int {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     * @return AttributeInterface
     */
    public function setArticleId(int $articleId): AttributeInterface {
        $this->articleId = $articleId;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleDetailId(): int {
        return $this->articleDetailId;
    }

    /**
     * @param int $articleDetailId
     * @return AttributeInterface
     */
    public function setArticleDetailId(int $articleDetailId): AttributeInterface {
        $this->articleDetailId = $articleDetailId;
        return $this;
    }
}
