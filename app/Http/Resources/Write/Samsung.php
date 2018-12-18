<?php

namespace App\Http\Resources\Write;

use Illuminate\Http\Resources\Json\JsonResource;

class Samsung extends JsonResource
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
            'cid_cate' => $this->cid_cate,
            'cid_product' => $this->cid_product,
            'name'=>$this->name,
            'discount' => $this->discount,
            'saleprice' => $this->saleprice,
            'idvoucher' => $this->idvoucher,
            'image' => $this->image,
           
        ];
    }
}
