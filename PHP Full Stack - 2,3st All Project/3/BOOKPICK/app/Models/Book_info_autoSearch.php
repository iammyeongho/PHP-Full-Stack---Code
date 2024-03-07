<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Laravel\Scout\Searchable;
use App\Models\Book_info;

class book_info_autoSearch extends Model
{
    use HasFactory, Searchable;
    
    protected $fillable = [
        'b_sub_cate',
        'b_title',
    ];

    protected $table = 'book_info_auto_searches';

    // 실시간 연관검색어 데이터 연동
    public static function importDataFromBookInfo()
    {
        $bookInfoData = Book_info::select('b_sub_cate', 'b_title')->get();
    
        foreach ($bookInfoData as $bookInfo) {
            self::create([
                'b_sub_cate' => $bookInfo->b_sub_cate,
                'b_title' => $bookInfo->b_title,
            ]);
        }
    }

    // 실시간 연관검색어 인덱스명 설정
    public function searchableAs() {
        return 'book_info_autoSearch';
    }

    // 실시간 연관검색어 import 컬럼 설정
    public function toSearchableArray()
    {
        return [
            'b_sub_cate' => $this->b_sub_cate,
            'b_title' => $this->b_title,
        ];
    }

    // 검색 가능 속성 지정
    public function searchableAttributes()
    {
        return [
            'b_sub_cate',
            'b_title',
        ];
    }

    // protected $searchable = [
    //     'attributesToHighlight' => ['b_title', 'b_sub_cate'],
    // ];
}

// migrate 실행 시 책 삽입 후 알고리아 처리

// 1) 기존 정보 모델 import
// php artisan scout:import "App\Models\book_info"

// 2) 실시간 연관검색어 참고 모델 추가
// php artisan tinker
// \App\Models\book_info_autoSearch::importDataFromBookInfo();
// = null 반환 시 처리 완료

// 3) 기본 정보 모델 참고하는 연관 모델 import
// php artisan scout:import "App\Models\book_info_autoSearch"
