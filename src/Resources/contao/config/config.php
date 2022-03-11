<?php
/**
 * Inserttag für Adressersetzung in den Hooks anmelden
 */

$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('Schachbulle\ContaoTemplateparserBundle\Hooks\Parser','parse');
