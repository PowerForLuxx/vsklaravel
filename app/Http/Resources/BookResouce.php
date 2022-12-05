<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($req)
    {
        return[
            'id' => $this->id,
            'name' =>$this->name,
            'author'=>$this->author,
            'years'=>$this->years,
        ] ;
    }
}
