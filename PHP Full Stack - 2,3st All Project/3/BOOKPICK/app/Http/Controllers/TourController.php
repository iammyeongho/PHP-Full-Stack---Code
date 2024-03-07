<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book_info;
use App\Models\Book_detail_comment;
use App\Models\Book_detail_comment_state;
use App\Models\Book_api;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TourController extends Controller
{
    public function index()
    {   
        // 둘러보기 슬라이드 도서출력
        // 신간 전체 리스트
        $newBook = book_api::where('book_apis.ac_id', 1)
        ->join('book_infos', 'book_apis.b_id', '=', 'book_infos.b_id')
        ->select('book_infos.*')
        ->get();
        // 주목할 만한 신간 리스트        
        $attentionBook = book_api::where('book_apis.ac_id', 2)
        ->join('book_infos', 'book_apis.b_id', '=', 'book_infos.b_id')
        ->select('book_infos.*')
        ->get();
        // 베스트셀러
        $bestSellerBook = book_api::where('book_apis.ac_id', 3)
        ->join('book_infos', 'book_apis.b_id', '=', 'book_infos.b_id')
        ->select('book_infos.*')
        ->get();

        // 캐러셀 슬라이드 배너 b_id 연동
        $adBookIds = [
            1045,
            1062, 
            1067, 
            1078, 
            1965, 
            1972, 
            1974,
            1976,
            1981,
            1211,
        ];

        $adBookId = book_info::whereIn('b_id', $adBookIds)
        ->pluck('b_id');
        Log::debug("광고배너 책pk: " . $adBookId);

        // ### 가장 많은 댓글이 달린 책(책pk, 유저pk, 책imgurl, 유저 이메일, 책 제목, 댓글 내용)
        $popularBook = Book_detail_comment::whereNull('deleted_at')
            ->groupBy('b_id')
            ->select('b_id', DB::raw('COUNT(b_id) as comment_count'))
            ->orderByDesc('comment_count')
            ->limit(1)
            ->first();
        if($popularBook) {
            $popularBookId = $popularBook->b_id;
            $popular_count = $popularBook->comment_count;
            $popularBookinfo = Book_detail_comment::where('b_id', $popularBookId)->first();

            if ($popularBookinfo) {
                // 가장 많은 댓글 책 정보
                // 책pk
                $b_id = $popularBookinfo->b_id;
                // 유저pk
                $u_id = $popularBookinfo->u_id;
                // 댓글 내용
                $bdc_comment = $popularBookinfo->bdc_comment;

                // 가장 많은 댓글 책 정보
                $bookInfo = book_info::find($b_id);
                $b_title = $bookInfo->b_title;
                $b_img_url = $bookInfo->b_img_url;

                //가장 많은 댓글 책 유저정보
                $user = User::find($u_id);
                $u_email = $user->u_email;

                // 결과 저장
                $popularBookinfo = [
                    'b_id' => $b_id,
                    'u_id' => $u_id,
                    'b_img_url' => $b_img_url,
                    'u_email' => $u_email,
                    'b_title' => $b_title,
                    'bdc_comment' => $bdc_comment,
                ];
                // 가장 많은 댓글이 달린 책 정보
                Log::debug("가장 많은 댓글 책 정보" , $popularBookinfo);  
            }
        }
        else {
            $pupularBookId = book_info::find(3);
            $popularBookinfo = [
                'b_id' => $pupularBookId->b_id,
                'u_id' => '',
                'b_img_url' => $pupularBookId->b_img_url,
                'u_email' => '',
                'b_title' => $pupularBookId->b_title,
                'bdc_comment' => '',
            ];
        }
        // ### 최신 댓글이 달린 책(책pk, 유저pk, 책imgurl, 유저 이메일, 책 제목, 댓글 내용)
        $lastestComment = Book_detail_comment::orderByDesc('created_at')->first();

        if ($lastestComment) {
            // 책pk
            $b_id = $lastestComment->b_id;
            // 유저pk
            $u_id = $lastestComment->u_id;
            // 최신 댓글 내용
            $bdc_comment = $lastestComment->bdc_comment;

            // 최신 댓글 댓글이 달린 책 정보
            $bookInfo = book_info::find($b_id);
            $b_title = $bookInfo->b_title;
            $b_img_url = $bookInfo->b_img_url;

            // 최신 댓글에 대한 유저 정보
            $user = User::find($u_id);
            $u_email = $user->u_email;

            // 결과 저장
            $lastestCommentInfo = [
                'b_id' => $b_id,
                'u_id' => $u_id,
                'b_img_url' => $b_img_url,
                'u_email' => $u_email,
                'b_title' => $b_title,
                'bdc_comment' => $bdc_comment,
            ];
            // 최신 댓글이 달린 책 정보
            Log::debug("최신 댓글 관련 정보" , $lastestCommentInfo);
        } else {
            $lastestComment = book_info::find(2);
            $lastestCommentInfo = [
                'b_id' => $lastestComment->b_id,
                'u_id' => '',
                'b_img_url' => $lastestComment->b_img_url,
                'u_email' => '',
                'b_title' => $lastestComment->b_title,
                'bdc_comment' => '',
            ];
        }

        // ### 좋아요가 가장 많이 달린 책(책pk, 유저pk, 책imgurl, 유저 이메일, 책 제목, 댓글 내용)
        $likeBookBdcsInfo = Book_detail_comment_state::where('bdcs_flg', 1)
            ->whereNull('deleted_at')
            ->groupBy('bdcs_flg', 'bdc_id')
            ->select('bdcs_flg', 'bdc_id', DB::raw('COUNT(bdc_id) as count'))
            ->orderByDesc('count')
            ->limit(1)
            ->first();
        if($likeBookBdcsInfo) {
            // 좋아요가 가장 많이 달린 책의 bdc_id 저장
            $likeBookBdcId = $likeBookBdcsInfo->bdc_id;

            $likeBookBdcInfo = Book_detail_comment::where('bdc_id', $likeBookBdcId)->first();

            if ($likeBookBdcInfo) {
                // 좋아요가 가장 많이 달린 책 정보
                // 책pk
                $b_id = $likeBookBdcInfo->b_id;
                // 유저pk
                $u_id = $likeBookBdcInfo->u_id;
                // 최신 댓글 내용
                $bdc_comment = $likeBookBdcInfo->bdc_comment;

                // 최신 댓글 댓글이 달린 책 정보
                $bookInfo = book_info::find($b_id);
                $b_title = $bookInfo->b_title;
                $b_img_url = $bookInfo->b_img_url;

                // 좋아요가 가장 많이 달린 책 유저정보
                $user = User::find($u_id);
                $u_email = $user->u_email;

                // 결과 저장
                $likeBookinfo = [
                    'b_id' => $b_id,
                    'u_id' => $u_id,
                    'b_img_url' => $b_img_url,
                    'u_email' => $u_email,
                    'b_title' => $b_title,
                    'bdc_comment' => $bdc_comment,
                ];
                // 최신 댓글이 달린 책 정보
                Log::debug("최다 좋아요 정보" , $likeBookinfo);  
            }
        }
        else {
            $likeBookBdc = book_info::find(3);
            $likeBookinfo = [
                'b_id' => $likeBookBdc->b_id,
                'u_id' => '',
                'b_img_url' => $likeBookBdc->b_img_url,
                'u_email' => '',
                'b_title' => $likeBookBdc->b_title,
                'bdc_comment' => '',
            ];
        }
        Log::info('Client IP: ' . request()->ip());

        return view('book_tour')
            ->with('newBook', $newBook)            
            ->with('attentionBook', $attentionBook)
            ->with('bestSellerBook', $bestSellerBook)
            ->with('adBookId', $adBookId)
            ->with('popularBookinfo', $popularBookinfo) // 가장 많은 댓글
            ->with('lastestCommentInfo', $lastestCommentInfo) // 최신 댓글
            ->with('likeBookinfo', $likeBookinfo); // 좋아요 최다
    }
}