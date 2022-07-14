<?php

namespace App\Core;

use App\Core\Handler;
use App\Core\Sql;

class PaginatedQuery extends Sql
{

    protected $pdo;
    protected $query;
    protected $queryCount;
    protected $mappingClass;
    protected $perPage;
    protected $count;

    public function __construct(string $query, string $queryCount, int $perPage = 10, string $mappingClass=null)
    {
        $this->pdo = Sql::getInstance();
        $this->query = $query;
        $this->queryCount = $queryCount;
        $this->mappingClass = $mappingClass;
        $this->perPage = $perPage;
    }

    public function getItems(): array
    {
        $currentPage = $this->getCurrentPage();
        $pages = $this->getPages();
        if ($currentPage > $pages) {
            throw  new \Exception('Page not found');
        }

        $offset = $this->perPage * ($currentPage - 1);
        $request = $this->query . " LIMIT {$this->perPage} OFFSET {$offset}";
        $sql = $this->pdo->prepare($request);
        $sql->execute();
        if ($this->mappingClass == null) {
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $sql->fetchAll(\PDO::FETCH_CLASS, $this->mappingClass);
    }

    private function getCurrentPage()
    {
        return Handler::getPostiveInt('page', 1);
    }

    private function getPages()
    {
        if ($this->count === null) {
            $this->count = $this->pdo->query($this->queryCount)
                ->fetch(\PDO::FETCH_NUM)[0];
        }
        return ceil($this->count / $this->perPage);
    }

    public function previousLink(string $link): ?string
    {
        $currentPage = $this->getCurrentPage();
        if ($currentPage <= 1) return null;
        if ($currentPage > 2) $link .= "?page=" . ($currentPage - 1);
        return "<a href={$link}>Page precedente</a>";
    }

    public function nextLink(string $link): ?string
    {
        $currentPage = $this->getCurrentPage();
        $page = $this->getPages();
        if ($currentPage >= $page) return null;
        $link .= "?page=" . ($currentPage + 1);
        return "<a href={$link}>Page suivante</a>";
    }


}