<?php 

class Systech_Abandoned_Model_Observer
{
	#Add Log after customer go into cart
	#event checkout_cart_save_before
	public function addAbandonedLogBefore(){

		Mage::log('Abandoned Log event Ulazak u Cart: checkout_cart_save_before', null, 'abandoned.log');

	}

	#Add Log after customer abandoned cart
	#event checkout_cart_save_after
	public function addAbandonedLogAfter($arvgs){

		Mage::log('Abandoned Log event Cart: checkout_cart_save_after', null, 'abandoned.log');

		$storeId = Mage::app()->getStore()->getStoreId();
        $email =  $arvgs->getCart()->getQuote()->getCustomerEmail();

        Mage::log('Abandoned Log event Izlazak iz Cart: e-mail: '.$email, null, 'abandoned.log');

        if(Mage::getSingleton('customer/session')->isLoggedIn()) {

			$customer = Mage::getSingleton('customer/session')->getCustomer();

			$email = $customer->getEmail();					

			$groupId = Mage::getSingleton('customer/session')->getCustomerGroupId();			

		}

		Mage::log('Customer Name: '.$customer->getName(), null, 'abandoned.log');
		
	}

	#Add Log after customer press Checkout
	#event sales_order_place_before
	public function addAbandonedLogCheckout(){

		Mage::log('Abandoned Log event Press Order Now: sales_order_place_before', null, 'abandoned.log');

	}

	#Add Log after customer press Order now
	#event sales_order_place_after
	public function addAbandonedLogOrderNow(){

		Mage::log('Abandoned Log event Press Order Now: sales_order_place_after', null, 'abandoned.log');

	}

	#CRON JOB EXAMPLE
	public function setStatus() {
        Mage::log('WORKS!', null, 'abandoned_cron.log');
    }
}

?>