<?php
/**
 * @package     Joomla.Test
 * @subpackage  Helper
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Helper;

use Codeception\Configuration;
use Codeception\Module;

/**
 * Helper class for Acceptance.
 * Here you can define custom actions
 * All public methods declared in helper class will be available in $I
 *
 * @package  Codeception\Module
 *
 * @since    __DEPLOY_VERSION__
 */
class Acceptance extends Module
{
	/**
	 * Array of the configuration settings
	 *
	 * @var      array
	 * @since    __DEPLOY_VERSION__
	 */
	protected static $acceptanceSuiteConfiguration = [];

	/**
	 * Function to get Configuration from the acceptance.suite.yml to be used by a test
	 *
	 * @return  array
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function getSuiteConfiguration()
	{
		if (empty(self::$acceptanceSuiteConfiguration))
		{
			self::$acceptanceSuiteConfiguration = Configuration::suiteSettings('acceptance', Configuration::config());
		}

		return self::$acceptanceSuiteConfiguration;
	}
}