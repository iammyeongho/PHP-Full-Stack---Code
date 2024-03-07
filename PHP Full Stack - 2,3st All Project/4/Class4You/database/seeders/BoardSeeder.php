<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Board;
use Faker\Factory as Faker;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '안녕하세요. 고민이있습니다.',
                'BoardComment' => <<<EOT
자바 언어 공부 문법 전체적인 공부를 한번 마친 학생입니다.

스프링을 해야겠다 싶어 스프링 입문을 듣는데 듣는 도중 뭐지? 문법도 그렇고 잘 이해가 안가는 부분이 많습니다. 
코드가 이해가 안가는 부분이 많기도 합니다. 이럴 경우 자바를 다시 한번 듣고 스프링으로 넘어 와서 들어야할까요?
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'html 실행할때 질문이요~',
                'BoardComment' => <<<EOT
강의 듣다가 html 작성을 하고 실행을 했는데 저는 글로벌 수신기에 이벤트 수신기 없음이라고 뜨는데var number1 = 20;이부분이 생성되고 값이 들어가는걸 직접 보고 싶은데 왜 안뜨는 걸까요?
제가 Microsoft Edge로 열었는데 Chrome이 아니라 그런건가요?
ㅜ 그리고 체계적인 수업인데 무료강의로 열어 주셔서 감사드립니다~~!!JS에 흥미가 생겼습니다~!!! 아이브에 대해서도 많이 알고갑니다 ㅎㅎ
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '제가 목표로 하는 수준이 어느정도인지 감이 잡히지 않습니다.',
                'BoardComment' => <<<EOT
안녕하세요? 저는 컴 분야 대학원에 재학중인 학생입니다.

하지만 부끄럽게도 코딩을 잘 못하고.. 대학원 코딩 시험에 대한 걱정을 많이 하고 있는데, 이 시험을 잘 보려면 어느 수준이 되어야 하는지, 큰돌님 커리큘럼을 따라가면 되는지, 그리고 어떤 부분을 집중적으로 공부하면 될지 감이 잘 오지 않습니다.

    

(알고리즘 수업이나 코딩 수업은 수강해서 수업에서 설명하시는 개념들을 어느정도 알고있고 코드도 보면 뭔지 알겠는데 작성하는건 쉽지 않은 하찮은 수준입니다..)

    

그래서 나왔던 문제들 한번 보여드리고 조언을 받고 싶은데, 혹시 기출을 공개적으로 올린다고 혹시나 누가 보고 얘기할 수 있어 걱정되는 부분이 있습니다.

    

그래서 제가 git repo를 파고 큰돌님을 collaborator로 초대하였는데, 혹시 repo 접근이 안되거나 question.md에 문제가 있으면 말씀주세요!

감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '강의 수강 방법에 대한 고민입니다!',
                'BoardComment' => <<<EOT
안녕하세요! 큰돌님.
큰돌님의 강의를 수강하며 코딩테스트를 공부하고 있는 취준생입니다.
개념강의는 이해하였으나, 커리큘럼에 있는 문제들을 풀 때 처음 생각한 풀이법이 한번에 맞지 않는데요, 4~5시간 수정해서 스스로 솔브한 적도 있지만 대부분은 2시간 정도 넘어가면 해설강의를 듣고 다시 코드를 수정해서 제출하고 있습니다.

사실 생각하다보면 시간이 금방 흘러서 한문제당 고민, 풀이 듣기, 오답노트정리, 코드 제출해서 정답을 맞추는 것까지하면 한 문제당 느리면 4시간 빠르면 2시간정도 걸립니다.ㅜㅜㅜㅜ

이렇게 공부하는게 맞는 건지, 좀 더 문제푸는 시간을 줄여 봐야할지 고민이 됩니다. ㅠㅠ
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '사이드 프로젝트 밥상보안관 MVP입니다.',
                'BoardComment' => <<<EOT
안녕하세요, 저희는 사이드 프로젝트 팀 밥상보안관 입니다.


저희는 일본의 오염수 방류 이후, 소비자들이 수산물을 믿고 안전하게 소비할 수 있도록 아이들이 먹는 이유식과 식당의 수산물 원산지 정보와 공공데이터 포탈의 안전성 정보를 제공하는 서비스 입니다.


짧은 일정으로 만들어본 MVP 서비스라 부족한 점이 많습니다.


많은 피드백 부탁드리겠습니다🙇🙇‍♀


https://babsang-sheriff.netlify.app

시간 되시는 분들은 아래 url에서 만족도 설문조사 참여해주시면 추첨을 통해 스타벅스 기프티콘 발송해드리고 있으니 많은 참여 부탁드리겠습니다!!👏👏

https://forms.gle/v1QyaaraD2Q9fa9H6

감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '저는 취업할 수 있을까요',
                'BoardComment' => <<<EOT
취업하고 싶어요..
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '이클립스와 메이븐..',
                'BoardComment' => <<<EOT
국비교육으로 현재 학원에서 수강중입니다.

이제 곧 스프링을 배우게 되는데 학원에서는 이클립스 사용중이고

빌드툴은 메이븐으로 사용한다고 하네요 미리 강의 듣고 공부를 좀 하려고 했는데

학원 환경에 맞춰서 이클립스 메이븐으로 설정 맞추고 강의를 들으려고 보니까 패키지 구조도 약간 다르고

처음에 환경 설정하면서 오류잡는데만 이틀을 보냈습니다. 그리고 스프링부트 없이 하다보니

계속 조금씩 차이가 생기기도 하구요 그래서 그냥 혼자 공부할때만 인텔리제이+그래들로

강의랑 똑같이 맞추려고 하는데 괜찮을지 모르겠네요. 가능하면 학원환경에 우선적으로 맞추고

강의를 듣고싶었는데 생각보다 다른부분이 많아 고민입니다..타임리프 대신 jsp사용중이기도 하고

이렇게 해도 이클립스+메이븐사용하는 학원수업에 지장 없을까요?

아니면 어떻게든 이클립스+메이븐으로 가능한한 강의를 따라가는게 맞는지..
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
    

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '다양한 알고리즘 문제를 풀기 위해 C++을 고집하는 것이 좋을까요?',
                'BoardComment' => <<<EOT
안녕하세요, 큰돌님. 저는 비록 취준생은 아니지만, 큰돌님의 강의를 들으며 PS에 입문한 학생 중 한 명입니다. 우선 본격적으로 질문을 시작하기 전에, 좋은 강의를 제공해 주시고, 최적의 방향을 제시해 주신 큰돌님에게 감사하다는 말을 전하고 싶습니다.

제가 큰돌님에게 궁금한 것은 제목과 동일합니다. 이 강의의 대상은 취준생이고, 목적은 코테 통과이기 때문에 큰돌님께서 C++을 사용 언어로써 추천해 주시는 것은 저 또한 매우 공감하고 있습니다. 다만, 저의 경우에는 큰돌님이 추천해 주신 문제 외에 백준에 있는 다양한 문제도 함께 풀고 있습니다. 그래서인지, 몇 안 되는 문제에서 C++을 사용하는 것에 대해 현타를 느낄 때가 있습니다. 예를 들면, [3724 - 표] 같은 문제가 그런 문제들 중 하나에 해당합니다. 해당 문제의 경우 일부 테스트 케이스가 long long의 범위를 넘어가는 경우가 존재합니다. 따라서 C++으로는 위와 같은 문제들을 해결하는 것이 매우 어렵습니다. 저는 이와 같은 상황에 현타를 느끼며, "오직 C++로 알고리듬 문제를 푸는 것이 맞을까?"를 마음속으로 되새기곤 합니다.

물론 취준 및 코테에서 좋은 성적을 얻기 위해서는 C++ 만으로도 충분하다고 생각합니다. 애초에 제가 위에서 언급한 일부 문제는 코테에서 문제로 제시하기에는 부적절하다고 생각합니다. 하지만, 저처럼 큰돌님의 강의를 취준 및 코테 통과 목적이 아니라 PS에 입문하기 위해 듣는 사람이라면, C++ 외에 Python 같은 다른 언어들도 숙지하고 있는 것도 충분히 고려할만한가요?

긴 글 읽어주셔서 감사합니다! 사실 글에 작성한 내용의 길이에 비해 제가 묻고자 하는 것은 굉장히 단순한데, 좀 더 정확하게 의사전달을 하기 위해 글이 길어진 것 같습니다! 다시 한번 감사드립니다 ㅎㅎ
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);

            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '코딩이 많이 어렵네요?',
                'BoardComment' => <<<EOT
3D 게임이나

메타버스 쪽에 관심이

많아서

유니티 쪽을 계속 해보는데

그래픽을 못해서 그런가

코딩도 어렵고

생각보다 진도도 나가지 않고

다른 걸 알아봐야 될지도

모르겠네요
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


                        
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '❗IT 직군 취업을 위한 사이드 프로젝트 참여자 모집❗[스위프 3기]',
                'BoardComment' => <<<EOT
나만의 독보적인 포트폴리오를 만들고 싶다면?

단기간에 프로젝트 A to Z를 경험하고 싶다면?

타 직군과 소통하며 협업을 경험하고 싶다면?



위와 같은 고민을 하고 있다면 지금 당장 ‘스위프 3’기에 지원하세요!

완벽하게 취.뽀. 하고 싶은 대학생&취준생&주니어 모두 환영! (비전공자도 환영🙌)



📢 [스위프란?]

스위프는 기획자, 디자이너, 개발자가 한 팀으로 웹개발 단기 프로젝트(6주)를 경험하고 성장할 수 있는 기회를 제공합니다! 스위프를 통해 나와 맞는 팀원과 함께 프로젝트의 전 과정을 경험하고, 나만의 차별화 된 포트폴리오를 만들 수 있어요!



⭐ [참가 혜택]

1. 체계적으로 협업할 수 있도록 스위프 전용 협업 툴 지원!

2. 초보자도 쉽게 프로젝트를 진행할 수 있는 가이드라인 및 템플릿 제공!

3. 복잡한 과정 없이 GitHub 연동만으로 쉽고 빠른 웹 호스팅 지원!

4. 포트폴리오로 활용할 수 있도록 프로젝트 결과물 보존!

→ 자세히 알아보기 https://swyg.oopy.io/swyp/benefit



🙌🏻 [모집 대상]

- 아이디어 기획 경험이 한 번이라도 있는 기획자,

디자인 툴 하나라도 사용해 본 디자이너,

프로그래밍 언어를 하나라도 공부해 본 개발자, 모두 환영해요!

- 한 번도 사이드 프로젝트 해본 적 ‘없’는 사람? 오히려 좋아요!

- 경험이 부족해도 포트폴리오가 없어도 괜찮아요. 당신의 의지와 열정이면 충분해요!



🔥 [참가비]

- “단돈 69,000원!”

참가비 169,000원 (정가 250,000원)

수료 시 현금 리워드(10만원) 증정



📅 [일정]

- 지원 마감 : 1/21(일)

- 합격자 안내 : 1/22(월) 20:00

- 팀 빌딩 : 1/23(화)~1/25(목)

- 킥오프 미팅 : 1/27(토) 10:00

- 프로젝트 시작 : 1/29(월)

- 프로젝트 발표 및 네트워킹 행사 : 2024/3/23(토)

※ 세부 일정은 합격자에 한해 일괄 안내 예정



📌 [지원 방법]

신청서 작성 https://swyp.softr.app



🙋 [문의]

Contact : https://open.kakao.com/o/sgTUNmUd

Email : shlee@swyg.im



👉 스위그(SWYG)에 대해 더 알고 싶다면?

홈페이지 https://www.swygbro.com

인스타그램 https://www.instagram.com/swyg_official
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'Startup.cs 가 없을 경우 대처법',
                'BoardComment' => <<<EOT
저는 rider 를 통해 강의를 수강 중입니다.



NetCore.Web/Program.cs 파일에 직접 추가하시면 됩니다.



using NetCore.Services.Interfaces;
using NetCore.Services.Svcs;

var builder = WebApplication.CreateBuilder(args);

// Add services to the container.
builder.Services.AddControllersWithViews();

builder.Services.AddMvc();

// add dependencies with constructor
builder.Services.AddScoped<IUser, UserService>();

var app = builder.Build();

// ...
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '이직 관련 고민이 있습니다.',
                'BoardComment' => <<<EOT
안녕하세요. 대기업 이직을 원하는 수강생 입니다.



저는 현재 대기업 협력사인 중소기업에서 만 3년 sw 개발자로 일하고 있습니다.

현재는 대기업 신입 제조 및 스마트펙토리 sw 직무를 목표로 준비하면서 코딩테스트 강의를 수강 중 입니다.



저의 고민은 상반기 이직을 목표로 하고 있고 코딩테스트 알고리즘 관련해서 처음 준비하는 상황입니다.

현 시점에서 퇴사를 하고 시간을 쏟아야 할지 회사를 다니면서 공부를 해야 할 지 고민입니다.



초반 강의에서 말씀하셨듯 야근, 회식 등등 공부에 어려움이 있습니다. 또한 퇴근 후 피로감 또는 두뇌 회전(? 현재 sw 직무 이다 보니...핑계 일 수 있습니다.) 문제 풀이에 집중력이 좋지 않은 것 같습니다.



이러한 상황 때문에 퇴사를 하고 코딩테스트 및 그 외 다른 부분에 전념하는 것이 맞을 지 이러한 상황에서도 이겨내야 될 지가 고민입니다. 사실 이직 활동 시 이전 회사의 퇴사 상태인지 당시에도 다니고 있는지에 대한 차이에 두려움도 있습니다.



또한, 작년 하반기 대기업 서류 합격(코테 탈락)을 믿고 코딩테스트에 전념하고 있습니다. 이번 상반기에 제대로 준비하려고 공부 중인데 서류 합격 하나만 믿고(서류 하나만 썼긴 합니다...) 현 회사를 퇴사하는 것이 너무 위험한 생각인가 너무 고민이 됩니다.



후회 없이 준비하고 싶은 생각이 크지만 위험 부담이 되는 상황입니다. 저의 선택에 달린 것이란건 너무 잘 알지만 조언 부탁드립니다.            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '코테 짧은 준비기간 준비방법',
                'BoardComment' => <<<EOT
안녕하세요 cs지식 강의 듣고 강의력이 너무 좋아서 코테도 신청 하여 이제 막 듣고있습니다.



반도체 장비회사 쪽 근무하고 있고, 이직하려고 회사를 몇개 넣었는데, 서류가 붙는다면 1달정도 이내에 코딩 테스트를 보게 될 것 같아 시간이 촉박 한 상황입니다.



퇴근하고 코테에 CS지식에 시간도 빠듯한 상황인지라...



이런 경우에 좀더 효율적인 코테 공부방법이 무엇인지 궁금합니다.



참고로 코테 강의도 너무 강의 전달력이 참 좋으신 것 같습니다. 이해가 잘되네요..             
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '복습관련',
                'BoardComment' => <<<EOT
지금 컴포넌트 스캔과 의존관계 자동주입 시작하기까지 듣고있는 학생입니다 여기까지 들어도 약간 이해가 되지않는 구간이 있습니다.

1. 커리큘럼을 다 듣고 한번더 커리큘럼을 복습

2. 로드맵안에 있는 강의를 다 듣고 다시 처음강의부터 복습            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '학습방향 질문입니다',
                'BoardComment' => <<<EOT
인프라에 대해 처음 공부하는 터라 막막함이 있어 강의를 수강하기 시작했는데요. 강의를 듣기 전 미션을 수행하려고 보니

네트워크와 리눅스 지식은 조금 있지만 도커나 was에 대한 학습 내용을 보니 저에게는 어려움이 다가왔습니다. 먼저 미션을 수행하기 전에 아래 도커공부를 먼저 하고 인프라 미션을 수행해야할까요?
https://www.brainbackdoor.com/infra-workshop/docker-container            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '저번질문에 글올렸는데코드가더꼬인것같아요..',
                'BoardComment' => <<<EOT
https://drive.google.com/file/d/19EdcpxnIZQKKAeCSlucWIrX8HVv4bCtf/view?usp=drive_link



머리아프네요..

17강까지 잘되었습니다..           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'JWT, REDIS, AWS 사용, CI/CD 배포 배우고 싶습니다.',
                'BoardComment' => <<<EOT
JWT, REDIS, AWS 사용, CI/CD 배포

위 네가지 중에 하나라도 잘 알고 계신분에게 돈내고 과외 배우고 싶습니다.

위치는 서울입니다.


udiddc 카톡 주시면 감사하겠습니다.           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'Spring Data JPA로 Mysql Full Text Search 기술 가용여부 질문',
                'BoardComment' => <<<EOT
안녕하세요 스프링 데이터 JPA 강의를 듣다 질문이 생겨 문의드립니다.

토이프로젝트로 JPA를 사용하여 Mysql 전문검색(Full Text Search)를 해보는 중입니다.


public interface JpaMenuReviewRepository extends JpaRepository<MenuReview, Long> {

@Query(value = "SELECT * FROM menu_review WHERE MATCH (comments) AGAINST (:keyword IN NATURAL LANGUAGE MODE)", nativeQuery = true)
List<MenuReview> findMenuReviewByCommentsContainingOnFullTextSearchWithQuery(@Param("keyword") String keyword);
}
JPA에서는 Full Text Search를 지원하지 않아서 nativeQuery로 다음과 같이 쿼리문을 작성하였습니다.

그런데 전문검색을 위해서 Table의 컬럼에 Full index를 추가해야 전문검색 쿼리가 작동한다고 알고 있는데요,

JPA의 해당 특징은 "JPA의 DDL 자동 생성 기능" 또는 "JPA의 스키마 자동 생성 기능"으로 알고 있습니다.

이 기능은 JPA가 애플리케이션의 Entity 클래스를 분석하고, 이를 바탕으로 데이터베이스 스키마를 자동으로 생성하거나 업데이트하는 역할을 하여 @Entity, @Table, @Column 등의 애노테이션을 사용하여 엔티티 클래스를 정의하면, JPA는 이 정보를 바탕으로 필요한 테이블과 컬럼을 데이터베이스에 생성하는데요,

이럴 경우에는 제가 "ALTER TABLE tbl_query ADD FULLTEXT INDEX FullText (`comments` ASC)" 해당 ddl문을 넣을 수 없어서 곤란한 상황입니다. JPA, Mysql에서는 Full Text Search를 사용할 수 없는 건가요? 차선책으로 Elastic Search, Postgre, Mongo를 구상중인데 차선책으로 우회해야할지 고민입니다.

추가로 실무에서는 전문검색 기능을 위해 어떤 방법을 쓰시는지, 관련해서 문의드리고 싶습니다.

강의내용과 동떨어져 있는 질문이라 죄송합니다.        
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



 


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '1.19강의에 프로세스 컨텍스트 스위치 설명',
                'BoardComment' => <<<EOT
프로세스는 컨텍스트 스위칭이 아예 일어나지 않는 것 처럼 말씀하시는데,, 
제가 배우기론 기존 프로세스 동작을 멈추고 다른 프로세스를 CPU가 실행시키는 것이 컨텍스트 스위칭으로 아는데 발생하는걸로 아는데 어떤게 맞는건가요 ?
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);






            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '빠르게 취업하고 싶은 목적에서는 어떤 부트캠프가 좋을까요? (데브코스 vs 크래프톤 정글)',
                'BoardComment' => <<<EOT
데브코스 1기 타입스크립트, React,Node.js 풀스택

크래프톤 정글

저는 학점은행제 컴퓨터공학을 진행중이며, 24년 8월에 학사학위가 나옵니다, 자격증은 3개 취득했습니다.

(컴활1급, 정처산기, 네관2급)

그전까지 부트캠프를 다녀볼까 하는데요,

저는 취업이 우선순위 1위라 많은 고민이 드는데요,

취업목적에서는 위에 두개중 어떤 부트캠프가 나을지 고민입니다.

크래프톤 정글은 취업과는 거리가 먼 커리큘럼이지만 cs등 기본기를 잘 가르쳐주지만, 후기생들이랑 대화를 해보니 취업에 대해서는

크게 메리트가 없다고 하고,

해당 데브코스는 마지막1달을 제외하고는 온라인이라 고민입니다.

경험 많으신 여러분들이 좋은 조언을 해주셨으면 좋겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '백엔드 개발자는 언제 화면을 그리나요??',
                'BoardComment' => <<<EOT
제가 취준생이라서 실무개발환경에 대해서 잘 알지 못해서 상상의 나래를 펼쳐봤습니다.



1. 요즘은 웹개발에서 보통 프론트엔드랑 백엔드로 나누잖아요 
프론트엔드가 화면을 그리는 부분이고 백엔드가 서버에서 데이터를 뿌려준다고 알고있는데,
데이터를 뿌려주는건 api로 뿌려주면 되는 것이 아닌지 의문이 들어서요 서버사이드렌더링은 언제 왜 하는것인지 궁금합니다.

2. 그리고 취준생이라서 드는 고민도 있는데, 프로젝트를 만들었다고 함은 어느정도까지 구현을 해놔야하는 것인지 궁금합니다.
지금은 mvc 강의를 보면서 코드를 따라치기만 하는 단계이지만나중에 만약 어떤 프로젝트를 만들어서 서버를 배포하는데까지 어떻게 저떻게 했다고 하더라도 이용자가 저만 있다면 그게 의미가 있는걸까요??

저만 사용하는 어플리케이션 혹은 웹은 실제 서비스가 되지 않다고 해도 무방할것 같은데 이런 개발은 결국엔 무의미 한게 아닌가 하는 생각도 들고... 잡생각이 참 머리가 너무 번잡해지네요 
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'spring 공부방법 질문',
                'BoardComment' => <<<EOT
현재 스프링 완전정복로드맵을 들어가기전 스프링 입문 강의를 듣고있는 수강생입니다. 
수업하나하나 들을때마다 코드하나하나 따라치는거밖에 못하고 실제로 강의끝나고 이걸복습하자니 어디서부터 해야할지도 모르겠습니다. 
제가 spring을 처음접해서 그런거일수도있는데 이렇게 코드만 따라치는게 맞는지 공부하는 느낌이 안들고 의구심이 들어서 질문해봅니다 ㅠㅠㅠ 처음 말씀해주신 목표는 전체적으로 어떻게 돌아가는지, 
동작하는지를 이해하는게 포인트라고 하셨는데 다행히 이부분에서는 구글링으로 부족한개념들을 메꾸면서 도달할수는 있을거같습니다. 
하지만 위에서 적었다싶이 코드를 하나하나 이해하고 따라치는데는 한강의를 듣는데 4~5시간이 소요되어 실제로 완강을 하기에는 2주가 넘는시간이 소요됩니다..
그래서 조언을듣고싶습니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '제로미니님 안녕하세요 :)',
                'BoardComment' => <<<EOT
                안녕하세요 zeromini 입니다
정처기 취득을 목표라고하면 말씀해주신 강의나 시나공이나 별차이없습니다 아무거나 선택하셔서 수험준비를 하시면되고,
공기업 전산직을 준비하는 필기교재로서는 부적절하오니 필기 준비 영상을 보시고 다시 정리하시기 바랍니다. 감사합니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '코딩테스트 혼자 준비하는 중의 고민',
                'BoardComment' => <<<EOT
안녕하세요. 산업공학과 석사과정에 재학중인 학생입니다.

석사 후 데이터 분야 취업을 희망하여 코딩테스트 준비를 하고 있는데

혼자 하다보니 막막하고 제대로 하고 있는게 맞는지 고민이 듭니다.

https://www.acmicpc.net/workbook/view/8997

위의 링크에서와 같이 week 1부터 week 13 으로 나누어진 문제집을 푸는게 이번 겨울방학의 목표인데

week 1 문제들처럼 (소수 찾기 등의 문제) 쉬운 난이도의 문제에도 접근이 어려워서 답지를 보게 됩니다.

한 두 문제가 아니라 거의 90% 문제를 해결하지 못하는 것 같습니다. ㅠ

(코드업 100문제는 이미 예전에 풀었습니다.)

코테 공부를 할때마다 자존감이 팍팍 깎이고 '재능이 없는거 같은데 괜찮을까' 이런 생각이 자꾸만 드는데

다른 선배님들은 어떻게 극복하시고 계신지, 혹은 극복하셨는지 궁금합니다.

