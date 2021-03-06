<?php
/**
 * PDF-Suite
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/14/2016
 * Time:    7:50 PM
 **/

namespace NcJoes\PdfSuite\Utils;

use NcJoes\PdfSuite\Directory;
use NcJoes\PopplerPhp\PdfToCairo as PdfToCairoUtil;

class PdfToPng extends PdfToCairo
{
    /**
     * @return Directory
     */
    public function convert()
    {
        /**
         * @var $util PdfToCairoUtil
         */
        $util = $this->util();

        $directory = $this->getOutputSubDir();

        $util->setOutputFilenamePrefix('page');
        $util->startFromPage($this->startPage());
        $util->stopAtPage($this->stopPage());
        $util->generatePNG();

        return $directory;
    }
}