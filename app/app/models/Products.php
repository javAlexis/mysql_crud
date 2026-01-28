<?php
namespace app\models;

class Products extends \lithium\data\Model
{
    // Lithium automatically maps this to the 'products' table (lowercase).
    // If your table is CaseSensitive 'Products', you might need configuration,
    // but usually on MySQL it's insensitive or lowercase. 
    // We will assume 'Products' maps fine or add meta configuration if needed.

    protected $_meta = [
        'key' => 'ProductId', // Custom primary key
        'source' => 'Products' // Explicit table name
    ];
}
?>