감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '서킷 브레이커 상태 OPEN 전환의 기준 질문드립니다!',
                'BoardComment' => <<<EOT
안녕하세요! 좋은 강의 제공해주셔서 도움이 많이 됐습니다! 수강 후 서킷 브레이커를 프로젝트에 적용해보는 과정에서 궁금한 점이 있어 질문드립니다.

현재 캐시 서버에 서킷 브레이커를 도입해서 장애 발생 시 DB로 우회하도록 구현 했습니다.

여기서 만약 레디스 클러스터를 구축한다면 Master 노드 다운 시 Replica가 새로운 마스터로 승격되면서 Failover가 일어날텐데요!

이때

1. Master와 Replica가 서로 health check를 하는 시간의 timeout

2. 승격이 일어나는 시간

3. Redis Cluster의 Topology를 refresh 하는 주기(현재 Redis Client로 Lettuce를 사용중입니다!)

이 시간 동안은 Redis로 정상 요청이 되지 않을 것입니다.

저는 개인적으로 레디스가 자동으로 Failover 되는 과정은 스스로 회복하는 시간이기에 서킷이 OPEN되야하는 상황으로 보기 힘들다 생각하는데, 서킷의 슬라이딩 윈도우를 설정할때 Failover 동안은 OPEN이 열리지 않을 정도로 여유롭게 설정하는게 좋을까요? 물론 구체적인 값은 트래픽을 예상해서 설정해야 한다고 생각합니다!

결론은, 클러스터의 Failover도 장애로 감지하고 OPEN으로 여는게 좋을지 아니면 Failover는 CLOSE 상태로 넘어갈 수 있도록 여유롭게 설정하는게 좋을지 입니다!

아직 실무 경험이 없기도 하고 주변에 의견을 구할수가 없어서 현업자의 입장에서 강사님이라면 어떻게 구성하실지 궁금해서 여쭤봅니다...!! 혼자 고민해본 부분이다 보니 제가 생각하는 방식이 틀렸다면 피드백 주시면 감사합니다:)
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'jdk버전',
                'BoardComment' => <<<EOT
스프링 프레임워크로 작업하면서 jdk20까지 버전을 올린거 같은데, 
나도코딩 다시 들으려고 8.0? 버전으로 하니까 너무 낮다고 다른 프로그램이 안열려요.. 강의에서 하는 버전보다 높은건 상관없죠???
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '안녕하세요 비전공자 출신, 백엔드 vs 게임 프로그래머 고민중입니다.',
                'BoardComment' => <<<EOT
저는 비전공자 출신입니다. 인서울이긴 하지만, 비전공자라 의미없을 거 같구요. 백엔드 vs 게임 프로그래머 중에 고민하고있습니다. 웹 관련해서는 node.js 기반으로 프로젝트를 3번정도 해본 경험이 있지만, 요새 트렌드가 java, spring이라 웹 백엔드 쪽으로 간다면, java, spring을 공부할 생각입니다. 반면, 게임 프로그래밍은 유니티를 기반으로 소규모 게임 1번 만들어본게 전부입니다. 이런 상황에서 질문드립니다.

제가 가장 발목을 잡는다 느낀 것은 CS 지식입니다. 이것으로부터 덜 자유로운 것이 백엔드 개발자일지 게임 프로그래머 일지 고민입니다. 어느 방향이 더 맞을까요? 알고리즘 자료구조 지식은 백준 골드 3 정도 입니다.

잘 부탁드리겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '질문드립니다.',
                'BoardComment' => <<<EOT
현재 세일즈포스를 배우는 단계에 있는데,

Apex라는 툴이 자바를 기반으로 만든 툴이라고 합니다.

Apex에서 요구하는 수준은 자바로 게시판을 혼자서 만들 수 있어야 하는 수준이라고 하는데...



그러려면 선생님의 강의 자바- 중급, 고급 편까지 수강해야 가능할까요??
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '발표 연습 경험에 대한 설문조사 부탁드립니다!',
                'BoardComment' => <<<EOT
🙋‍♂발표 연습에 대한 인식 조사🙋‍♀



안녕하세요! IT동아리 ’DDD‘에서 앱출시를 준비중인 WEB3 끈끈팀입니다.

저희는 [ 완벽한 발표를 할 수 있도록 도와주는 서비스 ]를 제작하고 있습니다.



발표를 하면서 겪었던 어려움이나

고민이 있었다면 공유해주세요😉

많은 참여 부탁드립니다, 감사합니다:)



**개인정보와 답변해주신 설문내용은 본 프로젝트 목적 외에 일절 사용하지 않을 것을 약속합니다.

☑ 설문대상 : 발표 연습을 해본 경험이 있는 분

☑ 예상 소요 시간 : 2-3분 이내

☑ URL : https://forms.gle/Sa7KWKueaAfnUr9JA
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);





            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '사내에서 Kotlin 으로 전환하면서 ORM 기술 선택에 고민이 있습니다.',
                'BoardComment' => <<<EOT
안녕하세요 강사님.

강사님의 코틀린 기본강의를 수강후 해당 강의도 이제 거의 다 들어갑니다. 가장 우선적으로, 이렇게 좋은 강의를 만들어주셔서 정말 감사합니다 🙂



현재 제가 다니는 회사에서 자바-스프링 기반의 프로젝트를 코틀린-스프링으로 전환하는 작업을 진행하고 있습니다. 그러면서 기술들을 선택하는 과정가운데 있는데요, ORM 기술을 어떤것을 쓸지 고민중입니다.



저는 개인적으로 자바-스프링을 통해 어플리케이션을 개발할 때, 현재 듣는 강의와 같이 Spring Data Jpa 와 Querydsl 을 함께 썼었고 익숙했는데요.. 문제는 Querydsl 이 2021년 이후로 업데이트가 없다는 점입니다.



팀 내에서도 그 문제로 인해서 여러가지 고민을 가지고 있는데요... Querydsl 을 사용할지 Exposed 를 사용할지 아니면 jdsl 을 사용할지 고민중에 있습니다.



현재 저희는 Springboot 3.x 로 올리면서 앞으로도 계속 기술을 최신화 하면서 유지할 생각인데요, querydsl 이 릴리즈가 지속되지 않는 점이 가장 걸리고, 앞으로의 대응도 어려울것같아서 기술 선택에 많은 고민을 하고있습니다..



강사님께서도 실무에서 개발을 하고 계시는 분이시고, 코틀린으로 어플리케이션을 만들고 계시는 분이시기에 여쭙고 싶었습니다. 어떤 기술을 선택해서 사용하고 계시는지, 만약 Querydsl 을 계속 사용하고 계시다면 실무에서 문제없이 사용중이신지.. 아니면 다른 기술을 사용중이신지 (혹은 현재는 querydsl 이지만 다른 기술로의 전환을 고민중이신지) 궁금합니다!                
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'airflow로 구현해보고싶은 작업이있습니다.',
                'BoardComment' => <<<EOT
안녕하세요,

좋은 강의 제공해주셔서 매번 큰 배움얻을수있어서 너무 감사합니다 ㅎㅎ

airflow로 구현해보고싶은 플로우가 있는데, 혹시 가능한 부분일까 하여 질문드립니다.

task1 : google drive 특정 경로에 파일이 존재하는지 여부 확인 (크롤링한 데이터가 잘 들어왔는지 확인하기 위함, 파일이없다면 error 처리)
task2 : 간단한 데이터 정합성 확인을 위해 가공완료된 csv 데이터가 특정 조건을 충족하는지 확인 (ex. A라는 수치열 칼럼 총합이 B라는 수치열 칼럼 총합보다 큰지 확인, 작다면 error)
task3 : 위 두가지 조건이 충족되면 csv 데이터 db에 table insert (update)
task4 : 위 db table이 연결된 엑셀파일 데이터 새로고침
위 태스크를 task1 >> task2 >> task3 >> task4 로 구현해보고싶습니다. 위 task에서는 데이터를 가공하는 task는 없는데, 현재 no-code 가공툴을 사용하고있어서 task에는 포함시키지 못했습니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '백엔드 개발 및 공부에 대한 고민이 있습니다..!',
                'BoardComment' => <<<EOT
안녕하세요! 저는 현재 2학년 그리고 내년에 3학년이 되는 대학생입니다. 최근 백엔드 개발자로서의 진로를 확정하고, 김영한 강사님의 자바 그리고 스프링 강의를 구매하여 공부를 시작했습니다..! 공부를 하며 생긴 고민은 총 2가지입니다.

첫 번째 고민은 스프링 강의에 대한 어려움입니다!

스프링 강의를 수강하며 느낀 것은 생각보다 복잡하고 어렵다는 것이었습니다..! 스프링이라는 프레임워크 그리고 자바의 객체지향 개념이 추상적인 부분이 많아서 그런지 뭔가 머릿속에서 이해가 될 것 같은데 혼자 코드를 짜보라고 하면 못 짜겠는?? 그런 느낌이 많이 들었습니다.. 원래 이런건지 궁금합니다..! 또한, 제가 위와 같이 어려움을 느끼는 이유가 자바에 대한 이해도가 부족해서 그런걸까요??

두 번째 고민은 개발에 대한 궁금증입니다!

최근 1~2달 정도 단기 프로젝트를 하게 되어 스프링에 GPT API를 연동했고, 티베로라는 데이터베이스를 연동한 경험이 있습니다. 이제야 자바 및 스프링을 입문한 입장에서 상당히 난이도가 높았고, 구글 및 각종 래퍼런스를 참고해가며 구현에 성공은 하게 되었습니다. 다만, 프로젝트에 대한 구현이 제가 온전히 모든 것을 이해하기보단 코드들을 참고하여 프로그래밍하고, 이후 작성한 코드를 이해하는 느낌이었고, 이 과정에서 약간의 회의감이 들게 되었습니다. 현재 저의 실력이 완전 초보 단계라 당연한 것이겠지만 과연 나중엔 이런 어려움들을 극복하고 프로그래밍을 원활히 잘할 수 있을까라는 생각이 많이 들었습니다. 다들 이런 어려움을 느끼는 게 당연한 부분이겠죠? 또한, 프로그래밍을 잘하는 개발자 그리고 좋은 개발자가 되기 위해선 어떤 방향성을 가지고 공부를 해야 하는지도 궁금합니다!



강의는 영한 강사님께서 강의를 너무너무 잘해주시고 관련 내용 또한 핵심을 자세히 다뤄주셔서 이해도 편하고 매우 매우 만족합니다!!!(조금 더 일찍 들을 걸이라는 후회를 하고 있어요 ㅠ) 앞으로 영한 강사님의 자바 그리고 스프링 커리큘럼 쭉 따라가려합니다!
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '그러면 API를 개발할 때 최선의 방법은 무엇인가요?',
                'BoardComment' => <<<EOT
이번 API 개발 고급 - 컬렉션 조회 최적화를 쭉 들으면서 생긴 고민입니다.

V1 ~ V3 까지의 각각의 명확한 차이점과 최적화 과정에 대해 이해하고 왜 이렇게 사용하는지에 대략적으로 이해하였습니다.

반면에 V4, V5, V6의 경우 DTO를 직접 조회를 통해 쿼리문의 간소화를 진행시키는 방법으로 최적화를 진행하는 것에 배웠는데

질문 1) 최종적인 실무에서는 V3.1의 fetch join 방식과 DTO를 통해 최소한의 쿼리 줄이는 방식 중 어느 것이 더 대중화된 방식인지 궁금합니다.

질문 2) 명확히 정해진 방식이 없다면 어느 부분에서는 fetch join 방식이 유용한지 dto 방식이 유용한지 아직 잘 이해가 되지 않습니다. 관련 지식을 학습할만한 검색 키워드를 알려주실수 있으신가요?
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '안녕하세요 강사님. 강의 선택에 대한 고민이 있습니다.',
                'BoardComment' => <<<EOT
안녕하세요 🙂 김영한 강사님.

저는 ruby로 백앤드 개발 2년 ~3년 정도 하였습니다.

이번에 java + spring으로 프로젝트를 시작하게 되어서 학습이 필요하게 되었습니다.
강사님이 정말로 친절하게 로드맵을 제시해 주셨지만 저는 조금 와닿지는 않았습니다. (로드맵이 안좋다는 뜻이 아닙니다 !!!!)
와닿지 않은 이유는 초보자라고 가정되어서 로드맵이 시작되기 떄문입니다.
그래서 타 프레임워크로 백앤드 개발을 한 사람을 위한 로드맵은 어떻게 될까요?
추가로 신규 프로젝트에서는 어떤 spring 기술스택을 채택하나요? 제가 서칭한 결과 JPA + Spring boot는 기본이라고 하는데 주변에 현업 스프링 개발자가 없어서 확실한 정보인지는 모르겠습니다. (코틀린을 도입하는 추세라는 건 맞는거 같기도 합니다)



감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '서킷 브레이커 상태 OPEN 전환의 기준 질문드립니다!',
                'BoardComment' => <<<EOT
안녕하세요! 좋은 강의 제공해주셔서 도움이 많이 됐습니다! 수강 후 서킷 브레이커를 프로젝트에 적용해보는 과정에서 궁금한 점이 있어 질문드립니다.

현재 캐시 서버에 서킷 브레이커를 도입해서 장애 발생 시 DB로 우회하도록 구현 했습니다.

여기서 만약 레디스 클러스터를 구축한다면 Master 노드 다운 시 Replica가 새로운 마스터로 승격되면서 Failover가 일어날텐데요!

이때

1. Master와 Replica가 서로 health check를 하는 시간의 timeout

2. 승격이 일어나는 시간

3. Redis Cluster의 Topology를 refresh 하는 주기(현재 Redis Client로 Lettuce를 사용중입니다!)

이 시간 동안은 Redis로 정상 요청이 되지 않을 것입니다.

저는 개인적으로 레디스가 자동으로 Failover 되는 과정은 스스로 회복하는 시간이기에 서킷이 OPEN되야하는 상황으로 보기 힘들다 생각하는데, 서킷의 슬라이딩 윈도우를 설정할때 Failover 동안은 OPEN이 열리지 않을 정도로 여유롭게 설정하는게 좋을까요? 물론 구체적인 값은 트래픽을 예상해서 설정해야 한다고 생각합니다!

결론은, 클러스터의 Failover도 장애로 감지하고 OPEN으로 여는게 좋을지 아니면 Failover는 CLOSE 상태로 넘어갈 수 있도록 여유롭게 설정하는게 좋을지 입니다!

아직 실무 경험이 없기도 하고 주변에 의견을 구할수가 없어서 현업자의 입장에서 강사님이라면 어떻게 구성하실지 궁금해서 여쭤봅니다...!! 혼자 고민해본 부분이다 보니 제가 생각하는 방식이 틀렸다면 피드백 주시면 감사합니다:)
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'jdk버전',
                'BoardComment' => <<<EOT
스프링 프레임워크로 작업하면서 jdk20까지 버전을 올린거 같은데, 
나도코딩 다시 들으려고 8.0? 버전으로 하니까 너무 낮다고 다른 프로그램이 안열려요.. 강의에서 하는 버전보다 높은건 상관없죠???
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '안녕하세요 비전공자 출신, 백엔드 vs 게임 프로그래머 고민중입니다.',
                'BoardComment' => <<<EOT
저는 비전공자 출신입니다. 인서울이긴 하지만, 비전공자라 의미없을 거 같구요. 백엔드 vs 게임 프로그래머 중에 고민하고있습니다. 웹 관련해서는 node.js 기반으로 프로젝트를 3번정도 해본 경험이 있지만, 요새 트렌드가 java, spring이라 웹 백엔드 쪽으로 간다면, java, spring을 공부할 생각입니다. 반면, 게임 프로그래밍은 유니티를 기반으로 소규모 게임 1번 만들어본게 전부입니다. 이런 상황에서 질문드립니다.

제가 가장 발목을 잡는다 느낀 것은 CS 지식입니다. 이것으로부터 덜 자유로운 것이 백엔드 개발자일지 게임 프로그래머 일지 고민입니다. 어느 방향이 더 맞을까요? 알고리즘 자료구조 지식은 백준 골드 3 정도 입니다.

잘 부탁드리겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '질문드립니다.',
                'BoardComment' => <<<EOT
현재 세일즈포스를 배우는 단계에 있는데,

Apex라는 툴이 자바를 기반으로 만든 툴이라고 합니다.

Apex에서 요구하는 수준은 자바로 게시판을 혼자서 만들 수 있어야 하는 수준이라고 하는데...



그러려면 선생님의 강의 자바- 중급, 고급 편까지 수강해야 가능할까요??
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '발표 연습 경험에 대한 설문조사 부탁드립니다!',
                'BoardComment' => <<<EOT
🙋‍♂발표 연습에 대한 인식 조사🙋‍♀



안녕하세요! IT동아리 ’DDD‘에서 앱출시를 준비중인 WEB3 끈끈팀입니다.

저희는 [ 완벽한 발표를 할 수 있도록 도와주는 서비스 ]를 제작하고 있습니다.



발표를 하면서 겪었던 어려움이나

고민이 있었다면 공유해주세요😉

많은 참여 부탁드립니다, 감사합니다:)



**개인정보와 답변해주신 설문내용은 본 프로젝트 목적 외에 일절 사용하지 않을 것을 약속합니다.

☑ 설문대상 : 발표 연습을 해본 경험이 있는 분

☑ 예상 소요 시간 : 2-3분 이내

☑ URL : https://forms.gle/Sa7KWKueaAfnUr9JA
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '빠르게 취업하고 싶은 목적에서는 어떤 부트캠프가 좋을까요? (데브코스 vs 크래프톤 정글)',
                'BoardComment' => <<<EOT
데브코스 1기 타입스크립트, React,Node.js 풀스택

크래프톤 정글

저는 학점은행제 컴퓨터공학을 진행중이며, 24년 8월에 학사학위가 나옵니다, 자격증은 3개 취득했습니다.

(컴활1급, 정처산기, 네관2급)

그전까지 부트캠프를 다녀볼까 하는데요,

저는 취업이 우선순위 1위라 많은 고민이 드는데요,

취업목적에서는 위에 두개중 어떤 부트캠프가 나을지 고민입니다.

크래프톤 정글은 취업과는 거리가 먼 커리큘럼이지만 cs등 기본기를 잘 가르쳐주지만, 후기생들이랑 대화를 해보니 취업에 대해서는

크게 메리트가 없다고 하고,

해당 데브코스는 마지막1달을 제외하고는 온라인이라 고민입니다.

경험 많으신 여러분들이 좋은 조언을 해주셨으면 좋겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '백엔드 개발자는 언제 화면을 그리나요??',
                'BoardComment' => <<<EOT
제가 취준생이라서 실무개발환경에 대해서 잘 알지 못해서 상상의 나래를 펼쳐봤습니다.



1. 요즘은 웹개발에서 보통 프론트엔드랑 백엔드로 나누잖아요 
프론트엔드가 화면을 그리는 부분이고 백엔드가 서버에서 데이터를 뿌려준다고 알고있는데,
데이터를 뿌려주는건 api로 뿌려주면 되는 것이 아닌지 의문이 들어서요 서버사이드렌더링은 언제 왜 하는것인지 궁금합니다.

2. 그리고 취준생이라서 드는 고민도 있는데, 프로젝트를 만들었다고 함은 어느정도까지 구현을 해놔야하는 것인지 궁금합니다.
지금은 mvc 강의를 보면서 코드를 따라치기만 하는 단계이지만나중에 만약 어떤 프로젝트를 만들어서 서버를 배포하는데까지 어떻게 저떻게 했다고 하더라도 이용자가 저만 있다면 그게 의미가 있는걸까요??

저만 사용하는 어플리케이션 혹은 웹은 실제 서비스가 되지 않다고 해도 무방할것 같은데 이런 개발은 결국엔 무의미 한게 아닌가 하는 생각도 들고... 잡생각이 참 머리가 너무 번잡해지네요 
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'spring 공부방법 질문',
                'BoardComment' => <<<EOT
현재 스프링 완전정복로드맵을 들어가기전 스프링 입문 강의를 듣고있는 수강생입니다. 
수업하나하나 들을때마다 코드하나하나 따라치는거밖에 못하고 실제로 강의끝나고 이걸복습하자니 어디서부터 해야할지도 모르겠습니다. 
제가 spring을 처음접해서 그런거일수도있는데 이렇게 코드만 따라치는게 맞는지 공부하는 느낌이 안들고 의구심이 들어서 질문해봅니다 ㅠㅠㅠ 처음 말씀해주신 목표는 전체적으로 어떻게 돌아가는지, 
동작하는지를 이해하는게 포인트라고 하셨는데 다행히 이부분에서는 구글링으로 부족한개념들을 메꾸면서 도달할수는 있을거같습니다. 
하지만 위에서 적었다싶이 코드를 하나하나 이해하고 따라치는데는 한강의를 듣는데 4~5시간이 소요되어 실제로 완강을 하기에는 2주가 넘는시간이 소요됩니다..
그래서 조언을듣고싶습니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '제로미니님 안녕하세요 :)',
                'BoardComment' => <<<EOT
                안녕하세요 zeromini 입니다
정처기 취득을 목표라고하면 말씀해주신 강의나 시나공이나 별차이없습니다 아무거나 선택하셔서 수험준비를 하시면되고,
공기업 전산직을 준비하는 필기교재로서는 부적절하오니 필기 준비 영상을 보시고 다시 정리하시기 바랍니다. 감사합니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '코딩테스트 혼자 준비하는 중의 고민',
                'BoardComment' => <<<EOT
안녕하세요. 산업공학과 석사과정에 재학중인 학생입니다.

석사 후 데이터 분야 취업을 희망하여 코딩테스트 준비를 하고 있는데

혼자 하다보니 막막하고 제대로 하고 있는게 맞는지 고민이 듭니다.

https://www.acmicpc.net/workbook/view/8997

위의 링크에서와 같이 week 1부터 week 13 으로 나누어진 문제집을 푸는게 이번 겨울방학의 목표인데

week 1 문제들처럼 (소수 찾기 등의 문제) 쉬운 난이도의 문제에도 접근이 어려워서 답지를 보게 됩니다.

한 두 문제가 아니라 거의 90% 문제를 해결하지 못하는 것 같습니다. ㅠ

(코드업 100문제는 이미 예전에 풀었습니다.)

코테 공부를 할때마다 자존감이 팍팍 깎이고 '재능이 없는거 같은데 괜찮을까' 이런 생각이 자꾸만 드는데

다른 선배님들은 어떻게 극복하시고 계신지, 혹은 극복하셨는지 궁금합니다.

감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '서킷 브레이커 상태 OPEN 전환의 기준 질문드립니다!',
                'BoardComment' => <<<EOT
안녕하세요! 좋은 강의 제공해주셔서 도움이 많이 됐습니다! 수강 후 서킷 브레이커를 프로젝트에 적용해보는 과정에서 궁금한 점이 있어 질문드립니다.

현재 캐시 서버에 서킷 브레이커를 도입해서 장애 발생 시 DB로 우회하도록 구현 했습니다.

여기서 만약 레디스 클러스터를 구축한다면 Master 노드 다운 시 Replica가 새로운 마스터로 승격되면서 Failover가 일어날텐데요!

이때

1. Master와 Replica가 서로 health check를 하는 시간의 timeout

2. 승격이 일어나는 시간

3. Redis Cluster의 Topology를 refresh 하는 주기(현재 Redis Client로 Lettuce를 사용중입니다!)

이 시간 동안은 Redis로 정상 요청이 되지 않을 것입니다.

저는 개인적으로 레디스가 자동으로 Failover 되는 과정은 스스로 회복하는 시간이기에 서킷이 OPEN되야하는 상황으로 보기 힘들다 생각하는데, 서킷의 슬라이딩 윈도우를 설정할때 Failover 동안은 OPEN이 열리지 않을 정도로 여유롭게 설정하는게 좋을까요? 물론 구체적인 값은 트래픽을 예상해서 설정해야 한다고 생각합니다!

결론은, 클러스터의 Failover도 장애로 감지하고 OPEN으로 여는게 좋을지 아니면 Failover는 CLOSE 상태로 넘어갈 수 있도록 여유롭게 설정하는게 좋을지 입니다!

