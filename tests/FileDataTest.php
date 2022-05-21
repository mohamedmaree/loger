<?php
namespace Tests;

use Logger\Classes\FileData;
use PHPUnit\Framework\TestCase;

class FileDataTest extends TestCase
{

    /**
     * @return void
     */
    public function testGetFileData(): void
    {
        $fileData = new FileData(__DIR__ . '/../log/small.txt');
        $result = count($fileData->getFileData());
        $this->assertEquals(7, $result);
    }



}
