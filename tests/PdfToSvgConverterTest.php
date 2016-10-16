<?php
/**
 * pdf-suite
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/16/2016
 * Time:    7:48 PM
 **/

namespace NcJoes\PdfSuite\Tests;

class PdfToSvgConverterTest extends PdfSuiteTestBase
{
    public function testPdfToSvgConverter()
    {
        $converter = $this->suite->getPdfToSvgConverter();
        $converter->setPageRange(18, 33);
        $directory = $converter->convert();
        $this->assertEquals(33-17, $directory->getItems()->count());
    }
}