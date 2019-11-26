<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\movies
 *
 * @property int $id
 * @property string $title
 * @property int $director
 * @property string $describe
 * @property int $rate
 * @property int $released
 * @property string|null $release_at
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereDirector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereReleaseAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereReleased($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\movies whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class movies extends Model
{
    //
    protected $table = 'movies';

    //不需要时间戳
    public $timestamps = false;

}
