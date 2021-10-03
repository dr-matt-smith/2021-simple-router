<?php
namespace Tudublin;


use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class MovieRepository extends DatabaseTableRepository
{
    public function createAndInsert($title, $price, $category)
    {
        $m = new Movie();
        $m->setTitle($title);
        $m->setPrice($price);
        $m->setCategory($category);

        $this->insert($m);
    }
}
