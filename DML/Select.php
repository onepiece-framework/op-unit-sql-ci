<?php
/**	op-unit-sql-ci:/DML/Select.php
 *
 * @created    2025-11-27
 * @version    1.0
 * @package    op-unit-sql
 * @subpackage ci
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All rights reserved.
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	...
$args   = [ [], OP()->Unit()->Database() ];
$result = null;
$ci->Set($method, $result, $args);
