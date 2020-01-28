<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
          return parent::toArray($request);

        // return[
        //     'id' => $this->id,
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'role_id' => $this->role_id,
        //     'profile_image_path' => $this->profile_image_path,
        //     'status'=> $this->status,
        //     'created_at' => $this->created_at,
        //     'link' => [
        //         'user_link' => route('users.show', $this->id)
        //         // 'profile_image_link' => asset($this->qrcode_path)
        //     ]
            
        // ];
    }
}
