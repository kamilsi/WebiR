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
 * @category   Webir
 * @package    Webir_Filter
 * @copyright  Copyright (c) 2010 ESC S.A. (http://www.escsa.pl/)
 * @license    http://escsa.eu/license/webir.txt     New BSD License
 * @version    $Id: ExpToString.php 66 2010-03-29 09:53:14Z argasek $
 */

/**
 * 
 * @author Daniel Bojdo <daniel.bojdo@escsa.pl>
 *
 */
class Webir_Filter_ExpToString {
	function filter($value) {
		if(!preg_match('/-?e\d+$/',$value)) {
			return $value;
		}
  	list($mantissa, $exponent) = spliti("e", $value);
  	list($int, $dec) = split("\.", $mantissa);
  	bcscale ($dec);
  	return bcmul($mantissa, bcpow("10", $exponent));
	}
}