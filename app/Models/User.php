<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * table属性，指明要进行数据库交互的数据库表名称
     * 
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     * 过滤用户提交的字段，只有包含在该属性中的字段才能够提交
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 隐藏用户的敏感信息
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //用户头像
    public function gravatar($size = '100'){
        //获取用户邮箱并加密
        $hash = md5(strtolower(trim($this->attribute['email'])));

        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }


}
