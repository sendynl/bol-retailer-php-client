<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ReturnProcessingResult extends AbstractModel
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
            'quantity' => [ 'model' => null, 'array' => false ],
            'processingResult' => [ 'model' => null, 'array' => false ],
            'handlingResult' => [ 'model' => null, 'array' => false ],
            'processingDateTime' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var int The processed quantity.
     */
    public $quantity;

    /**
     * @var string The processing result of the return.
     */
    public $processingResult;

    /**
     * @var string The handling result requested by the retailer.
     */
    public $handlingResult;

    /**
     * @var string The date and time in ISO 8601 format when the return was processed.
     */
    public $processingDateTime;

    public function getProcessingDateTime(): ?\DateTime
    {
        if (empty($this->processingDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->processingDateTime);
    }
}
