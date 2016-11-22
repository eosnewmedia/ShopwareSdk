<?php
namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CustomerInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return CustomerInterface
     */
    public function setId(int $id) : CustomerInterface;

    /**
     * @return int
     */
    public function getPaymentId() : int;

    /**
     * @param int $paymentId
     *
     * @return CustomerInterface
     */
    public function setPaymentId(int $paymentId) : CustomerInterface;

    /**
     * @return string
     */
    public function getGroupKey() : string;

    /**
     * @param string $groupKey
     *
     * @return CustomerInterface
     */
    public function setGroupKey(string $groupKey) : CustomerInterface;

    /**
     * @return int
     */
    public function getShopId() : int;

    /**
     * @param int $shopId
     *
     * @return CustomerInterface
     */
    public function setShopId(int $shopId) : CustomerInterface;

    /**
     * @return string
     */
    public function getPriceGroupId() : string;

    /**
     * @param string $priceGroupId
     *
     * @return CustomerInterface
     */
    public function setPriceGroupId(string $priceGroupId) : CustomerInterface;

    /**
     * @return string
     */
    public function getEncoderName() : string;

    /**
     * @param string $encoderName
     *
     * @return CustomerInterface
     */
    public function setEncoderName(string $encoderName) : CustomerInterface;

    /**
     * @return string
     */
    public function getHashPassword() : string;

    /**
     * @param string $hashPassword
     *
     * @return CustomerInterface
     */
    public function setHashPassword(string $hashPassword) : CustomerInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return CustomerInterface
     */
    public function setActive(bool $active) : CustomerInterface;

    /**
     * @return string
     */
    public function getEmail() : string;

    /**
     * @param string $email
     *
     * @return CustomerInterface
     */
    public function setEmail(string $email) : CustomerInterface;

    /**
     * @return string
     */
    public function getFirstLogin() : string;

    /**
     * @param string $firstLogin
     *
     * @return CustomerInterface
     */
    public function setFirstLogin(string $firstLogin) : CustomerInterface;

    /**
     * @return string
     */
    public function getLastLogin() : string;

    /**
     * @param string $lastLogin
     *
     * @return CustomerInterface
     */
    public function setLastLogin(string $lastLogin) : CustomerInterface;

    /**
     * @return int
     */
    public function getAccountMode() : int;

    /**
     * @param int $accountMode
     *
     * @return CustomerInterface
     */
    public function setAccountMode(int $accountMode) : CustomerInterface;

    /**
     * @return string
     */
    public function getConfirmationKey() : string;

    /**
     * @param string $confirmationKey
     *
     * @return CustomerInterface
     */
    public function setConfirmationKey(string $confirmationKey) : CustomerInterface;

    /**
     * @return string
     */
    public function getSessionId() : string;

    /**
     * @param string $sessionId
     *
     * @return CustomerInterface
     */
    public function setSessionId(string $sessionId) : CustomerInterface;

    /**
     * @return int
     */
    public function getNewsletter() : int;

    /**
     * @param int $newsletter
     *
     * @return CustomerInterface
     */
    public function setNewsletter(int $newsletter) : CustomerInterface;

    /**
     * @return string
     */
    public function getValidation() : string;

    /**
     * @param string $validation
     *
     * @return CustomerInterface
     */
    public function setValidation(string $validation) : CustomerInterface;

    /**
     * @return int
     */
    public function getAffiliate() : int;

    /**
     * @param int $affiliate
     *
     * @return CustomerInterface
     */
    public function setAffiliate(int $affiliate) : CustomerInterface;

    /**
     * @return int
     */
    public function getPaymentPreset() : int;

    /**
     * @param int $paymentPreset
     *
     * @return CustomerInterface
     */
    public function setPaymentPreset(int $paymentPreset) : CustomerInterface;

    /**
     * @return string
     */
    public function getLanguageId() : string;

    /**
     * @param string $languageId
     *
     * @return CustomerInterface
     */
    public function setLanguageId(string $languageId) : CustomerInterface;

    /**
     * @return string
     */
    public function getReferer() : string;

    /**
     * @param string $referer
     *
     * @return CustomerInterface
     */
    public function setReferer(string $referer) : CustomerInterface;

    /**
     * @return string
     */
    public function getInternalComment() : string;

    /**
     * @param string $internalComment
     *
     * @return CustomerInterface
     */
    public function setInternalComment(string $internalComment) : CustomerInterface;

    /**
     * @return int
     */
    public function getFailedLogins() : int;

    /**
     * @param int $failedLogins
     *
     * @return CustomerInterface
     */
    public function setFailedLogins(int $failedLogins) : CustomerInterface;

    /**
     * @return string
     */
    public function getLockedUntil() : string;

    /**
     * @param string $lockedUntil
     *
     * @return CustomerInterface
     */
    public function setLockedUntil(string $lockedUntil) : CustomerInterface;

    /**
     * @return string
     */
    public function getDebit() : string;

    /**
     * @param string $debit
     *
     * @return CustomerInterface
     */
    public function setDebit(string $debit) : CustomerInterface;
}
