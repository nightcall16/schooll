<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='style.css'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,800;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,800;1,400;1,500;1,700;1,800&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <title>Школа</title>
</head>


<body>

<?

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schooll";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM schooll";
    $result = $conn->query($sql);
    $tableColumnName = $conn->query("SHOW COLUMNS FROM schooll;");
    $columnName = [];
    
    array_shift($columnName);

    ?>

<div class='header'>
    <div class='container'>
        <div class='header-line'>
            <div class='header-logo'>
                <img src="logo.png" alt="">
            </div> 
            
            <div class='nav'>
                <a class='nav-item' href="@">Главная</a>
                <a class='nav-item' href="@">О нас</a>
                <a class='nav-item' href="@">Поступление</a>
            
            </div>


            <div class='btn'>
                <a class ='button' href='@'>Личный кабинет</a>
            </div>

            <div class='header-down'>
                <div class='header-title'>

                </div>
                
            </div>

         </div>
        <div class='header-down'>

            <div class='header-title'>
                Добро пожаловать в 

                <div class='header-subtitle'>
                    Нашу школу
                </div>
                <div class='header-suptitle'>
                    Второй дом для каждого
                </div>
                <div class='header-btn'>
                    <a href='#' class='header-button'>Подать заявку</a>
                </div>
                
            </div>

        </div>  
    </div>
</div>

<div class='cards'>
    <div class='container'>

        <div class='cards-holder'>

            <div class='card'>

                <div class='card-image'>
                    <img class='card-img' src='card.png'>
                </div>

                <div class='card-title'>
                    Наши <a href="#students">  <span>ученики</span></a>
                </div>

                <div class='card-desc'>
                    В нашей школе, учатся самые грамотные и добрые ученики.
                </div>

            </div>

            <div class='card'>

                <div class='card-image'>
                    <img class='card-img' src='card2.png'>
                </div>

                <div class='card-title'>
                    Наши <a href="#teachers"> <span>учителя</span> </a>
                </div>

                <div class='card-desc'>
                    В нашей школе, самые квалифицированные учителя в стране! Которые научат ваших детей самым важным аспектам образования.
                </div>

            </div>

            <div class='card'>

                <div class='card-image'>
                    <img class='card-img' src='card3.png'>
                </div>

                <div class='card-title'>
                    Учебные <a href="#subjects"> <span>предметы</span> </a>
                </div>

                <div class='card-desc'>
                    В школе преподают все предметы по образовательному стандарту. И помимо этого, есть предметы по выбору.
                </div>

            </div>
        </div>
    </div>



</div>

<div class='postscript'>
    <div class='container'>

        <div class='postscript-holder'>
            <div class='postscript-info'>
                <div class='postscript-title'>
                    Котнролируйте <span>оценки</span>
                </div>

                <div class='postscript-desc'>
                    Родители могут контролировать успеваемость детей в том или ином предмете. 
                    А так же любой момент получить имя и номер любого из учителей.
                </div> 
            </div>
                

                <div class='postscript-images'>
                    <img class='imgages-1' src="1.jpg" alt="">
                    <img class='imgages-2' src="2.jpg" alt="">
                    <img class='imgages-3' src="3.jpg" alt="">
                </div>
                    
        </div>
     </div>

</div>

<div class='black-block'>

    <div class='container'>
        
        <div class='block-holder'>

            <div class='left'>
                <div class='left-title'>
                    Информация
                </div>
                <div class='left-text'>
                    Вся информация об учителях, учениках и предметах
                </div>
            </div>
            
            <div class='right'>

                    <div class='right-button'>
                        <a href='#' class='right-btn'>Смотреть</a>
                    </div>


            </div>
        </div>
    </div>

</div>

<div class='students'>

    <div class='container'>


        <div class='students-title' id='students'>
            Ученики
        </div>

    </div>


</div>


<fieldset border="1">
 <form class="add-form" id="add-record-form" action="scripts/get_student.php" method="POST">
      <legend>Поиск обучающихся</legend>
      <div class="form-group">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="n" placeholder="Введите ФИО">
      </div>
      <div class="form-group">
        <label for="date">Дата Рождения:</label>
        <input type="text" id="date" name="date" placeholder="Введите значение">
      </div>
      
      <div class="form-group">
        <label for="code">Код ученика:</label>
        <input type="text" id="code" name="code" placeholder="Введите значение">
      </div>
      
      <button type='submit' class='submit-bottom'>Показать</button>
        
    </div>
</form>
</fieldset>
    

  






<div class='white-block'>
</div>





<div class='teachers'>

    <div class='container'>

        <div class='teachers-title' id='teachers'>
            Учителя
        </div>

    </div>


</div>


<fieldset border="2" >
<form class="add-form" id="add-record-form" action="scripts/get_teacher.php" method="POST">

    <legend>Поиск Преподавателя</legend>
    <div class="form-group">
      <label for="name">ФИО:</label>
      <input type="text" id="name" name="name" placeholder="Введите ФИО">
    </div>
    <div class="form-group">
      <label for="date">Дата Рождения:</label>
      <input type="text" id="date" name="date" placeholder="Введите значение">
    </div>
    <div class="form-group">
      <label for="code">Код учителя:</label>
      <input type="text" id="code" name="code" placeholder="Введите значение">
    </div>

    
    <button type='submit' class='submit-bottom'>Показать</button>

        
    
</form>
</fieldset>





<div class='green-bg'>

</div>






<div class='subjects'>

    <div class='container'>

        <div class='subjects-title' id='subjects'>
            Учебные предметы
        </div>

    </div>


</div>


<fieldset border="3">

    <legend>Поиск предмета</legend>
    <div class="form-group">
      <label for="fio1">Наименование:</label>
      <input type="text" id="fio1" name="fio1" placeholder="Введите ФИО">
    </div>
    <div class="form-group">
      <label for="param1">Код предмета:</label>
      <input type="text" id="param1" name="param1" placeholder="Введите значение">
    </div>
    <div class="form-group">
      <label for="param2">Код учителя:</label>
      <input type="text" id="param2" name="param2" placeholder="Введите значение">
    </div>


    <div class='submit'>
        <a href='#' class='submit-bottom'>Показать</a>
        
    </div>

</fieldset>









</body>
</html>