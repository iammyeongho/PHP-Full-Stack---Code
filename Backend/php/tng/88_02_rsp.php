<?

    // $in_str = fgets(STDIN);

    // echo "입력값 : {$in_str}";

    // 가위 : scissors
    // 바위 : rock
    // 보 : paper

    

    // $scissors = "Scissors";
    // $rock = "Rock";
    // $paper = "Paper";

    // $user = trim(fgets(STDIN));
    // $computer = ["scissors", "rock", "paper"];
    // $computer_rand = array_rand($computer);
    // $computer_value = $computer[$computer_rand];
    // $error = "잘못된 입력입니다.";

    // $user = "scissors";

    // if($user === "scissors")
    // {
    //     if("$computer_value" === "seissors")
    //     {
    //         echo "무승부";
    //     }
    //     else if($computer_value === "rock")
    //     {
    //         echo "패";
    //     }
    //         else if($computer_value === "paper")
    //     {
    //         echo "승";
    //     }
    //     else
    //     {
    //         echo $error;
    //     }
    // }
    
    
//     if($user === "scissors")
//     {
//         if("$computer_value" === "seissors")
//         {
//             echo "(무승부)\n당신의 패는 {$user} 상대의 패는 {$computer_value} ";
//         }
//         else if($computer_value === "rock")
//         {
//             echo "(패)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//         else if($computer_value === "paper")
//         {
//             echo "(승)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//     }
    
//     else if($user === "rock")
//     {
//         if($computer_value === "seissors")
//         {
//             echo "(승)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//         else if($computer_value === "rock")
//         {
//             echo "(무승부)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//         else if($computer_value === "paper")
//         {
//             echo "(패)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//     }

//     else if($user === "paper")
//     {
//         if($computer_value === "seissors")
//         {
//             echo "(패)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//         else if($computer_value === "rock")
//         {
//             echo "(승)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//         else if($computer_value === "paper")
//         {
//             echo "(무승부)\n당신의 패는 {$user} 상대의 패는 {$computer_value}";
//         }
//     } 

//     else
//     {
//         echo $error;
//     }

