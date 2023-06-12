<?php
// Подключиться к базе данных
$conn = mysqli_connect('localhost', 'root', '', 'schooll');

// Проверить подключение к базе данных
if (!$conn) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

// Получить данные из формы
$name = $_POST['name'];
$date = $_POST['date'];
$code = $_POST['code'];


// Создать запрос на добавление записи в базу данных
$sql = "SELECT * FROM `students` WHERE `KodUchenika` = '" . $code . "'";

$result = $conn->query($sql); 
if (!$result) {
    die("Ошибка выполнения запроса: " . mysqli_error($conn));
}
mysqli_close($conn);
// Выполнить запрос

$students=[];
while($row = $result->fetch_assoc()){
    $students[] = $row;
    
    // print_r($row['Field']);
}

// Закрыть соединение с базой данных
print_r($students);
?>