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
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $firstName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $lastName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $address;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $zipCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $city;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $bankName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $bankCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $accountNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $accountHolder;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $bic;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $iban;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $amount;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
        return $this->firstName;
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
        return $this->lastName;
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
        return $this->address;
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
        return $this->zipCode;
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
        return $this->city;
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
        return $this->bankName;
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
        return $this->bankCode;
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
        return $this->accountNumber;
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
        return $this->accountHolder;
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
        return $this->bic;
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
        return $this->iban;
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
        return $this->amount;
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
        return $this->createdAt;
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
