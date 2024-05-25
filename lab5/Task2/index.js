function createChessboardTable(fcolor, scolor, contents) {
    const table = document.getElementById('chessboard');
    table.innerHTML = '';

    const rows = contents.length;
    const cols = contents[0].length;

    for (let i = 0; i < rows; i++) {
        const tr = document.createElement('tr');
        for (let j = 0; j < cols; j++) {
            const td = document.createElement('td');
            td.textContent = contents[i][j];
            td.style.backgroundColor = (i + j) % 2 === 0 ? fcolor : scolor;
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
}

// Приклад виклику функції
const fcolor = '#ff0fff'; // Білий колір
const scolor = '#555555'; // Чорний колір
const contents = [
    ["A1", "B1", "C1", "D1", "E1", "F1", "G1", "H1"],
    ["A2", "B2", "C2", "D2", "E2", "F2", "G2", "H2"],
    ["A3", "B3", "C3", "D3", "E3", "F3", "G3", "H3"],
    ["A4", "B4", "C4", "D4", "E4", "F4", "G4", "H4"],
    ["A5", "B5", "C5", "D5", "E5", "F5", "G5", "H5"],
    ["A6", "B6", "C6", "D6", "E6", "F6", "G6", "H6"],
    ["A7", "B7", "C7", "D7", "E7", "F7", "G7", "H7"],
    ["A8", "B8", "C8", "D8", "E8", "F8", "G8", "H8"]
];

createChessboardTable(fcolor, scolor, contents);