아직 실무 경험이 없기도 하고 주변에 의견을 구할수가 없어서 현업자의 입장에서 강사님이라면 어떻게 구성하실지 궁금해서 여쭤봅니다...!! 혼자 고민해본 부분이다 보니 제가 생각하는 방식이 틀렸다면 피드백 주시면 감사합니다:)
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);





            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '복습관련',
                'BoardComment' => <<<EOT
지금 컴포넌트 스캔과 의존관계 자동주입 시작하기까지 듣고있는 학생입니다 여기까지 들어도 약간 이해가 되지않는 구간이 있습니다.

1. 커리큘럼을 다 듣고 한번더 커리큘럼을 복습

2. 로드맵안에 있는 강의를 다 듣고 다시 처음강의부터 복습            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '학습방향 질문입니다',
                'BoardComment' => <<<EOT
인프라에 대해 처음 공부하는 터라 막막함이 있어 강의를 수강하기 시작했는데요. 강의를 듣기 전 미션을 수행하려고 보니

네트워크와 리눅스 지식은 조금 있지만 도커나 was에 대한 학습 내용을 보니 저에게는 어려움이 다가왔습니다. 먼저 미션을 수행하기 전에 아래 도커공부를 먼저 하고 인프라 미션을 수행해야할까요?
https://www.brainbackdoor.com/infra-workshop/docker-container            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '저번질문에 글올렸는데코드가더꼬인것같아요..',
                'BoardComment' => <<<EOT
https://drive.google.com/file/d/19EdcpxnIZQKKAeCSlucWIrX8HVv4bCtf/view?usp=drive_link



머리아프네요..

17강까지 잘되었습니다..           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'JWT, REDIS, AWS 사용, CI/CD 배포 배우고 싶습니다.',
                'BoardComment' => <<<EOT
JWT, REDIS, AWS 사용, CI/CD 배포

위 네가지 중에 하나라도 잘 알고 계신분에게 돈내고 과외 배우고 싶습니다.

위치는 서울입니다.


udiddc 카톡 주시면 감사하겠습니다.           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'Spring Data JPA로 Mysql Full Text Search 기술 가용여부 질문',
                'BoardComment' => <<<EOT
안녕하세요 스프링 데이터 JPA 강의를 듣다 질문이 생겨 문의드립니다.

토이프로젝트로 JPA를 사용하여 Mysql 전문검색(Full Text Search)를 해보는 중입니다.


public interface JpaMenuReviewRepository extends JpaRepository<MenuReview, Long> {

@Query(value = "SELECT * FROM menu_review WHERE MATCH (comments) AGAINST (:keyword IN NATURAL LANGUAGE MODE)", nativeQuery = true)
List<MenuReview> findMenuReviewByCommentsContainingOnFullTextSearchWithQuery(@Param("keyword") String keyword);
}
JPA에서는 Full Text Search를 지원하지 않아서 nativeQuery로 다음과 같이 쿼리문을 작성하였습니다.

그런데 전문검색을 위해서 Table의 컬럼에 Full index를 추가해야 전문검색 쿼리가 작동한다고 알고 있는데요,

JPA의 해당 특징은 "JPA의 DDL 자동 생성 기능" 또는 "JPA의 스키마 자동 생성 기능"으로 알고 있습니다.

이 기능은 JPA가 애플리케이션의 Entity 클래스를 분석하고, 이를 바탕으로 데이터베이스 스키마를 자동으로 생성하거나 업데이트하는 역할을 하여 @Entity, @Table, @Column 등의 애노테이션을 사용하여 엔티티 클래스를 정의하면, JPA는 이 정보를 바탕으로 필요한 테이블과 컬럼을 데이터베이스에 생성하는데요,

이럴 경우에는 제가 "ALTER TABLE tbl_query ADD FULLTEXT INDEX FullText (`comments` ASC)" 해당 ddl문을 넣을 수 없어서 곤란한 상황입니다. JPA, Mysql에서는 Full Text Search를 사용할 수 없는 건가요? 차선책으로 Elastic Search, Postgre, Mongo를 구상중인데 차선책으로 우회해야할지 고민입니다.

추가로 실무에서는 전문검색 기능을 위해 어떤 방법을 쓰시는지, 관련해서 문의드리고 싶습니다.

강의내용과 동떨어져 있는 질문이라 죄송합니다.        
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



 


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '1.19강의에 프로세스 컨텍스트 스위치 설명',
                'BoardComment' => <<<EOT
프로세스는 컨텍스트 스위칭이 아예 일어나지 않는 것 처럼 말씀하시는데,, 
제가 배우기론 기존 프로세스 동작을 멈추고 다른 프로세스를 CPU가 실행시키는 것이 컨텍스트 스위칭으로 아는데 발생하는걸로 아는데 어떤게 맞는건가요 ?
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);






            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '빠르게 취업하고 싶은 목적에서는 어떤 부트캠프가 좋을까요? (데브코스 vs 크래프톤 정글)',
                'BoardComment' => <<<EOT
데브코스 1기 타입스크립트, React,Node.js 풀스택

크래프톤 정글

저는 학점은행제 컴퓨터공학을 진행중이며, 24년 8월에 학사학위가 나옵니다, 자격증은 3개 취득했습니다.

(컴활1급, 정처산기, 네관2급)

그전까지 부트캠프를 다녀볼까 하는데요,

저는 취업이 우선순위 1위라 많은 고민이 드는데요,

취업목적에서는 위에 두개중 어떤 부트캠프가 나을지 고민입니다.

크래프톤 정글은 취업과는 거리가 먼 커리큘럼이지만 cs등 기본기를 잘 가르쳐주지만, 후기생들이랑 대화를 해보니 취업에 대해서는

크게 메리트가 없다고 하고,

해당 데브코스는 마지막1달을 제외하고는 온라인이라 고민입니다.

경험 많으신 여러분들이 좋은 조언을 해주셨으면 좋겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '백엔드 개발자는 언제 화면을 그리나요??',
                'BoardComment' => <<<EOT
제가 취준생이라서 실무개발환경에 대해서 잘 알지 못해서 상상의 나래를 펼쳐봤습니다.



1. 요즘은 웹개발에서 보통 프론트엔드랑 백엔드로 나누잖아요 
프론트엔드가 화면을 그리는 부분이고 백엔드가 서버에서 데이터를 뿌려준다고 알고있는데,
데이터를 뿌려주는건 api로 뿌려주면 되는 것이 아닌지 의문이 들어서요 서버사이드렌더링은 언제 왜 하는것인지 궁금합니다.

2. 그리고 취준생이라서 드는 고민도 있는데, 프로젝트를 만들었다고 함은 어느정도까지 구현을 해놔야하는 것인지 궁금합니다.
지금은 mvc 강의를 보면서 코드를 따라치기만 하는 단계이지만나중에 만약 어떤 프로젝트를 만들어서 서버를 배포하는데까지 어떻게 저떻게 했다고 하더라도 이용자가 저만 있다면 그게 의미가 있는걸까요??

저만 사용하는 어플리케이션 혹은 웹은 실제 서비스가 되지 않다고 해도 무방할것 같은데 이런 개발은 결국엔 무의미 한게 아닌가 하는 생각도 들고... 잡생각이 참 머리가 너무 번잡해지네요 
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '❗IT 직군 취업을 위한 사이드 프로젝트 참여자 모집❗[스위프 3기]',
                'BoardComment' => <<<EOT
나만의 독보적인 포트폴리오를 만들고 싶다면?

단기간에 프로젝트 A to Z를 경험하고 싶다면?

타 직군과 소통하며 협업을 경험하고 싶다면?



위와 같은 고민을 하고 있다면 지금 당장 ‘스위프 3’기에 지원하세요!

완벽하게 취.뽀. 하고 싶은 대학생&취준생&주니어 모두 환영! (비전공자도 환영🙌)



📢 [스위프란?]

스위프는 기획자, 디자이너, 개발자가 한 팀으로 웹개발 단기 프로젝트(6주)를 경험하고 성장할 수 있는 기회를 제공합니다! 스위프를 통해 나와 맞는 팀원과 함께 프로젝트의 전 과정을 경험하고, 나만의 차별화 된 포트폴리오를 만들 수 있어요!



⭐ [참가 혜택]

1. 체계적으로 협업할 수 있도록 스위프 전용 협업 툴 지원!

2. 초보자도 쉽게 프로젝트를 진행할 수 있는 가이드라인 및 템플릿 제공!

3. 복잡한 과정 없이 GitHub 연동만으로 쉽고 빠른 웹 호스팅 지원!

4. 포트폴리오로 활용할 수 있도록 프로젝트 결과물 보존!

→ 자세히 알아보기 https://swyg.oopy.io/swyp/benefit



🙌🏻 [모집 대상]

- 아이디어 기획 경험이 한 번이라도 있는 기획자,

디자인 툴 하나라도 사용해 본 디자이너,

프로그래밍 언어를 하나라도 공부해 본 개발자, 모두 환영해요!

- 한 번도 사이드 프로젝트 해본 적 ‘없’는 사람? 오히려 좋아요!

- 경험이 부족해도 포트폴리오가 없어도 괜찮아요. 당신의 의지와 열정이면 충분해요!



🔥 [참가비]

- “단돈 69,000원!”

참가비 169,000원 (정가 250,000원)

수료 시 현금 리워드(10만원) 증정



📅 [일정]

- 지원 마감 : 1/21(일)

- 합격자 안내 : 1/22(월) 20:00

- 팀 빌딩 : 1/23(화)~1/25(목)

- 킥오프 미팅 : 1/27(토) 10:00

- 프로젝트 시작 : 1/29(월)

- 프로젝트 발표 및 네트워킹 행사 : 2024/3/23(토)

※ 세부 일정은 합격자에 한해 일괄 안내 예정



📌 [지원 방법]

신청서 작성 https://swyp.softr.app



🙋 [문의]

Contact : https://open.kakao.com/o/sgTUNmUd

Email : shlee@swyg.im



👉 스위그(SWYG)에 대해 더 알고 싶다면?

홈페이지 https://www.swygbro.com

인스타그램 https://www.instagram.com/swyg_official
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'Startup.cs 가 없을 경우 대처법',
                'BoardComment' => <<<EOT
저는 rider 를 통해 강의를 수강 중입니다.



NetCore.Web/Program.cs 파일에 직접 추가하시면 됩니다.



using NetCore.Services.Interfaces;
using NetCore.Services.Svcs;

var builder = WebApplication.CreateBuilder(args);

// Add services to the container.
builder.Services.AddControllersWithViews();

builder.Services.AddMvc();

// add dependencies with constructor
builder.Services.AddScoped<IUser, UserService>();

var app = builder.Build();

// ...
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '이직 관련 고민이 있습니다.',
                'BoardComment' => <<<EOT
안녕하세요. 대기업 이직을 원하는 수강생 입니다.



저는 현재 대기업 협력사인 중소기업에서 만 3년 sw 개발자로 일하고 있습니다.

현재는 대기업 신입 제조 및 스마트펙토리 sw 직무를 목표로 준비하면서 코딩테스트 강의를 수강 중 입니다.



저의 고민은 상반기 이직을 목표로 하고 있고 코딩테스트 알고리즘 관련해서 처음 준비하는 상황입니다.

현 시점에서 퇴사를 하고 시간을 쏟아야 할지 회사를 다니면서 공부를 해야 할 지 고민입니다.



초반 강의에서 말씀하셨듯 야근, 회식 등등 공부에 어려움이 있습니다. 또한 퇴근 후 피로감 또는 두뇌 회전(? 현재 sw 직무 이다 보니...핑계 일 수 있습니다.) 문제 풀이에 집중력이 좋지 않은 것 같습니다.



이러한 상황 때문에 퇴사를 하고 코딩테스트 및 그 외 다른 부분에 전념하는 것이 맞을 지 이러한 상황에서도 이겨내야 될 지가 고민입니다. 사실 이직 활동 시 이전 회사의 퇴사 상태인지 당시에도 다니고 있는지에 대한 차이에 두려움도 있습니다.



또한, 작년 하반기 대기업 서류 합격(코테 탈락)을 믿고 코딩테스트에 전념하고 있습니다. 이번 상반기에 제대로 준비하려고 공부 중인데 서류 합격 하나만 믿고(서류 하나만 썼긴 합니다...) 현 회사를 퇴사하는 것이 너무 위험한 생각인가 너무 고민이 됩니다.



후회 없이 준비하고 싶은 생각이 크지만 위험 부담이 되는 상황입니다. 저의 선택에 달린 것이란건 너무 잘 알지만 조언 부탁드립니다.            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '코테 짧은 준비기간 준비방법',
                'BoardComment' => <<<EOT
안녕하세요 cs지식 강의 듣고 강의력이 너무 좋아서 코테도 신청 하여 이제 막 듣고있습니다.



반도체 장비회사 쪽 근무하고 있고, 이직하려고 회사를 몇개 넣었는데, 서류가 붙는다면 1달정도 이내에 코딩 테스트를 보게 될 것 같아 시간이 촉박 한 상황입니다.



퇴근하고 코테에 CS지식에 시간도 빠듯한 상황인지라...



이런 경우에 좀더 효율적인 코테 공부방법이 무엇인지 궁금합니다.



참고로 코테 강의도 너무 강의 전달력이 참 좋으신 것 같습니다. 이해가 잘되네요..             
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '복습관련',
                'BoardComment' => <<<EOT
지금 컴포넌트 스캔과 의존관계 자동주입 시작하기까지 듣고있는 학생입니다 여기까지 들어도 약간 이해가 되지않는 구간이 있습니다.

1. 커리큘럼을 다 듣고 한번더 커리큘럼을 복습

2. 로드맵안에 있는 강의를 다 듣고 다시 처음강의부터 복습            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '학습방향 질문입니다',
                'BoardComment' => <<<EOT
인프라에 대해 처음 공부하는 터라 막막함이 있어 강의를 수강하기 시작했는데요. 강의를 듣기 전 미션을 수행하려고 보니

네트워크와 리눅스 지식은 조금 있지만 도커나 was에 대한 학습 내용을 보니 저에게는 어려움이 다가왔습니다. 먼저 미션을 수행하기 전에 아래 도커공부를 먼저 하고 인프라 미션을 수행해야할까요?
https://www.brainbackdoor.com/infra-workshop/docker-container            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '저번질문에 글올렸는데코드가더꼬인것같아요..',
                'BoardComment' => <<<EOT
https://drive.google.com/file/d/19EdcpxnIZQKKAeCSlucWIrX8HVv4bCtf/view?usp=drive_link



머리아프네요..

17강까지 잘되었습니다..           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'JWT, REDIS, AWS 사용, CI/CD 배포 배우고 싶습니다.',
                'BoardComment' => <<<EOT
JWT, REDIS, AWS 사용, CI/CD 배포

위 네가지 중에 하나라도 잘 알고 계신분에게 돈내고 과외 배우고 싶습니다.

위치는 서울입니다.


udiddc 카톡 주시면 감사하겠습니다.           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'Spring Data JPA로 Mysql Full Text Search 기술 가용여부 질문',
                'BoardComment' => <<<EOT
안녕하세요 스프링 데이터 JPA 강의를 듣다 질문이 생겨 문의드립니다.

토이프로젝트로 JPA를 사용하여 Mysql 전문검색(Full Text Search)를 해보는 중입니다.


public interface JpaMenuReviewRepository extends JpaRepository<MenuReview, Long> {

@Query(value = "SELECT * FROM menu_review WHERE MATCH (comments) AGAINST (:keyword IN NATURAL LANGUAGE MODE)", nativeQuery = true)
List<MenuReview> findMenuReviewByCommentsContainingOnFullTextSearchWithQuery(@Param("keyword") String keyword);
}
JPA에서는 Full Text Search를 지원하지 않아서 nativeQuery로 다음과 같이 쿼리문을 작성하였습니다.

그런데 전문검색을 위해서 Table의 컬럼에 Full index를 추가해야 전문검색 쿼리가 작동한다고 알고 있는데요,

JPA의 해당 특징은 "JPA의 DDL 자동 생성 기능" 또는 "JPA의 스키마 자동 생성 기능"으로 알고 있습니다.

이 기능은 JPA가 애플리케이션의 Entity 클래스를 분석하고, 이를 바탕으로 데이터베이스 스키마를 자동으로 생성하거나 업데이트하는 역할을 하여 @Entity, @Table, @Column 등의 애노테이션을 사용하여 엔티티 클래스를 정의하면, JPA는 이 정보를 바탕으로 필요한 테이블과 컬럼을 데이터베이스에 생성하는데요,

이럴 경우에는 제가 "ALTER TABLE tbl_query ADD FULLTEXT INDEX FullText (`comments` ASC)" 해당 ddl문을 넣을 수 없어서 곤란한 상황입니다. JPA, Mysql에서는 Full Text Search를 사용할 수 없는 건가요? 차선책으로 Elastic Search, Postgre, Mongo를 구상중인데 차선책으로 우회해야할지 고민입니다.

추가로 실무에서는 전문검색 기능을 위해 어떤 방법을 쓰시는지, 관련해서 문의드리고 싶습니다.

강의내용과 동떨어져 있는 질문이라 죄송합니다.        
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



 


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '1.19강의에 프로세스 컨텍스트 스위치 설명',
                'BoardComment' => <<<EOT
프로세스는 컨텍스트 스위칭이 아예 일어나지 않는 것 처럼 말씀하시는데,, 
제가 배우기론 기존 프로세스 동작을 멈추고 다른 프로세스를 CPU가 실행시키는 것이 컨텍스트 스위칭으로 아는데 발생하는걸로 아는데 어떤게 맞는건가요 ?
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);






            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '빠르게 취업하고 싶은 목적에서는 어떤 부트캠프가 좋을까요? (데브코스 vs 크래프톤 정글)',
                'BoardComment' => <<<EOT
데브코스 1기 타입스크립트, React,Node.js 풀스택

크래프톤 정글

저는 학점은행제 컴퓨터공학을 진행중이며, 24년 8월에 학사학위가 나옵니다, 자격증은 3개 취득했습니다.

(컴활1급, 정처산기, 네관2급)

그전까지 부트캠프를 다녀볼까 하는데요,

저는 취업이 우선순위 1위라 많은 고민이 드는데요,

취업목적에서는 위에 두개중 어떤 부트캠프가 나을지 고민입니다.

크래프톤 정글은 취업과는 거리가 먼 커리큘럼이지만 cs등 기본기를 잘 가르쳐주지만, 후기생들이랑 대화를 해보니 취업에 대해서는

크게 메리트가 없다고 하고,

해당 데브코스는 마지막1달을 제외하고는 온라인이라 고민입니다.

경험 많으신 여러분들이 좋은 조언을 해주셨으면 좋겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '백엔드 개발 및 공부에 대한 고민이 있습니다..!',
                'BoardComment' => <<<EOT
안녕하세요! 저는 현재 2학년 그리고 내년에 3학년이 되는 대학생입니다. 최근 백엔드 개발자로서의 진로를 확정하고, 김영한 강사님의 자바 그리고 스프링 강의를 구매하여 공부를 시작했습니다..! 공부를 하며 생긴 고민은 총 2가지입니다.

첫 번째 고민은 스프링 강의에 대한 어려움입니다!

스프링 강의를 수강하며 느낀 것은 생각보다 복잡하고 어렵다는 것이었습니다..! 스프링이라는 프레임워크 그리고 자바의 객체지향 개념이 추상적인 부분이 많아서 그런지 뭔가 머릿속에서 이해가 될 것 같은데 혼자 코드를 짜보라고 하면 못 짜겠는?? 그런 느낌이 많이 들었습니다.. 원래 이런건지 궁금합니다..! 또한, 제가 위와 같이 어려움을 느끼는 이유가 자바에 대한 이해도가 부족해서 그런걸까요??

두 번째 고민은 개발에 대한 궁금증입니다!

최근 1~2달 정도 단기 프로젝트를 하게 되어 스프링에 GPT API를 연동했고, 티베로라는 데이터베이스를 연동한 경험이 있습니다. 이제야 자바 및 스프링을 입문한 입장에서 상당히 난이도가 높았고, 구글 및 각종 래퍼런스를 참고해가며 구현에 성공은 하게 되었습니다. 다만, 프로젝트에 대한 구현이 제가 온전히 모든 것을 이해하기보단 코드들을 참고하여 프로그래밍하고, 이후 작성한 코드를 이해하는 느낌이었고, 이 과정에서 약간의 회의감이 들게 되었습니다. 현재 저의 실력이 완전 초보 단계라 당연한 것이겠지만 과연 나중엔 이런 어려움들을 극복하고 프로그래밍을 원활히 잘할 수 있을까라는 생각이 많이 들었습니다. 다들 이런 어려움을 느끼는 게 당연한 부분이겠죠? 또한, 프로그래밍을 잘하는 개발자 그리고 좋은 개발자가 되기 위해선 어떤 방향성을 가지고 공부를 해야 하는지도 궁금합니다!



강의는 영한 강사님께서 강의를 너무너무 잘해주시고 관련 내용 또한 핵심을 자세히 다뤄주셔서 이해도 편하고 매우 매우 만족합니다!!!(조금 더 일찍 들을 걸이라는 후회를 하고 있어요 ㅠ) 앞으로 영한 강사님의 자바 그리고 스프링 커리큘럼 쭉 따라가려합니다!
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '그러면 API를 개발할 때 최선의 방법은 무엇인가요?',
                'BoardComment' => <<<EOT
이번 API 개발 고급 - 컬렉션 조회 최적화를 쭉 들으면서 생긴 고민입니다.

V1 ~ V3 까지의 각각의 명확한 차이점과 최적화 과정에 대해 이해하고 왜 이렇게 사용하는지에 대략적으로 이해하였습니다.

반면에 V4, V5, V6의 경우 DTO를 직접 조회를 통해 쿼리문의 간소화를 진행시키는 방법으로 최적화를 진행하는 것에 배웠는데

질문 1) 최종적인 실무에서는 V3.1의 fetch join 방식과 DTO를 통해 최소한의 쿼리 줄이는 방식 중 어느 것이 더 대중화된 방식인지 궁금합니다.

질문 2) 명확히 정해진 방식이 없다면 어느 부분에서는 fetch join 방식이 유용한지 dto 방식이 유용한지 아직 잘 이해가 되지 않습니다. 관련 지식을 학습할만한 검색 키워드를 알려주실수 있으신가요?
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '안녕하세요 강사님. 강의 선택에 대한 고민이 있습니다.',
                'BoardComment' => <<<EOT
안녕하세요 🙂 김영한 강사님.

저는 ruby로 백앤드 개발 2년 ~3년 정도 하였습니다.

이번에 java + spring으로 프로젝트를 시작하게 되어서 학습이 필요하게 되었습니다.
강사님이 정말로 친절하게 로드맵을 제시해 주셨지만 저는 조금 와닿지는 않았습니다. (로드맵이 안좋다는 뜻이 아닙니다 !!!!)
와닿지 않은 이유는 초보자라고 가정되어서 로드맵이 시작되기 떄문입니다.
그래서 타 프레임워크로 백앤드 개발을 한 사람을 위한 로드맵은 어떻게 될까요?
추가로 신규 프로젝트에서는 어떤 spring 기술스택을 채택하나요? 제가 서칭한 결과 JPA + Spring boot는 기본이라고 하는데 주변에 현업 스프링 개발자가 없어서 확실한 정보인지는 모르겠습니다. (코틀린을 도입하는 추세라는 건 맞는거 같기도 합니다)



감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '서킷 브레이커 상태 OPEN 전환의 기준 질문드립니다!',
                'BoardComment' => <<<EOT
안녕하세요! 좋은 강의 제공해주셔서 도움이 많이 됐습니다! 수강 후 서킷 브레이커를 프로젝트에 적용해보는 과정에서 궁금한 점이 있어 질문드립니다.

현재 캐시 서버에 서킷 브레이커를 도입해서 장애 발생 시 DB로 우회하도록 구현 했습니다.

여기서 만약 레디스 클러스터를 구축한다면 Master 노드 다운 시 Replica가 새로운 마스터로 승격되면서 Failover가 일어날텐데요!

이때

1. Master와 Replica가 서로 health check를 하는 시간의 timeout

