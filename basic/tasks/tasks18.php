<?php

// task 1
function readJSONFile($filename)
{
  try {
    // file_get_contents - надає простий спосіб зчитування
    //  вмісту файлу у вигляді рядка:
    $jsonContents = file_get_contents($filename);

    if ($jsonContents === false) {
      throw new Exception("Error reading the JSON file.");
    }

    // json_decode — декодирует строку JSON. Якщо associative = true, 
    // об'єкти JSON будуть повернуті як асоціативні масиви:
    $decodedData = json_decode($jsonContents, true);

    if ($decodedData === null) {
      throw new Exception("Error decoding the JSON data.");
    }

    return $decodedData;
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
  }
}

$filename = "data/people.json";
$data = readJSONFile($filename);

echo "<b>Task 1:</b><br>";
foreach ($data["people"] as $person) {
  echo "Name: " . $person["firstName"] . " " . $person["lastName"] . "</br>";
  echo "Age: " . $person["age"] . "</br>";
  echo "Gender: " . $person["gender"] . "</br>";
  echo "Number: " . $person["number"] . "</br>";
  echo "------------------------</br>";
}
echo "<hr>";

// task 2
$json =
  '{
  "uglify-js": "1.3.4",
  "jshint": "0.9.1",
  "recess": "1.1.8",
  "connect": "2.1.3",
  "hogan.js": "2.0.0"
  }';

echo "<b>Task 2:</b><br>" . "<pre>";
var_dump(json_decode($json));
echo "<br>";
var_dump(json_decode($json, true));
echo "</pre>" . "<hr>";

// task 3
$json = '{"number": 123456789012345678901234567890}';

echo "<b>Task 3:</b><br>" . "<pre>";
var_dump(json_decode($json));
echo "</pre>" . "<hr>";

// task 4
$array = [
  "uglify-js" => "1.3.4",
  "jshint" => "0.9.1",
  "recess" => "1.1.8",
  "connect" => "2.1.3",
  "hogan.js" => "2.0.0"
];
$myarray = ['red', 'green', 'white'];

echo "<b>Task 4:</b><br>";
// json_encode - повертає JSON-представлення даних:
var_dump(json_encode($array));
echo "<br>";
var_dump(json_encode($myarray));
echo "<hr>";

// task 5
function trinary_Test($num)
{
  $result = $num > 30
    ? "greater than 30"
    : ($num > 20
      ? "greater than 20"
      : ($num > 10
        ? "greater than 10"
        : "Input a number at least greater than 10!"));

  echo $num . " : " . $result . "<br>";
}

echo "<b>Task 5:</b><br>";
trinary_Test(4);
trinary_Test(32);
trinary_Test(21);
trinary_Test(12);
echo "<hr>";

// task 6
echo "<b>Task 6:</b><br>";
// get_current_user - повертає ім'я власника поточного PHP-скрипта:
echo 'Current script owner: ' . get_current_user() . "<hr>";

// task 7
echo "<b>Task 7:</b><br>";
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $full_url . "<hr>";

// task 8
echo "<b>Task 8:</b><br>";
// getenv - отримує значення змінної оточення:
$rd = getenv('DOCUMENT_ROOT');
echo $rd . "<hr>";

// task 9
echo "<b>Task 9:</b><br>";
// get_extension_funcs - повертає масив з імен функцій модуля:
$json_extension_funcs = get_extension_funcs("JSON");
echo "<pre>";
print_r($json_extension_funcs);
echo "<br>";

$xml_extension_funcs = get_extension_funcs("XML");
print_r($xml_extension_funcs);
echo "</pre><hr>";

// task 10
$last_modified_time = getlastmod();
// getlastmod - повертає час останньої модифікації поточної сторінки. 
// Значення є міткою часу Unix, що підходить для функції date. 
// Функція поверне false у разі виникнення помилки:
echo "<b>Task 10:</b><br>";
echo "Last modified: " . date("F d Y H:i:s.", $last_modified_time);
echo "<hr>";

// task 11
echo "<b>Task 11:</b><br>";
// sys_get_temp_dir - повертає шлях до тимчасової папки на сервері.
// tempnam - створює тимчасовий файл з унікальним іменем у певній 
// директорії. Якщо вказаного каталогу не існує, tempnam може створити 
// файл у тимчасовому каталозі системи:
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file;
echo "<hr>";

// task 12
echo "<b>Task 12:</b><br>";
// phpcredits(CREDITS_ALL - CREDITS_FULLPAGE) показує інформацію про те, 
// хто брав участь у розробці PHP, але без зайвих прикрас і форматування.
// Якби використовувалася просто phpcredits(CREDITS_ALL), інформація була 
// б подана як красиво оформлена веб-сторінка. 
// А з CREDITS_ALL - CREDITS_FULLPAGE виводиться та сама інформація, але в 
// простому, неоформленому вигляді.
phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);