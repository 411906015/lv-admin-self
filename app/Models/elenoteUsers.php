<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\elenoteUsers
 *
 * @property int $id
 * @property string $mobile
 * @property int $manager 管理组
 * @property string $password
 * @property string|null $email
 * @property string $real_name
 * @property string|null $nick_name
 * @property string|null $remark
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereNickName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteUsers whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class elenoteUsers extends Model
{
    //
    protected $table = 'elenote_users';


}
