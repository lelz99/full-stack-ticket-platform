//# Recupero gli elementi

const update = document.querySelectorAll('.update-state');
const form = document.querySelectorAll('.form-state');

const arrayMatto = [];

for (let i = 0; i < update.length; i++) {
    arrayMatto.push({
        btn: update[i],
        form: form[i]
    })
}

arrayMatto.forEach(a => {
    a.btn.addEventListener('click', () => {
        a.btn.classList.add('d-none');
        a.form.classList.remove('d-none');
    });

    document.addEventListener('click', (e) => {
        if (!a.form.contains(e.target) && !a.btn.contains(e.target)) {
            a.btn.classList.remove('d-none');
            a.form.classList.add('d-none');
        }
    });
});

