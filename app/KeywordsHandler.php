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
		$keywordsSeparated = explode(',', $keywordsString);

		foreach ($keywordsSeparated as $keyword)
		{
			$keywords[] = trim($keyword);
		}

		return $keywords;
	}

	/**
	* @param array
	* @return array
	*/
	private function uppercaseSeparatedKeywords($separatedKeywords)
	{
		foreach ($separatedKeywords as $keyword)
		{
			$uppercaseSeparatedKeywords[] = ucfirst($keyword);
		}

		return $uppercaseSeparatedKeywords;
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
		$keywordsString = '';
		foreach ($keywordsArray as $keyword) 
		{
			if (empty($keywordsString)) 
			{
				$keywordsString = $keyword;
				continue;
			}

			$keywordsString = $keywordsString . ', ' . $keyword;
		}

		return $keywordsString;
	}
}