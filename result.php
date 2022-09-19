<?php
$a = 0;
for ($i = 0; $i < 100000; $i++) {
    if(mt_rand(0, 100) >= 10){
        $a++;
    }
}
if (($a/100000) > 0.9) {
if(strlen(htmlspecialchars($_POST['name'])) < 5){
    echo 'Укажите верное имя.';
}elseif(strlen(htmlspecialchars($_POST['secondname'])) < 5){
    echo 'Укажите верную фамилию.';
}elseif(strlen(htmlspecialchars($_POST['lastname'])) < 5){
    echo 'Укажите верное отчество.';
}elseif(strlen(htmlspecialchars($_POST['position'])) < 5){
    echo 'Укажите верную должность.';
} else{
        echo 'DONE';
        $name = $_POST["name"];
        $secondname = $_POST["secondname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $country = $_POST["country"];
        $position = $_POST["position"];
        try {
            $conn = new PDO('mysql:host=localhost;dbname=people;charset=utf8', "root", "root");
            $sql = "INSERT INTO workers (name, secondname, lastname, age, country, position) VALUES ('$name', '$secondname', '$lastname', '$age', '$country', '$position')";
            $affectedRowsNumber = $conn->exec($sql);
            if ($conn->connect_error) {
                die("Ошибка: " . $conn->connect_error);
            }
        } catch (PDOException $e) {
            echo "Что то пошло не по плану:" . $e->getMessage();
        }
    }
}else {
    echo 'Не повезло';
}





