<?php 
final class someTest {
    private $str;
    public function __construct(string $str) {
        $this->str = $str;
    }
    public function stringCheck() : bool {
        $chars = str_split($this->str); // разбиваем строку на массив символов
        $arr = [];
        
        foreach ($chars as $key => $char) {
            if ($char === '{') array_push($arr, $char); // добавляем в массив раскрывающую скобку
            if ($char === '}') {
                if (empty($arr)) return false; // если не было раскрывающей скобки, то это ошибка
                array_pop($arr); // извлекаем из массива последний элемент
            }
        }

        return empty($arr);
    }
}

// примеры строк
$str1 = "{{lajkdhf{adfa}{}adfasdfadf{}}}";
$str2 = "{{lajkdhf{adfa";

$result = (new someTest($str2))->stringCheck();

echo("Результат: ");
if ($result) echo("корректный код\n");
else echo("некорректный код\n");