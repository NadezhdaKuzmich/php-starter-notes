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