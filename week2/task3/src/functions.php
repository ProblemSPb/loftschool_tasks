<?php

function task1()
{
    /*
     * Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
     * id - уникальный идентификатор, равен номеру эл-та в массиве
     * name - случайное имя из 5-ти возможных (сами придумайте каких)
     * age - случайное число от 18 до 45
     */
    $NUMBER_OF_USERS = 50;
    $NAMES = ['Олег', 'Максим', 'Мария', 'Ольга', 'Александра'];
    $user_data = [];

    for ($i = 0; $i < $NUMBER_OF_USERS; $i++) {
        array_push(
            $user_data,
            [
                "id" => $i,
                "name" => $NAMES[array_rand($NAMES)],
                "age" => rand(18, 46)
            ]
        );
    }

    /*
     * Преобразуйте массив в json и сохраните в файл users.json
     */
    $json_data = json_encode($user_data);
    $file_pointer = fopen("users.json", "r+");
    file_put_contents("users.json", $json_data);

    /*
     *Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
    */
    if (file_get_contents("users.json")) {
        $file_data = json_decode(file_get_contents("users.json"));
        echo "<b>Данные успешно получены</b><br><br>";

        $count_of_names = array_column($file_data, 'name');
        $count_of_names = array_count_values($count_of_names);

        // Посчитайте количество пользователей с каждым именем в массиве
        echo "<b>Количество раз имена встречаются в массиве</b><br>";
        foreach ($count_of_names as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }

        // Посчитайте средний возраст пользователей
        $age_data = array_column($file_data, "age");
        $avg_age = array_sum($age_data)/count($age_data);
        echo "<br><b>Средний возраст пользователей</b><br>";
        echo $avg_age;

    } else {
        error_log("Error while getting the data from the file.");
        echo "Что-то пошло не так. Данные не были получены.";
    }
    fclose($file_pointer);
}
