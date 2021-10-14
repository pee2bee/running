<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    //notifiable 需通报的; authenticatable 授权相关功能的引入
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function($user){
            $user -> activation_token = Str::random(10);
        });
    }





    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



/*     Gravatar 来为用户提供个人头像支持。Gravatar 为 “全球通用头像”，当你在 Gravatar 的服务器上放置了自己的头像后，可通过将自己的 Gravatar 登录邮箱进行 MD5 转码，并与 Gravatar 的 URL 进行拼接来获取到自己的 Gravatar 头像。
定义gravatar 方法，用来生成用户的头像。 */
    public function gravatar($size = '100')//1.为 gravatar 方法传递的参数 size 指定了默认值 100
    {

        $hash = md5(strtolower(trim($this->attributes['email'])));//2.通过 $this->attributes['email'] 获取到用户的邮箱；3.使用 trim (修剪)方法剔除邮箱的前后空白内容；4.用 strtolower(小写) 方法将邮箱转换为小写；5.将小写的邮箱使用 md5 方法进行转码；

        return "http://www.gravatar.com/avatar/$hash?s=$size";//6.将转码后的邮箱与链接、尺寸拼接成完整的 URL 并返回；
    }

}
