<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            // 'phone' => '('.$this->phone->prefix.')'.$this->phone->phone_number,
            // 'phone' => [
            //     'prefix' => $this->phone->prefix,
            //     'phone_number' => $this->phone->phone_number,
            // ],
            // 'phone' => $this->phones
            'phones' => $this->phones->map(function ($phone) {
                return [
                    'prefix' => $phone->prefix,
                    'phone_number' => $phone->phone_number,
                ];
            })
        ];
    }
}
