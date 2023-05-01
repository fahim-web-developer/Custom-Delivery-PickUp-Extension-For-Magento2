<?php
 
declare(strict_types=1);

namespace Fahim\DeliveryPickUp\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Fahim\DeliveryPickUp\Model\DeliveryPickUp;

/**
 * Sets payment additional information.
 */
class BeforeOrderPaymentSaveObserver implements ObserverInterface
{
    /**
     * Sets current instructions for Delivery Pick Up account
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Sales\Model\Order\Payment $payment */
        $payment = $observer->getEvent()->getPayment();
        $instructionMethods = [
            DeliveryPickUp::PAYMENT_METHOD_DELIVERYPICKUP_CODE
        ];
        if (in_array($payment->getMethod(), $instructionMethods)
            && empty($payment->getAdditionalInformation('instructions'))) {
            $payment->setAdditionalInformation(
                'instructions',
                $payment->getMethodInstance()->getConfigData(
                    'instructions',
                    $payment->getOrder()->getStoreId()
                )
            );
        }
    }
}
