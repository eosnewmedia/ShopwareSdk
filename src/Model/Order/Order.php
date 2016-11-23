<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Order implements OrderInterface
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
    private $number;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $customerId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $paymentId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $dispatchId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $partnerId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $shopId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $invoiceAmount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $invoiceAmountNet;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $invoiceShipping;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $invoiceShippingNet;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $orderTime;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $transactionId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $comment;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $customerComment;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $internalComment;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $net;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $taxFree;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $temporaryId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $referer;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private $clearedDate;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $trackingCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $languageIso;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $currency;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $currencyFactor;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $remoteAddress;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $deviceType;

    /**
     * @var DetailInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Order\Detail>")
     */
    private $details;

    /**
     * @var PaymentInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Payment")
     */
    private $payment;

    /**
     * @var PaymentStatusInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\PaymentStatus")
     */
    private $paymentStatus;

    /**
     * @var OrderStatusInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\OrderStatus")
     */
    private $orderStatus;

    /**
     * @var CustomerInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Customer")
     */
    private $customer;

    /**
     * @var PaymentInstanceInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Order\PaymentInstance>")
     */
    private $paymentInstances;

    /**
     * @var BillingInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Billing")
     */
    private $billing;

    /**
     * @var ShippingInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Shipping")
     */
    private $shipping;

    /**
     * @var ShopInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Shop")
     */
    private $shop;

    /**
     * @var DispatchInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Dispatch")
     */
    private $dispatch;

    /**
     * @var LanguageSubShopInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\LanguageSubShop")
     */
    private $languageSubShop;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $paymentStatusId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $orderStatusId;

    /**
     * Attribute is not needed
     * Documents is not needed
     */

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
     * @return OrderInterface
     */
    public function setId(int $id): OrderInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return (string)$this->number;
    }

    /**
     * @param string $number
     *
     * @return OrderInterface
     */
    public function setNumber(string $number): OrderInterface
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return (int)$this->customerId;
    }

    /**
     * @param int $customerId
     *
     * @return OrderInterface
     */
    public function setCustomerId(int $customerId): OrderInterface
    {
        $this->customerId = $customerId;

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
     * @return OrderInterface
     */
    public function setPaymentId(int $paymentId): OrderInterface
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDispatchId(): int
    {
        return (int)$this->dispatchId;
    }

    /**
     * @param int $dispatchId
     *
     * @return OrderInterface
     */
    public function setDispatchId(int $dispatchId): OrderInterface
    {
        $this->dispatchId = $dispatchId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerId(): string
    {
        return (string)$this->partnerId;
    }

    /**
     * @param string $partnerId
     *
     * @return OrderInterface
     */
    public function setPartnerId(string $partnerId): OrderInterface
    {
        $this->partnerId = $partnerId;

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
     * @return OrderInterface
     */
    public function setShopId(int $shopId): OrderInterface
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceAmount(): string
    {
        return (string)$this->invoiceAmount;
    }

    /**
     * @param string $invoiceAmount
     *
     * @return OrderInterface
     */
    public function setInvoiceAmount(string $invoiceAmount): OrderInterface
    {
        $this->invoiceAmount = $invoiceAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceAmountNet(): string
    {
        return (string)$this->invoiceAmountNet;
    }

    /**
     * @param string $invoiceAmountNet
     *
     * @return OrderInterface
     */
    public function setInvoiceAmountNet(string $invoiceAmountNet): OrderInterface
    {
        $this->invoiceAmountNet = $invoiceAmountNet;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceShipping(): string
    {
        return (string)$this->invoiceShipping;
    }

    /**
     * @param string $invoiceShipping
     *
     * @return OrderInterface
     */
    public function setInvoiceShipping(string $invoiceShipping): OrderInterface
    {
        $this->invoiceShipping = $invoiceShipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceShippingNet(): string
    {
        return (string)$this->invoiceShippingNet;
    }

    /**
     * @param string $invoiceShippingNet
     *
     * @return OrderInterface
     */
    public function setInvoiceShippingNet(string $invoiceShippingNet): OrderInterface
    {
        $this->invoiceShippingNet = $invoiceShippingNet;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderTime(): string
    {
        return (string)$this->orderTime;
    }

    /**
     * @param string $orderTime
     *
     * @return OrderInterface
     */
    public function setOrderTime(string $orderTime): OrderInterface
    {
        $this->orderTime = $orderTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return (string)$this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @return OrderInterface
     */
    public function setTransactionId(string $transactionId): OrderInterface
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return (string)$this->comment;
    }

    /**
     * @param string $comment
     *
     * @return OrderInterface
     */
    public function setComment(string $comment): OrderInterface
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerComment(): string
    {
        return (string)$this->customerComment;
    }

    /**
     * @param string $customerComment
     *
     * @return OrderInterface
     */
    public function setCustomerComment(string $customerComment): OrderInterface
    {
        $this->customerComment = $customerComment;

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
     * @return OrderInterface
     */
    public function setInternalComment(string $internalComment): OrderInterface
    {
        $this->internalComment = $internalComment;

        return $this;
    }

    /**
     * @return int
     */
    public function getNet(): int
    {
        return (int)$this->net;
    }

    /**
     * @param int $net
     *
     * @return OrderInterface
     */
    public function setNet(int $net): OrderInterface
    {
        $this->net = $net;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxFree(): int
    {
        return (int)$this->taxFree;
    }

    /**
     * @param int $taxFree
     *
     * @return OrderInterface
     */
    public function setTaxFree(int $taxFree): OrderInterface
    {
        $this->taxFree = $taxFree;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemporaryId(): string
    {
        return (string)$this->temporaryId;
    }

    /**
     * @param string $temporaryId
     *
     * @return OrderInterface
     */
    public function setTemporaryId(string $temporaryId): OrderInterface
    {
        $this->temporaryId = $temporaryId;

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
     * @return OrderInterface
     */
    public function setReferer(string $referer): OrderInterface
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * @return string
     */
    public function getClearedDate(): string
    {
        return (string)$this->clearedDate;
    }

    /**
     * @param string $clearedDate
     *
     * @return OrderInterface
     */
    public function setClearedDate(string $clearedDate): OrderInterface
    {
        $this->clearedDate = $clearedDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingCode(): string
    {
        return (string)$this->trackingCode;
    }

    /**
     * @param string $trackingCode
     *
     * @return OrderInterface
     */
    public function setTrackingCode(string $trackingCode): OrderInterface
    {
        $this->trackingCode = $trackingCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageIso(): string
    {
        return (string)$this->languageIso;
    }

    /**
     * @param string $languageIso
     *
     * @return OrderInterface
     */
    public function setLanguageIso(string $languageIso): OrderInterface
    {
        $this->languageIso = $languageIso;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return (string)$this->currency;
    }

    /**
     * @param string $currency
     *
     * @return OrderInterface
     */
    public function setCurrency(string $currency): OrderInterface
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyFactor(): int
    {
        return (int)$this->currencyFactor;
    }

    /**
     * @param int $currencyFactor
     *
     * @return OrderInterface
     */
    public function setCurrencyFactor(int $currencyFactor): OrderInterface
    {
        $this->currencyFactor = $currencyFactor;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteAddress(): string
    {
        return (string)$this->remoteAddress;
    }

    /**
     * @param string $remoteAddress
     *
     * @return OrderInterface
     */
    public function setRemoteAddress(string $remoteAddress): OrderInterface
    {
        $this->remoteAddress = $remoteAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceType(): string
    {
        return (string)$this->deviceType;
    }

    /**
     * @param string $deviceType
     *
     * @return OrderInterface
     */
    public function setDeviceType(string $deviceType): OrderInterface
    {
        $this->deviceType = $deviceType;

        return $this;
    }

    /**
     * @return DetailInterface[]
     */
    public function getDetails(): array
    {
        return (array)$this->details;
    }

    /**
     * @param DetailInterface[] $details
     *
     * @return OrderInterface
     */
    public function setDetails(array $details): OrderInterface
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return PaymentInterface
     */
    public function getPayment(): PaymentInterface
    {
        return $this->payment;
    }

    /**
     * @param PaymentInterface $payment
     *
     * @return OrderInterface
     */
    public function setPayment(PaymentInterface $payment): OrderInterface
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return PaymentStatusInterface
     */
    public function getPaymentStatus(): PaymentStatusInterface
    {
        return $this->paymentStatus;
    }

    /**
     * @param PaymentStatusInterface $paymentStatus
     *
     * @return OrderInterface
     */
    public function setPaymentStatus(PaymentStatusInterface $paymentStatus): OrderInterface
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return OrderStatusInterface
     */
    public function getOrderStatus(): OrderStatusInterface
    {
        return $this->orderStatus;
    }

    /**
     * @param OrderStatusInterface $orderStatus
     *
     * @return OrderInterface
     */
    public function setOrderStatus(OrderStatusInterface $orderStatus): OrderInterface
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * @return CustomerInterface
     */
    public function getCustomer(): CustomerInterface
    {
        return $this->customer;
    }

    /**
     * @param CustomerInterface $customer
     *
     * @return OrderInterface
     */
    public function setCustomer(CustomerInterface $customer): OrderInterface
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return PaymentInstanceInterface[]
     */
    public function getPaymentInstances(): array
    {
        return (array)$this->paymentInstances;
    }

    /**
     * @param PaymentInstanceInterface[] $paymentInstances
     *
     * @return OrderInterface
     */
    public function setPaymentInstances(array $paymentInstances): OrderInterface
    {
        $this->paymentInstances = $paymentInstances;

        return $this;
    }

    /**
     * @return BillingInterface
     */
    public function getBilling(): BillingInterface
    {
        return $this->billing;
    }

    /**
     * @param BillingInterface $billing
     *
     * @return OrderInterface
     */
    public function setBilling(BillingInterface $billing): OrderInterface
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return ShippingInterface
     */
    public function getShipping(): ShippingInterface
    {
        return $this->shipping;
    }

    /**
     * @param ShippingInterface $shipping
     *
     * @return OrderInterface
     */
    public function setShipping(ShippingInterface $shipping): OrderInterface
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return ShopInterface
     */
    public function getShop(): ShopInterface
    {
        return $this->shop;
    }

    /**
     * @param ShopInterface $shop
     *
     * @return OrderInterface
     */
    public function setShop(ShopInterface $shop): OrderInterface
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * @return DispatchInterface
     */
    public function getDispatch(): DispatchInterface
    {
        return $this->dispatch;
    }

    /**
     * @param DispatchInterface $dispatch
     *
     * @return OrderInterface
     */
    public function setDispatch(DispatchInterface $dispatch): OrderInterface
    {
        $this->dispatch = $dispatch;

        return $this;
    }

    /**
     * @return LanguageSubShopInterface
     */
    public function getLanguageSubShop(): LanguageSubShopInterface
    {
        return $this->languageSubShop;
    }

    /**
     * @param LanguageSubShopInterface $languageSubShop
     *
     * @return OrderInterface
     */
    public function setLanguageSubShop(LanguageSubShopInterface $languageSubShop): OrderInterface
    {
        $this->languageSubShop = $languageSubShop;

        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentStatusId(): int
    {
        return (int)$this->paymentStatusId;
    }

    /**
     * @param int $paymentStatusId
     *
     * @return OrderInterface
     */
    public function setPaymentStatusId(int $paymentStatusId): OrderInterface
    {
        $this->paymentStatusId = $paymentStatusId;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusId(): int
    {
        return (int)$this->orderStatusId;
    }

    /**
     * @param int $orderStatusId
     *
     * @return OrderInterface
     */
    public function setOrderStatusId(int $orderStatusId): OrderInterface
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }
}
