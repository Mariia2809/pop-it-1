 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление сотрудниками и подразделениями</title>
    <link rel="stylesheet" href="/pop-it/pop-it-mvc/public/css/employee.css">
</head>
<body>
<div class="container">
    <h1>Сотрудники</h1>
        <table>
            <thead>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Пол</th>
                <th>Дата рождения</th>
                <th>Адрес прописки</th>
                <th>Должность</th>
                <th>Подразделение</th>
            </tr>
            </thead>
            <tbody>
            <!-- Пустые строки для визуального представления -->
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            </tbody>
        </table>
    <div class="add-employee">
        <h2>Фильтр по подразделению</h2>
        <select>
            <option value="">Все подразделения</option>
            <option value="Отдел кадров">Отдел кадров</option>
            <option value="Отдел разработки">Отдел разработки</option>
            <!-- Добавьте остальные варианты подразделений -->
        </select>


        <h2>Добавить сотрудника</h2>
        <form action="add_employee.php" method="post">
            <input type="text" name="last_name" placeholder="Фамилия" required><br>
            <input type="text" name="first_name" placeholder="Имя" required><br>
            <input type="text" name="middle_name" placeholder="Отчество"><br>
            <select name="gender" required>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
            </select><br>
            <input type="date" name="date_of_birth" required><br>
            <input type="text" name="address" placeholder="Адрес прописки" required><br>
            <input type="text" name="position" placeholder="Должность" required><br>
            <select name="department" required>
                <option value="" disabled selected>Выберите подразделение</option>
                <!-- Здесь будут опции для выбора подразделения -->
            </select><br>
            <button type="submit">Добавить</button>
        </form>
    </div>
</div>
</body>
</html>
