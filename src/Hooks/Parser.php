<?php

namespace Schachbulle\ContaoTemplateparserBundle\Hooks;

/*
 * Ersetzt in FE-Templates Inhalte
 */

class Parser extends \Frontend
{

	public function parse($strContent, $strTemplate)
	{

		if($strTemplate == 'ce_text')
		{
			// Ausgabe modifizieren
		}

		return $strContent;
	}

}