2. 승격이 일어나는 시간

3. Redis Cluster의 Topology를 refresh 하는 주기(현재 Redis Client로 Lettuce를 사용중입니다!)

이 시간 동안은 Redis로 정상 요청이 되지 않을 것입니다.

저는 개인적으로 레디스가 자동으로 Failover 되는 과정은 스스로 회복하는 시간이기에 서킷이 OPEN되야하는 상황으로 보기 힘들다 생각하는데, 서킷의 슬라이딩 윈도우를 설정할때 Failover 동안은 OPEN이 열리지 않을 정도로 여유롭게 설정하는게 좋을까요? 물론 구체적인 값은 트래픽을 예상해서 설정해야 한다고 생각합니다!

결론은, 클러스터의 Failover도 장애로 감지하고 OPEN으로 여는게 좋을지 아니면 Failover는 CLOSE 상태로 넘어갈 수 있도록 여유롭게 설정하는게 좋을지 입니다!

아직 실무 경험이 없기도 하고 주변에 의견을 구할수가 없어서 현업자의 입장에서 강사님이라면 어떻게 구성하실지 궁금해서 여쭤봅니다...!! 혼자 고민해본 부분이다 보니 제가 생각하는 방식이 틀렸다면 피드백 주시면 감사합니다:)
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'jdk버전',
                'BoardComment' => <<<EOT
스프링 프레임워크로 작업하면서 jdk20까지 버전을 올린거 같은데, 
나도코딩 다시 들으려고 8.0? 버전으로 하니까 너무 낮다고 다른 프로그램이 안열려요.. 강의에서 하는 버전보다 높은건 상관없죠???
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '안녕하세요 비전공자 출신, 백엔드 vs 게임 프로그래머 고민중입니다.',
                'BoardComment' => <<<EOT
저는 비전공자 출신입니다. 인서울이긴 하지만, 비전공자라 의미없을 거 같구요. 백엔드 vs 게임 프로그래머 중에 고민하고있습니다. 웹 관련해서는 node.js 기반으로 프로젝트를 3번정도 해본 경험이 있지만, 요새 트렌드가 java, spring이라 웹 백엔드 쪽으로 간다면, java, spring을 공부할 생각입니다. 반면, 게임 프로그래밍은 유니티를 기반으로 소규모 게임 1번 만들어본게 전부입니다. 이런 상황에서 질문드립니다.

제가 가장 발목을 잡는다 느낀 것은 CS 지식입니다. 이것으로부터 덜 자유로운 것이 백엔드 개발자일지 게임 프로그래머 일지 고민입니다. 어느 방향이 더 맞을까요? 알고리즘 자료구조 지식은 백준 골드 3 정도 입니다.

잘 부탁드리겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '질문드립니다.',
                'BoardComment' => <<<EOT
현재 세일즈포스를 배우는 단계에 있는데,

Apex라는 툴이 자바를 기반으로 만든 툴이라고 합니다.

Apex에서 요구하는 수준은 자바로 게시판을 혼자서 만들 수 있어야 하는 수준이라고 하는데...



그러려면 선생님의 강의 자바- 중급, 고급 편까지 수강해야 가능할까요??
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '발표 연습 경험에 대한 설문조사 부탁드립니다!',
                'BoardComment' => <<<EOT
🙋‍♂발표 연습에 대한 인식 조사🙋‍♀



안녕하세요! IT동아리 ’DDD‘에서 앱출시를 준비중인 WEB3 끈끈팀입니다.

저희는 [ 완벽한 발표를 할 수 있도록 도와주는 서비스 ]를 제작하고 있습니다.



발표를 하면서 겪었던 어려움이나

고민이 있었다면 공유해주세요😉

많은 참여 부탁드립니다, 감사합니다:)



**개인정보와 답변해주신 설문내용은 본 프로젝트 목적 외에 일절 사용하지 않을 것을 약속합니다.

☑ 설문대상 : 발표 연습을 해본 경험이 있는 분

☑ 예상 소요 시간 : 2-3분 이내

☑ URL : https://forms.gle/Sa7KWKueaAfnUr9JA
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '빠르게 취업하고 싶은 목적에서는 어떤 부트캠프가 좋을까요? (데브코스 vs 크래프톤 정글)',
                'BoardComment' => <<<EOT
데브코스 1기 타입스크립트, React,Node.js 풀스택

크래프톤 정글

저는 학점은행제 컴퓨터공학을 진행중이며, 24년 8월에 학사학위가 나옵니다, 자격증은 3개 취득했습니다.

(컴활1급, 정처산기, 네관2급)

그전까지 부트캠프를 다녀볼까 하는데요,

저는 취업이 우선순위 1위라 많은 고민이 드는데요,

취업목적에서는 위에 두개중 어떤 부트캠프가 나을지 고민입니다.

크래프톤 정글은 취업과는 거리가 먼 커리큘럼이지만 cs등 기본기를 잘 가르쳐주지만, 후기생들이랑 대화를 해보니 취업에 대해서는

크게 메리트가 없다고 하고,

해당 데브코스는 마지막1달을 제외하고는 온라인이라 고민입니다.

경험 많으신 여러분들이 좋은 조언을 해주셨으면 좋겠습니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '백엔드 개발자는 언제 화면을 그리나요??',
                'BoardComment' => <<<EOT
제가 취준생이라서 실무개발환경에 대해서 잘 알지 못해서 상상의 나래를 펼쳐봤습니다.



1. 요즘은 웹개발에서 보통 프론트엔드랑 백엔드로 나누잖아요 
프론트엔드가 화면을 그리는 부분이고 백엔드가 서버에서 데이터를 뿌려준다고 알고있는데,
데이터를 뿌려주는건 api로 뿌려주면 되는 것이 아닌지 의문이 들어서요 서버사이드렌더링은 언제 왜 하는것인지 궁금합니다.

2. 그리고 취준생이라서 드는 고민도 있는데, 프로젝트를 만들었다고 함은 어느정도까지 구현을 해놔야하는 것인지 궁금합니다.
지금은 mvc 강의를 보면서 코드를 따라치기만 하는 단계이지만나중에 만약 어떤 프로젝트를 만들어서 서버를 배포하는데까지 어떻게 저떻게 했다고 하더라도 이용자가 저만 있다면 그게 의미가 있는걸까요??

저만 사용하는 어플리케이션 혹은 웹은 실제 서비스가 되지 않다고 해도 무방할것 같은데 이런 개발은 결국엔 무의미 한게 아닌가 하는 생각도 들고... 잡생각이 참 머리가 너무 번잡해지네요 
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'spring 공부방법 질문',
                'BoardComment' => <<<EOT
현재 스프링 완전정복로드맵을 들어가기전 스프링 입문 강의를 듣고있는 수강생입니다. 
수업하나하나 들을때마다 코드하나하나 따라치는거밖에 못하고 실제로 강의끝나고 이걸복습하자니 어디서부터 해야할지도 모르겠습니다. 
제가 spring을 처음접해서 그런거일수도있는데 이렇게 코드만 따라치는게 맞는지 공부하는 느낌이 안들고 의구심이 들어서 질문해봅니다 ㅠㅠㅠ 처음 말씀해주신 목표는 전체적으로 어떻게 돌아가는지, 
동작하는지를 이해하는게 포인트라고 하셨는데 다행히 이부분에서는 구글링으로 부족한개념들을 메꾸면서 도달할수는 있을거같습니다. 
하지만 위에서 적었다싶이 코드를 하나하나 이해하고 따라치는데는 한강의를 듣는데 4~5시간이 소요되어 실제로 완강을 하기에는 2주가 넘는시간이 소요됩니다..
그래서 조언을듣고싶습니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '제로미니님 안녕하세요 :)',
                'BoardComment' => <<<EOT
                안녕하세요 zeromini 입니다
정처기 취득을 목표라고하면 말씀해주신 강의나 시나공이나 별차이없습니다 아무거나 선택하셔서 수험준비를 하시면되고,
공기업 전산직을 준비하는 필기교재로서는 부적절하오니 필기 준비 영상을 보시고 다시 정리하시기 바랍니다. 감사합니다
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '코딩테스트 혼자 준비하는 중의 고민',
                'BoardComment' => <<<EOT
안녕하세요. 산업공학과 석사과정에 재학중인 학생입니다.

석사 후 데이터 분야 취업을 희망하여 코딩테스트 준비를 하고 있는데

혼자 하다보니 막막하고 제대로 하고 있는게 맞는지 고민이 듭니다.

https://www.acmicpc.net/workbook/view/8997

위의 링크에서와 같이 week 1부터 week 13 으로 나누어진 문제집을 푸는게 이번 겨울방학의 목표인데

week 1 문제들처럼 (소수 찾기 등의 문제) 쉬운 난이도의 문제에도 접근이 어려워서 답지를 보게 됩니다.

한 두 문제가 아니라 거의 90% 문제를 해결하지 못하는 것 같습니다. ㅠ

(코드업 100문제는 이미 예전에 풀었습니다.)

코테 공부를 할때마다 자존감이 팍팍 깎이고 '재능이 없는거 같은데 괜찮을까' 이런 생각이 자꾸만 드는데

다른 선배님들은 어떻게 극복하시고 계신지, 혹은 극복하셨는지 궁금합니다.

감사합니다.
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '서킷 브레이커 상태 OPEN 전환의 기준 질문드립니다!',
                'BoardComment' => <<<EOT
안녕하세요! 좋은 강의 제공해주셔서 도움이 많이 됐습니다! 수강 후 서킷 브레이커를 프로젝트에 적용해보는 과정에서 궁금한 점이 있어 질문드립니다.

현재 캐시 서버에 서킷 브레이커를 도입해서 장애 발생 시 DB로 우회하도록 구현 했습니다.

여기서 만약 레디스 클러스터를 구축한다면 Master 노드 다운 시 Replica가 새로운 마스터로 승격되면서 Failover가 일어날텐데요!

이때

1. Master와 Replica가 서로 health check를 하는 시간의 timeout

2. 승격이 일어나는 시간

3. Redis Cluster의 Topology를 refresh 하는 주기(현재 Redis Client로 Lettuce를 사용중입니다!)

이 시간 동안은 Redis로 정상 요청이 되지 않을 것입니다.

저는 개인적으로 레디스가 자동으로 Failover 되는 과정은 스스로 회복하는 시간이기에 서킷이 OPEN되야하는 상황으로 보기 힘들다 생각하는데, 서킷의 슬라이딩 윈도우를 설정할때 Failover 동안은 OPEN이 열리지 않을 정도로 여유롭게 설정하는게 좋을까요? 물론 구체적인 값은 트래픽을 예상해서 설정해야 한다고 생각합니다!

결론은, 클러스터의 Failover도 장애로 감지하고 OPEN으로 여는게 좋을지 아니면 Failover는 CLOSE 상태로 넘어갈 수 있도록 여유롭게 설정하는게 좋을지 입니다!

아직 실무 경험이 없기도 하고 주변에 의견을 구할수가 없어서 현업자의 입장에서 강사님이라면 어떻게 구성하실지 궁금해서 여쭤봅니다...!! 혼자 고민해본 부분이다 보니 제가 생각하는 방식이 틀렸다면 피드백 주시면 감사합니다:)
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);





            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '복습관련',
                'BoardComment' => <<<EOT
지금 컴포넌트 스캔과 의존관계 자동주입 시작하기까지 듣고있는 학생입니다 여기까지 들어도 약간 이해가 되지않는 구간이 있습니다.

1. 커리큘럼을 다 듣고 한번더 커리큘럼을 복습

2. 로드맵안에 있는 강의를 다 듣고 다시 처음강의부터 복습            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);

            

            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '학습방향 질문입니다',
                'BoardComment' => <<<EOT
인프라에 대해 처음 공부하는 터라 막막함이 있어 강의를 수강하기 시작했는데요. 강의를 듣기 전 미션을 수행하려고 보니

네트워크와 리눅스 지식은 조금 있지만 도커나 was에 대한 학습 내용을 보니 저에게는 어려움이 다가왔습니다. 먼저 미션을 수행하기 전에 아래 도커공부를 먼저 하고 인프라 미션을 수행해야할까요?
https://www.brainbackdoor.com/infra-workshop/docker-container            
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);



            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => '저번질문에 글올렸는데코드가더꼬인것같아요..',
                'BoardComment' => <<<EOT
https://drive.google.com/file/d/19EdcpxnIZQKKAeCSlucWIrX8HVv4bCtf/view?usp=drive_link



머리아프네요..

17강까지 잘되었습니다..           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);


            
            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'JWT, REDIS, AWS 사용, CI/CD 배포 배우고 싶습니다.',
                'BoardComment' => <<<EOT
JWT, REDIS, AWS 사용, CI/CD 배포

위 네가지 중에 하나라도 잘 알고 계신분에게 돈내고 과외 배우고 싶습니다.

위치는 서울입니다.


udiddc 카톡 주시면 감사하겠습니다.           
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);




            $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 5000);
            $class = $faker->numberBetween(1, 216);
            $view = $faker->randomNumber(2);
            $flg = $faker->randomElement([0,1]);
            
            Board::create([
                'BoardCategoryID' => 1,
                'UserID' => $user,
                'ClassID' => $class,
                'BoardTitle' => 'Spring Data JPA로 Mysql Full Text Search 기술 가용여부 질문',
                'BoardComment' => <<<EOT
안녕하세요 스프링 데이터 JPA 강의를 듣다 질문이 생겨 문의드립니다.

토이프로젝트로 JPA를 사용하여 Mysql 전문검색(Full Text Search)를 해보는 중입니다.


public interface JpaMenuReviewRepository extends JpaRepository<MenuReview, Long> {

@Query(value = "SELECT * FROM menu_review WHERE MATCH (comments) AGAINST (:keyword IN NATURAL LANGUAGE MODE)", nativeQuery = true)
List<MenuReview> findMenuReviewByCommentsContainingOnFullTextSearchWithQuery(@Param("keyword") String keyword);
}
JPA에서는 Full Text Search를 지원하지 않아서 nativeQuery로 다음과 같이 쿼리문을 작성하였습니다.

그런데 전문검색을 위해서 Table의 컬럼에 Full index를 추가해야 전문검색 쿼리가 작동한다고 알고 있는데요,

JPA의 해당 특징은 "JPA의 DDL 자동 생성 기능" 또는 "JPA의 스키마 자동 생성 기능"으로 알고 있습니다.

이 기능은 JPA가 애플리케이션의 Entity 클래스를 분석하고, 이를 바탕으로 데이터베이스 스키마를 자동으로 생성하거나 업데이트하는 역할을 하여 @Entity, @Table, @Column 등의 애노테이션을 사용하여 엔티티 클래스를 정의하면, JPA는 이 정보를 바탕으로 필요한 테이블과 컬럼을 데이터베이스에 생성하는데요,

이럴 경우에는 제가 "ALTER TABLE tbl_query ADD FULLTEXT INDEX FullText (`comments` ASC)" 해당 ddl문을 넣을 수 없어서 곤란한 상황입니다. JPA, Mysql에서는 Full Text Search를 사용할 수 없는 건가요? 차선책으로 Elastic Search, Postgre, Mongo를 구상중인데 차선책으로 우회해야할지 고민입니다.

추가로 실무에서는 전문검색 기능을 위해 어떤 방법을 쓰시는지, 관련해서 문의드리고 싶습니다.

강의내용과 동떨어져 있는 질문이라 죄송합니다.        
EOT,
                'BoardView' => $view,
                'BoardFlg' => $flg,
                'created_at' => $date,
            ]);





















































$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '[최대 길이 연속부분수열] 틀린 이유',
'BoardComment' => <<<EOT
import java.util.*;

class Main {
public int solution(int n, int m, int[] arr) {
int lt = 0, sum = 0, max = 0, count = 0;
for(int rt = 0; rt < n; rt++) {
if(arr[rt] == 1) {
sum += arr[rt];
} else if (arr[rt] == 0) {
if(count++ < m) {
sum += 1;
} else {
if (sum >= max) {
max = sum;
sum = 0;
lt ++;
rt = lt;
count = 0;
}
}
}
}
return max;
}

public static void main(String[] args) {
Main T = new Main();
Scanner in = new Scanner(System.in);
int n = in.nextInt();
int m = in.nextInt();
int[] arr = new int[n];
for(int i = 0; i < n; i++) {
arr[i] = in.nextInt();
}
System.out.print(T.solution(n, m, arr));
}
}
EOT,
'BoardView' => $view,
'BoardFlg' => 0,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '커리큘럼 질문드려요.',
'BoardComment' => <<<EOT
자바, 스프링부트 백엔드 과정을 수강했는데요.

node.js까지 꼭 해야하나요?

지금 생각하는건 부트랑 vue.js 연결해서 SPA 만들고 싶은데.

그럼 저같은 백엔드 과정 준비했던 수강생은 별도로 node.js까진 수강하지 않아도 되는건가요?

당근마켓 기반 데이터베이스 강의까지 로드맵 따라가면 될까요?

자바스크립트 책이 읽어보고 좋아서 프론트쪽은 선생님한테 배워보려고 하는데

커리큘럼좀 설명부탁드려요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'postman에서 오류가 납니다..',
'BoardComment' => <<<EOT
이전까지는 모든게 다 되는데 postman test에 전역 변수를 잡고 Authorization에 {{jwt_tutorial_token}}을 넣어서 send 해봐도

Something went wrong while running your scripts. Check Postman Console for more info 라는 작은 팝업창만 뜰 뿐, 아무런 반응이 없습니다...

모든 코드와 postman에도 모두 동일하게 작성을 했는데, 왜 이런 오류가 발생하는지 알 수 있을까요..?ㅜㅜ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '매서드에서 void가 쓰이는 경우',
'BoardComment' => <<<EOT
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.



메서드에서 반환타입이 없어서 void를 쓰는경우(return을 쓸 필요 없는 경우)는 메서드가 출력문 system.out.println("내용");

으로만 이루어진 경우 뿐 인가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '안녕하세요, react-query 관해서 궁금해서 질문드립니다.',
'BoardComment' => <<<EOT
react-query의 쓰임새가 잘 이해가 안가서 질문드립니다.

1. 컴포넌트가 server component 일때는 react-query에 prefetchQuery를 사용하여 미리 서버에서 데이터를 가져오고 dehydrate를 통하여 클라이언트에 전송할수있는 형태로 만들어주고,
HydrationBoundary 로 감싸여진 클라이언트 컴포넌트는 서버에서 미리 가져온 데이터를 클라이언트의 쿼리 캐시에 적용하여, getQueryData를 사용하여 네트워크 요청 없이 데이터를 가져올수있고,
useQuery 같은 경우에는 미리 가져온 데이터 외에 클라이언트에서 데이터를 가져올 때 사용하는 걸로 이해했습니다. 맞을까요??

2. queryKey 같은 경우에는 queryFn에 있는 함수에 queryKey를 넘기는 경우가 있고 안넘기는 경우가 있던데 강의에서 props에 따라 키가 바뀌는 경우에만 넘기게 된다고 이해했습니다.
그러면 server component에서 모든걸 prefetchQuery 해서 getQueryData 로 가져다 쓰지 않는 이유가 useQuery를 이용해서 key 값을 다이나믹하게 바뀌는 요청들을 컨트롤 하기 위해서라고 생각이 들었습니다.
하지만 아래와 같이 queryKey를 넘기지 않는 경우에도 useQuery를 사용하는데 prefetchQuery를 해놓고 getQueryData 를 사용할지, prefetchQuery 를 사용하지않고 useQuery를 사용할지 에 대해서 나누는 기준이 있을까요?

============================
const { data } = useQuery<Hashtag[]>({
queryKey: ["trends"],
queryFn: getTrends,
staleTime: 60 * 1000,
gcTime: 300 * 1000,
enabled: !!session?.user,
});
============================
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'UICollectionView 클래스 addSubView 없음 질문',
'BoardComment' => <<<EOT
안녕하세요! 셀 구현하여 Collection View에 등록하기 초입 시작했는데,

SetUI() 메서드에서 self.addSubVIew()로 라벨이랑 배경이미지 뷰 추가시켜 주는데, Value of type 'BannerCollectionViewCell' has no member 'addSubView' 라는 에러가 뜹니다.

혹시 다른 클래스를 상속해야 하나요..?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '무상태 프로토콜 을 제대로 이해한건지 모르겠습니다',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)

[질문 내용]
Stateless 의 대표적인 예 는 쿠키 이며 Stateful 의 대표적인 예는 세션 이라고 이해를 했습니다.

그렇다고 한다면 여기서 궁금증이 생깁니다. HTTP 는 기본적으로 stateless 이며 HTTP 요청은 이전 요청과 상관없이 독립적으로 처리되는데 HTTP 는 통신 프로토콜 중 하나가 아닌가요?
세션 또한 서버와 통신을 해야 데이터를 받아 오고 HTTP 통신을 통해 데이터를 받아올 텐데 세션의 정의가 뭔가 모호해진거 같습니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '롤링 업데이트 시 이전 Replicasets 문의',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)

[질문 내용]
Stateless 의 대표적인 예 는 쿠키 이며 Stateful 의 대표적인 예는 세션 이라고 이해를 했습니다.

그렇다고 한다면 여기서 궁금증이 생깁니다. HTTP 는 기본적으로 stateless 이며 HTTP 요청은 이전 요청과 상관없이 독립적으로 처리되는데 HTTP 는 통신 프로토콜 중 하나가 아닌가요?
세션 또한 서버와 통신을 해야 데이터를 받아 오고 HTTP 통신을 통해 데이터를 받아올 텐데 세션의 정의가 뭔가 모호해진거 같습니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '라우팅에서 언더바(_) 폴더를 사용했을때 어떤 이점이 있나요?',
'BoardComment' => <<<EOT
안녕하세요, 강의 잘 듣고 있습니다!
강의를 듣다보니 하나 의문점이 들어 질문드립니다.

app 폴더 하위에서 "page.tsx"로 만들면 nextjs에서 자동으로 라우팅하여 경로로 인식한다고 설명해주셨는데요. 강의를 듣다보니 언더바를 붙인 폴더 경로는 라우팅에 포함되지 않는다고 이야기를 하시더라구요.



파일명을 page로 만들지 않으면 라우팅에 포함되지 않는데, 언더바 폴더를 사용하는 이유가 있는지 궁금합니다.



공식 문서에서는 명시적인 구분/이름 충돌 방지등 이점 설명이 있지만, 크게 와닿지 않아서 질문드려요!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'iPhone simulator의 아래와 같은 오류',
'BoardComment' => <<<EOT
[ERROR:flutter/shell/platform/darwin/graphics/FlutterDarwinContextMetalImpeller.mm(42)] Using the Impeller rendering backend.



코팩님. 실행은 정상적으로 되지만 위와 같은 오류가 있는데 인터넷 검색해 보니 프로그램에서 바꾸면 된다고 나오는데, 근본적인 해결책은 없을까요? 셋팅 등에서..
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '제가 만든 웹사이트 너드작업소 피드백을 받을 수 있을까요?',
'BoardComment' => <<<EOT
안녕하세요~

주변 지인들랑 같이 작게 웹페이지 하나 만들었는데 피드백을 받아보고 싶습니다!

* 홈페이지 링크 : https://nerd-work-space.vercel.app (PC에서만 접근 가능합니다)

--
온라인 작업공간 <너드 작업소>

혼자서 외롭게 새벽 코딩하는 분들..

혼자 포트폴리오 만드느라 외로운 디자이너 분들..

블로거, 웹소설 작가, 영상 편집자 등등 혼자 PC 작업하기 심심하신 분들!

같이 모여서 작업할 수 있는 온라인 작업 공간 '너드 작업소' 웹페이지 한번 둘러봐주시면 감사하겠습니다🥺


오늘 해야할 목표도 설정할 수 있고,

목표 작업시간을 달성하면 1pixel씩 낙서할 수 있는 게임 요소도 넣어보았습니다 🙌🏻

한번 써봐주시고 의견 남겨주시면 열심히 개선해나가볼게요!!

버그 제보도 환영합니다 ㅎㅎ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '왜 순수한 자바로 테스트 해야 하나요?',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)

네


2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)

네


3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

네

