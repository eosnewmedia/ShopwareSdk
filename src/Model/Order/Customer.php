<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Customer implements CustomerInterface
{
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("paymentId")
     */
    private $paymentId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("groupKey")
     */
    private $groupKey;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shopId")
     */
    private $shopId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("priceGroupId")
     */
    private $priceGroupId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("encoderName")
     */
    private $encoderName;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hashPassword")
     */
    private $hashPassword;
    
    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    private $active;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    private $email;
    
    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstLogin")
     */
    private $firstLogin;
    
    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastLogin")
     */
    private $lastLogin;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("accountMode")
     */
    private $accountMode;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("confirmationKey")
     */
    private $confirmationKey;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sessionId")
     */
    private $sessionId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("newsletter")
     */
    private $newsletter;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("validation")
     */
    private $validation;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("affiliate")
     */
    private $affiliate;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("paymentPreset")
     */
    private $paymentPreset;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("languageId")
     */
    private $languageId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("referer")
     */
    private $referer;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("internalComment")
     */
    private $internalComment;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("failedLogins")
     */
    private $failedLogins;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lockedUntil")
     */
    private $lockedUntil;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("debit")
     */
    private $debit;
    
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
        return (int)$this->paymentId;
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
        return (string)$this->groupKey;
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
        return (int)$this->shopId;
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
        return (string)$this->priceGroupId;
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
        return (string)$this->encoderName;
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
        return (string)$this->hashPassword;
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
        return (bool)$this->active;
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
        return (string)$this->email;
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
        return (string)$this->firstLogin;
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
        return (string)$this->lastLogin;
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
        return (int)$this->accountMode;
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
        return (string)$this->confirmationKey;
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
        return (string)$this->sessionId;
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
        return (int)$this->newsletter;
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
        return (string)$this->validation;
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
        return (int)$this->affiliate;
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
        return (int)$this->paymentPreset;
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
        return (string)$this->languageId;
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
        return (string)$this->referer;
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
        return (string)$this->internalComment;
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
        return (int)$this->failedLogins;
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
        return (string)$this->lockedUntil;
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
        return (string)$this->debit;
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
