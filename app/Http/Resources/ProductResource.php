<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class ProductResource extends JsonResource
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
            'title' => $this->title,
            'image' => $this->image,
            'direction' => $this->direction,
            'is_published' => $this->is_published,
            'user' => new UserResource(User::find($this->user_id)),
            'categories' => CategoryResource::collection($this->categories),
        ];
    }
}
