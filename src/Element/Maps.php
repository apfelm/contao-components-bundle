<?php

namespace Apfl\ContaoComponentsBundle\Element;

use Patchwork\Utf8;

class Maps extends \ContentElement
{
    /**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'maps';
	/**
     * Compile the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }
    /**
     * Erzeugt die Ausgebe für das Backend.
     * @return string
     */
    private function genBeOutput()
    {
        $this->strTemplate          = 'be_wildcard';
        $this->Template             = new \Contao\BackendTemplate($this->strTemplate);
        $this->Template->title      = $this->headline;
        $this->Template->wildcard   = "Maps";
    }
    /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */
    private function genFeOutput()
    {
    }
}
