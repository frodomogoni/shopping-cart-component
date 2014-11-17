<?php
/**
 * Test discount is applied when there are more than one item in position:
 * if there are two items in the same position (two equal products), add $rate % discount
 * to the first item.
 */
class EDiscount extends AEShoppingCartModules {
    /**
     * Discount %
     */
    public $rate = 30;

    public function getCost() {
        foreach ($this->shoppingCart as $position) {
            $quantity = $position->getQuantity();
            if ($quantity > 1) {
                $discountPrice = $this->calculateDiscount($position->getPrice());
                $position->addDiscountPrice($discountPrice);
            }
        }
    }

    public function calculateDiscount($price, $rate = null) {
        return ($rate? : $this->rate) * (float)$price / 100;
    }
}
