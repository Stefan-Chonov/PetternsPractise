<?php

namespace App\Core\Routes;

use App\Core\Interfaces\StrategyInterface;
use App\Core\DB;
use App\Core\Model;

class CreateModel implements StrategyInterface
{
    /**
     * @param array $data
     * @return int
     * @throws \Exception
     */
    public function execute($data)
    {
        return (new Model($data['model'], DB::getMySqlInstance()))->create($data['data']);
    }
}