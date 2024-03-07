<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // 로그인처리 (세션으로 유저 인증 관리)
    function login(Request $req) {
        $result = User::where('email', $req->email)->first();
        Auth::login($result);
        return view('welcome');
    }

    function logout() {
        Auth::logout();
        return view('welcome');
    }

    // api처리 (web.php에 정의된 라우터이므로 세션으로도 유저 인증 관리 가능)
    // 외부서버와 통신하기위한 api가 아니라, 내부서버에서만 이용하는 api일 경우 web.php에서 관리하는 것이 용이함
    // 최종 리턴 시, json형태로 response만 하면 문제 없이 ajax통신 가능
    function callApi() {
        $data = [
            'err' => '1',
            'msg' => '실패'
        ];
        if(Auth::check()) {
            $data['err'] = '0';
            $data['msg'] = '성공';
        }
        
        return response()->json($data);
    }
}
