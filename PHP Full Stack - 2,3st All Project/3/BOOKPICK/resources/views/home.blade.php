@extends('layout.layout')
{{-- layout.blade.php 상속 --}}
@section('title', 'home')
{{-- title로 Main 표기 --}}
@section('content')
<div class="home-container">
    <section class="tour-section-1">
        <div class="tour-main-area">
            <div class="tour-main-text-container">
                    <h1 class="tour-main-text">독서 시간을 빛낼 BOOK PICK'</h1>
                    <p class="tour-main-text-p">독서 모험을 더욱 풍성하게!</p>
            </div>
            <div class="tour-main-img-container">
                <img src="{{ asset('img/tour-main.png') }}" alt="...">
            </div>
        </div>
    </section>
    
    {{-- 베스트셀러 영역 --}}
    <div class="home-box1">
        <div class="home-title">
            <strong>베스트셀러</strong>
            <p>베스트셀러를 알려 드려요!</p>
        </div>
            <ul class="slide-container" id="slide">
                @forelse($bestSellerBook as $val)
                <li class="slide-box">
                    <a href="{{ route('getBookDetail', ['id' => $val->b_id]) }}">
                        <img class="common_book_hover" src="{{$val->b_img_url}}" alt="...">
                    </a>
                        <p>{{$val->b_title}}</p>
                        <p>{{$val->b_author}}</p>
                </li>
                @empty
                    비어있음
                @endforelse
            </ul>
    </div>
    {{-- 북픽 추천 도서 영역 & 인기 도서 찜 순위!! 영역 --}}
    <div class="home-recommend">
        <strong>북픽 추천 도서</strong>
    </div>
    <div class="home-box2">
        <ul class="slide-container2" id="slide1">
            @forelse($recommendBook as $val2)
            <li class="slide-box">
                <a href="{{ route('getBookDetail', ['id' => $val2->b_id]) }}">
                    <img class="common_book_hover" src="{{$val2->b_img_url}}" alt="...">
                </a>    
                    <p>{{$val2->b_title}}</p>
                    <p>{{$val2->b_author}}</p>
            </li>
            @empty
                비어있음
            @endforelse
        </ul>
        <ul class="slide-container2-2" id="slide2">
            <li class="bookworm">
                <strong>인기 도서 찜 순위!!</strong>
                <br>
                <p>북픽회원이 가장 많이 찜한 책 TOP 5</p>
            </li>
            @forelse($hotWishListNum as $key => $val)
                <li class="home-booking">
                    <span class="home-booking-box">{{$key+1}}</span>
                    <a class="home-booking-move" href="{{ route('getBookDetail', ['id' => $val->b_id]) }}">
                        {{$val->b_title}}
                    </a>
                </li>
                @if ($loop->last)
                    @if ( ($loop->iteration) === 5)
                    @else
                        @for ($i=($loop->iteration); $i < 5; $i++)
                            <li class="home-booking"><span class="home-booking-box">{{$i+1}}</span>없음</li>
                        @endfor

                    @endif
                @endif
            @empty
                @for($i = 1; $i <= 5; $i++)
                    <li class="home-booking"><span class="home-booking-box">{{$i}}</span>없음</li>
                @endfor
            @endforelse
        </ul>
    </div>
    {{-- 신간 도서 추천 영역 --}}
    <div class="home-box3">
        <div class="home-title">
            <strong>신간 도서 추천</strong>
            <p>따뜻한 신간 도서를 만나보세요</p>
        </div>
        <ul class="slide-container" id="slide3">
            @forelse($newBook as $val)
            <li class="slide-box">
                <a href="{{ route('getBookDetail', ['id' => $val->b_id]) }}">
                    <img class="common_book_hover" src="{{$val->b_img_url}}" alt="...">
                </a>
                    <p>{{$val->b_title}}</p>
                    <p>{{$val->b_author}}</p>
            </li>
            @empty
                비어있음
            @endforelse
        </ul>
    </div>

    {{-- 주목할 만한 신간 영역 --}}
    <div class="home-box3">
        <div class="home-title">
            <strong>주목할 만한 신간</strong>
            <p>원하는 도서의 책을 골라보세요</p>
        </div>
        <ul class="slide-container" id="slide4">
            @forelse($attentionBook as $val)
            <li class="slide-box">
                <a href="{{ route('getBookDetail', ['id' => $val->b_id]) }}">
                    <img class="common_book_hover" src="{{$val->b_img_url}}" alt="...">
                </a>
                    <p>{{$val->b_title}}</p>
                    <p>{{$val->b_author}}</p>
            </li>
            @empty
                비어있음
            @endforelse
        </ul>
    </div>
    {{-- 블로거 베스트셀러 영역 --}}
    <div class="home-box3">
        <div class="home-title">
            <strong>블로거 베스트셀러</strong>
        </div>
        <ul class="slide-container" id="slide5">
            @forelse($bloggerBook as $val)
            <li class="slide-box">
                <a href="{{ route('getBookDetail', ['id' => $val->b_id]) }}">
                    <img class="common_book_hover" src="{{$val->b_img_url}}" alt="...">
                </a>
                    <p>{{$val->b_title}}</p>
                    <p>{{$val->b_author}}</p>
            </li>
            @empty
                비어있음
            @endforelse
        </ul>
    </div>
</div>
<br><br><br>
@endsection

@section('defer-js')
    <script src="{{ asset('/js/common.js') }}" defer></script>
    <script src="{{ asset('/js/home.js') }}" defer></script>
@endsection