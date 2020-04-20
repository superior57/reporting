<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Storage;
use DB;

class Formedit extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function add()
    {
        DB::insert('INSERT INTO tbl_form(pc_no) VALUES(pc);');
    }

    public function save_user($value)
    {
        $query = "INSERT INTO users(remember_token, name, email, password, authority) VALUES('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]');";
        DB::insert($query);        
    }

    public function save_record($value)
    {
        $query = "INSERT INTO record( date, user_id, offense_id, server_id, server_name, offense, narrative, punis, activity, flag, verify, appeal) VALUES('$value[0]', '$value[7]', '$value[6]', '$value[1]', '$value[2]', '$value[3]', '$value[4]', '$value[5]', '0', '0', '0', '');";
        DB::insert($query);  
    }

    public function get_data($tablename)
    {
        $query = "SELECT * FROM $tablename ORDER BY id DESC;";
        return DB::select($query);
    }

    public function get_user($tablename)
    {
        $query = "SELECT * FROM $tablename WHERE is_new='0' ORDER BY id DESC;";
        return DB::select($query);
    }

    public function get_newuser($tablename)
    {
        $query = "SELECT * FROM $tablename WHERE is_new='1' ORDER BY id DESC;";
        return DB::select($query);
    }

    public function get_record($user_id)
    {
        $query = "SELECT * FROM record where user_id=$user_id ORDER BY id DESC;";
        return DB::select($query);
    }

    public function get_count($col_name, $value, $month, $year)
    {
        $query = "SELECT COUNT(*) FROM tbl_form WHERE $col_name LIKE '%$value%' && YEAR(modify_date) = '$year' && MONTH(modify_date) = '$month';";
        if ($col_name == "service_other")
            $query = "SELECT COUNT(*) FROM tbl_form WHERE $col_name != '' && YEAR(modify_date) = '$year' && MONTH(modify_date) = '$month';";
        $result = DB::select($query);
        return $result;
    }

    public function get_details($year)
    {
        $query = "SELECT * FROM tbl_form WHERE YEAR(modify_date) = '$year';";
        $result = DB::select($query);
        return $result;
    }

    public function delete_user($id)
    {
        $query = "DELETE FROM users WHERE id = '$id';";
        $result = DB::delete($query);
    }  
    public function update_user($id, $value)
    {
        $query = "UPDATE users SET remember_token = '$value[0]', name = '$value[1]', email = '$value[2]', password = '$value[3]', authority = '$value[4]' WHERE id = '$id';";
        DB::update($query);
    } 

    public function seted_record($id, $value)
    {
        // var_dump($id);
        $query = "UPDATE record SET activity = '$value[0]', flag = '$value[1]', verify = '$value[2]' WHERE id = '$id';";
        DB::update($query);        
    }

    public function user_seted($id, $value)
    {
        $query = "UPDATE users SET name='$value[0]', reg_id='$value[1]', age='$value[2]', email='$value[3]', steam='$value[4]', five='$value[5]', active='$value[6]', flag='$value[7]', verify='$value[8]', authority='$value[9]' WHERE id = '$id';";
        DB::update($query);          
    }

    public function get_search($value)
    {
        $query = "SELECT * FROM users WHERE reg_id = '$value[0]' && reg_id != '' || dis = '$value[1]' && dis != ''  || email = '$value[3]' && email != '';";
        $result[0] = DB::select($query);
        if ( sizeof(($result[0])) < 1 )
            $result[0] = "0";

        $query = "SELECT * FROM record WHERE offense_id = '$value[2]';";
        
        $result[1] = DB::select($query);
        if ( sizeof(($result[1])) < 1 )
            $result[1] = "0";

        // var_dump($result);
        return $result;
    }

}