// exit;

    // $user = trim(fgets(STDIN));
    // $computer = ["0", "1", "2"];
    // // $computer_rand = array_rand($computer);
    // $error = "잘못된 입력입니다.";

    // echo "가위는 0, 주먹은 1, 보자기는 2\n\n";

    // while(1)
    // {
    //     $computer_rand = array_rand($computer);
    //     echo "\n당신의 입력값은";
    //     $user = trim(fgets(STDIN));
    //     echo "\n종료는 esc입니다.\n";

    //     if($user === "0")
    //     {
    //         if($computer_rand === 0)
    //         {
    //             echo "----------(무승부)----------\n";
    //             echo "\n당신의 패는 가위 상대의 패는 가위";
    //         }
    //         else if($computer_rand === 1)
    //         {
    //             echo "------------(패)------------\n";
    //             echo "\n당신의 패는 가위 상대의 패는 주먹";
    //         }
    //         else if($computer_rand === 2)
    //         {
    //             echo "------------(승)------------\n";
    //             echo "\n당신의 패는 가위 상대의 패는 보자기";
    //         }
    //     }
        
    //     else if($user === "1")
    //     {
    //         if($computer_rand === 0)
    //         {
    //             echo "------------(승)------------\n";
    //             echo "\n당신의 패는 주먹 상대의 패는 가위";
    //         }
    //         else if($computer_rand === 1)
    //         {
    //             echo "----------(무승부)----------\n";
    //             echo "\n당신의 패는 주먹 상대의 패는 주먹";
    //         }
    //         else if($computer_rand === 2)
    //         {
    //             echo "------------(패)------------\n";
    //             echo "\n당신의 패는 주먹 상대의 패는 보자기";
    //         }
    //     }

    //     else if($user === "2")
    //     {
    //         if($computer_rand === 0)
    //         {
    //             echo "------------(패)------------\n";
    //             echo "\n당신의 패는 보자기 상대의 패는 가위";
    //         }
    //         else if($computer_rand === 1)
    //         {
    //             echo "------------(승)------------\n";
    //             echo "\n당신의 패는 보자기 상대의 패는 주먹";
    //         }
    //         else if($computer_rand === 2)
    //         {
    //             echo "----------(무승부)----------\n";
    //             echo "\n당신의 패는 보자기 상대의 패는 보자기";
    //         }
    //     } 

    //     else if($user === "esc")
    //     {
    //         break;
    //     }

    //     else
    //     {
    //         echo $error;
    //     }
    // }

    // 필요 x
    // $user = trim(fgets(STDIN));
    // $computer_rand = array_rand($computer);
    // $computer_value = $computer[$computer_rand];
     // $result = "당신의 패는 {$user} 상대의 패는 {$computer_value}";


    // $computer = ["0", "1", "2"];
    // $error = "잘못된 입력입니다.";
    // $rule = "가위는 0, 주먹은 1, 보자기는 2";
    // echo "\n종료는 esc입니다.\n";

    // while(1)
    // {
    // // echo $rule, "\n";
    // echo "\n당신의 입력값은 ";
    // $user = trim(fgets(STDIN));
    // $computer_rand = array_rand($computer);
    // $computer_value = $computer[$computer_rand];
    // $result = "당신의 패는 {$user} 상대의 패는 {$computer_value}";

    //     if ($user === $computer_value)
    //     {
    //         echo $result, "\n";
    //         echo "결과는 : 무승부 \n";
    //     }
        
    //     else if ((($user === $computer[0]) && ($computer_value === $computer[2]))
    //     || (($user === $computer[1]) && ($computer_value === $computer[0]))
    //     || (($user === $computer[2]) && ($computer_value === $computer[1])))
    //     {
    //         echo $result, "\n";
    //         echo "결과는 : 승 \n";
    //     }

    //     else if ((($user === $computer[0]) && ($computer_value === $computer[1]))
    //     || (($user === $computer[1]) && ($computer_value === $computer[2]))
    //     || (($user === $computer[2]) && ($computer_value === $computer[0])))
    //     {
    //         echo $result, "\n";
    //         echo "결과는 : 패 \n";
    //     }

    //     else if($user === "esc")
    //     {
    //         break;
    //     }

    //     else
    //     {
    //         echo "잘못된 입력값입니다.";
    //     }
    // }


    // $rand_num = rand(1, 100);
    // $count = 0;
    
    // while(1)
    // {
        
    //     echo "\n입력값 : ";
    //     $user = (int)trim(fgets(STDIN));
    //     $count++;
    //     $i = 5 - $count;

    //     if($user < 1 || $user > 100)
    //     {
    //         echo "잘못된 값을 입력하셨습니다.\n ";
    //     }

    //     else if($user === $rand_num)
    //     {
    //         echo "정답\n";
    //         break;
    //     }

    //     else if($user > $rand_num)
    //     {
    //         echo "사용자의 값이 더 큽니다.\n남은 횟수는 : $i\n";
    //     }

    //     else if($user < $rand_num)
    //     {
    //         echo "사용자의 값이 더 작습니다.\n남은 횟수는 : $i\n";
    //     }

    //     if($count === 5)
    //     {
    //     echo "정답 : {$rand_num} \n결과 : 실패";
    //     break;
    //     }
    // }

    // -----------------------------------------------------------------

    // 1
    // for($i = 1; $i <= 10; $i++)
    // {
    //     echo "{$i} \n";
    // }

    // 2
    // for($i = 1; $i <= 9; $i++)
    // {
    //     $sum = 8*$i;
    //     echo "8x{$i}=$sum\n";
    // }

    // 3
    // for($i = 1; $i <= 19; $i++)
    // {
    //     echo $i,"단\n";
    //     for($j = 1; $j <= 9; $j++)
    //     {
    //         $sum = $i * $j;
    //         echo "{$i} X {$j} = $sum\n";
    //     }
    // }

    // 4
    // function my_sum($a, $b)
    // {
    //     return $a+$b;
    // }
    // echo my_sum(2,4);

    // 5
    // $i = "짜장면";

    // switch ($i)
    // {
    //     case "짜장면":
    //         echo "중식";
    //         break;

    //     case "비빔밥":
    //         echo "한식";
    //         break;

    //     default:
    //         echo "양식";
    //         break;
    // }

    // chatGPT 문제

    // 1
    // $numarr = [45, 78, 23, 56, 12, 67, 89, 34];

    // $maxarr = $numarr[0];
    // $minarr = $numarr[0];

    // foreach ($numarr as $num) 
    // {
    //     if ($num > $maxarr) 
    //     {
    //         $maxarr = $num;
    //     }

    //     if ($num < $minarr) 
    //     {
    //         $min = $num;
    //     }
    // }

    // echo "배열의 최대값: " . $maxarr . "\n";
    // echo "배열의 최소값: " . $minarr;


    // 2
    // $numbers = [];

    // while (true) 
    // {
    //     echo "숫자를 입력하세요 (종료 : esc): ";
    //     $user = trim(fgets(STDIN));

    //     if ($user === 'esc') 
    //     {
    //         break;
    //     }

    //     $numbers[] = (int)$user;
    // }

    // echo "입력한 숫자: ";
    // print_r($numbers);

    // $max = max($numbers);
    // echo "가장 큰 수: $max\n";

    // $min = min($numbers);
    // echo "가장 작은 수: $min\n";

    // $sum = array_sum($numbers);
    // echo "숫자 합: $sum\n";

    // $average = $sum / count($numbers);
    // echo "숫자 평균: $average\n";

    // 3
    // 숫자를 저장할 배열 초기화
    // $num = [];

    // // 사용자로부터 숫자 입력 받기
    // echo "평균을 계산할 숫자를 입력하세요 (종료 : esc): ";
    // while (true) 
    // {
    //     $uesr = trim(fgets(STDIN));

    //     if ($uesr === 'esc') 
    //     {
    //         break;
    //     }

    //     $num[] = (float)$user;
    // }

    // $count = count($num);

    // $sum = array_sum($num);

    // // 평균 계산하기
    // if ($count > 0) 
    // {
    //     $average = $sum / $count;
    //     echo "평균: $average\n";
    // } 
    //    else 
    // {
    //     echo "숫자를 입력하지 않았습니다.\n";
    // }
    
?>