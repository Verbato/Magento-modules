<?php
class Systech_GlsCountry_Model_Country extends Mage_Core_Model_Abstract
{
	# Mage::getModel('systech_glscountry/country');
	# RESOURCE COLLECTION: Mage::getResourceModel('systech_glscountry/country_collection');
	
    public function _construct() {
	    parent::_construct();
	    $this->_init('systech_glscountry/country');
    }

    public function saveDataToDatabaseTable($data)
	{
		$this->setData($data);
		$this->save();		
	}

	public function loadByCountryName($country_name)
	{
		$allCountries = $this->getCollection();

		$allCountries->addFieldToFilter('country_name', array('eq' => $country_name));

		foreach ($allCountries as $country) { $id = $country->getId();}

		unset($allCountries);
		unset($country);

		return $this->load($id);
	}

	public function getCountryNumberFromCode($country_code){
		$allCountries = $this->getCollection();

		$allCountries->addFieldToFilter('country_code', array('eq' => $country_code));

		foreach ($allCountries as $country) { $number = $country->getCountryNumber();}

		unset($allCountries);
		unset($country);

		return $number;
	}
}