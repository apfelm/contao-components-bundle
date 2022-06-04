<?php

namespace Apfl\ContaoComponentsBundle\Module;

use Patchwork\Utf8;

class FooterModule extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'footer';
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
        $this->Template             = new \BackendTemplate($this->strTemplate);
        $this->Template->title      = $this->headline;
        $this->Template->wildcard   = "Karriere Footer";
    }
    /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */
    private function genFeOutput()
    {
    }
}
