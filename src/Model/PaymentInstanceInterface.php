<?php
namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PaymentInstanceInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return PaymentInstanceInterface
     */
    public function setId(int $id) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getFirstName() : string;

    /**
     * @param string $firstName
     *
     * @return PaymentInstanceInterface
     */
    public function setFirstName(string $firstName) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getLastName() : string;

    /**
     * @param string $lastName
     *
     * @return PaymentInstanceInterface
     */
    public function setLastName(string $lastName) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getAddress() : string;

    /**
     * @param string $address
     *
     * @return PaymentInstanceInterface
     */
    public function setAddress(string $address) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getZipCode() : string;

    /**
     * @param string $zipCode
     *
     * @return PaymentInstanceInterface
     */
    public function setZipCode(string $zipCode) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getCity() : string;

    /**
     * @param string $city
     *
     * @return PaymentInstanceInterface
     */
    public function setCity(string $city) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getBankName() : string;

    /**
     * @param string $bankName
     *
     * @return PaymentInstanceInterface
     */
    public function setBankName(string $bankName) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getBankCode() : string;

    /**
     * @param string $bankCode
     *
     * @return PaymentInstanceInterface
     */
    public function setBankCode(string $bankCode) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getAccountNumber() : string;

    /**
     * @param string $accountNumber
     *
     * @return PaymentInstanceInterface
     */
    public function setAccountNumber(string $accountNumber) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getAccountHolder() : string;

    /**
     * @param string $accountHolder
     *
     * @return PaymentInstanceInterface
     */
    public function setAccountHolder(string $accountHolder) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getBic() : string;

    /**
     * @param string $bic
     *
     * @return PaymentInstanceInterface
     */
    public function setBic(string $bic) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getIban() : string;

    /**
     * @param string $iban
     *
     * @return PaymentInstanceInterface
     */
    public function setIban(string $iban) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getAmount() : string;

    /**
     * @param string $amount
     *
     * @return PaymentInstanceInterface
     */
    public function setAmount(string $amount) : PaymentInstanceInterface;

    /**
     * @return string
     */
    public function getCreatedAt() : string;

    /**
     * @param string $createdAt
     *
     * @return PaymentInstanceInterface
     */
    public function setCreatedAt(string $createdAt) : PaymentInstanceInterface;
}
