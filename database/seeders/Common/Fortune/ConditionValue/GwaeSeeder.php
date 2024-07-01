<?php

namespace Database\Seeders\Common\Fortune\ConditionValue;

use App\Models\Fortune\Condition;
use App\Models\Fortune\ConditionValue;
use App\Models\Fortune\Gwae;
use Illuminate\Database\Seeder;

class GwaeSeeder extends Seeder
{
    public function run(): void
    {
        $conditionId = Condition::where('name', '괘')->first()->id;

        $names = [
            ['중천건', '택천쾌', '화천대유', '뇌천대장', '풍천소축', '수천수', '산천대축', '지천태'],
            ['천택리', '중택태', '화택규', '뇌택귀매', '풍택중부', '수택절', '산택손', '지택림'],
            ['천화동인', '택화혁', '중화리', '뇌하풍', '풍화가인', '수화기제', '산화비', '지화명이'],
            ['천뢰무망', '택뢰수', '화래서합', '중뢰진', '풍뢰익', '수뢰둔', '산뢰이', '지뢰복'],
            ['천풍구', '택풍대과', '화풍정', '뇌풍항', '중풍손', '수풍정', '산풍고', '지풍승'],
            ['천수송', '택수곤', '화수미제', '뇌수해', '풍수환', '중수감', '산수몽', '지수사'],
            ['천산돈', '택산함', '화산려', '뇌산소과', '풍산점', '수산건', '중산간', '지산겸'],
            ['천지비', '택지취', '화지진', '뇌지예', '풍지관', '수지비', '산지박', '중지곤'],
        ];

        $contents = [
            [
                '건(乾)은 여섯 마리 용이 하늘로 오르는 강건한 모습입니다.',
                '쾌(快)는 결단, 결정한다는 뜻입니다.',
                '대유(大有)는 크게 소유한다는 뜻입니다.',
                '대장(大壯)이란 크게 왕성하다는 뜻입니다.',
                '소축(小畜)은 조금 쌓는다, 머물게 한다는 뜻입니다.',
                '수(需)는 때를 기다린다는 뜻입니다.',
                '대축(大畜)은 크게 모으고 저축한다는 뜻입니다.',
                '태(泰)는 편안하고 태평하다는 뜻입니다.',
            ], [
                '이(履)는 길을 밟는다, 실천한다는 뜻입니다.',
                '태(兌)는 기쁨을 뜻합니다.',
                '규(睽)는 경쟁한다는 뜻입니다.',
                '귀매(歸妹)는 관망하여 좋은 때를 지키라는 뜻입니다.',
                '중부(中孚)는 성심, 성실, 믿음이라는 뜻입니다.',
                '절(節)은 절제, 절도를 뜻합니다.',
                '손(損)은 손해를 보고 덕을 쌓는다는 뜻입니다.',
                '임(臨)은 임하다, 임기응변하다라는 뜻입니다.',
            ], [
                '동인(同人)은 다른 사람과 같이한다는 뜻입니다.',
                '혁(革)은 혁신하여 새롭게 한다는 뜻입니다.',
                '이(離)는 밝은 태양, 타오르는 정열, 화려함을 뜻합니다.',
                '풍(豊)은 풍족, 풍성함을 뜻합니다.',
                '가인(家人)이란 가족, 가정을 뜻합니다.',
                '기제(旣濟)는 만사가 이미 이루어졌다는 뜻입니다.',
                '비(賁)는 아릅답게 장식한다, 모양을 낸다는 뜻입니다.',
                '명이(明夷)는 밝음을 등지고 어둠을 향하는 형국을 뜻합니다.',
            ], [
                '무망(无妄)은 욕망이 없는 자연 그대로의 모습을 뜻합니다.',
                '수(隨)는 따른다는 뜻입니다.',
                '서합(噬嗑)은 씹어서 입을 다문다는 뜻입니다.',
                '진(震)은 천둥을 의미합니다.',
                '익(益)은 이익을 뜻합니다.',
                '둔(屯)은 물체가 성장해 나가는 과정을 뜻합니다.',
                '이(頤)는 턱, 기르다라는 뜻입니다.',
                '복(復)은 다시 돌아온다는 뜻입니다.',
            ], [
                '구(姤)는 만난다는 뜻입니다.',
                '대과(大過)는 너무 지나치다는 뜻입니다.',
                '정(鼎)은 발이 셋 달린 무쇠솥을 뜻합니다.',
                '항(恒)은 한결같다는 뜻입니다.',
                '손(巽)은 바람이 부드럽게 불어오는 것을 뜻합니다.',
                '정(井)은 우물을 뜻합니다.',
                '고(蠱)는 바람이 산 밑으로 불어오는 모습입니다.',
                '승(升)은 올라간다는 뜻입니다.',
            ], [
                '송(訟)은 호소한다는 뜻입니다.',
                '곤(困)은 주변의 방해로 일이 막히는 상태를 뜻합니다.',
                '미제(未濟)는 아직은 아니지만 곧 이루어진다는 뜻입니다.',
                '해(解)는 푼다는 뜻입니다.',
                '환(渙)은 흩어지고 풀린다는 뜻입니다.',
                '감(坎)은 물이 거듭 흘러가는 것을 뜻합니다.',
                '몽(蒙)은 젊고 어리다는 뜻입니다.',
                '사(師)는 집단, 군대, 지휘자의 고충을 뜻합니다.',
            ], [
                '돈(遯)은 피해서 물러난다는 뜻입니다.',
                '함(咸)은 감각, 감정이라는 뜻입니다.',
                '여(旅)는 나그네, 여행을 뜻합니다.',
                '소과(小過)는 조금 지나치다는 뜻입니다.',
                '점(漸)은 천천히 나아가는 것을 뜻합니다.',
                '건(蹇)은 무모한 일을 피하고 안전을 강구하는 모습입니다.',
                '간(艮)은 머문다는 뜻입니다.',
                '겸(謙)은 나를 낮추고 겸손하게 처세한다는 뜻입니다.',
            ], [
                '비(否)는 기초가 없어 일이 막히고 통하지 않는 상황을 뜻합니다.',
                '췌(萃)는 모여서 번성해진다는 뜻입니다.',
                '진(晉)은 나아간다는 뜻입니다.',
                '예(豫)는 예비하다, 기뻐하다는 뜻입니다.',
                '관(觀)은 살피고 관찰한다는 뜻입니다.',
                '비(比)는 서로 친하다는 뜻입니다.',
                '박(剝)은 산이 무너질 때 먼저 그 자리를 피해야 한다는 뜻입니다.',
                '곤(坤)은 한없이 넓은 대지, 부드러움, 순종의 미덕을 뜻합니다.',
            ],
        ];

        for ($out = 0; $out < 8; $out++) {
            for ($in = 0; $in < 8; $in++) {
                $gwae = Gwae::firstOrCreate([
                    'out' => $out,
                    'in' => $in,
                    'name' => $names[$out][$in],
                    'contents' => $contents[$out][$in],
                ]);

                ConditionValue::firstOrCreate([
                    'condition_id' => $conditionId,
                    'name' => $gwae->name,
                ]);
            }
        }
    }
}