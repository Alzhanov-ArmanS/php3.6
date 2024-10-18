<?php

// Задачи уровня 1: Легкий

// 1. Конкатенация строк
$str1 = "Hello";
$str2 = "World";
$concatenated = $str1 . " " . $str2;
echo "1. Конкатенация строк: $concatenated\n";

// 2. Изменение регистра
$originalString = "Hello World";
$lowercase = strtolower($originalString);
$uppercase = strtoupper($originalString);
echo "2. Изменение регистра: $lowercase, $uppercase\n";

// 3. Сравнение строк
$string1 = "Hello";
$string2 = "hello";
$comparison1 = ($string1 == $string2) ? "равны" : "не равны";
$comparison2 = ($string1 === $string2) ? "равны" : "не равны";
$comparison3 = (strcasecmp($string1, $string2) == 0) ? "равны" : "не равны";
echo "3. Сравнение строк: $comparison1, $comparison2, $comparison3\n";

// 4. Поиск подстроки
$haystack = "Hello World";
$needle = "World";
$position = strpos($haystack, $needle);
echo "4. Поиск подстроки: позиция '$needle' в '$haystack' - $position\n";

// 5. Замена подстроки
$originalText = "Hello World";
$search = "World";
$replace = "PHP";
$replacedText = str_replace($search, $replace, $originalText);
echo "5. Замена подстроки: $replacedText\n";

// 6. Форматирование строки
$name = "John";
$age = 30;
$formattedString = sprintf("Меня зовут %s, мне %d лет.", $name, $age);
echo "6. Форматирование строки: $formattedString\n";

// 7. Разделение строки
$csv = "apple,banana,cherry";
$array = explode(",", $csv);
$joined = implode(" | ", $array);
echo "7. Разделение строки: $joined\n";

// 8. Работа с многострочным текстом
$multilineText = "Hello\nWorld\nThis is PHP.";
$htmlText = nl2br($multilineText);
echo "8. Работа с многострочным текстом:\n$htmlText\n";

// Задачи уровня 2: Усложненный

// 1. Сложная конкатенация строк
$var1 = "PHP";
$var2 = "is";
$var3 = "awesome";
$complexConcatenation = $var1 . " " . $var2 . " " . $var3;
echo "1. Сложная конкатенация строк: $complexConcatenation\n";

// 2. Изменение регистра с условиями
$sentence = "hello world";
$capitalized = ucwords(strtolower($sentence));
echo "2. Изменение регистра с условиями: $capitalized\n";

// 3. Сравнение строк с учётом регистра и без
$caseSensitiveComparison = ($string1 === $string2) ? "равны" : "не равны";
$caseInsensitiveComparison = (strcasecmp($string1, $string2) == 0) ? "равны" : "не равны";
echo "3. Сравнение строк с учётом регистра: $caseSensitiveComparison, без учёта: $caseInsensitiveComparison\n";

// 4. Замена подстроки с использованием массива
$searchArray = ["apple", "banana"];
$replaceArray = ["orange", "grape"];
$fruits = "I like apple and banana.";
$replacedFruits = str_replace($searchArray, $replaceArray, $fruits);
echo "4. Замена подстроки с использованием массива: $replacedFruits\n";

// 5. Форматирование строки с числом
$number = 42;
$formattedWithNumber = sprintf("Ответ: %d, это %s.", $number, "правильный");
echo "5. Форматирование строки с числом: $formattedWithNumber\n";

// 6. Разделение и объединение сложной строки
$numbers = "1,2,3,4,5";
$numberArray = explode(",", $numbers);
$sum = array_sum($numberArray);
echo "6. Разделение и объединение сложной строки: сумма = $sum\n";

// 7. Создание случайной строки
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
$randomString = generateRandomString();
echo "7. Создание случайной строки: $randomString\n";

// 8. Проверка строки на палиндром
function isPalindrome($string) {
    $reversed = strrev($string);
    return $string === $reversed;
}
$testString = "level";
$palindromeCheck = isPalindrome($testString) ? "является" : "не является";
echo "8. Проверка строки на палиндром: '$testString' $palindromeCheck палиндромом.\n";

?>
