document.addEventListener("DOMContentLoaded", () => {
    let ar = [
        'Король Артур',
        'Алиса в стране чудес',
        'Синдбад-мореход',
        'Медуза Горгона',
        'Робин Гуд',
        'Бигфут',
        'Человек-невидимка',
        'Дракула',
        'Шерлок Холмс',
        'Доктор Джекилл и мистер Хайд',
        'Малдун',
        'Рапторы',
        'T-Rex',
        'Доктор Сеттлер',
        'Беовульф',
        'Красная шапочка'
    ];

    let form = document.querySelector('.generate__form');
    let resultDiv = document.querySelector('.generate__result');
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        let firstId = Math.floor(Math.random() * ar.length);
        let secondId = Math.floor(Math.random() * ar.length);

        if (secondId === firstId) {
            if (firstId < ar.length) {
                secondId++;
            } else {
                secondId--;
            }
        }
        const first = ar[firstId];
        const second = ar[secondId];

        resultDiv.innerHTML = `<b>${first}</b>vs<b>${second}</b>`;
    });
});