[질문 내용]
1. 제목과 같은 내용입니다. 강의 어느 편인가 해당 내용에 대해서 짧게 답변 해주신 부분을 어렴풋이 본거 같은데 잊어서 질문 드립니다. 해당 질문에 대한 답변 또는 관련 영상을 혹시 아신다면 감사 드릴거 같습니다.

2. 해당 질문에 대한 원인은 다음과 같습니다. 순수한 자바 코드가 스프링 프레임워크를 포함한 것보다 상대적으로 작은 범위여서 일단 공통 부분인 자바 파트에서 테스트를 하고 그 다음 스프링으로 가는 것이 맞겠다는게 처음 생각이었습니다. 근데 문득 이게 맞나 ? 명확한 근거가 아닌 저의 추측에 기반한 근거였기 때문에 1번의 설명과 같이 모호해서 질문을 드립니다.

개발자인데 아직도 문서를 두서 없이 작성합니다.
해당 부분에 있어 양해를 구합니다.
읽어주셔서 감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Autowired 관련 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
의존관계 자동주입에 대해 정리를 하던도 중 제가 이해한것이 맞는지 궁금하여 질문드립니다.



컨테이너에 빈을 등록하는 방법에는 대표적으로,

1.컴포넌트 스캔을 통해 등록하는 방법

2. 자바설정클래스를 통해 등록하는 방법

3 xml 파일을 통해 등록하는 방법

이 있고 이때 의존관계주입을 2번과 3번에서는 직접 구현체를 정의? 해주었지만

컴포넌트 스캔을 사용할때 의존관계주입을 (OCP와 DIP 원칙을 지키며) 해주기 위해선

@Autowired 을 사용해야한다. 그리고 @Autowired 을 해주는 방법에는 아래와같은 방법이 있다.

생성자주입
필드주입
setter 주입
일반메서드 주입
이렇게 이해하였는데 제가 이해 한 것이 맞나요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'N:M 을 1:N N:1 로 풀면 이런 모습일까요?',
'BoardComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? 네
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? 네

[질문 내용]

안녕하세요. 항상 영한님의 강의를 수강하며 재밌게 공부하고 있습니다.

질문이 있습니다.
Item & Category 를

다대다가 아니라

일대다 다대일로 연관관계 매핑을 할 때

중간테이블을 직접 만든다면 다음과 같이 만들면 되는걸까요?

==
@Entity
public class Item {

@Id @GeneratedValue
@Column(name = "ITEM_ID")
private Long id;

private String name;

private int price;

private int stockQuantity;

@OneToMany
@JoinColumn(name = "ITEM_ID")
private List<CategoryItem> categoryItems = new ArrayList<>();

}
==

==
@Entity
public class CategoryItem {

@Id @GeneratedValue
@Column(name = "CATEGORY_ITEM_ID")
private Long id;

@ManyToOne
@JoinColumn(name = "CATEGORY_ID")
private Category category;

@ManyToOne
@JoinColumn(name = "ITEM_ID")
private Item item;
}
==

==
@Entity
public class Category {

@Id @GeneratedValue
@Column(name = "CATEGORY_ID")
private Long id;

private String name;

@OneToMany
@JoinColumn(name = "CATEGORY_ID")
private List<CategoryItem> categoryItems = new ArrayList<>();

@ManyToOne
@JoinColumn(name = "PARENT_ID")
private Category parent;

@OneToMany(mappedBy = "parent")
private List<Category> child = new ArrayList<>();
}
==
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '데이터 불균형',
'BoardComment' => <<<EOT
- 학습 관련 질문을 남겨주세요. 상세히 작성하면 더 좋아요!
- 먼저 유사한 질문이 있었는지 검색해보세요.
- 서로 예의를 지키며 존중하는 문화를 만들어가요.
- 잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.



안녕하세요. 데이터 불균형 수업 관련하여 질문드립니다.



수업중에 알려주신 예시는 classification 문제에서의 데이터 불균형 해결 방법을 알려주셨는데요,

혹시 regression 문제에서도 데이터 불균형 해결이 필요한것이 맞을까요? (예를들어 신장(키) 학습 시 평균 키를 가지는 샘플이 많은 경우)



regression 문제에서 데이터 불균형이 있을 경우, 어떤 방법으로 해결할 수 있을지 궁금합니다!

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Guard 이론 까지 학습 후 질문',
'BoardComment' => <<<EOT
안녕하세요.

1강~가드이론까지만 학습후 질문드립니다. (파이프강의에서도 안나왔고 뒤에 강의에 왠지 안나올거같아서)



클라이언트 요청이 컨트롤러까지 가면서

미들 -> 가드 -> 인터셉터 -> 파이프

의 단계를 거친다고 알려주셨는데

nest 에서 이렇게 레이어를 나누어둔 이유, 순서가 이렇게된 이유가 있을까요?

혹은 사실 하나의 레이어에서 동작하는건데 이해를 돕기위에 이런 단계를 거친다고 개념적으로만 나누어 둔것일까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'BackUp DB > Failed',
'BoardComment' => <<<EOT
PostgreSQL 여러번 지우고 재설치 하여 backup DB restore 결과가 Failed 나오네요 문제가 뭘까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '완강 후 실습 관련 질문',
'BoardComment' => <<<EOT
안녕하세요! 항상 좋은 강의 만들어 주셔서 감사합니다.

이번에 독하게 시작하는 C를 완강하고 자료구조를 듣는 중입니다. 그런데 C언어를 완강해도 능숙하게 다룰 수 있다는 느낌이 들지 않아서 C 코딩 예제를 플어보고 싶은데 혹시 추천해주실 만한 예제 사이트나 교재가 있으신가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'MemberRepositoryTest',
'BoardComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
WARNING: A Java agent has been loaded dynamically (C:\Users\home\.gradle\caches\modules-2\files-2.1\net.bytebuddy\byte-buddy-agent\1.14.10\90ed94ac044ea8953b224304c762316e91fd6b31\byte-buddy-agent-1.14.10.jar)

WARNING: If a serviceability tool is in use, please run with -XX:+EnableDynamicAgentLoading to hide this warning

WARNING: If a serviceability tool is not in use, please run with -Djdk.instrument.traceUsage for more information

WARNING: Dynamic loading of agents will be disallowed by default in a future release

OpenJDK 64-Bit Server VM warning: Sharing is only supported for boot loader classes because bootstrap classpath has been appended

테스트는 성공하는데 이렇게 경고문이 뜨는데 무시해도 될까요?? 구글링 해봐도 안나와서요
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '복합명사 정제 관련 문의',
'BoardComment' => <<<EOT
선생님 안녕하세요~ 실습을 해보다 의문점이 생겨 글을 남깁니다.



정제과정에서 혹시 두 단어로 만들어진 복합명사, 예를 들어 “국제법” 같은 경우 “국제” 와 ”법“으로 분석이 되는데요. 원글에 국제법으로 표기된 경우 이를 나누지 않고 ”국제법“으로 분석이 되게 할수 있는 방법이 있을까요?

이것저것 해봤는데 적용이 안되어 선생님께 도움을 청합니다!

감사합니다^^
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'MemoryMemberRepository',
'BoardComment' => <<<EOT
private static Map<Long, Member> store = new HashMap<>();
private static long sequence = 0L;

@Override
public Member save(Member member) {
member.setId(++sequence);
store.put(member.getId(), member);
return member;
}



여기서 궁금한게 save 메서드에서 왜 member를 return 하나요?

return 된 member를 사용하는 곳은 어디에도 안보이는데 왜 return 하는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'SpringDataJpa 테스트 오류',
'BoardComment' => <<<EOT

1

학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'request스코프와 컴포넌트 스캔',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요. 복습 중 궁금한 점이 생겨서 질문드립니다.

