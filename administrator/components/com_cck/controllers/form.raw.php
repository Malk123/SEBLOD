<?php
/**
* @version 			SEBLOD 3.x Core ~ $Id: form.php sebastienheraud $
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				https://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2009 - 2018 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.controllerform' );

JLoader::register( 'CCKControllerForm', JPATH_ADMINISTRATOR.'/components/com_cck/controllers/form.php' );

// Controller
class CCKControllerFormRaw extends CCKControllerForm
{
}
?>