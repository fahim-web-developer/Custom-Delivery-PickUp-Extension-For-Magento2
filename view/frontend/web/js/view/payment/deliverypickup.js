/* @api */
define([
    'uiComponent',
    'Magento_Checkout/js/model/payment/renderer-list'
], function (Component, rendererList) {
    'use strict';

    rendererList.push(
        {
            type: 'deliverypickup',
            component: 'Fahim_DeliveryPickUp/js/view/payment/method-renderer/deliverypickup-method'
        }
    );

    /** Add view logic here if needed */
    return Component.extend({});
});
