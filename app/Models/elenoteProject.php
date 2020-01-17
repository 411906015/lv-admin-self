<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\elenoteProject
 *
 * @property int $id
 * @property int $priority 优先级
 * @property string $describe 描述
 * @property int $status 状态:0开发中 1测试中 2待上线 3已上线
 * @property int $type 类型:0bug 1增/改 2新需求/新项目
 * @property int $create_user_id 创建者
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereCreateUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\elenoteProject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class elenoteProject extends Model
{
    //
    protected $table = 'elenote_project';

    public function myProject(){

    }

}
