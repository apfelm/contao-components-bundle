<?php

namespace Apfl\ContaoComponentsBundle\Element;

use Patchwork\Utf8;

class TextWithBackground extends \ContentElement
{
    /**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'textWithBackground';
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
        $this->Template->wildcard   = "Text mit Hintergrund";
    }
    /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */
    private function genFeOutput()
    {
    }
}
