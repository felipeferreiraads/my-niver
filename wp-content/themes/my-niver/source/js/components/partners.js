function getPartners () {
    fetch('https://app.myniver.net/estabsniver', { method: 'GET', mode: 'no-cors' })
        .then(response => response.json())
        .then(response => {
            const template = Object.values(response).map(row => `
                <div class="card-partner">
                    <figure>
                        <img src="https://app.myniver.net/images/logos/${row.logo}" alt="${row.name}">
                    </figure>
                    <h3>${row.name}</h3>
                </div>
            `);
            $('#carousel-partners').append(template);
        });
}

getPartners();