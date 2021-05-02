<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname','telephone','email'];
    protected $guarded = [];

    static public function ListData($limit, $start, $where)
    {
    	$query = Member::where(function($query) use ($where){

			$data = $query->where('fullname','like','%'.$where['search'].'%')
    			->orWhere('email','like','%'.$where['search'].'%')
    			->orWhere('telephone','like','%'.$where['search'].'%');

    		});

    		$data = $query->orderBy($where['column'], $where['sort']);
    		$data = $query->limit($limit)->offset($start)->get();

    	return $data;
    }

    static public function ListCount($where)
    {
    	$query = Member::where(function($query) use ($where){

			$data = $query->where('fullname','like','%'.$where['search'].'%')
    			->orWhere('email','like','%'.$where['search'].'%')
    			->orWhere('telephone','like','%'.$where['search'].'%');

    		});

    		$data = $query->orderBy($where['column'], $where['sort']);
    		$data = $query->count();

    	return $data;
    }
}