컴포넌트 스캔을 하게 되면 @component annotation이 붙은 객체를 스프링빈으로 등록해주는 것으로 알고 있습니다. 그런데 이 객체가 request 스코프일 경우 request요청이 있어야 스프링 빈으로 등록이 가능하다면 처음 스프링 애플리케이션을 실행할 때 @Component가 붙은 객체를 탐색하면서 @Scope("request")가 붙어있다면 스프링 컨테이너가 이 객체는 스프링빈으로 등록하지 않고 넘어가는 것인지 궁금합니다!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Unlocking Sustainable Business Solutions in Scotland`s Energy Landscape',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요. 복습 중 궁금한 점이 생겨서 질문드립니다.

컴포넌트 스캔을 하게 되면 @component annotation이 붙은 객체를 스프링빈으로 등록해주는 것으로 알고 있습니다. 그런데 이 객체가 request 스코프일 경우 request요청이 있어야 스프링 빈으로 등록이 가능하다면 처음 스프링 애플리케이션을 실행할 때 @Component가 붙은 객체를 탐색하면서 @Scope("request")가 붙어있다면 스프링 컨테이너가 이 객체는 스프링빈으로 등록하지 않고 넘어가는 것인지 궁금합니다!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'vitest를 설치했는데 이 작업 영역에서 아직 발견된 테스트가 없습니다.라는 문구가 떠서 테스트를 진행할 수 없습니다..',
'BoardComment' => <<<EOT
안녕하세요.

2.1 단위 테스트란 무엇일까? 강의를 들으며 따라하고 있습니다.

강의에서 진행하고 있는 unit-test-example 브랜치에서 TextField.spec.jsx 파일을 따라 치며 테스트를 하려고 하는데 vscode 테스트 메뉴에서 '이 작업 영역에서 아직 발견된 테스트가 없습니다.'라는 문구와 '추가 테스트 확장 설치'라는 버튼만 떠서 테스트 진행을 하지 못하고 있습니다.

강의에서 소개해주신 vitest를 설치하고 vscode를 껐다가 다시 켜봐도 테스트를 찾을 수 없다고 뜨고 있는데 제가 어떻게 하면 될까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'pagination 페이지 번호 유지하고 싶습니다.',
'BoardComment' => <<<EOT
예시로 pagination을 통해 4번째 게시물 목록을 보고 있는데

여기서 새로 고침을 하거나

4번 게시물 목록의 해당 게시글 클릭해서 들어가고 다시 뒤로 가기를 통해 게시물 목록으로 이동이 되었을 때

4번 게시물 목록이 아닌 1번 게시물 목록으로 초기화가 되는데

저는 4번 게시물 목록으로 유지하고 싶습니다.



다른 사이트의 게시물 홈페이지를 참고해 보면 page=4 이런 식으로 주소 창에 입력이 되어있는데 pages폴더에 폴더를 추가해서 유지를 해야 하나요?

인프런에서 질문 & 답변 부분에서도 다음과 같이 사용되고 있습니다.

https://www.inflearn.com/community/questions?page=2&order=recent



만약 폴더를 추가 해야 한다면 다음과 같이 폴더가 있을 때

boards 하위 폴더에 추가하고 해당 page폴더 안에

[boardId], new 폴더를 넣어야 할 까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '비동기 씬로딩관련해서 질문있습니다.',
'BoardComment' => <<<EOT
예제에서는 매니저들을 관리하기위해서 모노비헤비어를 상속하지않은상태에서 매니저들을 받아서 관리하게 돼있는데 씬매니저를 만들면서 비동기 씬이동을 구현해보고 싶어서 해보고있는데 모노비헤비어가 상속되지않은 클래스에서는 코루틴을 사용할수가없다보니까 어떻게 해야할지 막혔습니다...

기존의 씬매니저에서



IEnumerator LoadAsynchronouslytime(string name)

{

AsyncOperation operation = SceneManager.LoadSceneAsync(name);

operation.allowSceneActivation = false;

float elapsedTime = 0f;

while (!operation.isDone)

{

elapsedTime += Time.deltaTime;

Debug.Log(elapsedTime);

slider.value = elapsedTime / 10f;

if (elapsedTime > 10f)

{

operation.allowSceneActivation = true;

}

yield return null;

}

}

이런식으로 비동기 코드를 작성했는데요..

코루틴을 사용하면 정상작동을 하긴하는데 모노비헤비어를 상속받지않은 상태에서 어떻게 사용하는지 감이 안잡힙니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '톰캣이 웰컴 페이지를 찾는 과정이 궁금합니다.',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)

[질문 내용]
안녕하세요. 학습하다가 궁금한 점이 생겨 질문 글을 남깁니다.

url 창에 localhost:8080을 입력하면 웰컴 페이지(index.html)가 이전에 는 잘 떳는데 웰컴페이지를 조금 항목이 많은 html 페이지로 바꾸고 나니까 whitelabel 에러가 뜨더군요. 한참 여기저기 뒤져보다가 어떤 글에서 index.html은 main.resources.static 디렉토리 경로에 존재해야 한다고 하더라고요? 그래서 index.html을 해당 디렉토리에 두니까 다시 잘 도되더군요 근데 강의를 들었을 때는 main.webapp에 index.html에 둔 상태로 코딩을 했었을 때도 문제 없이 잘 되는 거 같은데 제가 강의를 들으면서 놓친 부분이 있는지 모르겠습니다. 왜 톰캣이 main.webapp에 존재하는 index.html을 못 찾았을까요? 그리고 왜 main.resources.static에 index.html을 추가로 만드니까 잘 찾아낼까요? 원리가 궁금합니다. 바쁘신 와중에 답변 주시면 정말 감사하겠습니다!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'firebase 관련오류',
'BoardComment' => <<<EOT
안녕하세요..

사용자 인증 시 아래와 같은

예외가 발생합니다.



FirebaseAuthException ([firebase_auth/too-many-requests] We have blocked all requests from this device due to unusual activity. Try again later.)



여기저기 찾아봐도 이유를 모르겠습니다

혹시, 이유를 아시면 답변 부탁드리겠습니다.

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Cache-Control: no-cache 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요.
강의를 듣다가 Cache-Control: no-cache 관련한 질문이 있어서 질문 드립니다.

만약에 데이터를 요청할 때 캐시 유효시간이 남았다면 서버와의 네트워크 통신이나 요청메시지, 응답메시지 없이 브라우저 캐시 저장소에서 데이터를 가져오는 게 맞나요?
1번이 맞다면 Cache-Control: no-cache 를 하면 캐시 유효시간이 남아 서버와의 통신이 필요 없는데도 불구하고 원 서버와의 통신을 통해 검증한다고 이해하면 될까요??
클라이언트가 원 서버에 검증하고 사용하기 위해서 Cache-Control: no-cache를 요청 메시지에서 사용하는 건가요? 아니면 클라이언트에게 원 서버와의 검증을 강제(?)하기 위해서 서버의 응답 메시지에서 사용하는 건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
안녕하세요, 선생님. 이번 강의에서 질문이 하나 더 있었습니다! 앞에 남긴 질문과 한꺼번에 남길걸 그랬네요..😅  선생님께서 추천을 통한 주문 전환률 (CVR) 을 구하기 위해 작성한 쿼리를 보니# 선생님 풀이 SELECT event_date , use_recomend_payment / click_recomend_food AS recommend_cvr FROM( SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food #추천음식 클릭 FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date ) AS temp
1) 추천상품 클릭하여 전환된 횟수 ( use_recomend_payment)와, 추천음식을 클릭한 횟수(click_recommend_food) 를 구해서 from절 서브쿼리에 넣기2) 추천상품 클릭하여 전환된 횟수 / 추천음식 클릭 횟수 연산하여 recommend_cvr 구하기
이렇게 from 절을 써야하더라구요.  선생님의 해설을 보기 전, 스스로 풀었을 때는 from절을 쓰지 않고 그냥 한번에 썼었습니다. #셀프풀이 SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") / COUNTIF(event_name = "click_recommend_food") AS recommend_cvr FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date혹시 이렇게 한번에 쓰면 오류가 발생하는지, 서브쿼리를 사용하여 풀어야 하는 이유가 무엇인지 궁금합니다! 여유있으실 때 회신 주세요.감사합니다! 
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
Model model 파라미터를 넘기면서

model.addAttribute() 메서드의 동작원리에 대해 갑자기 궁금증이 생겼는데, 현재 로직이 /basic/items 으로 웹페이지가 넘어가면 items 메서드가 호출되면서 model.addAttribute("items",item); 메서드를 통해 모델에 items라는 이름에 items 객체가 저장이 되잖아요



새로운 아이템을 등록한 뒤에, 다시 /basic/items 페이지로 넘어가게 된다면 다시 items 메서드가 호출될텐데 이때 다시 로직이 돌면서 model.addAttribute("items", item); 메서드가 호출이 될텐데, 이럴때에는 items 이름에 정보를 덮어씌우는 방식으로 모델에 넘어가는건가요? 아니면 items객체에 수정된 부분만 고쳐서 모델에 넘어가는건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '파일 경로 설정',
'BoardComment' => <<<EOT
=================

현업자인지라 업무때문에 답변이 늦을 수 있습니다. (길어도 만 3일 안에는 꼭 답변드리려고 노력중입니다 ㅠㅠ)

강의에서 다룬 내용들의 질문들을 부탁드립니다!! (설치과정, 강의내용을 듣고 이해가 안되었던 부분들, 강의의 오류 등등)
이런 질문은 부담스러워요.. (답변거부해도 양해 부탁드려요)
개인 과제, 강의에서 다루지 않은 내용들의 궁금증 해소, 영상과 다른 접근방법 후 디버깅 요청, 고민 상담 등..
글쓰기 에티튜드를 지켜주세요 (저 포함, 다른 수강생 분들이 함께보는 공간입니다.)
서로 예의를 지키며 존중하는 문화를 만들어가요.
질문글을 보고 내용을 이해할 수 있도록 남겨주시면 답변에 큰 도움이 될 것 같아요. (상세히 작성하면 더 좋아요! )
먼저 유사한 질문이 있었는지 검색해보세요.
잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.
==================

즐거운 연말 보내시는 와중에 별거아닌 질문을 드리는것 같아 죄송합니다 ㅠㅠ



[진행사항]

Verilog HDL 1 강의를 수강하며, C드라이브에 Linux 환경을 구축한 뒤, 실습파일을 다운받아 실습을 진행했습니다.
이번 FPGA 강의를 수강하게 되며 VItis 설치를 하게 되었는데, C드라이브의 용량이 부족하게되어 D드라이브를 새로 구축하였습니다.
이후 Vitis (Window)를 D드라이브에 설치 후 정상동작함을 확인하였습니다.


[질문사항]

제공실습 파일을 넣으실 때(강의 01:48), C드라이브의 FPGA라는 파일에 넣으셨는데, D드라이브에서 진행하게 될 경우 똑같이 D드라이브 내에 FPGA라는 파일을 생성하고 실습을 진행하면 되는지가 궁금합니다.
Vivado 프로젝트 실행 후, Project 생성 시, 파일경로가 C드라이브로 자동설정되는데 기존 파일이 있는 D드라이브로 잡아줘야 하는지 궁금합니다.


아래에는 C드라이브, D드라이브 경로 사진입니다.

[C드라이브]


EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '토큰쿠키저장에 대해서 질문드립니다.',
'BoardComment' => <<<EOT
=================
강의에서 토큰을 보관하기에 보안에도 좋고 적절한 곳이 쿠키라고 말씀해주셨는데 보통 쿠키에 저장을 많이 하는편일까요?

내년 하반기에 크롬에서 쿠키차단예정을 하고 있다고 들어서 왠지 다른 대체제가 필요할거같은데 쿠키를 사용 못하게 된다면 보통 클라이언트에서는 로컬스토리지 이외에는 대체제가 없는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '실행이 잘되었지만 그래서 오히려 납득이 안되는 부분이 있습니다.',
'BoardComment' => <<<EOT
안녕하세요 선생님. 좋은 강의 진심으로 감사드립니다.

실행이 잘 됩니다. 왜 잘 되지?하며 이해가 안되는 부분이 있어서 질문드립니다.

Attendance.jsx 코드를 보면 함수 정의 후 Attendance함수만을 export 하고 있습니다.
students 배열은 export되지 않고 있어
Attendance함수를 index.js에 불러가서 거기서 사용하면 거기는 students 배열은 불러가지 않았기 때문에
정의되지 않았다며 오류가 떠야할 것 같은 느낌이 들었는데 잘 실행이 되었습니다.
함수만을 export했는데 어떻게 students배열까지 index.js에서 잘 사용할 수 있는걸까요?

그리고 간단한 추가질문이 하나 더 있습니다.
저번 강의에서 리스트의 키값을 지정해주지 않으면 리액트에서는 자동으로 인덱스를 키값으로 설정한다라는 말씀을 잠깐하셨습니다.
그런데 왜 키값을 지정해주지 않았을 때 오류가 뜨는걸까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Seeking Insights on 오픽 (OPIC) Proficiency Levels 🇰🇷',
'BoardComment' => <<<EOT
I hope this message finds you well. I'm currently navigating the realm of 오픽 등급 proficiency, and I'm eager to connect with others who have experience or insights to share.

OPIC Levels Clarification: I'm curious about the various proficiency levels in OPIC. Could someone shed light on what each level entails, and what kind of language skills are expected at different stages?

Preparation Strategies: For those who have successfully advanced through OPIC levels, do you have any tips or strategies for effective preparation? What resources or methods proved most helpful in honing your language skills?

Common Challenges: In your experience, what are some common challenges people face when aiming to improve their OPIC scores? Are there particular aspects of the test that test-takers often find challenging?

Real-Life Applications: How has achieving a specific OPIC level impacted your daily life, career, or academic pursuits? I'm interested in hearing about real-life applications and the practical benefits of OPIC proficiency.

Any Recent Changes or Updates: As language tests evolve, have there been any recent changes or updates to the OPIC system that test-takers should be aware of?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '[최대 길이 연속부분수열] 틀린 이유',
'BoardComment' => <<<EOT
import java.util.*;

class Main {
public int solution(int n, int m, int[] arr) {
int lt = 0, sum = 0, max = 0, count = 0;
for(int rt = 0; rt < n; rt++) {
if(arr[rt] == 1) {
sum += arr[rt];
} else if (arr[rt] == 0) {
if(count++ < m) {
sum += 1;
} else {
if (sum >= max) {
max = sum;
sum = 0;
lt ++;
rt = lt;
count = 0;
}
}
}
}
return max;
}

public static void main(String[] args) {
Main T = new Main();
Scanner in = new Scanner(System.in);
int n = in.nextInt();
int m = in.nextInt();
int[] arr = new int[n];
for(int i = 0; i < n; i++) {
arr[i] = in.nextInt();
}
System.out.print(T.solution(n, m, arr));
}
}
EOT,
'BoardView' => $view,
'BoardFlg' => 0,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '커리큘럼 질문드려요.',
'BoardComment' => <<<EOT
자바, 스프링부트 백엔드 과정을 수강했는데요.

node.js까지 꼭 해야하나요?

지금 생각하는건 부트랑 vue.js 연결해서 SPA 만들고 싶은데.

그럼 저같은 백엔드 과정 준비했던 수강생은 별도로 node.js까진 수강하지 않아도 되는건가요?

당근마켓 기반 데이터베이스 강의까지 로드맵 따라가면 될까요?

자바스크립트 책이 읽어보고 좋아서 프론트쪽은 선생님한테 배워보려고 하는데

커리큘럼좀 설명부탁드려요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'postman에서 오류가 납니다..',
'BoardComment' => <<<EOT
이전까지는 모든게 다 되는데 postman test에 전역 변수를 잡고 Authorization에 {{jwt_tutorial_token}}을 넣어서 send 해봐도

Something went wrong while running your scripts. Check Postman Console for more info 라는 작은 팝업창만 뜰 뿐, 아무런 반응이 없습니다...

모든 코드와 postman에도 모두 동일하게 작성을 했는데, 왜 이런 오류가 발생하는지 알 수 있을까요..?ㅜㅜ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '매서드에서 void가 쓰이는 경우',
'BoardComment' => <<<EOT
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.



메서드에서 반환타입이 없어서 void를 쓰는경우(return을 쓸 필요 없는 경우)는 메서드가 출력문 system.out.println("내용");

으로만 이루어진 경우 뿐 인가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'firebase 관련오류',
'BoardComment' => <<<EOT
안녕하세요..

사용자 인증 시 아래와 같은

예외가 발생합니다.



FirebaseAuthException ([firebase_auth/too-many-requests] We have blocked all requests from this device due to unusual activity. Try again later.)



여기저기 찾아봐도 이유를 모르겠습니다

혹시, 이유를 아시면 답변 부탁드리겠습니다.

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Cache-Control: no-cache 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요.
강의를 듣다가 Cache-Control: no-cache 관련한 질문이 있어서 질문 드립니다.

만약에 데이터를 요청할 때 캐시 유효시간이 남았다면 서버와의 네트워크 통신이나 요청메시지, 응답메시지 없이 브라우저 캐시 저장소에서 데이터를 가져오는 게 맞나요?
1번이 맞다면 Cache-Control: no-cache 를 하면 캐시 유효시간이 남아 서버와의 통신이 필요 없는데도 불구하고 원 서버와의 통신을 통해 검증한다고 이해하면 될까요??
클라이언트가 원 서버에 검증하고 사용하기 위해서 Cache-Control: no-cache를 요청 메시지에서 사용하는 건가요? 아니면 클라이언트에게 원 서버와의 검증을 강제(?)하기 위해서 서버의 응답 메시지에서 사용하는 건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
안녕하세요, 선생님. 이번 강의에서 질문이 하나 더 있었습니다! 앞에 남긴 질문과 한꺼번에 남길걸 그랬네요..😅  선생님께서 추천을 통한 주문 전환률 (CVR) 을 구하기 위해 작성한 쿼리를 보니# 선생님 풀이 SELECT event_date , use_recomend_payment / click_recomend_food AS recommend_cvr FROM( SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food #추천음식 클릭 FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date ) AS temp
1) 추천상품 클릭하여 전환된 횟수 ( use_recomend_payment)와, 추천음식을 클릭한 횟수(click_recommend_food) 를 구해서 from절 서브쿼리에 넣기2) 추천상품 클릭하여 전환된 횟수 / 추천음식 클릭 횟수 연산하여 recommend_cvr 구하기
이렇게 from 절을 써야하더라구요.  선생님의 해설을 보기 전, 스스로 풀었을 때는 from절을 쓰지 않고 그냥 한번에 썼었습니다. #셀프풀이 SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") / COUNTIF(event_name = "click_recommend_food") AS recommend_cvr FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date혹시 이렇게 한번에 쓰면 오류가 발생하는지, 서브쿼리를 사용하여 풀어야 하는 이유가 무엇인지 궁금합니다! 여유있으실 때 회신 주세요.감사합니다! 
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
Model model 파라미터를 넘기면서

model.addAttribute() 메서드의 동작원리에 대해 갑자기 궁금증이 생겼는데, 현재 로직이 /basic/items 으로 웹페이지가 넘어가면 items 메서드가 호출되면서 model.addAttribute("items",item); 메서드를 통해 모델에 items라는 이름에 items 객체가 저장이 되잖아요



새로운 아이템을 등록한 뒤에, 다시 /basic/items 페이지로 넘어가게 된다면 다시 items 메서드가 호출될텐데 이때 다시 로직이 돌면서 model.addAttribute("items", item); 메서드가 호출이 될텐데, 이럴때에는 items 이름에 정보를 덮어씌우는 방식으로 모델에 넘어가는건가요? 아니면 items객체에 수정된 부분만 고쳐서 모델에 넘어가는건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '파일 경로 설정',
'BoardComment' => <<<EOT
=================

현업자인지라 업무때문에 답변이 늦을 수 있습니다. (길어도 만 3일 안에는 꼭 답변드리려고 노력중입니다 ㅠㅠ)

강의에서 다룬 내용들의 질문들을 부탁드립니다!! (설치과정, 강의내용을 듣고 이해가 안되었던 부분들, 강의의 오류 등등)
이런 질문은 부담스러워요.. (답변거부해도 양해 부탁드려요)
개인 과제, 강의에서 다루지 않은 내용들의 궁금증 해소, 영상과 다른 접근방법 후 디버깅 요청, 고민 상담 등..
글쓰기 에티튜드를 지켜주세요 (저 포함, 다른 수강생 분들이 함께보는 공간입니다.)
서로 예의를 지키며 존중하는 문화를 만들어가요.
질문글을 보고 내용을 이해할 수 있도록 남겨주시면 답변에 큰 도움이 될 것 같아요. (상세히 작성하면 더 좋아요! )
먼저 유사한 질문이 있었는지 검색해보세요.
잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.
==================

즐거운 연말 보내시는 와중에 별거아닌 질문을 드리는것 같아 죄송합니다 ㅠㅠ



[진행사항]

Verilog HDL 1 강의를 수강하며, C드라이브에 Linux 환경을 구축한 뒤, 실습파일을 다운받아 실습을 진행했습니다.
이번 FPGA 강의를 수강하게 되며 VItis 설치를 하게 되었는데, C드라이브의 용량이 부족하게되어 D드라이브를 새로 구축하였습니다.
이후 Vitis (Window)를 D드라이브에 설치 후 정상동작함을 확인하였습니다.


[질문사항]

제공실습 파일을 넣으실 때(강의 01:48), C드라이브의 FPGA라는 파일에 넣으셨는데, D드라이브에서 진행하게 될 경우 똑같이 D드라이브 내에 FPGA라는 파일을 생성하고 실습을 진행하면 되는지가 궁금합니다.
Vivado 프로젝트 실행 후, Project 생성 시, 파일경로가 C드라이브로 자동설정되는데 기존 파일이 있는 D드라이브로 잡아줘야 하는지 궁금합니다.


아래에는 C드라이브, D드라이브 경로 사진입니다.

[C드라이브]


EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '토큰쿠키저장에 대해서 질문드립니다.',
'BoardComment' => <<<EOT
=================
강의에서 토큰을 보관하기에 보안에도 좋고 적절한 곳이 쿠키라고 말씀해주셨는데 보통 쿠키에 저장을 많이 하는편일까요?

내년 하반기에 크롬에서 쿠키차단예정을 하고 있다고 들어서 왠지 다른 대체제가 필요할거같은데 쿠키를 사용 못하게 된다면 보통 클라이언트에서는 로컬스토리지 이외에는 대체제가 없는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '실행이 잘되었지만 그래서 오히려 납득이 안되는 부분이 있습니다.',
'BoardComment' => <<<EOT
안녕하세요 선생님. 좋은 강의 진심으로 감사드립니다.

실행이 잘 됩니다. 왜 잘 되지?하며 이해가 안되는 부분이 있어서 질문드립니다.

Attendance.jsx 코드를 보면 함수 정의 후 Attendance함수만을 export 하고 있습니다.
students 배열은 export되지 않고 있어
Attendance함수를 index.js에 불러가서 거기서 사용하면 거기는 students 배열은 불러가지 않았기 때문에
정의되지 않았다며 오류가 떠야할 것 같은 느낌이 들었는데 잘 실행이 되었습니다.
함수만을 export했는데 어떻게 students배열까지 index.js에서 잘 사용할 수 있는걸까요?

그리고 간단한 추가질문이 하나 더 있습니다.
저번 강의에서 리스트의 키값을 지정해주지 않으면 리액트에서는 자동으로 인덱스를 키값으로 설정한다라는 말씀을 잠깐하셨습니다.
그런데 왜 키값을 지정해주지 않았을 때 오류가 뜨는걸까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Seeking Insights on 오픽 (OPIC) Proficiency Levels 🇰🇷',
'BoardComment' => <<<EOT
I hope this message finds you well. I'm currently navigating the realm of 오픽 등급 proficiency, and I'm eager to connect with others who have experience or insights to share.

OPIC Levels Clarification: I'm curious about the various proficiency levels in OPIC. Could someone shed light on what each level entails, and what kind of language skills are expected at different stages?

Preparation Strategies: For those who have successfully advanced through OPIC levels, do you have any tips or strategies for effective preparation? What resources or methods proved most helpful in honing your language skills?

Common Challenges: In your experience, what are some common challenges people face when aiming to improve their OPIC scores? Are there particular aspects of the test that test-takers often find challenging?

Real-Life Applications: How has achieving a specific OPIC level impacted your daily life, career, or academic pursuits? I'm interested in hearing about real-life applications and the practical benefits of OPIC proficiency.

Any Recent Changes or Updates: As language tests evolve, have there been any recent changes or updates to the OPIC system that test-takers should be aware of?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);



Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);

$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Seeking Insights on 오픽 (OPIC) Proficiency Levels 🇰🇷',
'BoardComment' => <<<EOT
I hope this message finds you well. I'm currently navigating the realm of 오픽 등급 proficiency, and I'm eager to connect with others who have experience or insights to share.

OPIC Levels Clarification: I'm curious about the various proficiency levels in OPIC. Could someone shed light on what each level entails, and what kind of language skills are expected at different stages?

Preparation Strategies: For those who have successfully advanced through OPIC levels, do you have any tips or strategies for effective preparation? What resources or methods proved most helpful in honing your language skills?

Common Challenges: In your experience, what are some common challenges people face when aiming to improve their OPIC scores? Are there particular aspects of the test that test-takers often find challenging?

Real-Life Applications: How has achieving a specific OPIC level impacted your daily life, career, or academic pursuits? I'm interested in hearing about real-life applications and the practical benefits of OPIC proficiency.

Any Recent Changes or Updates: As language tests evolve, have there been any recent changes or updates to the OPIC system that test-takers should be aware of?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '[최대 길이 연속부분수열] 틀린 이유',
'BoardComment' => <<<EOT
import java.util.*;

class Main {
public int solution(int n, int m, int[] arr) {
int lt = 0, sum = 0, max = 0, count = 0;
for(int rt = 0; rt < n; rt++) {
if(arr[rt] == 1) {
sum += arr[rt];
} else if (arr[rt] == 0) {
if(count++ < m) {
sum += 1;
} else {
if (sum >= max) {
max = sum;
sum = 0;
lt ++;
rt = lt;
count = 0;
}
}
}
}
return max;
}

public static void main(String[] args) {
Main T = new Main();
Scanner in = new Scanner(System.in);
int n = in.nextInt();
int m = in.nextInt();
int[] arr = new int[n];
for(int i = 0; i < n; i++) {
arr[i] = in.nextInt();
}
System.out.print(T.solution(n, m, arr));
}
}
EOT,
'BoardView' => $view,
'BoardFlg' => 0,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '커리큘럼 질문드려요.',
'BoardComment' => <<<EOT
자바, 스프링부트 백엔드 과정을 수강했는데요.

node.js까지 꼭 해야하나요?

지금 생각하는건 부트랑 vue.js 연결해서 SPA 만들고 싶은데.

그럼 저같은 백엔드 과정 준비했던 수강생은 별도로 node.js까진 수강하지 않아도 되는건가요?

당근마켓 기반 데이터베이스 강의까지 로드맵 따라가면 될까요?

자바스크립트 책이 읽어보고 좋아서 프론트쪽은 선생님한테 배워보려고 하는데

커리큘럼좀 설명부탁드려요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'postman에서 오류가 납니다..',
'BoardComment' => <<<EOT
이전까지는 모든게 다 되는데 postman test에 전역 변수를 잡고 Authorization에 {{jwt_tutorial_token}}을 넣어서 send 해봐도

Something went wrong while running your scripts. Check Postman Console for more info 라는 작은 팝업창만 뜰 뿐, 아무런 반응이 없습니다...

모든 코드와 postman에도 모두 동일하게 작성을 했는데, 왜 이런 오류가 발생하는지 알 수 있을까요..?ㅜㅜ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '매서드에서 void가 쓰이는 경우',
'BoardComment' => <<<EOT
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.



메서드에서 반환타입이 없어서 void를 쓰는경우(return을 쓸 필요 없는 경우)는 메서드가 출력문 system.out.println("내용");

으로만 이루어진 경우 뿐 인가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'firebase 관련오류',
'BoardComment' => <<<EOT
안녕하세요..

사용자 인증 시 아래와 같은

예외가 발생합니다.



FirebaseAuthException ([firebase_auth/too-many-requests] We have blocked all requests from this device due to unusual activity. Try again later.)



여기저기 찾아봐도 이유를 모르겠습니다

혹시, 이유를 아시면 답변 부탁드리겠습니다.

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => 'Cache-Control: no-cache 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요.
강의를 듣다가 Cache-Control: no-cache 관련한 질문이 있어서 질문 드립니다.

만약에 데이터를 요청할 때 캐시 유효시간이 남았다면 서버와의 네트워크 통신이나 요청메시지, 응답메시지 없이 브라우저 캐시 저장소에서 데이터를 가져오는 게 맞나요?
1번이 맞다면 Cache-Control: no-cache 를 하면 캐시 유효시간이 남아 서버와의 통신이 필요 없는데도 불구하고 원 서버와의 통신을 통해 검증한다고 이해하면 될까요??
클라이언트가 원 서버에 검증하고 사용하기 위해서 Cache-Control: no-cache를 요청 메시지에서 사용하는 건가요? 아니면 클라이언트에게 원 서버와의 검증을 강제(?)하기 위해서 서버의 응답 메시지에서 사용하는 건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
안녕하세요, 선생님. 이번 강의에서 질문이 하나 더 있었습니다! 앞에 남긴 질문과 한꺼번에 남길걸 그랬네요..😅  선생님께서 추천을 통한 주문 전환률 (CVR) 을 구하기 위해 작성한 쿼리를 보니# 선생님 풀이 SELECT event_date , use_recomend_payment / click_recomend_food AS recommend_cvr FROM( SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food #추천음식 클릭 FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date ) AS temp
1) 추천상품 클릭하여 전환된 횟수 ( use_recomend_payment)와, 추천음식을 클릭한 횟수(click_recommend_food) 를 구해서 from절 서브쿼리에 넣기2) 추천상품 클릭하여 전환된 횟수 / 추천음식 클릭 횟수 연산하여 recommend_cvr 구하기
이렇게 from 절을 써야하더라구요.  선생님의 해설을 보기 전, 스스로 풀었을 때는 from절을 쓰지 않고 그냥 한번에 썼었습니다. #셀프풀이 SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") / COUNTIF(event_name = "click_recommend_food") AS recommend_cvr FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date혹시 이렇게 한번에 쓰면 오류가 발생하는지, 서브쿼리를 사용하여 풀어야 하는 이유가 무엇인지 궁금합니다! 여유있으실 때 회신 주세요.감사합니다! 
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
Model model 파라미터를 넘기면서

model.addAttribute() 메서드의 동작원리에 대해 갑자기 궁금증이 생겼는데, 현재 로직이 /basic/items 으로 웹페이지가 넘어가면 items 메서드가 호출되면서 model.addAttribute("items",item); 메서드를 통해 모델에 items라는 이름에 items 객체가 저장이 되잖아요



새로운 아이템을 등록한 뒤에, 다시 /basic/items 페이지로 넘어가게 된다면 다시 items 메서드가 호출될텐데 이때 다시 로직이 돌면서 model.addAttribute("items", item); 메서드가 호출이 될텐데, 이럴때에는 items 이름에 정보를 덮어씌우는 방식으로 모델에 넘어가는건가요? 아니면 items객체에 수정된 부분만 고쳐서 모델에 넘어가는건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '파일 경로 설정',
'BoardComment' => <<<EOT
=================

현업자인지라 업무때문에 답변이 늦을 수 있습니다. (길어도 만 3일 안에는 꼭 답변드리려고 노력중입니다 ㅠㅠ)

강의에서 다룬 내용들의 질문들을 부탁드립니다!! (설치과정, 강의내용을 듣고 이해가 안되었던 부분들, 강의의 오류 등등)
이런 질문은 부담스러워요.. (답변거부해도 양해 부탁드려요)
개인 과제, 강의에서 다루지 않은 내용들의 궁금증 해소, 영상과 다른 접근방법 후 디버깅 요청, 고민 상담 등..
글쓰기 에티튜드를 지켜주세요 (저 포함, 다른 수강생 분들이 함께보는 공간입니다.)
서로 예의를 지키며 존중하는 문화를 만들어가요.
질문글을 보고 내용을 이해할 수 있도록 남겨주시면 답변에 큰 도움이 될 것 같아요. (상세히 작성하면 더 좋아요! )
먼저 유사한 질문이 있었는지 검색해보세요.
잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.
==================

즐거운 연말 보내시는 와중에 별거아닌 질문을 드리는것 같아 죄송합니다 ㅠㅠ



[진행사항]

Verilog HDL 1 강의를 수강하며, C드라이브에 Linux 환경을 구축한 뒤, 실습파일을 다운받아 실습을 진행했습니다.
이번 FPGA 강의를 수강하게 되며 VItis 설치를 하게 되었는데, C드라이브의 용량이 부족하게되어 D드라이브를 새로 구축하였습니다.
이후 Vitis (Window)를 D드라이브에 설치 후 정상동작함을 확인하였습니다.


[질문사항]

제공실습 파일을 넣으실 때(강의 01:48), C드라이브의 FPGA라는 파일에 넣으셨는데, D드라이브에서 진행하게 될 경우 똑같이 D드라이브 내에 FPGA라는 파일을 생성하고 실습을 진행하면 되는지가 궁금합니다.
Vivado 프로젝트 실행 후, Project 생성 시, 파일경로가 C드라이브로 자동설정되는데 기존 파일이 있는 D드라이브로 잡아줘야 하는지 궁금합니다.


아래에는 C드라이브, D드라이브 경로 사진입니다.

[C드라이브]


EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => $class,
'BoardTitle' => '토큰쿠키저장에 대해서 질문드립니다.',
'BoardComment' => <<<EOT
=================
강의에서 토큰을 보관하기에 보안에도 좋고 적절한 곳이 쿠키라고 말씀해주셨는데 보통 쿠키에 저장을 많이 하는편일까요?

내년 하반기에 크롬에서 쿠키차단예정을 하고 있다고 들어서 왠지 다른 대체제가 필요할거같은데 쿠키를 사용 못하게 된다면 보통 클라이언트에서는 로컬스토리지 이외에는 대체제가 없는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);





$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '[최대 길이 연속부분수열] 틀린 이유',
'BoardComment' => <<<EOT
import java.util.*;

class Main {
public int solution(int n, int m, int[] arr) {
int lt = 0, sum = 0, max = 0, count = 0;
for(int rt = 0; rt < n; rt++) {
if(arr[rt] == 1) {
sum += arr[rt];
} else if (arr[rt] == 0) {
if(count++ < m) {
sum += 1;
} else {
if (sum >= max) {
max = sum;
sum = 0;
lt ++;
rt = lt;
count = 0;
}
}
}
}
return max;
}

public static void main(String[] args) {
Main T = new Main();
Scanner in = new Scanner(System.in);
int n = in.nextInt();
int m = in.nextInt();
int[] arr = new int[n];
for(int i = 0; i < n; i++) {
arr[i] = in.nextInt();
}
System.out.print(T.solution(n, m, arr));
}
}
EOT,
'BoardView' => $view,
'BoardFlg' => 0,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '커리큘럼 질문드려요.',
'BoardComment' => <<<EOT
자바, 스프링부트 백엔드 과정을 수강했는데요.

node.js까지 꼭 해야하나요?

지금 생각하는건 부트랑 vue.js 연결해서 SPA 만들고 싶은데.

그럼 저같은 백엔드 과정 준비했던 수강생은 별도로 node.js까진 수강하지 않아도 되는건가요?

당근마켓 기반 데이터베이스 강의까지 로드맵 따라가면 될까요?

자바스크립트 책이 읽어보고 좋아서 프론트쪽은 선생님한테 배워보려고 하는데

커리큘럼좀 설명부탁드려요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'postman에서 오류가 납니다..',
'BoardComment' => <<<EOT
이전까지는 모든게 다 되는데 postman test에 전역 변수를 잡고 Authorization에 {{jwt_tutorial_token}}을 넣어서 send 해봐도

Something went wrong while running your scripts. Check Postman Console for more info 라는 작은 팝업창만 뜰 뿐, 아무런 반응이 없습니다...

모든 코드와 postman에도 모두 동일하게 작성을 했는데, 왜 이런 오류가 발생하는지 알 수 있을까요..?ㅜㅜ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '매서드에서 void가 쓰이는 경우',
'BoardComment' => <<<EOT
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.



메서드에서 반환타입이 없어서 void를 쓰는경우(return을 쓸 필요 없는 경우)는 메서드가 출력문 system.out.println("내용");

으로만 이루어진 경우 뿐 인가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '안녕하세요, react-query 관해서 궁금해서 질문드립니다.',
'BoardComment' => <<<EOT
react-query의 쓰임새가 잘 이해가 안가서 질문드립니다.

1. 컴포넌트가 server component 일때는 react-query에 prefetchQuery를 사용하여 미리 서버에서 데이터를 가져오고 dehydrate를 통하여 클라이언트에 전송할수있는 형태로 만들어주고,
HydrationBoundary 로 감싸여진 클라이언트 컴포넌트는 서버에서 미리 가져온 데이터를 클라이언트의 쿼리 캐시에 적용하여, getQueryData를 사용하여 네트워크 요청 없이 데이터를 가져올수있고,
useQuery 같은 경우에는 미리 가져온 데이터 외에 클라이언트에서 데이터를 가져올 때 사용하는 걸로 이해했습니다. 맞을까요??

2. queryKey 같은 경우에는 queryFn에 있는 함수에 queryKey를 넘기는 경우가 있고 안넘기는 경우가 있던데 강의에서 props에 따라 키가 바뀌는 경우에만 넘기게 된다고 이해했습니다.
그러면 server component에서 모든걸 prefetchQuery 해서 getQueryData 로 가져다 쓰지 않는 이유가 useQuery를 이용해서 key 값을 다이나믹하게 바뀌는 요청들을 컨트롤 하기 위해서라고 생각이 들었습니다.
하지만 아래와 같이 queryKey를 넘기지 않는 경우에도 useQuery를 사용하는데 prefetchQuery를 해놓고 getQueryData 를 사용할지, prefetchQuery 를 사용하지않고 useQuery를 사용할지 에 대해서 나누는 기준이 있을까요?

============================
const { data } = useQuery<Hashtag[]>({
queryKey: ["trends"],
queryFn: getTrends,
staleTime: 60 * 1000,
gcTime: 300 * 1000,
enabled: !!session?.user,
});
============================
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'UICollectionView 클래스 addSubView 없음 질문',
'BoardComment' => <<<EOT
안녕하세요! 셀 구현하여 Collection View에 등록하기 초입 시작했는데,

SetUI() 메서드에서 self.addSubVIew()로 라벨이랑 배경이미지 뷰 추가시켜 주는데, Value of type 'BannerCollectionViewCell' has no member 'addSubView' 라는 에러가 뜹니다.

혹시 다른 클래스를 상속해야 하나요..?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '무상태 프로토콜 을 제대로 이해한건지 모르겠습니다',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)

[질문 내용]
Stateless 의 대표적인 예 는 쿠키 이며 Stateful 의 대표적인 예는 세션 이라고 이해를 했습니다.

그렇다고 한다면 여기서 궁금증이 생깁니다. HTTP 는 기본적으로 stateless 이며 HTTP 요청은 이전 요청과 상관없이 독립적으로 처리되는데 HTTP 는 통신 프로토콜 중 하나가 아닌가요?
세션 또한 서버와 통신을 해야 데이터를 받아 오고 HTTP 통신을 통해 데이터를 받아올 텐데 세션의 정의가 뭔가 모호해진거 같습니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '롤링 업데이트 시 이전 Replicasets 문의',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)

[질문 내용]
Stateless 의 대표적인 예 는 쿠키 이며 Stateful 의 대표적인 예는 세션 이라고 이해를 했습니다.

그렇다고 한다면 여기서 궁금증이 생깁니다. HTTP 는 기본적으로 stateless 이며 HTTP 요청은 이전 요청과 상관없이 독립적으로 처리되는데 HTTP 는 통신 프로토콜 중 하나가 아닌가요?
세션 또한 서버와 통신을 해야 데이터를 받아 오고 HTTP 통신을 통해 데이터를 받아올 텐데 세션의 정의가 뭔가 모호해진거 같습니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '라우팅에서 언더바(_) 폴더를 사용했을때 어떤 이점이 있나요?',
'BoardComment' => <<<EOT
안녕하세요, 강의 잘 듣고 있습니다!
강의를 듣다보니 하나 의문점이 들어 질문드립니다.

app 폴더 하위에서 "page.tsx"로 만들면 nextjs에서 자동으로 라우팅하여 경로로 인식한다고 설명해주셨는데요. 강의를 듣다보니 언더바를 붙인 폴더 경로는 라우팅에 포함되지 않는다고 이야기를 하시더라구요.



파일명을 page로 만들지 않으면 라우팅에 포함되지 않는데, 언더바 폴더를 사용하는 이유가 있는지 궁금합니다.



공식 문서에서는 명시적인 구분/이름 충돌 방지등 이점 설명이 있지만, 크게 와닿지 않아서 질문드려요!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'iPhone simulator의 아래와 같은 오류',
'BoardComment' => <<<EOT
[ERROR:flutter/shell/platform/darwin/graphics/FlutterDarwinContextMetalImpeller.mm(42)] Using the Impeller rendering backend.



코팩님. 실행은 정상적으로 되지만 위와 같은 오류가 있는데 인터넷 검색해 보니 프로그램에서 바꾸면 된다고 나오는데, 근본적인 해결책은 없을까요? 셋팅 등에서..
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '제가 만든 웹사이트 너드작업소 피드백을 받을 수 있을까요?',
'BoardComment' => <<<EOT
안녕하세요~

주변 지인들랑 같이 작게 웹페이지 하나 만들었는데 피드백을 받아보고 싶습니다!

* 홈페이지 링크 : https://nerd-work-space.vercel.app (PC에서만 접근 가능합니다)

--
온라인 작업공간 <너드 작업소>

혼자서 외롭게 새벽 코딩하는 분들..

혼자 포트폴리오 만드느라 외로운 디자이너 분들..

블로거, 웹소설 작가, 영상 편집자 등등 혼자 PC 작업하기 심심하신 분들!

같이 모여서 작업할 수 있는 온라인 작업 공간 '너드 작업소' 웹페이지 한번 둘러봐주시면 감사하겠습니다🥺


오늘 해야할 목표도 설정할 수 있고,

목표 작업시간을 달성하면 1pixel씩 낙서할 수 있는 게임 요소도 넣어보았습니다 🙌🏻

한번 써봐주시고 의견 남겨주시면 열심히 개선해나가볼게요!!

버그 제보도 환영합니다 ㅎㅎ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '왜 순수한 자바로 테스트 해야 하나요?',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)

네


2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)

네


3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

네

[질문 내용]
1. 제목과 같은 내용입니다. 강의 어느 편인가 해당 내용에 대해서 짧게 답변 해주신 부분을 어렴풋이 본거 같은데 잊어서 질문 드립니다. 해당 질문에 대한 답변 또는 관련 영상을 혹시 아신다면 감사 드릴거 같습니다.

2. 해당 질문에 대한 원인은 다음과 같습니다. 순수한 자바 코드가 스프링 프레임워크를 포함한 것보다 상대적으로 작은 범위여서 일단 공통 부분인 자바 파트에서 테스트를 하고 그 다음 스프링으로 가는 것이 맞겠다는게 처음 생각이었습니다. 근데 문득 이게 맞나 ? 명확한 근거가 아닌 저의 추측에 기반한 근거였기 때문에 1번의 설명과 같이 모호해서 질문을 드립니다.

개발자인데 아직도 문서를 두서 없이 작성합니다.
해당 부분에 있어 양해를 구합니다.
읽어주셔서 감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Autowired 관련 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
의존관계 자동주입에 대해 정리를 하던도 중 제가 이해한것이 맞는지 궁금하여 질문드립니다.



컨테이너에 빈을 등록하는 방법에는 대표적으로,

1.컴포넌트 스캔을 통해 등록하는 방법

2. 자바설정클래스를 통해 등록하는 방법

3 xml 파일을 통해 등록하는 방법

이 있고 이때 의존관계주입을 2번과 3번에서는 직접 구현체를 정의? 해주었지만

컴포넌트 스캔을 사용할때 의존관계주입을 (OCP와 DIP 원칙을 지키며) 해주기 위해선

@Autowired 을 사용해야한다. 그리고 @Autowired 을 해주는 방법에는 아래와같은 방법이 있다.

생성자주입
필드주입
setter 주입
일반메서드 주입
이렇게 이해하였는데 제가 이해 한 것이 맞나요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'N:M 을 1:N N:1 로 풀면 이런 모습일까요?',
'BoardComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? 네
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? 네

[질문 내용]

안녕하세요. 항상 영한님의 강의를 수강하며 재밌게 공부하고 있습니다.

질문이 있습니다.
Item & Category 를

다대다가 아니라

일대다 다대일로 연관관계 매핑을 할 때

중간테이블을 직접 만든다면 다음과 같이 만들면 되는걸까요?

==
@Entity
public class Item {

@Id @GeneratedValue
@Column(name = "ITEM_ID")
private Long id;

private String name;

private int price;

private int stockQuantity;

@OneToMany
@JoinColumn(name = "ITEM_ID")
private List<CategoryItem> categoryItems = new ArrayList<>();

}
==

==
@Entity
public class CategoryItem {

@Id @GeneratedValue
@Column(name = "CATEGORY_ITEM_ID")
private Long id;

@ManyToOne
@JoinColumn(name = "CATEGORY_ID")
private Category category;

@ManyToOne
@JoinColumn(name = "ITEM_ID")
private Item item;
}
==

==
@Entity
public class Category {

@Id @GeneratedValue
@Column(name = "CATEGORY_ID")
private Long id;

private String name;

@OneToMany
@JoinColumn(name = "CATEGORY_ID")
private List<CategoryItem> categoryItems = new ArrayList<>();

@ManyToOne
@JoinColumn(name = "PARENT_ID")
private Category parent;

@OneToMany(mappedBy = "parent")
private List<Category> child = new ArrayList<>();
}
==
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '데이터 불균형',
'BoardComment' => <<<EOT
- 학습 관련 질문을 남겨주세요. 상세히 작성하면 더 좋아요!
- 먼저 유사한 질문이 있었는지 검색해보세요.
- 서로 예의를 지키며 존중하는 문화를 만들어가요.
- 잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.



안녕하세요. 데이터 불균형 수업 관련하여 질문드립니다.



수업중에 알려주신 예시는 classification 문제에서의 데이터 불균형 해결 방법을 알려주셨는데요,

혹시 regression 문제에서도 데이터 불균형 해결이 필요한것이 맞을까요? (예를들어 신장(키) 학습 시 평균 키를 가지는 샘플이 많은 경우)



regression 문제에서 데이터 불균형이 있을 경우, 어떤 방법으로 해결할 수 있을지 궁금합니다!

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Guard 이론 까지 학습 후 질문',
'BoardComment' => <<<EOT
안녕하세요.

1강~가드이론까지만 학습후 질문드립니다. (파이프강의에서도 안나왔고 뒤에 강의에 왠지 안나올거같아서)



클라이언트 요청이 컨트롤러까지 가면서

미들 -> 가드 -> 인터셉터 -> 파이프

의 단계를 거친다고 알려주셨는데

nest 에서 이렇게 레이어를 나누어둔 이유, 순서가 이렇게된 이유가 있을까요?

혹은 사실 하나의 레이어에서 동작하는건데 이해를 돕기위에 이런 단계를 거친다고 개념적으로만 나누어 둔것일까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'BackUp DB > Failed',
'BoardComment' => <<<EOT
PostgreSQL 여러번 지우고 재설치 하여 backup DB restore 결과가 Failed 나오네요 문제가 뭘까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '완강 후 실습 관련 질문',
'BoardComment' => <<<EOT
안녕하세요! 항상 좋은 강의 만들어 주셔서 감사합니다.

이번에 독하게 시작하는 C를 완강하고 자료구조를 듣는 중입니다. 그런데 C언어를 완강해도 능숙하게 다룰 수 있다는 느낌이 들지 않아서 C 코딩 예제를 플어보고 싶은데 혹시 추천해주실 만한 예제 사이트나 교재가 있으신가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'MemberRepositoryTest',
'BoardComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
WARNING: A Java agent has been loaded dynamically (C:\Users\home\.gradle\caches\modules-2\files-2.1\net.bytebuddy\byte-buddy-agent\1.14.10\90ed94ac044ea8953b224304c762316e91fd6b31\byte-buddy-agent-1.14.10.jar)

WARNING: If a serviceability tool is in use, please run with -XX:+EnableDynamicAgentLoading to hide this warning

WARNING: If a serviceability tool is not in use, please run with -Djdk.instrument.traceUsage for more information

WARNING: Dynamic loading of agents will be disallowed by default in a future release

OpenJDK 64-Bit Server VM warning: Sharing is only supported for boot loader classes because bootstrap classpath has been appended

테스트는 성공하는데 이렇게 경고문이 뜨는데 무시해도 될까요?? 구글링 해봐도 안나와서요
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '복합명사 정제 관련 문의',
'BoardComment' => <<<EOT
선생님 안녕하세요~ 실습을 해보다 의문점이 생겨 글을 남깁니다.



정제과정에서 혹시 두 단어로 만들어진 복합명사, 예를 들어 “국제법” 같은 경우 “국제” 와 ”법“으로 분석이 되는데요. 원글에 국제법으로 표기된 경우 이를 나누지 않고 ”국제법“으로 분석이 되게 할수 있는 방법이 있을까요?

이것저것 해봤는데 적용이 안되어 선생님께 도움을 청합니다!

감사합니다^^
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'MemoryMemberRepository',
'BoardComment' => <<<EOT
private static Map<Long, Member> store = new HashMap<>();
private static long sequence = 0L;

@Override
public Member save(Member member) {
member.setId(++sequence);
store.put(member.getId(), member);
return member;
}



여기서 궁금한게 save 메서드에서 왜 member를 return 하나요?

return 된 member를 사용하는 곳은 어디에도 안보이는데 왜 return 하는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'SpringDataJpa 테스트 오류',
'BoardComment' => <<<EOT

1

학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'request스코프와 컴포넌트 스캔',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요. 복습 중 궁금한 점이 생겨서 질문드립니다.

컴포넌트 스캔을 하게 되면 @component annotation이 붙은 객체를 스프링빈으로 등록해주는 것으로 알고 있습니다. 그런데 이 객체가 request 스코프일 경우 request요청이 있어야 스프링 빈으로 등록이 가능하다면 처음 스프링 애플리케이션을 실행할 때 @Component가 붙은 객체를 탐색하면서 @Scope("request")가 붙어있다면 스프링 컨테이너가 이 객체는 스프링빈으로 등록하지 않고 넘어가는 것인지 궁금합니다!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Unlocking Sustainable Business Solutions in Scotland`s Energy Landscape',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요. 복습 중 궁금한 점이 생겨서 질문드립니다.

