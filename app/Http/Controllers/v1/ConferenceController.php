<?php declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Contracts\Cache\ConferenceCacheInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\Conference;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    private ConferenceCacheInterface $conferenceCache;

    public function __construct(ConferenceCacheInterface $conferenceCache)
    {
        $this->conferenceCache = $conferenceCache;
    }

    public function index(): Response
    {
        try {
            return response(
                Conference::collection($this->conferenceCache->all()),
                Response::HTTP_OK
            );
        } catch (\Exception $e) {
            return response(
                'Internal Server Error',
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function divisions(): Response
    {
        try {
            return response(
                Conference::collection($this->conferenceCache->divisions()),
                Response::HTTP_OK
            );
        } catch (\Exception $e) {
            return response(
                'Internal Server Error',
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function teams(): Response
    {
        try {
            return response(
                Conference::collection($this->conferenceCache->teams()),
                Response::HTTP_OK
            );
        } catch (\Exception $e) {
            return response(
                'Internal Server Error',
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
