<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfitureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
   
        public function toArray($request)
        {
            $fruits = FruitResource::collection($this->whenLoaded('fruits'));
            $recompenses = RecompenseResource::collection($this->whenLoaded('recompenses'));
            $producteur = new ProducteurResource($this->whenLoaded('producteur'));
    
            return [
                'id' =>$this->id,
                'name' => $this->name,
                'prix' => $this->prix,
                'stock' => $this->stock,
                 'fruits' => $fruits,
                 'producteur' => $producteur,
                 'recompenses' => $recompenses,
            ];
        
    }
}
