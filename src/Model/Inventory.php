<?php

namespace Picqer\BolRetailerV5\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Inventory extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'ean' => [ 'model' => null, 'array' => false ],
            'bsku' => [ 'model' => null, 'array' => false ],
            'gradedStock' => [ 'model' => null, 'array' => false ],
            'regularStock' => [ 'model' => null, 'array' => false ],
            'title' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The EAN number associated with this product.
     */
    public $ean;

    /**
     * @var string The BSKU number associated with this product.
     */
    public $bsku;

    /**
     * @var int The stock that is not available for sale anymore.
     */
    public $gradedStock;

    /**
     * @var int The stock that is available for sale.
     */
    public $regularStock;

    /**
     * @var string The product title.
     */
    public $title;
}
