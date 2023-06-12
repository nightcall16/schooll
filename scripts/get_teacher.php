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
//$sql = "INSERT INTO products (name, date, code) VALUES ('$name', '$date', '$code')";

$sql = "SELECT * FROM `teachers` WHERE `KodUchitelya` = '" . $code . "'";

// Выполнить запрос
$result = $conn->query($sql); 
if (!$result) {
    die("Ошибка выполнения запроса: " . mysqli_error($conn));
}
mysqli_close($conn);

$teachers=[];
while($row = $result->fetch_assoc()){
    $teachers[] = $row;
    
    // print_r($row['Field']);
}

// print_r(get_class($teachers[0]));
// Закрыть соединение с базой данных
print_r($teachers);
?>


