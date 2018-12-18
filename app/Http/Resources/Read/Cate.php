<?php

namespace App\Http\Resources\Read;

use Illuminate\Http\Resources\Json\JsonResource;

class Cate extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
          
            'name'=>$this->name,
            'alias' => $this->alias,
            'status' => $this->status,
            'cid_parent' => $this->cid_parent,

           
        ];
    }
}
