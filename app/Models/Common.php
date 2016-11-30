<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 14:39
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Common extends Model
{

    protected $tablename;
    protected $table;

    function __construct()
    {
       $this->table=DB::table($this->tablename);
    }


    /**
     * 获取数据表的全部数据
     */
    public function getList()
    {
        $list =$this->table->get();
        return ['list'=>$list];
    }
    /**
     * 根据id获取数据表内一条数据
     */
    public function getOne($id)
    {
        if(!$id){
            return false;
        }
        $info = $this->table->where('id',$id)->get();
        return ['info'=>$info];

    }
    /**
     * 根据$map数组删除数据表内指定数据
     */

    public function delTable($map)
    {

        return $this->tablename;
    }
    /**
     * 插入数据
     */
    public function insert($arr){
        $id=$this->table->insertGetId($arr);
        return $id;
    }

}