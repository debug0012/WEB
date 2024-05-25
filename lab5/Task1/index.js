const data = ["Й", "Ц", "У", "К", "Е", "Н", "Г", "Ш", "Щ", "З", "Х", "Ї", "Ф", "І", "В", "А", "П", "Р", "О", "Л", "Д", "Ж", "Є", "Я", "Ч", "С", "М", "И", "Т", "Ь", "Б", "Ю"];

const root = document.getElementById("root")

data.forEach(element => {
    root.appendChild(createButton(element))
})


function createButton(buttonValue) {
    const button = document.createElement('div')
    button.className = "button"
    const value = document.createElement('p')
    value.textContent = buttonValue
    button.appendChild(value)
    button.onclick = () => click(buttonValue)
    return button
}

function click(value) {
    const input = document.getElementById("input")
    input.value += value
}