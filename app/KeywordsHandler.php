<?php
/**
 * @author Martin Hettiger <martin@hettiger.com>
 * @copyright Copyright (c) 2013, Martin Hettiger
 */

namespace Hettiger;

class KeywordsHandler {

	/**
	* @param string
	* @return array
	*/
	public function getSeparatedKeywords($keywordsString)
	{
		return array_map('trim', explode(',', $keywordsString));
	}

	/**
	* @param array
	* @return array
	*/
	public function getTidySeparatedKeywords($keywordsString)
	{
		$separatedKeywords = $this->getSeparatedKeywords($keywordsString);
		$tidyKeywords = array_map('ucfirst', $separatedKeywords);
		sort($tidyKeywords);

		return $tidyKeywords;
	}

	/**
	* @param array
	* @return string
	*/
	public function getKeywordsString($keywordsArray)
	{
		return implode(', ', $keywordsArray);
	}
}
