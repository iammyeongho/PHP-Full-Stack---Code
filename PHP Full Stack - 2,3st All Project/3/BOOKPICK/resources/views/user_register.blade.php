@extends('layout.layout')
{{-- layout.blade.php 상속 --}}
@section('title', '회원가입')
{{-- title로 Login 표기 --}}
@section('content')
{{-- layout.blade.php의 상속을 받지 않고 독자적으로 구성 --}}

<div class="register-container">
    <form class="register-form" action="{{route('postRegister')}}" method="POST">
    @csrf        
        <p class="register-h1">북픽 가입</p>
        <p class="register-h2">*는 필수입력 사항입니다(이메일은 아이디로 사용됩니다)</p>

        <div class="register-input-area">
            <input class="register-input" type="email" id="u_email" name="u_email" readonly maxlength="50"
            value="{{ $userData['u_email'] }}">
        </div>
        
        <div class="register-input-area">
            <input class="register-input" type="password" id="u_password" name="u_password" 
            maxlength="20" placeholder="*비밀번호" autocomplete="off">            
            <span class="errormsg u_password_errormsg"></span>             
        </div>

        <div class="register-input-area">
            <input class="register-input" type="password" id="u_password_confirm" name="u_password_confirm" 
            maxlength="20" placeholder="*비밀번호 확인" autocomplete="off">            
            <span class="errormsg u_password_confirm_errormsg">
        </div>

        <div class="register-input-area">
            <input class="register-input" type="text" id="u_name" name="u_name" 
            maxlength="50" placeholder="*이름" autocomplete="off">            
            <span class="errormsg u_name_errormsg"></span>
        </div>

        <div class="register-input-area">
            <input class="register-input" type="text" id="u_birthdate" name="u_birthdate" 
            maxlength="8" placeholder="*생년월일 ex)20231219" autocomplete="off">            
            <span class="errormsg u_birthdate_errormsg"></span>
        </div>

        <div class="register-input-area">
            <input class="register-input" type="tel" id="u_tel" name="u_tel" 
            maxlength="11" placeholder="*휴대폰 번호 ex)01012345678" autocomplete="off">            
            <span class="errormsg u_tel_errormsg"></span>
        </div>

        <button class="register-postcode-button" type="button" 
        id="register-postcode-button" onclick="execDaumPostcode()">주소검색</button>

        <div class="register-input-area">
            <input class="register-input" type="text" id="u_postcode" name="u_postcode"
            maxlength="5" placeholder="*우편번호" autocomplete="off">            
            <span class="errormsg u_postcode_errormsg"></span>
        </div>        

        <div class="register-input-area">
            <input class="register-input" type="text" id="u_basic_address" name="u_basic_address"
            placeholder="*기본주소" autocomplete="off">            
            <span class="errormsg u_basic_address_errormsg"></span>
        </div>

        <div class="register-input-area">
            <input class="register-input" type="text" id="u_detail_address" name="u_detail_address"
            placeholder="상세주소" autocomplete="off">
        </div>

        <div class="register-button-area">
            <button class="register-button" id="register-button" type="submit">회원가입</button>
        </div>
        
        <div class="register-text">
            <span>이미 회원이신가요?</span> <a class="register-login-link" href="{{ route('getLogin') }}">로그인하기</a>
        </div>        
    </form>
</div>
@endsection
@php
    $hideFooter = true;
@endphp


@section('defer-js')
    <script src="{{ asset('/js/UserRegisterValidation.js') }}" defer></script>
    <script src="{{ asset('/js/UserAddress.js') }}" defer></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
@endsection

