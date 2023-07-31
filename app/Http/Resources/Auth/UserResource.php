<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->user_id,
            'email' => $this->email,
            'role_id' => $this->accessRole->id,
            'role' => $this->accessRole->role,
            'weight' => $this->accessRole->weight,
            'access' => $this->accessRole->access,
            'name' => $this->accessUser->name,
            'picture' => $this->accessUser->picture,
            'gender' => $this->accessUser->gender,
            'phone' => $this->accessUser->phone,
            'institusion' => $this->accessUser->institusion,
            'instagram' => $this->accessUser->instagram,
            'tiktok' => $this->accessUser->tiktok,
            // Add other user data you want to include in the response
        ];
    }
}
