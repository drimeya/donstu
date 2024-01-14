document.addEventListener('DOMContentLoaded', () => {
    //дата на главной
    const dateElem = document.getElementById('curr-date');
    if(dateElem) {
        setInterval(() => {
            let date = new Date();
            dateElem.textContent = date.toLocaleString();

            const start = new Date();
            start.setHours(9,0,0); 

            const end = new Date();
            end.setHours(21,0,0);

            const dateOpen = document.getElementById('date-open'),
            dateClose = document.getElementById('date-close');

            if(date >= start && date < end ){
                dateClose.classList.remove('active');
                dateOpen.classList.add('active');
            }else{
                dateClose.classList.add('active');
                dateOpen.classList.remove('active');
            }
        }, 1000);
    }

    //активный пункт меню
    const links = document.querySelectorAll('a[href]');
    if (links) {
        links.forEach(item => {

            if (item.getAttribute('href') == window.location.pathname) {
                item.classList.add('active');
            }
        });
    }

    //маска ввода номера
    const tels = document.querySelectorAll('input.tel');
    if (tels) {
        tels.forEach(tel => {
            const maskOptions = {
                mask: '+{7} (000) 000-00-00'
                };
            const mask = IMask(tel, maskOptions);
        });
    }

    //form 
    const forms = document.querySelectorAll('.form');
    forms.forEach(form => {
        form.addEventListener('submit', async e => {
            e.preventDefault();
            const formdata = new FormData(form);
            const resultElem = document.querySelector('.form__result'),
            result = document.getElementById('form-res');

            if (resultElem && result) {
                resultElem.classList.add('active');
                form.style.display = 'none';

                let text = result.innerHTML;
                for (const key of formdata.keys()) {
                    let idElem = document.querySelector('[data-for='+key+']');
                    if (!idElem) {
                        idElem = document.querySelector('[data-for-service]');
                    }
                    if (idElem) {
                        text += '<h3>' + idElem.innerHTML + '</h3>' + formdata.get(key) + '<br>';
                    }
                }
                result.innerHTML = text;
            }
        });
    });
});