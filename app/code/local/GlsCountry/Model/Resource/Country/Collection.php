<?php
class Systech_GlsCountry_Model_Resource_Country_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    # Mage::getResourceModel('bilablau_glscountry/country_collection');
	
	protected function _construct()
    {  
        $this->_init('systech_glscountry/country');
    }  
}