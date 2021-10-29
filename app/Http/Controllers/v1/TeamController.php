<?php declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Contracts\Cache\TeamCacheInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Http\Resources\Team;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private TeamCacheInterface $teamCache;

    public function __construct(TeamCacheInterface $teamCache)
    {
        $this->teamCache = $teamCache;
    }

    public function index(TeamRequest $request): Response
    {
        $validated = $request->validated();

        try {
            $team = $this->teamCache->find((int) $validated['id']);

            if (!is_null($team)) {
                return response(
                    new Team($this->teamCache->find((int) $validated['id'])),
                    Response::HTTP_OK
                );
            } else {
                return response(
                    '{}',
                    Response::HTTP_NO_CONTENT
                );
            }

        } catch (Exception $e) {
            return response(
                'Internal Server Error',
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
