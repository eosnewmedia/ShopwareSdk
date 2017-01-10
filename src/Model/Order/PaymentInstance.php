<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PaymentInstance implements PaymentInstanceInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstName")
     */
    private $firstName;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastName")
     */
    private $lastName;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address")
     */
    private $address;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("zipCode")
     */
    private $zipCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    private $city;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bankName")
     */
    private $bankName;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bankCode")
     */
    private $bankCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountNumber")
     */
    private $accountNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountHolder")
     */
    private $accountHolder;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bic")
     */
    private $bic;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("iban")
     */
    private $iban;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("createdAt")
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->id;
    }

    /**
     * @param int $id
     *
     * @return PaymentInstanceInterface
     */
    public function setId(int $id): PaymentInstanceInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return (string)$this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return PaymentInstanceInterface
     */
    public function setFirstName(string $firstName): PaymentInstanceInterface
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return (string)$this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return PaymentInstanceInterface
     */
    public function setLastName(string $lastName): PaymentInstanceInterface
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return (string)$this->address;
    }

    /**
     * @param string $address
     *
     * @return PaymentInstanceInterface
     */
    public function setAddress(string $address): PaymentInstanceInterface
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return (string)$this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return PaymentInstanceInterface
     */
    public function setZipCode(string $zipCode): PaymentInstanceInterface
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return (string)$this->city;
    }

    /**
     * @param string $city
     *
     * @return PaymentInstanceInterface
     */
    public function setCity(string $city): PaymentInstanceInterface
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return (string)$this->bankName;
    }

    /**
     * @param string $bankName
     *
     * @return PaymentInstanceInterface
     */
    public function setBankName(string $bankName): PaymentInstanceInterface
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankCode(): string
    {
        return (string)$this->bankCode;
    }

    /**
     * @param string $bankCode
     *
     * @return PaymentInstanceInterface
     */
    public function setBankCode(string $bankCode): PaymentInstanceInterface
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return (string)$this->accountNumber;
    }

    /**
     * @param string $accountNumber
     *
     * @return PaymentInstanceInterface
     */
    public function setAccountNumber(string $accountNumber): PaymentInstanceInterface
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        return (string)$this->accountHolder;
    }

    /**
     * @param string $accountHolder
     *
     * @return PaymentInstanceInterface
     */
    public function setAccountHolder(string $accountHolder): PaymentInstanceInterface
    {
        $this->accountHolder = $accountHolder;

        return $this;
    }

    /**
     * @return string
     */
    public function getBic(): string
    {
        return (string)$this->bic;
    }

    /**
     * @param string $bic
     *
     * @return PaymentInstanceInterface
     */
    public function setBic(string $bic): PaymentInstanceInterface
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return (string)$this->iban;
    }

    /**
     * @param string $iban
     *
     * @return PaymentInstanceInterface
     */
    public function setIban(string $iban): PaymentInstanceInterface
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return (string)$this->amount;
    }

    /**
     * @param string $amount
     *
     * @return PaymentInstanceInterface
     */
    public function setAmount(string $amount): PaymentInstanceInterface
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return (string)$this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return PaymentInstanceInterface
     */
    public function setCreatedAt(string $createdAt): PaymentInstanceInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
