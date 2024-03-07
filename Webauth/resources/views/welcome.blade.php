<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/app.js')}}" defer></script>
    <title>Document</title>
</head>
<body>
    {{-- 비로그인시 로그인 표시 --}}
    @guest
        <form action="/login" method="post">
            @csrf
            <input type="text" name="email" id="email">
            <br>
            <input type="text" name="pw" id="pw">
            <button type="submit">로그인</button>
        </form>
    @endguest

    {{-- 로그인시 로그아웃 표시 --}}
    @auth
        <a href="/logout">로그아웃</a>
    @endauth

    <br>
    <br>
    {{-- 로그인하면 콘솔에 성공이라는 response가 출력, 비로그인시 실패라는 response가 출력 --}}
    {{-- 세션으로 인증처리가 가능한 것을 보기 위해 간단히 구현 --}}
    {{-- 이후, 프론트에서는 로그인 성공에 대한 결과를 저장하여 화면 제어 가능 (Cookie, localStorage , vuex 등등 ) --}}
    <button onclick="callApi(); false;">API호출</button>

    <script>
        function callApi() {
            axios.get('/callApi')
            .then( res => {
                console.log(res.data);
            })
            .catch( err => {
                console.log(err.response.data);
            });
        }
    </script>
</body>
</html>