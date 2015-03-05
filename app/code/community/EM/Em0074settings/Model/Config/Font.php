<?php 
class EM_Em0074settings_Model_Config_Font
{
	const CACHE_KEY = 'EM0074SETTINGS_GOOGLE_FONTS';
	const CACHE_LIFETIME = 86400;
	
	protected $googlefonts_url = 'https://www.googleapis.com/webfonts/v1/webfonts?sort=popularity&key=AIzaSyAp8j2F_JhufO21IIbykS2uZaIY5NCTr1k';
	

    public function toOptionArray()
    {
		/** @var Mage_Core_Model_Cache */
		$cache = Mage::app()->getCacheInstance();
		if (!($fonts = $cache->load(self::CACHE_KEY))) {
			$ch = curl_init($this->googlefonts_url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$fonts = curl_exec($ch);
			curl_close($ch);
			
			$fonts = Zend_Json::decode($fonts);

			$options = array();
			if (!isset($fonts['items'])) return $options;	// can't connect to google font
			
			foreach ($fonts['items'] as $item) {
				$options[$item['family']] = array(
					'value' => $item['family'],
					'label' => $item['family'],
				);
			}

			ksort($options);
			$options = array_values($options);
			
			$cache->save(serialize($options), self::CACHE_KEY, array(), self::CACHE_LIFETIME);
			return $options;
		}
		else {
			return unserialize($fonts);
		}
		
    }
 
}
?>