컴포넌트 스캔을 하게 되면 @component annotation이 붙은 객체를 스프링빈으로 등록해주는 것으로 알고 있습니다. 그런데 이 객체가 request 스코프일 경우 request요청이 있어야 스프링 빈으로 등록이 가능하다면 처음 스프링 애플리케이션을 실행할 때 @Component가 붙은 객체를 탐색하면서 @Scope("request")가 붙어있다면 스프링 컨테이너가 이 객체는 스프링빈으로 등록하지 않고 넘어가는 것인지 궁금합니다!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'vitest를 설치했는데 이 작업 영역에서 아직 발견된 테스트가 없습니다.라는 문구가 떠서 테스트를 진행할 수 없습니다..',
'BoardComment' => <<<EOT
안녕하세요.

2.1 단위 테스트란 무엇일까? 강의를 들으며 따라하고 있습니다.

강의에서 진행하고 있는 unit-test-example 브랜치에서 TextField.spec.jsx 파일을 따라 치며 테스트를 하려고 하는데 vscode 테스트 메뉴에서 '이 작업 영역에서 아직 발견된 테스트가 없습니다.'라는 문구와 '추가 테스트 확장 설치'라는 버튼만 떠서 테스트 진행을 하지 못하고 있습니다.

강의에서 소개해주신 vitest를 설치하고 vscode를 껐다가 다시 켜봐도 테스트를 찾을 수 없다고 뜨고 있는데 제가 어떻게 하면 될까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'pagination 페이지 번호 유지하고 싶습니다.',
'BoardComment' => <<<EOT
예시로 pagination을 통해 4번째 게시물 목록을 보고 있는데

여기서 새로 고침을 하거나

4번 게시물 목록의 해당 게시글 클릭해서 들어가고 다시 뒤로 가기를 통해 게시물 목록으로 이동이 되었을 때

4번 게시물 목록이 아닌 1번 게시물 목록으로 초기화가 되는데

저는 4번 게시물 목록으로 유지하고 싶습니다.



다른 사이트의 게시물 홈페이지를 참고해 보면 page=4 이런 식으로 주소 창에 입력이 되어있는데 pages폴더에 폴더를 추가해서 유지를 해야 하나요?

인프런에서 질문 & 답변 부분에서도 다음과 같이 사용되고 있습니다.

https://www.inflearn.com/community/questions?page=2&order=recent



만약 폴더를 추가 해야 한다면 다음과 같이 폴더가 있을 때

boards 하위 폴더에 추가하고 해당 page폴더 안에

[boardId], new 폴더를 넣어야 할 까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '비동기 씬로딩관련해서 질문있습니다.',
'BoardComment' => <<<EOT
예제에서는 매니저들을 관리하기위해서 모노비헤비어를 상속하지않은상태에서 매니저들을 받아서 관리하게 돼있는데 씬매니저를 만들면서 비동기 씬이동을 구현해보고 싶어서 해보고있는데 모노비헤비어가 상속되지않은 클래스에서는 코루틴을 사용할수가없다보니까 어떻게 해야할지 막혔습니다...

기존의 씬매니저에서



IEnumerator LoadAsynchronouslytime(string name)

{

AsyncOperation operation = SceneManager.LoadSceneAsync(name);

operation.allowSceneActivation = false;

float elapsedTime = 0f;

while (!operation.isDone)

{

elapsedTime += Time.deltaTime;

Debug.Log(elapsedTime);

slider.value = elapsedTime / 10f;

if (elapsedTime > 10f)

{

operation.allowSceneActivation = true;

}

yield return null;

}

}

이런식으로 비동기 코드를 작성했는데요..

코루틴을 사용하면 정상작동을 하긴하는데 모노비헤비어를 상속받지않은 상태에서 어떻게 사용하는지 감이 안잡힙니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '톰캣이 웰컴 페이지를 찾는 과정이 궁금합니다.',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)

[질문 내용]
안녕하세요. 학습하다가 궁금한 점이 생겨 질문 글을 남깁니다.

url 창에 localhost:8080을 입력하면 웰컴 페이지(index.html)가 이전에 는 잘 떳는데 웰컴페이지를 조금 항목이 많은 html 페이지로 바꾸고 나니까 whitelabel 에러가 뜨더군요. 한참 여기저기 뒤져보다가 어떤 글에서 index.html은 main.resources.static 디렉토리 경로에 존재해야 한다고 하더라고요? 그래서 index.html을 해당 디렉토리에 두니까 다시 잘 도되더군요 근데 강의를 들었을 때는 main.webapp에 index.html에 둔 상태로 코딩을 했었을 때도 문제 없이 잘 되는 거 같은데 제가 강의를 들으면서 놓친 부분이 있는지 모르겠습니다. 왜 톰캣이 main.webapp에 존재하는 index.html을 못 찾았을까요? 그리고 왜 main.resources.static에 index.html을 추가로 만드니까 잘 찾아낼까요? 원리가 궁금합니다. 바쁘신 와중에 답변 주시면 정말 감사하겠습니다!
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'firebase 관련오류',
'BoardComment' => <<<EOT
안녕하세요..

사용자 인증 시 아래와 같은

예외가 발생합니다.



FirebaseAuthException ([firebase_auth/too-many-requests] We have blocked all requests from this device due to unusual activity. Try again later.)



여기저기 찾아봐도 이유를 모르겠습니다

혹시, 이유를 아시면 답변 부탁드리겠습니다.

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Cache-Control: no-cache 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요.
강의를 듣다가 Cache-Control: no-cache 관련한 질문이 있어서 질문 드립니다.

만약에 데이터를 요청할 때 캐시 유효시간이 남았다면 서버와의 네트워크 통신이나 요청메시지, 응답메시지 없이 브라우저 캐시 저장소에서 데이터를 가져오는 게 맞나요?
1번이 맞다면 Cache-Control: no-cache 를 하면 캐시 유효시간이 남아 서버와의 통신이 필요 없는데도 불구하고 원 서버와의 통신을 통해 검증한다고 이해하면 될까요??
클라이언트가 원 서버에 검증하고 사용하기 위해서 Cache-Control: no-cache를 요청 메시지에서 사용하는 건가요? 아니면 클라이언트에게 원 서버와의 검증을 강제(?)하기 위해서 서버의 응답 메시지에서 사용하는 건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
안녕하세요, 선생님. 이번 강의에서 질문이 하나 더 있었습니다! 앞에 남긴 질문과 한꺼번에 남길걸 그랬네요..😅  선생님께서 추천을 통한 주문 전환률 (CVR) 을 구하기 위해 작성한 쿼리를 보니# 선생님 풀이 SELECT event_date , use_recomend_payment / click_recomend_food AS recommend_cvr FROM( SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food #추천음식 클릭 FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date ) AS temp
1) 추천상품 클릭하여 전환된 횟수 ( use_recomend_payment)와, 추천음식을 클릭한 횟수(click_recommend_food) 를 구해서 from절 서브쿼리에 넣기2) 추천상품 클릭하여 전환된 횟수 / 추천음식 클릭 횟수 연산하여 recommend_cvr 구하기
이렇게 from 절을 써야하더라구요.  선생님의 해설을 보기 전, 스스로 풀었을 때는 from절을 쓰지 않고 그냥 한번에 썼었습니다. #셀프풀이 SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") / COUNTIF(event_name = "click_recommend_food") AS recommend_cvr FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date혹시 이렇게 한번에 쓰면 오류가 발생하는지, 서브쿼리를 사용하여 풀어야 하는 이유가 무엇인지 궁금합니다! 여유있으실 때 회신 주세요.감사합니다! 
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
Model model 파라미터를 넘기면서

model.addAttribute() 메서드의 동작원리에 대해 갑자기 궁금증이 생겼는데, 현재 로직이 /basic/items 으로 웹페이지가 넘어가면 items 메서드가 호출되면서 model.addAttribute("items",item); 메서드를 통해 모델에 items라는 이름에 items 객체가 저장이 되잖아요



새로운 아이템을 등록한 뒤에, 다시 /basic/items 페이지로 넘어가게 된다면 다시 items 메서드가 호출될텐데 이때 다시 로직이 돌면서 model.addAttribute("items", item); 메서드가 호출이 될텐데, 이럴때에는 items 이름에 정보를 덮어씌우는 방식으로 모델에 넘어가는건가요? 아니면 items객체에 수정된 부분만 고쳐서 모델에 넘어가는건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '파일 경로 설정',
'BoardComment' => <<<EOT
=================

현업자인지라 업무때문에 답변이 늦을 수 있습니다. (길어도 만 3일 안에는 꼭 답변드리려고 노력중입니다 ㅠㅠ)

강의에서 다룬 내용들의 질문들을 부탁드립니다!! (설치과정, 강의내용을 듣고 이해가 안되었던 부분들, 강의의 오류 등등)
이런 질문은 부담스러워요.. (답변거부해도 양해 부탁드려요)
개인 과제, 강의에서 다루지 않은 내용들의 궁금증 해소, 영상과 다른 접근방법 후 디버깅 요청, 고민 상담 등..
글쓰기 에티튜드를 지켜주세요 (저 포함, 다른 수강생 분들이 함께보는 공간입니다.)
서로 예의를 지키며 존중하는 문화를 만들어가요.
질문글을 보고 내용을 이해할 수 있도록 남겨주시면 답변에 큰 도움이 될 것 같아요. (상세히 작성하면 더 좋아요! )
먼저 유사한 질문이 있었는지 검색해보세요.
잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.
==================

즐거운 연말 보내시는 와중에 별거아닌 질문을 드리는것 같아 죄송합니다 ㅠㅠ



[진행사항]

Verilog HDL 1 강의를 수강하며, C드라이브에 Linux 환경을 구축한 뒤, 실습파일을 다운받아 실습을 진행했습니다.
이번 FPGA 강의를 수강하게 되며 VItis 설치를 하게 되었는데, C드라이브의 용량이 부족하게되어 D드라이브를 새로 구축하였습니다.
이후 Vitis (Window)를 D드라이브에 설치 후 정상동작함을 확인하였습니다.


[질문사항]

제공실습 파일을 넣으실 때(강의 01:48), C드라이브의 FPGA라는 파일에 넣으셨는데, D드라이브에서 진행하게 될 경우 똑같이 D드라이브 내에 FPGA라는 파일을 생성하고 실습을 진행하면 되는지가 궁금합니다.
Vivado 프로젝트 실행 후, Project 생성 시, 파일경로가 C드라이브로 자동설정되는데 기존 파일이 있는 D드라이브로 잡아줘야 하는지 궁금합니다.


아래에는 C드라이브, D드라이브 경로 사진입니다.

[C드라이브]


EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '토큰쿠키저장에 대해서 질문드립니다.',
'BoardComment' => <<<EOT
=================
강의에서 토큰을 보관하기에 보안에도 좋고 적절한 곳이 쿠키라고 말씀해주셨는데 보통 쿠키에 저장을 많이 하는편일까요?

내년 하반기에 크롬에서 쿠키차단예정을 하고 있다고 들어서 왠지 다른 대체제가 필요할거같은데 쿠키를 사용 못하게 된다면 보통 클라이언트에서는 로컬스토리지 이외에는 대체제가 없는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '실행이 잘되었지만 그래서 오히려 납득이 안되는 부분이 있습니다.',
'BoardComment' => <<<EOT
안녕하세요 선생님. 좋은 강의 진심으로 감사드립니다.

실행이 잘 됩니다. 왜 잘 되지?하며 이해가 안되는 부분이 있어서 질문드립니다.

Attendance.jsx 코드를 보면 함수 정의 후 Attendance함수만을 export 하고 있습니다.
students 배열은 export되지 않고 있어
Attendance함수를 index.js에 불러가서 거기서 사용하면 거기는 students 배열은 불러가지 않았기 때문에
정의되지 않았다며 오류가 떠야할 것 같은 느낌이 들었는데 잘 실행이 되었습니다.
함수만을 export했는데 어떻게 students배열까지 index.js에서 잘 사용할 수 있는걸까요?

그리고 간단한 추가질문이 하나 더 있습니다.
저번 강의에서 리스트의 키값을 지정해주지 않으면 리액트에서는 자동으로 인덱스를 키값으로 설정한다라는 말씀을 잠깐하셨습니다.
그런데 왜 키값을 지정해주지 않았을 때 오류가 뜨는걸까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Seeking Insights on 오픽 (OPIC) Proficiency Levels 🇰🇷',
'BoardComment' => <<<EOT
I hope this message finds you well. I'm currently navigating the realm of 오픽 등급 proficiency, and I'm eager to connect with others who have experience or insights to share.

OPIC Levels Clarification: I'm curious about the various proficiency levels in OPIC. Could someone shed light on what each level entails, and what kind of language skills are expected at different stages?

Preparation Strategies: For those who have successfully advanced through OPIC levels, do you have any tips or strategies for effective preparation? What resources or methods proved most helpful in honing your language skills?

Common Challenges: In your experience, what are some common challenges people face when aiming to improve their OPIC scores? Are there particular aspects of the test that test-takers often find challenging?

Real-Life Applications: How has achieving a specific OPIC level impacted your daily life, career, or academic pursuits? I'm interested in hearing about real-life applications and the practical benefits of OPIC proficiency.

Any Recent Changes or Updates: As language tests evolve, have there been any recent changes or updates to the OPIC system that test-takers should be aware of?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '[최대 길이 연속부분수열] 틀린 이유',
'BoardComment' => <<<EOT
import java.util.*;

