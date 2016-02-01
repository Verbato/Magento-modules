<?php
class Systech_GlsCountry_Model_Resource_Country extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {  
        $this->_init('systech_glscountry/country', 'id');
    }  
}
?>