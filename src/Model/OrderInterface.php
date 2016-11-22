<?php
namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface OrderInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return OrderInterface
     */
    public function setId(int $id) : OrderInterface;

    /**
     * @return string
     */
    public function getNumber() : string;

    /**
     * @param string $number
     *
     * @return OrderInterface
     */
    public function setNumber(string $number) : OrderInterface;

    /**
     * @return int
     */
    public function getCustomerId() : int;

    /**
     * @param int $customerId
     *
     * @return OrderInterface
     */
    public function setCustomerId(int $customerId) : OrderInterface;

    /**
     * @return int
     */
    public function getPaymentId() : int;

    /**
     * @param int $paymentId
     *
     * @return OrderInterface
     */
    public function setPaymentId(int $paymentId) : OrderInterface;

    /**
     * @return int
     */
    public function getDispatchId() : int;

    /**
     * @param int $dispatchId
     *
     * @return OrderInterface
     */
    public function setDispatchId(int $dispatchId) : OrderInterface;

    /**
     * @return string
     */
    public function getPartnerId() : string;

    /**
     * @param string $partnerId
     *
     * @return OrderInterface
     */
    public function setPartnerId(string $partnerId) : OrderInterface;

    /**
     * @return int
     */
    public function getShopId() : int;

    /**
     * @param int $shopId
     *
     * @return OrderInterface
     */
    public function setShopId(int $shopId) : OrderInterface;

    /**
     * @return string
     */
    public function getInvoiceAmount() : string;

    /**
     * @param string $invoiceAmount
     *
     * @return OrderInterface
     */
    public function setInvoiceAmount(string $invoiceAmount) : OrderInterface;

    /**
     * @return string
     */
    public function getInvoiceAmountNet() : string;

    /**
     * @param string $invoiceAmountNet
     *
     * @return OrderInterface
     */
    public function setInvoiceAmountNet(string $invoiceAmountNet) : OrderInterface;

    /**
     * @return string
     */
    public function getInvoiceShipping() : string;

    /**
     * @param string $invoiceShipping
     *
     * @return OrderInterface
     */
    public function setInvoiceShipping(string $invoiceShipping) : OrderInterface;

    /**
     * @return string
     */
    public function getInvoiceShippingNet() : string;

    /**
     * @param string $invoiceShippingNet
     *
     * @return OrderInterface
     */
    public function setInvoiceShippingNet(string $invoiceShippingNet) : OrderInterface;

    /**
     * @return string
     */
    public function getOrderTime() : string;

    /**
     * @param string $orderTime
     *
     * @return OrderInterface
     */
    public function setOrderTime(string $orderTime) : OrderInterface;

    /**
     * @return string
     */
    public function getTransactionId() : string;

    /**
     * @param string $transactionId
     *
     * @return OrderInterface
     */
    public function setTransactionId(string $transactionId) : OrderInterface;

    /**
     * @return string
     */
    public function getComment() : string;

    /**
     * @param string $comment
     *
     * @return OrderInterface
     */
    public function setComment(string $comment) : OrderInterface;

    /**
     * @return string
     */
    public function getCustomerComment() : string;

    /**
     * @param string $customerComment
     *
     * @return OrderInterface
     */
    public function setCustomerComment(string $customerComment) : OrderInterface;

    /**
     * @return string
     */
    public function getInternalComment() : string;

    /**
     * @param string $internalComment
     *
     * @return OrderInterface
     */
    public function setInternalComment(string $internalComment) : OrderInterface;

    /**
     * @return int
     */
    public function getNet() : int;

    /**
     * @param int $net
     *
     * @return OrderInterface
     */
    public function setNet(int $net) : OrderInterface;

    /**
     * @return int
     */
    public function getTaxFree() : int;

    /**
     * @param int $taxFree
     *
     * @return OrderInterface
     */
    public function setTaxFree(int $taxFree) : OrderInterface;

    /**
     * @return string
     */
    public function getTemporaryId() : string;

    /**
     * @param string $temporaryId
     *
     * @return OrderInterface
     */
    public function setTemporaryId(string $temporaryId) : OrderInterface;

    /**
     * @return string
     */
    public function getReferer() : string;

    /**
     * @param string $referer
     *
     * @return OrderInterface
     */
    public function setReferer(string $referer) : OrderInterface;

    /**
     * @return string
     */
    public function getClearedDate() : string;

    /**
     * @param string $clearedDate
     *
     * @return OrderInterface
     */
    public function setClearedDate(string $clearedDate) : OrderInterface;

    /**
     * @return string
     */
    public function getTrackingCode() : string;

    /**
     * @param string $trackingCode
     *
     * @return OrderInterface
     */
    public function setTrackingCode(string $trackingCode) : OrderInterface;

    /**
     * @return string
     */
    public function getLanguageIso() : string;

    /**
     * @param string $languageIso
     *
     * @return OrderInterface
     */
    public function setLanguageIso(string $languageIso) : OrderInterface;

    /**
     * @return string
     */
    public function getCurrency() : string;

    /**
     * @param string $currency
     *
     * @return OrderInterface
     */
    public function setCurrency(string $currency) : OrderInterface;

    /**
     * @return int
     */
    public function getCurrencyFactor() : int;

    /**
     * @param int $currencyFactor
     *
     * @return OrderInterface
     */
    public function setCurrencyFactor(int $currencyFactor) : OrderInterface;

    /**
     * @return string
     */
    public function getRemoteAddress() : string;

    /**
     * @param string $remoteAddress
     *
     * @return OrderInterface
     */
    public function setRemoteAddress(string $remoteAddress) : OrderInterface;

    /**
     * @return string
     */
    public function getDeviceType() : string;

    /**
     * @param string $deviceType
     *
     * @return OrderInterface
     */
    public function setDeviceType(string $deviceType) : OrderInterface;

    /**
     * @return OrderDetailInterface[]
     */
    public function getDetails() : array;

    /**
     * @param OrderDetailInterface[] $details
     *
     * @return OrderInterface
     */
    public function setDetails(array $details) : OrderInterface;

    /**
     * @return PaymentInterface
     */
    public function getPayment() : PaymentInterface;

    /**
     * @param PaymentInterface $payment
     *
     * @return OrderInterface
     */
    public function setPayment(PaymentInterface $payment) : OrderInterface;

    /**
     * @return PaymentStatusInterface
     */
    public function getPaymentStatus() : PaymentStatusInterface;

    /**
     * @param PaymentStatusInterface $paymentStatus
     *
     * @return OrderInterface
     */
    public function setPaymentStatus(PaymentStatusInterface $paymentStatus) : OrderInterface;

    /**
     * @return OrderStatusInterface
     */
    public function getOrderStatus() : OrderStatusInterface;

    /**
     * @param OrderStatusInterface $orderStatus
     *
     * @return OrderInterface
     */
    public function setOrderStatus(OrderStatusInterface $orderStatus) : OrderInterface;

    /**
     * @return CustomerInterface
     */
    public function getCustomer() : CustomerInterface;

    /**
     * @param CustomerInterface $customer
     *
     * @return OrderInterface
     */
    public function setCustomer(CustomerInterface $customer) : OrderInterface;

    /**
     * @return PaymentInstanceInterface[]
     */
    public function getPaymentInstances() : array;

    /**
     * @param PaymentInstanceInterface[] $paymentInstances
     *
     * @return OrderInterface
     */
    public function setPaymentInstances(array $paymentInstances) : OrderInterface;

    /**
     * @return BillingInterface
     */
    public function getBilling() : BillingInterface;

    /**
     * @param BillingInterface $billing
     *
     * @return OrderInterface
     */
    public function setBilling(BillingInterface $billing) : OrderInterface;

    /**
     * @return ShippingInterface
     */
    public function getShipping() : ShippingInterface;

    /**
     * @param ShippingInterface $shipping
     *
     * @return OrderInterface
     */
    public function setShipping(ShippingInterface $shipping) : OrderInterface;

    /**
     * @return ShopInterface
     */
    public function getShop() : ShopInterface;

    /**
     * @param ShopInterface $shop
     *
     * @return OrderInterface
     */
    public function setShop(ShopInterface $shop) : OrderInterface;

    /**
     * @return DispatchInterface
     */
    public function getDispatch() : DispatchInterface;

    /**
     * @param DispatchInterface $dispatch
     *
     * @return OrderInterface
     */
    public function setDispatch(DispatchInterface $dispatch) : OrderInterface;

    /**
     * @return LanguageSubShopInterface
     */
    public function getLanguageSubShop() : LanguageSubShopInterface;

    /**
     * @param LanguageSubShopInterface $languageSubShop
     *
     * @return OrderInterface
     */
    public function setLanguageSubShop(LanguageSubShopInterface $languageSubShop) : OrderInterface;

    /**
     * @return int
     */
    public function getPaymentStatusId() : int;

    /**
     * @param int $paymentStatusId
     *
     * @return OrderInterface
     */
    public function setPaymentStatusId(int $paymentStatusId) : OrderInterface;

    /**
     * @return int
     */
    public function getOrderStatusId() : int;

    /**
     * @param int $orderStatusId
     *
     * @return OrderInterface
     */
    public function setOrderStatusId(int $orderStatusId) : OrderInterface;
}