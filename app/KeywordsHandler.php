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
	private function uppercaseSeparatedKeywords($separatedKeywords)
	{
		return array_map('ucfirst', $separatedKeywords);
	}

	/**
	* @param array
	* @return array
	*/
	private function orderUppercaseSeparatedKeywords($uppercaseSeparatedKeywords)
	{
		sort($uppercaseSeparatedKeywords);
		return $uppercaseSeparatedKeywords;
	}

	/**
	* @param array
	* @return array
	*/
	public function getTidySeparatedKeywords($keywordsString)
	{
		$separated = $this->getSeparatedKeywords($keywordsString);
		$uppercased = $this->uppercaseSeparatedKeywords($separated);
		$ordered = $this->orderUppercaseSeparatedKeywords($uppercased);

		return $ordered;
	}

	/**
	* @param array
	* @return string
	*/
	public function getKeywordsString($keywordsArray)
	{
		return join(', ', $keywordsArray);
	}
}
