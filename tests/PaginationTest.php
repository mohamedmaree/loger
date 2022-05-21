<?php
namespace Tests;

use Logger\Classes\Pagination;
use PHPUnit\Framework\TestCase;

class PaginationTest extends TestCase
{

    /**
     * @return void
     */
    public function testSetTotalRecords(): void
    {
        $pagination = new Pagination();
        $pagination->setTotalRecords(10);
        $this->assertEquals(10, $pagination->totalRecords);
    }

    /**
     * @return void
     */
    public function testPrevPage(): void
    {
        $pagination = new Pagination();
        $result = $pagination->prevPage();
        $this->assertEquals(1, $result);
    }

    /**
     * @return void
     */
    public function testCurrentPage(): void
    {
        $pagination = new Pagination();
        $result = $pagination->currentPage();
        $this->assertEquals(1, $result);
    }

    /**
     * @return void
     */
    public function testNextPage(): void
    {
        $pagination = new Pagination();
        $result = $pagination->nextPage();
        $this->assertEquals(0, $result);
    }

    /**
     * @return void
     */
    public function testGetPaginationNumber(): void
    {
        $pagination = new Pagination();
        $result = $pagination->getPaginationNumber();
        $this->assertEquals(0, $result);
    }

    /**
     * @return void
     */
    public function testGetMax(): void
    {
        $pagination = new Pagination();
        $result = $pagination->getMax();
        $this->assertEquals(10, $result);
    }

    /**
     * @return void
     */
    public function testGetStart(): void
    {
        $pagination = new Pagination();
        $result = $pagination->getStart();
        $this->assertEquals(0, $result);
    }

}
