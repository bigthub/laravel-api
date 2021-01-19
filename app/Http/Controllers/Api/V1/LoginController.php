<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiController;
use App\Models\v1\Admin;
use App\Models\v1\AdminLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function test()
    {
        //
        return $this->data (22);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login (Request $request)
    {
        $all =$request->all();

        if(empty($all['username'])||empty($all['password'])){
            return $this->error('密码和账号都不能为空');
        }
        $admin = Admin::query()->where('name',$all['username'])->first();
        if (!$admin) {
            return $this->error('账号不存在');
        }
        if (!Hash::check($all['password'], $admin->password)) {
            return $this->error('账号或密码错误');
        }
        $admin->last_login_at = Carbon::now()->toDateTimeString();
        if(!$admin->save()){
            return $this->error();
        }

        $access_token = auth('api')->login($admin);

        //日志记录
        $log = new AdminLog();
        $log->admin_id = $admin->id;
        $log->path = $request->path();
        $log->method = $request->method();
        $log->ip = $request->ip();
        $log->input = json_encode($all, JSON_UNESCAPED_UNICODE);
        // 记录日志
        if(!$log->save()){
            return $this->error();
        }
        return $this->data([
            'access_token'=>$access_token
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
