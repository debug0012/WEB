const sqlite3 = require('sqlite3').verbose();
const db = new sqlite3.Database('library.db');

db.serialize(() => {
    db.run("CREATE TABLE IF NOT EXISTS authors (id INTEGER PRIMARY KEY, name TEXT, surname TEXT, date_of_birth DATE)");

    // Вставка даних в таблицю авторів
    const insertAuthor = db.prepare("INSERT INTO authors (name, surname, date_of_birth) VALUES (?, ?, ?)");
    insertAuthor.run("Антон", "Чехов", "1860-01-29");
    insertAuthor.run("Федор", "Достоєвський", "1821-11-11");
    insertAuthor.run("Лев", "Толстой", "1828-09-09");
    insertAuthor.run("Ліна", "Костенко", "1930-03-19");
    insertAuthor.run("Іван", "Франко", "1856-08-27");
    insertAuthor.run("Тарас", "Шевченко", "1814-03-09");
    insertAuthor.finalize();

    // Створення таблиці книг
    db.run("CREATE TABLE IF NOT EXISTS books (id INTEGER PRIMARY KEY, title TEXT, author_id INTEGER, pages INTEGER)");

    // Вставка даних в таблицю книг
    const insertBook = db.prepare("INSERT INTO books (title, author_id, pages) VALUES (?, ?, ?)");
    insertBook.run("Три сестри", 1, 200);
    insertBook.run("Злочин і кара", 2, 350);
    insertBook.run("Війна і мир", 3, 800);
    insertBook.run("Маруся Чурай", 4, 250);
    insertBook.run("Захар Беркут", 5, 320);
    insertBook.run("Кобзар", 6, 400);
    insertBook.finalize();
});

db.close();