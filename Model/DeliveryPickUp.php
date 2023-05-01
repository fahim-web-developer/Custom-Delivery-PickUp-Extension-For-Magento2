<?php
 
namespace Fahim\DeliveryPickUp\Model;

/**
 * Class DeliveryPickUp
 * @package Fahim\DeliveryPickUp\Model
 */
class DeliveryPickUp extends \Magento\Payment\Model\Method\AbstractMethod
{
    const PAYMENT_METHOD_DELIVERYPICKUP_CODE = 'deliverypickup';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_DELIVERYPICKUP_CODE;

    /**
     * Cash On Delivery payment block paths
     *
     * @var string
     */
    protected $_formBlockType = \Fahim\DeliveryPickUp\Block\Form\DeliveryPickUp::class;

    /**
     * Info instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = \Magento\Payment\Block\Info\Instructions::class;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }
}
