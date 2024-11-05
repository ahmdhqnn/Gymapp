<?php

namespace App\Repositories\Contracts;

interface GymRepositoryInterface
{
    public function getPopularGyms($limit);
    public function getAlNewGyms();
    public function find($id);
    public function getPrice($gymId);
}
