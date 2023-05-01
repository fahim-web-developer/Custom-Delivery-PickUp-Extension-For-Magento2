<?php
 
namespace Fahim\DeliveryPickUp\Block\Form;

/**
 * Class Cashonpickup
 * @package Fahim\DeliveryPickUp\Block\Form
 */
class DeliveryPickUp extends \Magento\OfflinePayments\Block\Form\AbstractInstruction
{
    /**
     * Cash on delivery template
     *
     * @var string
     */
    protected $_template = 'Fahim_DeliveryPickUp::form/deliverypickup.phtml';
}
