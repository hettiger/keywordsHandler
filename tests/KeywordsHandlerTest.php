<?php
/**
 * @author Martin Hettiger <martin@hettiger.com>
 * @copyright Copyright (c) 2013, Martin Hettiger
 */

use \Hettiger\KeywordsHandler;

class KeywordsHandlerTests extends PHPUnit_Framework_TestCase {
	protected $keywordsString = 'Bb, aa, Zb ,Za ';
	protected $tidySeparatedKeywords = array(
		'Aa',
		'Bb',
		'Za',
		'Zb'
	);
	
	public function setUp()
	{
		$this->Keywords = new KeywordsHandler;
	}

	public function testGetSeparatedKeywords()
	{
		

		$separatedKeywords = array(
			'Bb',
			'aa',
			'Zb',
			'Za' 
		);

		$result = $this->Keywords->getSeparatedKeywords($this->keywordsString);
		
		$this->assertEquals($separatedKeywords, $result);
	}

	public function testGetTidySeparatedKeywords()
	{
		$result = $this->Keywords->GetTidySeparatedKeywords($this->keywordsString);
		
		$this->assertEquals($this->tidySeparatedKeywords, $result);
	}

	public function testGetKeywordsString()
	{
		$keywordsString = 'Aa, Bb, Za, Zb';

		$result = $this->Keywords->GetKeywordsString($this->tidySeparatedKeywords);

		$this->assertEquals($keywordsString, $result);
	}

}