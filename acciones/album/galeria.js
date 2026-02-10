    const selector = document.getElementById('selectorEventos');
    const eventos = document.querySelectorAll('.evento');

    selector.addEventListener('change', function () {
        const tipo = this.value;

        eventos.forEach(evento => {
            if (tipo === 'todos' || evento.classList.contains(tipo)) {
                evento.style.display = 'block';
            } else {
                evento.style.display = 'none';
            }
        });
    });
