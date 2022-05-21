<?php

namespace Logger\Classes;

class Pagination
{
    public int $totalRecords = 0;
    public int $limit = 10;

    /**
     * @param $total
     * @return void
     * to set total file lines
     */
    public function setTotalRecords($total): void
    {
        $this->totalRecords = $total;
    }

    /**
     * @return int
     * to get previous page number
     */
    public function prevPage(): int
    {
        return ($this->currentPage() > 1) ? $this->currentPage() - 1 : 1;
    }

    /**
     * @return int
     * to get current page number
     */
    public function currentPage(): int
    {
        return isset($_GET['page']) ? (int)$_GET['page'] : 1;
    }

    /**
     * @return int
     * to get next page number
     */
    public function nextPage(): int
    {
        return ($this->currentPage() < $this->getPaginationNumber()) ? $this->currentPage() + 1 : $this->getPaginationNumber();
    }

    /**
     * @return int
     * to get total number of pages
     */
    public function getPaginationNumber(): int
    {
        return ceil($this->totalRecords / $this->limit);
    }

    /**
     * @return int
     * to get max line number in current page
     */
    public function getMax(): int
    {
        return $this->getStart() + $this->limit;
    }

    /**
     * @return int
     * to get first line in page or the offset
     */
    public function getStart(): int
    {
        $start = 0;
        if ($this->currentPage() > 1) {
            $start = ($this->currentPage() * $this->limit) - $this->limit;
        }

        return $start;
    }

}
