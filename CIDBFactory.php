<?php

/* --------------------------------------------------------------
   CIDBFactory.php 2016-10-28
   Gambio GmbH
   http://www.gambio.de
   Copyright (c) 2016 Gambio GmbH
   Released under the GNU General Public License (Version 2)
   [http://www.gnu.org/licenses/gpl-2.0.html]
   --------------------------------------------------------------
*/

namespace CIDB;

require_once __DIR__ . '/CIDB.php';

class CIDBFactory
{
	/**
	 * @var string
	 */
	protected $connectionString;
	
	
	/**
	 * CIDBFactory constructor.
	 *
	 * e.g. 'mysqli://user:password@localhost/dbname?socket=/tmp/mysql.sock'
	 *
	 * The socket parameter is optional.
	 *
	 * @param string $connectionString Provide a CodeIgniter DB compatible connection string.
	 */
	public function __construct($connectionString)
	{
		$this->connectionString = $connectionString;
	}
	
	
	/**
	 * Create Query Builder Class
	 *
	 * @return \CI_DB_query_builder
	 */
	public function createQueryBuilder()
	{
		return CIDB($this->connectionString);
	}
	
	
	/**
	 * Create Utilities Class
	 *
	 * @return \CI_DB_utility
	 */
	public function createUtils()
	{
		return CIDBUtils($this->connectionString);
	}
	
	
	/**
	 * Create Forge Class
	 *
	 * @return \CI_DB_mysqli_forge
	 */
	public function createForge()
	{
		return CIDBForge($this->connectionString);
	}
}