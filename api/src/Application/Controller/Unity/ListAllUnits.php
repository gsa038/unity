<?php
declare(strict_types=1);

namespace App\Application\Controller\Unity;

use App\Application\Controller\Controller;
use App\Infrastructure\DBModels\Unity;
use Psr\Http\Message\ResponseInterface as Response;

class ListAllUnits extends Controller
{
    protected function action($request, $response): Response
    {
        $units = Unity::all()->crossJoin('resources')->crossJoin('tags');
        // $units = Unity::all()->sortBy('id');
        return $this->respondWithData($units);
    }
}
