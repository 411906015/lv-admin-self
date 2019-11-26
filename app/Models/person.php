<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\person
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property string $describe
 * @property int $movies_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person whereMoviesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\person whereName($value)
 * @mixin \Eloquent
 */
class person extends Model
{
    //
    protected $table = 'person';

    //不需要时间戳
    public $timestamps = false;

}
