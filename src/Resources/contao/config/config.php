<?php
/**
 * Inserttag für Adressersetzung in den Hooks anmelden
 */

$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Schachbulle\ContaoTemplateparserBundle\Hooks\Parser','parse');
