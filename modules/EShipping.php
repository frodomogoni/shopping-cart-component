<?php
/**
 * Discount abstract class
 *
 * @author pirrat <mrakobesov@gmail.com>
 * @version 0.9
 * @package ShoppingCart
 *
 */
class EShipping extends AEShoppingCartModules {

	public $free_over, $tax;

    /**
     * Apply discount
     *
     * @abstract
     * @return void
     */
    public function getCost(){
		$i_cost = $this->shoppingCart->getCost();

		if($i_cost && $this->free_over > $i_cost)
			$i_cost += $this->tax;

		return $i_cost;
	}


	public function getTax(){
		$i_cost = $this->shoppingCart->getCost();

		return $i_cost && $this->free_over < $i_cost ? 'бесплатно' : $this->tax;
	}
}
