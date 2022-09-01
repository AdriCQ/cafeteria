<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * sendResponse
     * @param mixed $data
     * @param int $status
     */
    public function sendResponse($data = null, int $status = 200)
    {
        if ($status === 400)
            return response()->json('Los datos enviados no son válidos', $status, [], JSON_NUMERIC_CHECK);
        else if ($status === 401)
            return response()->json('Ha ocurrido un error de credenciales', $status, [], JSON_NUMERIC_CHECK);
        else if ($status >= 500) {
            // TODO: Sendme error notification on Telegram
            return response()->json('Ha ocurrido un error', $status, [], JSON_NUMERIC_CHECK);
        }

        return response()->json($data, $status, [], JSON_NUMERIC_CHECK);
    }
}
