<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'reg_id', 'email', 'password', 'country_code', 'remember_token', 'dis', 'steam', 'five', 'age', 'cur_serverid', 'authority'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function create_newuser($data)
    {
        $query = "INSERT INTO users(name, reg_id, email, password, dis, five, age, steam, cur_serverid, country_code, avatar, server_id, server_name, admin_fname, admin_lname, server_userid, adminid, dis_link, active, flag, verify, authority, approve_status, is_new, remember_token, password_code) VALUES('".$data['name']."', '".$data['reg_id']."', '".$data['email']."', '".$data['password']."', '".$data['dis']."', '".$data['five']."', '".$data['age']."', '".$data['steam']."', '".$data['cur_serverid']."', '".$data['country_code']."', '".$data['avatar']."', '".$data['server_id']."', '".$data['server_name']."', '".$data['admin_fname']."', '".$data['admin_lname']."', '".$data['server_userid']."', '".$data['adminid']."', '".$data['dis_link']."', '".$data['active']."', '".$data['flag']."', '".$data['verify']."', '".$data['authority']."', '".$data['approve_status']."', '".$data['is_new']."', '".$data['remember_token']."', '".$data['password_code']."')";
        DB::insert($query);
    }
}
