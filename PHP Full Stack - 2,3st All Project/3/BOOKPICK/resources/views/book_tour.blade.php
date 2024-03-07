@extends('layout.layout')
{{-- layout.blade.php 상속 --}}
@section('title', 'index')
{{-- title로 Main 표기 --}}
@section('content')
<div class="tour-container">    
    {{-- 광고 영역3 --}}
    <section class="tour-section-4">
        {{-- 캐러셀 --}}
        <div class="slide-container-1">
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1045]) }}">
                    <img src="{{ asset('img/ad-01.png') }}" alt="...">
                </a>
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1062]) }}">
                    <img src="{{ asset('img/ad-02.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1067]) }}">
                    <img src="{{ asset('img/ad-03.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1078]) }}">
                    <img src="{{ asset('img/ad-04.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1965]) }}">
                    <img src="{{ asset('img/ad-05.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1972]) }}">
                    <img src="{{ asset('img/ad-06.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1974]) }}">
                    <img src="{{ asset('img/ad-07.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1976]) }}">
                    <img src="{{ asset('img/ad-08.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1981]) }}">
                    <img src="{{ asset('img/ad-09.png') }}" alt="...">
                </a>            
            </div>
            <div class="slide-content">
                <a href="{{ route('getBookDetail', ['id' => 1211]) }}">
                    <img src="{{ asset('img/ad-10.png') }}" alt="...">
                </a>            
            </div>
            <a class="prev" onclick="plusSlide(-1)">&#10094</a>
            <a class="next" onclick="plusSlide(1)">&#10095</a>            
            <div id="pagination">
                <div class="ball" onclick="currentSlide(1)"></div>
                <div class="ball" onclick="currentSlide(2)"></div>
                <div class="ball" onclick="currentSlide(3)"></div>
                <div class="ball" onclick="currentSlide(4)"></div>
                <div class="ball" onclick="currentSlide(5)"></div>
                <div class="ball" onclick="currentSlide(6)"></div>
                <div class="ball" onclick="currentSlide(7)"></div>
                <div class="ball" onclick="currentSlide(8)"></div>
                <div class="ball" onclick="currentSlide(9)"></div>
                <div class="ball" onclick="currentSlide(10)"></div>
            </div>
        </div>
    </section>
    
    {{-- 광고 영역4 --}}
    <section class="tour-section-3">
        {{-- <div class="tour-text-area">
            <h2 class="tour-text-h2">북픽과 함께하는 새로운 시작</h2>
            <p class="tour-text-p">성공을 향한 여정, 독서와 함께 떠나보세요</p>
        </div> --}}
        <div class="tour-card-area">
            <div class="tour-card" id="tour-card-1">
                <div class="content">
                    <h2 class="title">쉽지만, 꾸준한 효과!</h2>
                    <p class="copy">이동 중에도 책을 펼치면 언제 어디서나<br>
                        새로운 세계를 열어볼 수 있어요.</p>
                </div>
            </div>
            {{-- 1 카드 모달 --}}
            <div class="tour-modal" id="tour-modal-1">
                <div class="tour-modal-content">
                    <img src="{{ asset('img/tour-c1.png') }}" alt="">
                    <span class="tour-modal-close">&times;</span>
                </div>
            </div>
        
            <div class="tour-card" id="tour-card-2">
                <div class="content">
                    <h2 class="title">지금, 독서하세요.</h2>
                    <p class="copy"> 작은 변화가 습관이 되고,<br>
                        습관이 삶을 바꾸기 시작하면,<br>
                        더 큰 성과를 얻을 수 있어요.</p>
                </div>
            </div>
            {{-- 2 카드 모달 --}}
            <div class="tour-modal" id="tour-modal-2">
                <div class="tour-modal-content">
                    <img src="{{ asset('img/tour-c2.png') }}" alt="">
                </div>
                <span class="tour-modal-close">&times;</span>
            </div>
        
            <div class="tour-card" id="tour-card-3">
                <div class="content">
                    <h2 class="title">독서 후, 기록하세요.</h2>
                    <p class="copy">책을 읽고, 그 감동과 생각을 적어주세요.<br>
                        책의 내용에 대해 기억할 확률이<br>
                        훨씬 높아져요.</p>
                </div>
            </div>
            {{-- 3 카드 모달 --}}
            <div class="tour-modal" id="tour-modal-3">
                <div class="tour-modal-content">
                    <img src="{{ asset('img/tour-c3.png') }}" alt="">
                    <span class="tour-modal-close">&times;</span>
                </div>
            </div>
            <a href="{{ route('getLogin') }}">
                <div class="tour-card" id="tour-card-4">
                    <div class="content">
                        <h2 class="title">지금, 북픽하세요.</h2>
                        <p class="copy">로그인하기
                    </div>
                </div>
            </a>           
        </div> 
    </section>
    {{-- 광고 영역2 --}}
    <section class="tour-section-5">
        <div class="tour-memo-container">
            <div class="memo-comment-area">                
                <div class="memo-title">
                    <p class="memo-comment-title"><img src="{{asset ('./img/popular.gif')}}" alt=""> 많은 댓글이 모인 인기 책</p>
                    <div class="memo-comment-data">
                        <div class="memo-comment-content-img">
                            <img src=" {{ $popularBookinfo['b_img_url'] }} " alt="">
                        </div>
                        <div class="memo-comment-content-content">
                            <div class="memo-data-comment-container">
                                <p class="memo-data-title">{{$popularBookinfo['b_title']}}</p>
                                <p class="memo-data-email">{{$popularBookinfo['u_email']}}</p>
                                <div class="memo-data-comment-area">
                                    <p class="memo-data-comment">{{$popularBookinfo['bdc_comment']}}</p>
                                </div>
                            </div>
                            <div class="memo-data-button-area">
                                <button class="memo-data-button" type="button" onclick="location='{{ route('getBookDetail', $popularBookinfo['b_id']) }}'">자세히 보기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="memo-comment-area">
                <div class="memo-title">
                    <p class="memo-comment-title"><img src="{{asset ('./img/new.gif')}}" alt=""> 새로운 시선이 담겨 있어요</p>
                    <div class="memo-comment-data">
                        <div class="memo-comment-content-img">
                            <img src=" {{ $lastestCommentInfo['b_img_url'] }} " alt="">
                        </div>
                        <div class="memo-comment-content-content">
                            <div class="memo-data-comment-container">
                                <p class="memo-data-title">{{$lastestCommentInfo['b_title']}}</p>
                                <p class="memo-data-email">{{$lastestCommentInfo['u_email']}}</p>
                                <div class="memo-data-comment-area">
                                    <p class="memo-data-comment">{{$lastestCommentInfo['bdc_comment']}}</p>
                                </div>
                            </div>
                            <div class="memo-data-button-area">
                                <button class="memo-data-button" type="button" onclick="location='{{ route('getBookDetail', $lastestCommentInfo['b_id']) }}'">자세히 보기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="memo-comment-area">
                <div class="memo-title">
                    <p class="memo-comment-title"><img src="{{asset ('./img/like.gif')}}" alt=""> 좋아요가 쏟아지고 있어요</p>
                    <div class="memo-comment-data">
                        <div class="memo-comment-content-img">
                            <img src=" {{ $likeBookinfo['b_img_url'] }} " alt="">
                        </div>
                        <div class="memo-comment-content-content">
                            <div class="memo-data-comment-container">
                                <p class="memo-data-title">{{$likeBookinfo['b_title']}}</p>
                                <p class="memo-data-email">{{$likeBookinfo['u_email']}}</p>
                                <div class="memo-data-comment-area">
                                    <p class="memo-data-comment">{{$likeBookinfo['bdc_comment']}}</p>
                                </div>
                            </div>
                            <div class="memo-data-button-area">
                                <button class="memo-data-button" type="button" onclick="location='{{ route('getBookDetail', $likeBookinfo['b_id']) }}'">자세히 보기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- 로그인유도 배너 --}}
        @if(!(Auth::check()))
        <a href="{{ route('getLogin') }}">
            <div class="tour-loginbanner">
                <p class="tour-loginbanner-p">독서에서 찾은 미소와 감동을 독서기록으로 남겨보세요</p>
                <p class="tour-text-p">BOOKPICK'은 여러분의 독서 이야기를 기다리고 있어요</p>
                <span class="loginbanner-loginbtn">로그인하기</span>
            </div>
        </a>
        @endif 
    </section>   

    {{-- 광고 영역1 --}}
    <section class="tour-section-2">
        <!-- 왼쪽에서 오른쪽으로 이동하는 책 이미지 배너 -->
        <div class="tour-banner-container">
            <ul class="left-banner-area" id="leftBannerArea">
                @forelse($newBook as $val)
                <li class="left-banner">
                    <a href="{{ route('getBookDetail', $val['b_id']) }}">
                        <img src="{{ $val->b_img_url }}" alt="...">
                    </a>
                </li>
                @empty
                    비어있음
                @endforelse
            </ul>
        </div>

        <!-- 오른쪽에서 왼쪽으로 이동하는 책 이미지 배너 (반대 방향) -->
        <div class="tour-banner-container">
            <ul class="left-banner-reverse-area" id="rightBannerArea">
                @forelse($attentionBook as $val)
                <li class="left-banner-reverse">
                    <a href="{{ route('getBookDetail', $val['b_id']) }}">
                        <img src="{{$val->b_img_url}}" alt="...">
                    </a>
                </li>
                @empty
                비어있음
                @endforelse  
            </ul>
        </div>

        <!-- 왼쪽에서 오른쪽으로 이동하는 책 이미지 배너 -->
        <div class="tour-banner-container">
            <ul class="left-banner-area" id="leftBannerArea">
                @forelse($bestSellerBook as $val)
                <li class="left-banner">
                    <a href="{{ route('getBookDetail', $val['b_id']) }}">
                        <img src="{{ $val->b_img_url }}" alt="...">
                    </a>
                </li>
                @empty
                    비어있음
                @endforelse
            </ul>
        </div>             
    </section>    
</div>
@endsection

@section('defer-js')
    <script src="{{ asset('/js/common.js') }}" defer></script>
    <script src="{{ asset('/js/tour.js') }}" defer></script>
@endsection