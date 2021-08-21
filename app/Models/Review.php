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

    protected $with = ['recordType', 'user'];

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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query)=>
                $query
                    ->where('album_name', 'like', '%' . request('search') . '%')
                    ->orWhere('artist', 'like', '%' . request('search') . '%'));



        $query->when($filters['recordType'] ?? false, fn($query, $recordType)=>
            $query->whereHas('recordType', fn($query) =>
                $query->where('name', $recordType))
        );

        $query->when($filters['user'] ?? false, fn($query, $user)=>
            $query->whereHas('user', fn($query)=>
                $query->where('name', $user)));

    }
}
