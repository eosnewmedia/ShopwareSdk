<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Customer implements CustomerInterface
{

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $id;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $paymentId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $groupKey;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $shopId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $priceGroupId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $encoderName;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $hashPassword;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $active;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $email;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @SerializerType("string")
     */
    private $firstLogin;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @SerializerType("string")
     */
    private $lastLogin;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $accountMode;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $confirmationKey;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $sessionId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $newsletter;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $validation;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $affiliate;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $paymentPreset;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $languageId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $referer;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $internalComment;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $failedLogins;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $lockedUntil;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $debit;

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
     * @return CustomerInterface
     */
    public function setId(int $id): CustomerInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }

    /**
     * @param int $paymentId
     *
     * @return CustomerInterface
     */
    public function setPaymentId(int $paymentId): CustomerInterface
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupKey(): string
    {
        return $this->groupKey;
    }

    /**
     * @param string $groupKey
     *
     * @return CustomerInterface
     */
    public function setGroupKey(string $groupKey): CustomerInterface
    {
        $this->groupKey = $groupKey;

        return $this;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     *
     * @return CustomerInterface
     */
    public function setShopId(int $shopId): CustomerInterface
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceGroupId(): string
    {
        return $this->priceGroupId;
    }

    /**
     * @param string $priceGroupId
     *
     * @return CustomerInterface
     */
    public function setPriceGroupId(string $priceGroupId): CustomerInterface
    {
        $this->priceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncoderName(): string
    {
        return $this->encoderName;
    }

    /**
     * @param string $encoderName
     *
     * @return CustomerInterface
     */
    public function setEncoderName(string $encoderName): CustomerInterface
    {
        $this->encoderName = $encoderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getHashPassword(): string
    {
        return $this->hashPassword;
    }

    /**
     * @param string $hashPassword
     *
     * @return CustomerInterface
     */
    public function setHashPassword(string $hashPassword): CustomerInterface
    {
        $this->hashPassword = $hashPassword;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return CustomerInterface
     */
    public function setActive(bool $active): CustomerInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return CustomerInterface
     */
    public function setEmail(string $email): CustomerInterface
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstLogin(): string
    {
        return $this->firstLogin;
    }

    /**
     * @param string $firstLogin
     *
     * @return CustomerInterface
     */
    public function setFirstLogin(string $firstLogin): CustomerInterface
    {
        $this->firstLogin = $firstLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastLogin(): string
    {
        return $this->lastLogin;
    }

    /**
     * @param string $lastLogin
     *
     * @return CustomerInterface
     */
    public function setLastLogin(string $lastLogin): CustomerInterface
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * @return int
     */
    public function getAccountMode(): int
    {
        return $this->accountMode;
    }

    /**
     * @param int $accountMode
     *
     * @return CustomerInterface
     */
    public function setAccountMode(int $accountMode): CustomerInterface
    {
        $this->accountMode = $accountMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationKey(): string
    {
        return $this->confirmationKey;
    }

    /**
     * @param string $confirmationKey
     *
     * @return CustomerInterface
     */
    public function setConfirmationKey(string $confirmationKey): CustomerInterface
    {
        $this->confirmationKey = $confirmationKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     *
     * @return CustomerInterface
     */
    public function setSessionId(string $sessionId): CustomerInterface
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * @return int
     */
    public function getNewsletter(): int
    {
        return $this->newsletter;
    }

    /**
     * @param int $newsletter
     *
     * @return CustomerInterface
     */
    public function setNewsletter(int $newsletter): CustomerInterface
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * @return string
     */
    public function getValidation(): string
    {
        return $this->validation;
    }

    /**
     * @param string $validation
     *
     * @return CustomerInterface
     */
    public function setValidation(string $validation): CustomerInterface
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * @return int
     */
    public function getAffiliate(): int
    {
        return $this->affiliate;
    }

    /**
     * @param int $affiliate
     *
     * @return CustomerInterface
     */
    public function setAffiliate(int $affiliate): CustomerInterface
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentPreset(): int
    {
        return $this->paymentPreset;
    }

    /**
     * @param int $paymentPreset
     *
     * @return CustomerInterface
     */
    public function setPaymentPreset(int $paymentPreset): CustomerInterface
    {
        $this->paymentPreset = $paymentPreset;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    /**
     * @param string $languageId
     *
     * @return CustomerInterface
     */
    public function setLanguageId(string $languageId): CustomerInterface
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferer(): string
    {
        return $this->referer;
    }

    /**
     * @param string $referer
     *
     * @return CustomerInterface
     */
    public function setReferer(string $referer): CustomerInterface
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternalComment(): string
    {
        return $this->internalComment;
    }

    /**
     * @param string $internalComment
     *
     * @return CustomerInterface
     */
    public function setInternalComment(string $internalComment): CustomerInterface
    {
        $this->internalComment = $internalComment;

        return $this;
    }

    /**
     * @return int
     */
    public function getFailedLogins(): int
    {
        return $this->failedLogins;
    }

    /**
     * @param int $failedLogins
     *
     * @return CustomerInterface
     */
    public function setFailedLogins(int $failedLogins): CustomerInterface
    {
        $this->failedLogins = $failedLogins;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockedUntil(): string
    {
        return $this->lockedUntil;
    }

    /**
     * @param string $lockedUntil
     *
     * @return CustomerInterface
     */
    public function setLockedUntil(string $lockedUntil): CustomerInterface
    {
        $this->lockedUntil = $lockedUntil;

        return $this;
    }

    /**
     * @return string
     */
    public function getDebit(): string
    {
        return $this->debit;
    }

    /**
     * @param string $debit
     *
     * @return CustomerInterface
     */
    public function setDebit(string $debit): CustomerInterface
    {
        $this->debit = $debit;

        return $this;
    }
}
