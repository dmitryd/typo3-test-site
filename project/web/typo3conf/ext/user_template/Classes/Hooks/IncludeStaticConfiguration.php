<?php
namespace DmitryDulepov\SiteTemplate\Hooks;

/***************************************************************
*  Copyright notice
*
*  (c) 2017 Dmitry Dulepov <dmitry.dulepov@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * This class adds static templates to TYPO3.
 *
 * @author Dmitry Dulepov <dmitry.dulepov@gmail.com>
 */
class IncludeStaticConfiguration {

	/**
	 * Lists static templates that should be included.
	 *
	 * @var array
	 */
	protected static $includeStaticTemplates = array(
		'EXT:fluid_styled_content/Configuration/TypoScript/',
		'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
		'EXT:gridelements/Configuration/TypoScript/',
		// Keep last because it modifies standard settings!
		'EXT:user_template/Configuration/TypoScript/'
	);

    /**
     * Inludes static templates to the site TS template.
     *
     * @param array $params
     */
	public function includeStaticConfiguration(array &$params) {
		// Return early if it's not a root template
		if ($params['row']['root']) {
			$params['row']['include_static_file'] .= ',' . implode(',', self::$includeStaticTemplates);
		}
	}
}
