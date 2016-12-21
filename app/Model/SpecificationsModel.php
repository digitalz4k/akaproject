<?php

namespace Model;

use \W\Model\Model;

class SpecificationsModel extends Model
{
    public function basicSpec ($product_id)
    {
        return $this->search(["product_id" => $product_id, "type" => "basic"], "AND");
    }
}