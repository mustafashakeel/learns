<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Address{
	public $street_address;
	public $street_address2;
	// city
	public $city_address;
	//province 
	public $province_address;
	public $postal_code_address;
	public $country_address;
	

	// Display the address 

	function display(){
		protected $address_id;
		$output = "";
		$output .=$this->street_address;
		if($this ->street_address2){
			$output .= '<br/>'.$this->street_address2;	
		}
		// add City
		$output .= '<br/>'.$this->city_address;
		$output .= '<br/>'. $this->province_address;
		$output .= '<br/>'.$this->postal_code_address;
		$output .='<br/>'.$this->country_address;
		$output .= '<br/>'.$this->address_id;
		return $output;	
	}
}

?>
