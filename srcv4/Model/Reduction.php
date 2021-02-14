<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Reduction extends AbstractModel
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
            'maximumPrice' => [ 'model' => null, 'array' => false ],
            'costReduction' => [ 'model' => null, 'array' => false ],
            'startDate' => [ 'model' => null, 'array' => false ],
            'endDate' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var float Maximum offer price that can be used to benefit from a commission reduction, including VAT.
     */
    public $maximumPrice;

    /**
     * @var float A reduction to the commission if the maximum price criteria is met, including VAT.
     */
    public $costReduction;

    /**
     * @var string The start date from which the commission reduction is valid, in ISO 8601 format.
     */
    public $startDate;

    /**
     * @var string The end date from which the commission reduction is not valid anymore, in ISO 8601 format.
     */
    public $endDate;
}
