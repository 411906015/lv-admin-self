<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\project
 *
 * @property int $id
 * @property int $priority 优先级
 * @property string $describe 描述
 * @property int $status 状态:0开发中 1测试中 2待上线 3已上线
 * @property int $type 类型:0bug 1增/改 2新需求/新项目
 * @property int $create_user_id 创建者
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereCreateUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class project extends Model
{
    //
    protected $table = 'elenote_project';


}
