const sqlite3 = require('sqlite3').verbose();
const db = new sqlite3.Database('library.db');

// 1. Вивести список книг, вказаного автора.
function getBooksByAuthor(authorName) {
    return new Promise((resolve, reject) => {
        db.all(`SELECT authors.name AS Author, books.title AS Title
                FROM books
                JOIN authors ON books.author_id = authors.id
                WHERE authors.name = ?`, [authorName], (err, rows) => {
            if (err) {
                reject(err);
            } else {
                resolve(rows);
            }
        });
    });
}

// 2. Написати запит, що виводить книги з найбільшою та найменшою кількістю сторінок.
function getBooksByPageCount() {
    return new Promise((resolve, reject) => {
        db.all(`SELECT title, pages
                FROM books
                ORDER BY pages ASC
                LIMIT 1;
                
                SELECT title, pages
                FROM books
                ORDER BY pages DESC
                LIMIT 1;`, (err, rows) => {
            if (err) {
                reject(err);
            } else {
                resolve(rows);
            }
        });
    });
}

// 3. Написати запит, який виводить книгу, в назві якої найбільше знаків.
function getBookWithLongestTitle() {
    return new Promise((resolve, reject) => {
        db.get(`SELECT title
                FROM books
                ORDER BY LENGTH(title) DESC
                LIMIT 1`, (err, row) => {
            if (err) {
                reject(err);
            } else {
                resolve(row);
            }
        });
    });
}

// 4. Вивести звіт про те, скільки книг є кожного автора.
function getBooksCountByAuthor() {
    return new Promise((resolve, reject) => {
        db.all(`SELECT authors.name AS Author, COUNT(books.id) AS Number_of_books
                FROM authors
                JOIN books ON authors.id = books.author_id
                GROUP BY authors.name`, (err, rows) => {
            if (err) {
                reject(err);
            } else {
                resolve(rows);
            }
        });
    });
}

// 5. На яку букву алфавіту припадає найбільше прізвищ авторів книг.
function getMostCommonSurnameLetter() {
    return new Promise((resolve, reject) => {
        db.get(`SELECT SUBSTR(authors.surname, 1, 1) AS First_letter, COUNT(*) AS Count
                FROM authors
                GROUP BY First_letter
                ORDER BY Count DESC
                LIMIT 1`, (err, row) => {
            if (err) {
                reject(err);
            } else {
                resolve(row);
            }
        });
    });
}

// 6. Знайти авторів книг, прізвища яких закінчуються на «ко».
function getAuthorsWithSurnameEndingInKo() {
    return new Promise((resolve, reject) => {
        db.all(`SELECT *
                FROM authors
                WHERE surname LIKE '%ко'`, (err, rows) => {
            if (err) {
                reject(err);
            } else {
                resolve(rows);
            }
        });
    });
}

// 7. Вивести список авторів, в яких сьогодні день народження.
function getAuthorsWithBirthdayToday() {
    const currentDate = new Date().toISOString().slice(5, 10); // Отримання поточної дати (місяця та дня)
    return new Promise((resolve, reject) => {
        db.all(`SELECT *
                FROM authors
                WHERE strftime('%m-%d', date_of_birth) = ?`, [currentDate], (err, rows) => {
            if (err) {
                reject(err);
            } else {
                resolve(rows);
            }
        });
    });
}

// Використання функцій
// (async () => {
//     try {
//         console.log("1. Вивести список книг, вказаного автора:");
//         console.log(await getBooksByAuthor('Антон'));

//         console.log("\n2. Написати запит, що виводить книги з найбільшою та найменшою кількістю сторінок:");
//         console.log(await getBooksByPageCount());

//         console.log("\n3. Написати запит, який виводить книгу, в назві якої найбільше знаків:");
//         console.log(await getBookWithLongestTitle());

//         console.log("\n4. Вивести звіт про те, скільки книг є кожного автора:");
//         console.log(await getBooksCountByAuthor());

//         console.log("\n5. На яку букву алфавіту припадає найбільше прізвищ авторів книг:");
//         console.log(await getMostCommonSurnameLetter());

//         console.log("\n6. Знайти авторів книг, прізвища яких закінчуються на «ко»:");
//         console.log(await getAuthorsWithSurnameEndingInKo());

//         console.log("\n7. Вивести список авторів, в яких сьогодні день народження:");
//         console.log(await getAuthorsWithBirthdayToday());
//     } catch (err) {
//         console.error(err);
//     } finally {
//         db.close();
//     }
// })();

module.exports = {
    getBooksByAuthor,
    getBooksByPageCount,
    getBookWithLongestTitle, 
    getBookWithLongestTitle, 
    getBooksCountByAuthor, 
    getMostCommonSurnameLetter, 
    getAuthorsWithSurnameEndingInKo, 
    getAuthorsWithBirthdayToday
}
