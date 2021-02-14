<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProcessStatusResponse extends AbstractModel
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
            'processStatuses' => [ 'model' => ProcessStatus::class, 'array' => true ],
        ];
    }

    /**
     * @var ProcessStatus[]
     */
    public $processStatuses;
}
