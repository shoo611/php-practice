<?php
// Q1 tic-tac問題
for ($x = 1; $x <= 100; $x++) {
  if ($x % 4 === 0 && $x % 5 === 0) {
    echo 'tic-tac' . "\n";
  } elseif ($x % 4 === 0) {
    echo 'tic' . "\n";
  } elseif ($x % 5 === 0) {
    echo 'tac' . "\n";
  } else {
    echo "$x \n";
  }
}

// Q2 多次元連想配列
// Q2-1
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel' => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel' => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel' => '09055556666'
  ],
];
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// Q2-2
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel' => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel' => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel' => '09055556666'
  ],
];
foreach ($personalInfos as $key => $value) {
  echo ($key + 1) . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 'で、電話番号は' . $value['tel'] . 'です。' . "\n";
}

// Q2-3
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel' => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel' => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel' => '09055556666'
  ],
];
$ageList = [25, 30, 18];
foreach ($personalInfos as $key => $value) {
  $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
    echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
  }

  public function attend($subject)
  {
    echo $this->studentName . 'は' . $subject . 'の授業に出席しました。学籍番号:' . $this->studentId;
  }
}

$yamada = new Student('40', '山田');

// Q4 オブジェクト-2
$yamada->attend('PHP');

// Q5 定義済みクラス
?>
