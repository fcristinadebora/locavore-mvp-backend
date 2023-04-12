<?php

namespace App\Transformers\Api;

use App\Models\ProducerContact;
use App\Enums\ContactType;
use League\Fractal\TransformerAbstract;

class ContactTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ProducerContact $contact)
    {
        return [
            'id' => $contact->id,
            'type' => $contact->type,
            'label' => ContactType::getLabel($contact->type),
            'value' => $contact->value
        ];
    }
}
