<?php

namespace Picqer\BolRetailerV10\Model;

use Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class UploadReportAsset extends AbstractModel
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
            'url' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'labels' => [ 'model' => null, 'enum' => null, 'array' => true ],
            'status' => [ 'model' => null, 'enum' => Enum\UploadReportAssetStatus::class, 'array' => false ],
            'subStatus' => [ 'model' => null, 'enum' => Enum\UploadReportAssetSubStatus::class, 'array' => false ],
            'subStatusDescription' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The URL of the asset.
     */
    public $url;

    /**
     * @var array The label(s) of the asset.
     */
    public $labels = [];

    /**
     * @var Enum\UploadReportAssetStatus The processing state of the submitted asset.
     */
    public $status;

    /**
     * @var Enum\UploadReportAssetSubStatus The reason code explaining why the value was rejected.
     */
    public $subStatus;

    /**
     * @var string The reason explaining why the value was rejected.
     */
    public $subStatusDescription;
}