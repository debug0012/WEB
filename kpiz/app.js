const express = require('express');
const path = require('path');
const connectDB = require('./connectDB');

const app = express();

async function getJson({req, res}, funk, ...params) {
    try {
        const jsonData = await funk(...params);
        res.json(jsonData);
    } catch (error) {
        console.error(error);
        res.status(500).send('Internal Server Error');
    }
}

app.use(express.static(path.join(__dirname, 'public')));


app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.get('/booksByAuthor', async (req, res) => {
    getJson({req, res}, connectDB.getBooksByAuthor, req.query.param ? req.query.param : "Антон");
});

app.get('/getBooksByPageCount', async (req, res) => {
    getJson({req, res}, connectDB.getBooksByPageCount);
});

app.get('/getBooksByPageCount', async (req, res) => {
    getJson({req, res}, connectDB.getBooksByPageCount);
});

app.get('/getBookWithLongestTitle', async (req, res) => {
    getJson({req, res}, connectDB.getBookWithLongestTitle);
});

app.get('/getBooksCountByAuthor', async (req, res) => {
    getJson({req, res}, connectDB.getBooksCountByAuthor);
});

app.get('/getMostCommonSurnameLetter', async (req, res) => {
    getJson({req, res}, connectDB.getMostCommonSurnameLetter);
});

app.get('/getMostCommonSurnameLetter', async (req, res) => {
    getJson({req, res}, connectDB.getMostCommonSurnameLetter);
});

app.get('/getAuthorsWithSurnameEndingInKo', async (req, res) => {
    getJson({req, res}, connectDB.getAuthorsWithSurnameEndingInKo);
});

app.get('/getAuthorsWithBirthdayToday', async (req, res) => {
    getJson({req, res}, connectDB.getAuthorsWithBirthdayToday);
});


const PORT = 3000;

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});