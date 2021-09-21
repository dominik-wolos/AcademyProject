<?php
declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    public const RED = "Red";
    public const GREEN = "Green";
    public const BLUE = "Blue";

    private $color;


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }


}
