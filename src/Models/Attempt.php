<?php

namespace acidjazz\Humble\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * Class Attempt
 * @package acidjazz\Humble\Models
 * @mixin Eloquent;
 */
class Attempt extends Model {

    protected $guarded = [];
    protected $primaryKey = 'token';
    public $incrementing = false;

    /**
     * The attributes that should be cast
     *
     * @var array
     */
    protected $casts = [
        'action' => 'array'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(config('humble.user'));
    }
}
