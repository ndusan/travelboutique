<?php
/**
 * Cache
 * @author ndusan
 *
 */
class Cache {

	/**
	 * Get value
	 * @param String $fileName
	 * @return String
	 */
	function get($fileName) {
		$fileName = ROOT.DS.'tmp'.DS.'cache'.DS.$fileName;
		if (file_exists($fileName)) {
			$handle = fopen($fileName, 'rb');
			$variable = fread($handle, filesize($fileName));
			fclose($handle);
			return unserialize($variable);
		} else {
			return null;
		}
	}
	
	/**
	 * Set value
	 * @param String $fileName
	 * @param String $variable
	 * @return String
	 */
	function set($fileName,$variable) {
		$fileName = ROOT.DS.'tmp'.DS.'cache'.DS.$fileName;
		$handle = fopen($fileName, 'a');
		fwrite($handle, serialize($variable));
		fclose($handle);
	}

}