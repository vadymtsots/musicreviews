<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'published_at'];

    /**
     * @return BelongsTo
     */
    public function recordType()
    {
        return $this->belongsTo(RecordType::class);
    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
       return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
