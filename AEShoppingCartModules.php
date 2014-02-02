<?php
/**
 * Created by fedo
 * Date: 10.01.14
 * Time: 20:24
 * 
 */
 
abstract class AEShoppingCartModules {

	protected $shoppingCart;

	public function setShoppingCart(EShoppingCart $shoppingCart){
		$this->shoppingCart = $shoppingCart;
	}
}