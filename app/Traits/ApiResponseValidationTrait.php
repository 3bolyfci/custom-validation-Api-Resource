<?php

/**
 * Created by PhpStorm.
 * User: boly
 * Date: 02/02/2019
 * Time: 06:48 م
 */

namespace App\Traits;

use Illuminate\Foundation\Validation\ValidatesRequests;

trait ApiResponseValidationTrait
{
    use ValidatesRequests;

    public function validateResponse(array $responseArray, array $rules,
                                     array $messages = [], array $customAttributes = [])
    {
        $validtor = $this->getValidationFactory()->make(
            $responseArray, $rules, $messages, $customAttributes
        );
        if ($validtor->errors()->isEmpty()) {
            return null;
        }
        return json_decode($validtor->getMessageBag());
    }
}