<?php

define("ERROR_PRODUCT_NOT_FOUND_UID",ERROR_PRODUCT | 0x0001);
define("ERROR_PRODUCT_NOT_FOUND_PRODUCT",ERROR_PRODUCT | 0x0002);
define("ERROR_PRODUCT_SALE_COUNT",ERROR_PRODUCT | 0x0003);
define("ERROR_PRODUCT_NOT_SALE",ERROR_PRODUCT | 0x0004);
define("ERROR_PRODUCT_COUNT_OUT",ERROR_PRODUCT | 0x0005);

class ProductException extends Exception{
	
}

?>