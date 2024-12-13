<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $product;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $product
     */
    public function __construct($product)
    {
        $this->product = $product;  // Set the product data
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.product-card');  // Return the Blade view for the component
    }
}
