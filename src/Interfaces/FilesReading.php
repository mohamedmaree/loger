<?php

namespace Logger\Interfaces;

interface FilesReading
{
    /**
     * @return void
     * open the file and return the handler. returns resource if successful, false if failed
     */
    public function openFile(): void;

    /**
     * @return array
     * return array of data from file
     */
    public function getFileData(): array;

    /**
     * @param int $start
     * @param int $max
     * @return void
     * fetch page data from file
     */
    public function getDataFromSource(int $start, int $max): void;

}
