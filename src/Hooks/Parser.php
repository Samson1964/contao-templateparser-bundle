<?php

namespace Schachbulle\ContaoTemplateparserBundle\Hooks;

/*
 * Ersetzt in FE-Templates Inhalte
 */

class Parser extends \Frontend
{

	protected $ersetzen = array();

	/**
	 * Constructor
	 */
	public function __construct()
	{
		if($GLOBALS['TL_CONFIG']['templateparser']) $this->ersetzen = unserialize($GLOBALS['TL_CONFIG']['templateparser']);

		parent::__construct();
	}

	public function parse($strContent, $strTemplate)
	{
		foreach($this->ersetzen as $item)
		{
			if($strTemplate == $item['template'])
			{
				// Ausgabe modifizieren
				$strContent = str_replace($item['search'], $item['replace'], $strContent);
			}
		};

		return $strContent;
	}

}