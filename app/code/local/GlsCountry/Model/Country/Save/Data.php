<?php
class Systech_GlsCountry_Model_Country_Save_Data extends Mage_Core_Model_Abstract
{
    
	# Mage::getModel('systech_glscountry/country_save_data');

	private function _setSaveData()
	{
		$cardInfo = $this->cardObj;
		
			$data = array(
				"bin_number" => $cardInfo->getBinNumber(),
				"country_code" => $cardInfo->getCountryCode(),
				"country_name" => $cardInfo->getCountryname(),		
			);
		
		$this->setData($data);
		
		unset($cardInfo);
	}
	
/////////////////////////////////////////////////////////////	
}
?>