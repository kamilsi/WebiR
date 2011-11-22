<?php

/**
 * WebiR -- The Web Interface to R
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://escsa.eu/license/webir.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to firma@escsa.pl so we can send you a copy immediately.
 *
 * @category   App
 * @package    App_ExtJS
 * @copyright  Copyright (c) 2010 ESC S.A. (http://www.escsa.pl/)
 * @license    http://escsa.eu/license/webir.txt     New BSD License
 * @version    $Id: LevelsCombo.php 193 2010-04-11 13:04:54Z argasek $
 */

/**
 * 
 * @author Daniel Bojdo <daniel.bojdo@escsa.pl>
 *
 */
class App_ExtJS_LevelsCombo extends Webir_ExtJS_Store {
	public function setDefinition() {
		$this->option('aliases',false);
		$dql = Doctrine_Query::create()->from('App_R_DataSet_ColumnLevel')->where('column_id = ?',(int)$this->getParam('column_id'));
		$this->setBaseQuery($dql);
	}
}