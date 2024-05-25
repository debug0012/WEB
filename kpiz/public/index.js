const root = document.getElement



const buttons = {}
for (let i = 1; i < 10; i++) {
    buttons[i] = {button: document.getElementById(`fetchButton${i}`), str: document.getElementById(`str${i}`), input: document.getElementById(`inp${i}`)}
}
console.log(buttons)
function getJson({button, str, input}, path) {
    button.onclick = async function() {
        if (input) {
            const params = new URLSearchParams();
            params.append('param', input.value);
            path = `${path}?${params.toString()}`
        }
        try {
            const response = await fetch(`/${path}`);
            const jsonData = await response.json();
            str.innerHTML = JSON.stringify(jsonData)
        } catch (error) {
            console.error('Error:', error);
        }
    };
};

let params = new URLSearchParams();



getJson(buttons["1"], "booksByAuthor");
getJson(buttons["2"], "getBooksByPageCount");
getJson(buttons["3"], "getBookWithLongestTitle");
getJson(buttons["4"], "getBooksCountByAuthor");
getJson(buttons["5"], "getMostCommonSurnameLetter");
getJson(buttons["6"], "getAuthorsWithSurnameEndingInKo");
getJson(buttons["7"], "getAuthorsWithBirthdayToday");
