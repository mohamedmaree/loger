<?php

namespace Logger\Classes;

use Logger\Interfaces\FilesReading;

class FileData extends Pagination implements FilesReading
{
    /**
     * @var string
     */
    public string $filePath = '';

    /**
     * @var resource|false
     */
    public $handle;

    /**
     * @var array
     */
    public array $fileData = [];

    /**
     * @param $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
        $this->openFile();
    }


    /**
     * @return void
     * open the file and return the handler. returns resource if successful, false if failed
     */
    public function openFile(): void
    {
        if (file_exists($this->filePath)) {
            $this->handle = fopen($this->filePath, 'r');
        }
    }

    /**
     * @return array
     * return array of data from file
     */
    public function getFileData(): array
    {
        //check the file handler
        if (!$this->handle) {
            exit("Unable to open the file");
        }

        /** get start line */
        $start = $this->getStart();

        /** get end line to take in once*/
        $max   = $this->getMax();

        /** get total file lines */
        $this->setTotalRecords(intval(exec("wc -l '$this->filePath'")));

        /** fetch page data from file */
        $this->getDataFromSource($start, $max);

        return $this->fileData;
    }

    /**
     * @param int $start
     * @param int $max
     * @return void
     * fetch page data from file
     */
    public function getDataFromSource(int $start, int $max): void
    {
        $lineCounter = 0;
        while ((!feof($this->handle)) && ($lineCounter < $max)) {
            if ($lineData = fgets($this->handle, 3145728)) {
                if ($lineCounter >= $start) {
                    $this->fileData[$lineCounter + 1] = $lineData;
                }
            }
            $lineCounter++;
        }
        fclose($this->handle);
    }

}
