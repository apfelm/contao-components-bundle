<?php

namespace Apfl\ContaoComponentsBundle\Element;

use Patchwork\Utf8;

class ImageAndText extends \ContentElement
{
    /**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'imageAndText';
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
        $this->Template->wildcard   = "Bild und Text";
    }
    /**
     * Erzeugt die Ausgebe für das Frontend.
     * @return string
     */
    private function genFeOutput()
    {
    }
}
