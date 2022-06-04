<?php

namespace Apfl\ContaoComponentsBundle\Module;

use Patchwork\Utf8;

class NavigationTopModule extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_navigation_apfl';

	/**
	 * Do not display the module if there are no menu items
	 *
	 * @return string
	 */
	public function generate()
	{
		$request = \Contao\System::getContainer()->get('request_stack')->getCurrentRequest();

		if ($request && \Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
			$objTemplate = new \Contao\BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### ' . $GLOBALS['TL_LANG']['FMD']['navigation'][0] . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		$strBuffer = parent::generate();

		return $this->Template->items ? $strBuffer : '';
	}

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		/** @var PageModel $objPage */
		global $objPage;

		// Set the trail and level
		if ($this->defineRoot && $this->rootPage > 0)
		{
			$trail = array($this->rootPage);
			$level = 0;
		}
		else
		{
			$trail = $objPage->trail;
			$level = ($this->levelOffset > 0) ? $this->levelOffset : 0;
		}

		$lang = null;
		$host = null;

		// Overwrite the domain and language if the reference page belongs to a different root page (see #3765)
		if ($this->defineRoot && $this->rootPage > 0)
		{
			$objRootPage = \Contao\PageModel::findWithDetails($this->rootPage);

			$lang = $objRootPage->rootLanguage;
			$host = $objRootPage->domain;
		}

		$this->Template->request = \Contao\StringUtil::ampersand(\Contao\Environment::get('indexFreeRequest'));
		$this->Template->skipId = 'skipNavigation' . $this->id;
		$this->Template->skipNavigation = \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['skipNavigation']);
		$this->Template->items = $this->renderNavigation($trail[$level], 1, $host, $lang);
	}
}

//class_alias(apfel_header01::class, 'apfel_header01');
