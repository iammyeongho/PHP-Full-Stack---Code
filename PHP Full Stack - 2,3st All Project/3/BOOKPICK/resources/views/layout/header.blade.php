@php
// 현재 접속중인 라우트 이름
$currentRoute = Route::currentRouteName();
@endphp

@if(!in_array(Route::currentRouteName(), ['getLogin', 'getRegister', 'postLogin', 'postRegister', 'getVerification', 'sendVerification', 'reSendVerification', 'mailTokenExpired', 'loginKakao', 'handleLoginKakaoCallback']))
	<header>
		<div class="hamburger-menu" onclick="hamburgerMenuOpenClose()">
		<div class="bar"></div>
		<div class="bar"></div>
		<div class="bar"></div>
		</div>
		<div class="navbar-logo">
			<a href="{{ route('index') }}">BOOK PICK'</a>
		</div>
		<nav class="desktop-nav">
			<div class="menu-area">
				<a href="{{ route('home') }}" class="header-link {{ $currentRoute === 'home' ? 'active' : '' }}">둘러보기</a>
				<a href="{{ route('getLibrarywishlist') }}" class="header-link {{ in_array($currentRoute, ['getLibraryFinished', 'getLibraryReading', 'getLibrarywishlist']) ? 'active' : '' }}">나의 서재</a>
			</div>
			<div class="search-area">
				{{-- 연관 검색어 영역 --}}
				<div id="auto-search-area" class="auto-search-area">
					<ul id="auto-search"></ul>
				</div>
				<form class="desktop-search-bar" action="{{ route('getsearch.index') }}" method="GET">
					<div class="search-input-container">
						<div class="search-input">
							<input type="search" class="search-bar" id= "query" name="query" value="" autocomplete="off" spellcheck="false" placeholder="2글자 이상 검색어를 입력해 주세요">
						</div>
						
						<div class="search-button">
							{{-- a링크 클릭 시 url에 아무것도 노출되지 않음 --}}
							<a href="javascript:void(0);" class="header-search-btn" onclick="submitSearch()">
								<img src="{{ asset('img/search.png') }}" class="search-icon" alt="...">
							</a>
						</div>
					</div>											
				</form>
			</div>
		</nav>
		@auth
			{{-- 로그인 후 표시될 내용 --}}
			<div class="header-user-area">
				<div class="header-login-button-area">
					<nav class="header-info-button">						
						@if(Auth::check())
							@if(session('kakaoUser'))
							<!-- 카카오 로그아웃 -->
							<span class="header-info-btn">{{ Auth::user()->u_name }} 님</span>
							<button class="header-logout-btn" onclick="location.href='{{ route('logoutKakao') }}'">로그아웃</button>
							@else
							<!-- 일반 로그아웃 -->
								<a class="header-info-btn" href="{{ route('getPasswordReconfirm') }}">{{ Auth::user()->u_name }} 님</a>
								<button class="header-logout-btn" onclick="location.href='{{ route('getLogout') }}'">로그아웃</button>
							@endif
						@endif
					</nav>
				</div>
			</div>
		@else
			<div class="header-login-button-area">
				<button class="header-login-btn" onclick="location.href='{{ route('getLogin') }}'">로그인</button>
			</div>			
		@endauth
		<nav class="mobile-nav">
			<form class="desktop-search-bar" action="{{ route('getsearch.index') }}" method="GET">
				<div class="search-input-container">
					<div class="search-input">
						<input type="search" class="search-bar" id="query" name="query" value="" autocomplete="off" spellcheck="false" placeholder="검색어를 입력해 주세요">
					</div>					
					<div class="search-button">
						<a href="javascript:void(0);" class="header-search-btn" onclick="submitSearch()">
							<img src="{{ asset('img/search.png') }}" class="search-icon" alt="...">
						</a>
					</div>
				</div>
			</form>		
			<a href="{{ route('home') }}">둘러보기</a>				
			<a href="{{ route('getLibraryFinished') }}">나의 서재</a>
		</nav>
		{{-- 유저 아이콘 --}}
		<nav class="user-menu">					
			@if(Auth::check())
				@if(session('kakaoUser'))
				<!-- 카카오 로그아웃 -->
				<div class="kakao-user">
					<span class="user-info-name">{{ Auth::user()->u_name }}님</span>
					<a href="{{ route('logoutKakao') }}">로그아웃</a>
				</div>
				@else
				<!-- 일반 로그아웃 -->
				<div class="general-user">
					<span class="user-info-name">{{ Auth::user()->u_name }}님</span>
					<a href="{{ route('getPasswordReconfirm') }}">정보수정</a>
					<a href="{{ route('getLogout') }}">로그아웃</a>
				</div>
				@endif
			@endif		
		</nav>	

		@if(Auth::check())
			<div class="user-icon">
				<img class="user-img" src="{{ asset('img/user.png') }}" alt="">
			</div>
		@endif
		@if(!in_array(Route::currentRouteName(), ['getLogin', 'getRegister', 'postLogin', 'postRegister', 'getPasswordReconfirm', 'getInfo', 'getWithdrawal', 'getVerification', 'sendVerification', 'reSendVerification', 'mailTokenExpired', 'loginKakao', 'handleLoginKakaoCallback']))
		<a id="top-button" class="top-button" href="javascript:window.scrollTo(0,0);"><img src="{{ asset('img/top-button.png') }}" alt=""></a>
		@endif
	</header>

	<script>
		function submitSearch() {
			var form = document.querySelector('.desktop-search-bar')
			if (form) {
				form.submit();
			} else {
				console.log('폼 못찾음');
			}
		}

		document.addEventListener('DOMContentLoaded', function () {
            var topButton = document.getElementById('top-button');

            // Show the button when scrolling down
            window.onscroll = function () {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    topButton.style.display = 'block';
                } else {
                    topButton.style.display = 'none';
                }
            };

            topButton.addEventListener('click', function () {
                document.body.scrollTop = 0; 
                document.documentElement.scrollTop = 0; 
            });
        });
	</script>
@endif


