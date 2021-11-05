<?php

namespace Picqer\BolRetailerV5\Model;

// This class is auto generated by OpenApi\ModelGenerator
class SearchTerm extends AbstractModel
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
            'searchTerm' => [ 'model' => null, 'array' => false ],
            'type' => [ 'model' => null, 'array' => false ],
            'total' => [ 'model' => null, 'array' => false ],
            'countries' => [ 'model' => SearchTermsCountry::class, 'array' => true ],
            'periods' => [ 'model' => TotalPeriod::class, 'array' => true ],
            'relatedSearchTerms' => [ 'model' => RelatedSearchTerm::class, 'array' => true ],
        ];
    }

    /**
     * @var string The search term for which you requested the search volume.
     */
    public $searchTerm;

    /**
     * @var string Interpretation of the data that applies to this measurement.
     */
    public $type;

    /**
     * @var int The number of customer visits on the search page.
     */
    public $total;

    /**
     * @var SearchTermsCountry[]
     */
    public $countries = [];

    /**
     * @var TotalPeriod[]
     */
    public $periods = [];

    /**
     * @var RelatedSearchTerm[]
     */
    public $relatedSearchTerms = [];
}
