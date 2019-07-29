<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical extends Model
{
protected $fillable = ['anaphylaxis','burning_pain','pruritus','vomiting','bronchospasm',
    'renal_failure','tightness_of_chest','urticaria','laryngeal_odema','rhabdomyolysis',
    'swelling','nausea','hypotension',	'oliguria','diarrhoea','malaise','facial_odema',
    'seizure','clinicals_others'
    ];
}