class Main {
public int solution(int n, int m, int[] arr) {
int lt = 0, sum = 0, max = 0, count = 0;
for(int rt = 0; rt < n; rt++) {
if(arr[rt] == 1) {
sum += arr[rt];
} else if (arr[rt] == 0) {
if(count++ < m) {
sum += 1;
} else {
if (sum >= max) {
max = sum;
sum = 0;
lt ++;
rt = lt;
count = 0;
}
}
}
}
return max;
}

public static void main(String[] args) {
Main T = new Main();
Scanner in = new Scanner(System.in);
int n = in.nextInt();
int m = in.nextInt();
int[] arr = new int[n];
for(int i = 0; i < n; i++) {
arr[i] = in.nextInt();
}
System.out.print(T.solution(n, m, arr));
}
}
EOT,
'BoardView' => $view,
'BoardFlg' => 0,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '커리큘럼 질문드려요.',
'BoardComment' => <<<EOT
자바, 스프링부트 백엔드 과정을 수강했는데요.

node.js까지 꼭 해야하나요?

지금 생각하는건 부트랑 vue.js 연결해서 SPA 만들고 싶은데.

그럼 저같은 백엔드 과정 준비했던 수강생은 별도로 node.js까진 수강하지 않아도 되는건가요?

당근마켓 기반 데이터베이스 강의까지 로드맵 따라가면 될까요?

자바스크립트 책이 읽어보고 좋아서 프론트쪽은 선생님한테 배워보려고 하는데

커리큘럼좀 설명부탁드려요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'postman에서 오류가 납니다..',
'BoardComment' => <<<EOT
이전까지는 모든게 다 되는데 postman test에 전역 변수를 잡고 Authorization에 {{jwt_tutorial_token}}을 넣어서 send 해봐도

Something went wrong while running your scripts. Check Postman Console for more info 라는 작은 팝업창만 뜰 뿐, 아무런 반응이 없습니다...

모든 코드와 postman에도 모두 동일하게 작성을 했는데, 왜 이런 오류가 발생하는지 알 수 있을까요..?ㅜㅜ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '매서드에서 void가 쓰이는 경우',
'BoardComment' => <<<EOT
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.



메서드에서 반환타입이 없어서 void를 쓰는경우(return을 쓸 필요 없는 경우)는 메서드가 출력문 system.out.println("내용");

으로만 이루어진 경우 뿐 인가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'firebase 관련오류',
'BoardComment' => <<<EOT
안녕하세요..

사용자 인증 시 아래와 같은

예외가 발생합니다.



FirebaseAuthException ([firebase_auth/too-many-requests] We have blocked all requests from this device due to unusual activity. Try again later.)



여기저기 찾아봐도 이유를 모르겠습니다

혹시, 이유를 아시면 답변 부탁드리겠습니다.

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Cache-Control: no-cache 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요.
강의를 듣다가 Cache-Control: no-cache 관련한 질문이 있어서 질문 드립니다.

만약에 데이터를 요청할 때 캐시 유효시간이 남았다면 서버와의 네트워크 통신이나 요청메시지, 응답메시지 없이 브라우저 캐시 저장소에서 데이터를 가져오는 게 맞나요?
1번이 맞다면 Cache-Control: no-cache 를 하면 캐시 유효시간이 남아 서버와의 통신이 필요 없는데도 불구하고 원 서버와의 통신을 통해 검증한다고 이해하면 될까요??
클라이언트가 원 서버에 검증하고 사용하기 위해서 Cache-Control: no-cache를 요청 메시지에서 사용하는 건가요? 아니면 클라이언트에게 원 서버와의 검증을 강제(?)하기 위해서 서버의 응답 메시지에서 사용하는 건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
안녕하세요, 선생님. 이번 강의에서 질문이 하나 더 있었습니다! 앞에 남긴 질문과 한꺼번에 남길걸 그랬네요..😅  선생님께서 추천을 통한 주문 전환률 (CVR) 을 구하기 위해 작성한 쿼리를 보니# 선생님 풀이 SELECT event_date , use_recomend_payment / click_recomend_food AS recommend_cvr FROM( SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food #추천음식 클릭 FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date ) AS temp
1) 추천상품 클릭하여 전환된 횟수 ( use_recomend_payment)와, 추천음식을 클릭한 횟수(click_recommend_food) 를 구해서 from절 서브쿼리에 넣기2) 추천상품 클릭하여 전환된 횟수 / 추천음식 클릭 횟수 연산하여 recommend_cvr 구하기
이렇게 from 절을 써야하더라구요.  선생님의 해설을 보기 전, 스스로 풀었을 때는 from절을 쓰지 않고 그냥 한번에 썼었습니다. #셀프풀이 SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") / COUNTIF(event_name = "click_recommend_food") AS recommend_cvr FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date혹시 이렇게 한번에 쓰면 오류가 발생하는지, 서브쿼리를 사용하여 풀어야 하는 이유가 무엇인지 궁금합니다! 여유있으실 때 회신 주세요.감사합니다! 
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
Model model 파라미터를 넘기면서

model.addAttribute() 메서드의 동작원리에 대해 갑자기 궁금증이 생겼는데, 현재 로직이 /basic/items 으로 웹페이지가 넘어가면 items 메서드가 호출되면서 model.addAttribute("items",item); 메서드를 통해 모델에 items라는 이름에 items 객체가 저장이 되잖아요



새로운 아이템을 등록한 뒤에, 다시 /basic/items 페이지로 넘어가게 된다면 다시 items 메서드가 호출될텐데 이때 다시 로직이 돌면서 model.addAttribute("items", item); 메서드가 호출이 될텐데, 이럴때에는 items 이름에 정보를 덮어씌우는 방식으로 모델에 넘어가는건가요? 아니면 items객체에 수정된 부분만 고쳐서 모델에 넘어가는건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '파일 경로 설정',
'BoardComment' => <<<EOT
=================

현업자인지라 업무때문에 답변이 늦을 수 있습니다. (길어도 만 3일 안에는 꼭 답변드리려고 노력중입니다 ㅠㅠ)

강의에서 다룬 내용들의 질문들을 부탁드립니다!! (설치과정, 강의내용을 듣고 이해가 안되었던 부분들, 강의의 오류 등등)
이런 질문은 부담스러워요.. (답변거부해도 양해 부탁드려요)
개인 과제, 강의에서 다루지 않은 내용들의 궁금증 해소, 영상과 다른 접근방법 후 디버깅 요청, 고민 상담 등..
글쓰기 에티튜드를 지켜주세요 (저 포함, 다른 수강생 분들이 함께보는 공간입니다.)
서로 예의를 지키며 존중하는 문화를 만들어가요.
질문글을 보고 내용을 이해할 수 있도록 남겨주시면 답변에 큰 도움이 될 것 같아요. (상세히 작성하면 더 좋아요! )
먼저 유사한 질문이 있었는지 검색해보세요.
잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.
==================

즐거운 연말 보내시는 와중에 별거아닌 질문을 드리는것 같아 죄송합니다 ㅠㅠ



[진행사항]

Verilog HDL 1 강의를 수강하며, C드라이브에 Linux 환경을 구축한 뒤, 실습파일을 다운받아 실습을 진행했습니다.
이번 FPGA 강의를 수강하게 되며 VItis 설치를 하게 되었는데, C드라이브의 용량이 부족하게되어 D드라이브를 새로 구축하였습니다.
이후 Vitis (Window)를 D드라이브에 설치 후 정상동작함을 확인하였습니다.


[질문사항]

제공실습 파일을 넣으실 때(강의 01:48), C드라이브의 FPGA라는 파일에 넣으셨는데, D드라이브에서 진행하게 될 경우 똑같이 D드라이브 내에 FPGA라는 파일을 생성하고 실습을 진행하면 되는지가 궁금합니다.
Vivado 프로젝트 실행 후, Project 생성 시, 파일경로가 C드라이브로 자동설정되는데 기존 파일이 있는 D드라이브로 잡아줘야 하는지 궁금합니다.


아래에는 C드라이브, D드라이브 경로 사진입니다.

[C드라이브]


EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '토큰쿠키저장에 대해서 질문드립니다.',
'BoardComment' => <<<EOT
=================
강의에서 토큰을 보관하기에 보안에도 좋고 적절한 곳이 쿠키라고 말씀해주셨는데 보통 쿠키에 저장을 많이 하는편일까요?

내년 하반기에 크롬에서 쿠키차단예정을 하고 있다고 들어서 왠지 다른 대체제가 필요할거같은데 쿠키를 사용 못하게 된다면 보통 클라이언트에서는 로컬스토리지 이외에는 대체제가 없는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '실행이 잘되었지만 그래서 오히려 납득이 안되는 부분이 있습니다.',
'BoardComment' => <<<EOT
안녕하세요 선생님. 좋은 강의 진심으로 감사드립니다.

실행이 잘 됩니다. 왜 잘 되지?하며 이해가 안되는 부분이 있어서 질문드립니다.

Attendance.jsx 코드를 보면 함수 정의 후 Attendance함수만을 export 하고 있습니다.
students 배열은 export되지 않고 있어
Attendance함수를 index.js에 불러가서 거기서 사용하면 거기는 students 배열은 불러가지 않았기 때문에
정의되지 않았다며 오류가 떠야할 것 같은 느낌이 들었는데 잘 실행이 되었습니다.
함수만을 export했는데 어떻게 students배열까지 index.js에서 잘 사용할 수 있는걸까요?

그리고 간단한 추가질문이 하나 더 있습니다.
저번 강의에서 리스트의 키값을 지정해주지 않으면 리액트에서는 자동으로 인덱스를 키값으로 설정한다라는 말씀을 잠깐하셨습니다.
그런데 왜 키값을 지정해주지 않았을 때 오류가 뜨는걸까요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Seeking Insights on 오픽 (OPIC) Proficiency Levels 🇰🇷',
'BoardComment' => <<<EOT
I hope this message finds you well. I'm currently navigating the realm of 오픽 등급 proficiency, and I'm eager to connect with others who have experience or insights to share.

OPIC Levels Clarification: I'm curious about the various proficiency levels in OPIC. Could someone shed light on what each level entails, and what kind of language skills are expected at different stages?

Preparation Strategies: For those who have successfully advanced through OPIC levels, do you have any tips or strategies for effective preparation? What resources or methods proved most helpful in honing your language skills?

Common Challenges: In your experience, what are some common challenges people face when aiming to improve their OPIC scores? Are there particular aspects of the test that test-takers often find challenging?

Real-Life Applications: How has achieving a specific OPIC level impacted your daily life, career, or academic pursuits? I'm interested in hearing about real-life applications and the practical benefits of OPIC proficiency.

Any Recent Changes or Updates: As language tests evolve, have there been any recent changes or updates to the OPIC system that test-takers should be aware of?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);



Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);

$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Seeking Insights on 오픽 (OPIC) Proficiency Levels 🇰🇷',
'BoardComment' => <<<EOT
I hope this message finds you well. I'm currently navigating the realm of 오픽 등급 proficiency, and I'm eager to connect with others who have experience or insights to share.

OPIC Levels Clarification: I'm curious about the various proficiency levels in OPIC. Could someone shed light on what each level entails, and what kind of language skills are expected at different stages?

Preparation Strategies: For those who have successfully advanced through OPIC levels, do you have any tips or strategies for effective preparation? What resources or methods proved most helpful in honing your language skills?

Common Challenges: In your experience, what are some common challenges people face when aiming to improve their OPIC scores? Are there particular aspects of the test that test-takers often find challenging?

Real-Life Applications: How has achieving a specific OPIC level impacted your daily life, career, or academic pursuits? I'm interested in hearing about real-life applications and the practical benefits of OPIC proficiency.

Any Recent Changes or Updates: As language tests evolve, have there been any recent changes or updates to the OPIC system that test-takers should be aware of?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);


Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '딕셔너리와 튜플',
'BoardComment' => '딕셔너리의 원래 형태는 리스트안에 튜플이 들어있는 구조라고 말씀하셨는데 그러면 딕셔너리의 Value를 수정하게 되면 튜플도 수정하게 되는것 으로 생각이 들어서요 이 부분이 이해가 잘 안됩니다 ㅠㅠ',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'JPA @Transactional',
'BoardComment' => 'JPA 기술을 사용할 때 리포지토리 계층에 @Transactional을 붙여줘야 한다고 말씀해주셨는데 MemberRepository 코드에서는 JPA를 사용하는데 왜 @Repository만 붙여주는 건가요??',
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '[최대 길이 연속부분수열] 틀린 이유',
'BoardComment' => <<<EOT
import java.util.*;

class Main {
public int solution(int n, int m, int[] arr) {
int lt = 0, sum = 0, max = 0, count = 0;
for(int rt = 0; rt < n; rt++) {
if(arr[rt] == 1) {
sum += arr[rt];
} else if (arr[rt] == 0) {
if(count++ < m) {
sum += 1;
} else {
if (sum >= max) {
max = sum;
sum = 0;
lt ++;
rt = lt;
count = 0;
}
}
}
}
return max;
}

public static void main(String[] args) {
Main T = new Main();
Scanner in = new Scanner(System.in);
int n = in.nextInt();
int m = in.nextInt();
int[] arr = new int[n];
for(int i = 0; i < n; i++) {
arr[i] = in.nextInt();
}
System.out.print(T.solution(n, m, arr));
}
}
EOT,
'BoardView' => $view,
'BoardFlg' => 0,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '커리큘럼 질문드려요.',
'BoardComment' => <<<EOT
자바, 스프링부트 백엔드 과정을 수강했는데요.

node.js까지 꼭 해야하나요?

지금 생각하는건 부트랑 vue.js 연결해서 SPA 만들고 싶은데.

그럼 저같은 백엔드 과정 준비했던 수강생은 별도로 node.js까진 수강하지 않아도 되는건가요?

당근마켓 기반 데이터베이스 강의까지 로드맵 따라가면 될까요?

자바스크립트 책이 읽어보고 좋아서 프론트쪽은 선생님한테 배워보려고 하는데

커리큘럼좀 설명부탁드려요.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'postman에서 오류가 납니다..',
'BoardComment' => <<<EOT
이전까지는 모든게 다 되는데 postman test에 전역 변수를 잡고 Authorization에 {{jwt_tutorial_token}}을 넣어서 send 해봐도

Something went wrong while running your scripts. Check Postman Console for more info 라는 작은 팝업창만 뜰 뿐, 아무런 반응이 없습니다...

모든 코드와 postman에도 모두 동일하게 작성을 했는데, 왜 이런 오류가 발생하는지 알 수 있을까요..?ㅜㅜ
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '매서드에서 void가 쓰이는 경우',
'BoardComment' => <<<EOT
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
여기에 질문 내용을 남겨주세요.



메서드에서 반환타입이 없어서 void를 쓰는경우(return을 쓸 필요 없는 경우)는 메서드가 출력문 system.out.println("내용");

으로만 이루어진 경우 뿐 인가요?
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'The Best AI Tools to Make You a Better Writer in December 2024',
'BoardComment' => <<<EOT
Hello, friends who love writing in the tech world! You know how technology keeps changing? Well, we have some cool friends in tech that can help us be better writers. 

They're called AI tools, and they make our writing better and more fun. Today, let's check out two popular ones: the CollegeEssay.org AI Writing Tool and the 5StarEssays.com AI Essay Writer. 

We'll see how these friends can make you a great writer! Let's explore the world of AI and make our writing journey super exciting.



CollegeEssay.org AI Writing Tool
Before knowing about CollegeEssay.org AI essay writer, it's crucial to understand the foundation upon which it stands. 

CollegeEssay.org is not just an AI writing tool; it is an online essay writing service designed to assist students and writers at various levels. With a commitment to academic excellence.

Whether you're a student grappling with tight deadlines or a writer seeking expert guidance, CollegeEssay.org provides a supportive environment for honing your writing skills.

Now, let's explore how the CollegeEssay.org essay generator, an integral part of this service, takes writing assistance to the next level.

Features and Capabilities
The tool offers a range of features, including automatic grammar and style checks, plagiarism detection, and suggestions for improving sentence structure. These capabilities ensure that the final written piece meets high standards of quality.

CollegeEssay.org AI Essay Writing Tool is well-known for being really good at helping students with their assignments. It uses a big database to make sure the results fit what you need.



How it Assists in Essay Writing
CollegeEssay.org AI goes beyond basic grammar checks. It assists in crafting well-structured essays by providing insights into improving coherence, clarity, and overall writing style. Users report a significant enhancement in their writing skills after integrating this tool into their routine.



5StarEssays.com Essay Writer
Another noteworthy player in the era of AI writing tools is the essay writer from 5StarEssays.com.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'firebase 관련오류',
'BoardComment' => <<<EOT
안녕하세요..

사용자 인증 시 아래와 같은

예외가 발생합니다.



FirebaseAuthException ([firebase_auth/too-many-requests] We have blocked all requests from this device due to unusual activity. Try again later.)



여기저기 찾아봐도 이유를 모르겠습니다

혹시, 이유를 아시면 답변 부탁드리겠습니다.

감사합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);



$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => 'Cache-Control: no-cache 질문',
'BoardComment' => <<<EOT
학습하는 분들께 도움이 되고, 더 좋은 답변을 드릴 수 있도록 질문전에 다음을 꼭 확인해주세요.

1. 강의 내용과 관련된 질문을 남겨주세요.
2. 인프런의 질문 게시판과 자주 하는 질문(링크)을 먼저 확인해주세요.
(자주 하는 질문 링크: https://bit.ly/3fX6ygx)
3. 질문 잘하기 메뉴얼(링크)을 먼저 읽어주세요.
(질문 잘하기 메뉴얼 링크: https://bit.ly/2UfeqCG)

질문 시에는 위 내용은 삭제하고 다음 내용을 남겨주세요.
=========================================
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예/아니오)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예/아니오)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예/아니오)

[질문 내용]
안녕하세요.
강의를 듣다가 Cache-Control: no-cache 관련한 질문이 있어서 질문 드립니다.

만약에 데이터를 요청할 때 캐시 유효시간이 남았다면 서버와의 네트워크 통신이나 요청메시지, 응답메시지 없이 브라우저 캐시 저장소에서 데이터를 가져오는 게 맞나요?
1번이 맞다면 Cache-Control: no-cache 를 하면 캐시 유효시간이 남아 서버와의 통신이 필요 없는데도 불구하고 원 서버와의 통신을 통해 검증한다고 이해하면 될까요??
클라이언트가 원 서버에 검증하고 사용하기 위해서 Cache-Control: no-cache를 요청 메시지에서 사용하는 건가요? 아니면 클라이언트에게 원 서버와의 검증을 강제(?)하기 위해서 서버의 응답 메시지에서 사용하는 건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
안녕하세요, 선생님. 이번 강의에서 질문이 하나 더 있었습니다! 앞에 남긴 질문과 한꺼번에 남길걸 그랬네요..😅  선생님께서 추천을 통한 주문 전환률 (CVR) 을 구하기 위해 작성한 쿼리를 보니# 선생님 풀이 SELECT event_date , use_recomend_payment / click_recomend_food AS recommend_cvr FROM( SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food #추천음식 클릭 FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date ) AS temp
1) 추천상품 클릭하여 전환된 횟수 ( use_recomend_payment)와, 추천음식을 클릭한 횟수(click_recommend_food) 를 구해서 from절 서브쿼리에 넣기2) 추천상품 클릭하여 전환된 횟수 / 추천음식 클릭 횟수 연산하여 recommend_cvr 구하기
이렇게 from 절을 써야하더라구요.  선생님의 해설을 보기 전, 스스로 풀었을 때는 from절을 쓰지 않고 그냥 한번에 썼었습니다. #셀프풀이 SELECT event_date , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") AS use_recomend_payment #추천음식 클릭하여 결제 , COUNTIF(event_name = "click_recommend_food")  AS click_recommend_food , COUNTIF(event_name = " click_payment" AND use_recommend_food = "TRUE") / COUNTIF(event_name = "click_recommend_food") AS recommend_cvr FROM log WHERE is_meet_min_order_price = 'False' GROUP BY event_date혹시 이렇게 한번에 쓰면 오류가 발생하는지, 서브쿼리를 사용하여 풀어야 하는 이유가 무엇인지 궁금합니다! 여유있으실 때 회신 주세요.감사합니다! 
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '6-6 메인지표 SQL쿼리 짜보기',
'BoardComment' => <<<EOT
Model model 파라미터를 넘기면서

model.addAttribute() 메서드의 동작원리에 대해 갑자기 궁금증이 생겼는데, 현재 로직이 /basic/items 으로 웹페이지가 넘어가면 items 메서드가 호출되면서 model.addAttribute("items",item); 메서드를 통해 모델에 items라는 이름에 items 객체가 저장이 되잖아요



새로운 아이템을 등록한 뒤에, 다시 /basic/items 페이지로 넘어가게 된다면 다시 items 메서드가 호출될텐데 이때 다시 로직이 돌면서 model.addAttribute("items", item); 메서드가 호출이 될텐데, 이럴때에는 items 이름에 정보를 덮어씌우는 방식으로 모델에 넘어가는건가요? 아니면 items객체에 수정된 부분만 고쳐서 모델에 넘어가는건가요??
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '파일 경로 설정',
'BoardComment' => <<<EOT
=================

현업자인지라 업무때문에 답변이 늦을 수 있습니다. (길어도 만 3일 안에는 꼭 답변드리려고 노력중입니다 ㅠㅠ)

강의에서 다룬 내용들의 질문들을 부탁드립니다!! (설치과정, 강의내용을 듣고 이해가 안되었던 부분들, 강의의 오류 등등)
이런 질문은 부담스러워요.. (답변거부해도 양해 부탁드려요)
개인 과제, 강의에서 다루지 않은 내용들의 궁금증 해소, 영상과 다른 접근방법 후 디버깅 요청, 고민 상담 등..
글쓰기 에티튜드를 지켜주세요 (저 포함, 다른 수강생 분들이 함께보는 공간입니다.)
서로 예의를 지키며 존중하는 문화를 만들어가요.
질문글을 보고 내용을 이해할 수 있도록 남겨주시면 답변에 큰 도움이 될 것 같아요. (상세히 작성하면 더 좋아요! )
먼저 유사한 질문이 있었는지 검색해보세요.
잠깐! 인프런 서비스 운영 관련 문의는 1:1 문의하기를 이용해주세요.
==================

즐거운 연말 보내시는 와중에 별거아닌 질문을 드리는것 같아 죄송합니다 ㅠㅠ



[진행사항]

Verilog HDL 1 강의를 수강하며, C드라이브에 Linux 환경을 구축한 뒤, 실습파일을 다운받아 실습을 진행했습니다.
이번 FPGA 강의를 수강하게 되며 VItis 설치를 하게 되었는데, C드라이브의 용량이 부족하게되어 D드라이브를 새로 구축하였습니다.
이후 Vitis (Window)를 D드라이브에 설치 후 정상동작함을 확인하였습니다.


[질문사항]

제공실습 파일을 넣으실 때(강의 01:48), C드라이브의 FPGA라는 파일에 넣으셨는데, D드라이브에서 진행하게 될 경우 똑같이 D드라이브 내에 FPGA라는 파일을 생성하고 실습을 진행하면 되는지가 궁금합니다.
Vivado 프로젝트 실행 후, Project 생성 시, 파일경로가 C드라이브로 자동설정되는데 기존 파일이 있는 D드라이브로 잡아줘야 하는지 궁금합니다.


아래에는 C드라이브, D드라이브 경로 사진입니다.

[C드라이브]


EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$user = $faker->numberBetween(1, 20);
$view = $faker->randomNumber(2);
$class = $faker->numberBetween(1, 216);
$view = $faker->randomNumber(2);
$flg = $faker->randomElement([0,1]);

Board::create([
'BoardCategoryID' => 2,
'UserID' => $user,
'ClassID' => NULL,
'BoardTitle' => '토큰쿠키저장에 대해서 질문드립니다.',
'BoardComment' => <<<EOT
=================
강의에서 토큰을 보관하기에 보안에도 좋고 적절한 곳이 쿠키라고 말씀해주셨는데 보통 쿠키에 저장을 많이 하는편일까요?

내년 하반기에 크롬에서 쿠키차단예정을 하고 있다고 들어서 왠지 다른 대체제가 필요할거같은데 쿠키를 사용 못하게 된다면 보통 클라이언트에서는 로컬스토리지 이외에는 대체제가 없는지 궁금합니다.
EOT,
'BoardView' => $view,
'BoardFlg' => $flg,
'created_at' => $date,
]);






}

        
    }

    
}
