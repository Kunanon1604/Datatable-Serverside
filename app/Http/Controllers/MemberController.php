<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index()
    {
    	return view('lists');
    }

    public function LoadMemberData(Request $request)
    {
    	if($request->ajax()){

    		$lenght = 10; //10 record perpage
            $start = 0;

            if(!empty($request->length)) { //length perpage
                $lenght = $request->length;
            }

            if(!empty($request->start)) {
                $start = $request->start;
            }

            $where = array();
            $where['search'] = $request->search['value']; //search value
            $where['column'] = $request->columns[$request->order[0]['column']]['data']; //order data
            $where['sort'] = $request->order[0]['dir'];

            $query = Member::ListData($lenght, $start, $where); //main data
            $total = Member::ListCount($where); //count data
            $store = array();
            if(!empty($query)){
            	foreach ($query as $key => $value) {
            		$row = array();

            		$row['id'] = $value['id'];
            		$row['fullname'] = $value['fullname'];
            		$row['telephone'] = $value['telephone'];
            		$row['email'] = $value['email'];

            		$store[] = $row;
            	}
            }else{

            	$store = false;
            }

            $data = array(
                'recordsTotal' => $total,
                'recordsFiltered' => $total,
                'data' => $store,
            );
            	
            return response()->json($data);
    	}
    }
}
