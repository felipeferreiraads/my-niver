function getPartners () {
    $.ajax({
        url: 'https://myniver.net/estabsniver',
        crossDomain: true,
        dataType: 'json',
        headers: {
            'Access-Control-Allow-Origin': '*'
        }
    }).done(response => {
        const template = Object.values(response).map(row => `
            <div class="card-partner">
                <figure>
                    <img src="https://myniver.net/images/logos/${row.logo}" alt="${row.name}">
                </figure>
                <h3>${row.name}</h3>
            </div>
        `);
        $('#carousel-partners').append(template);
    });
}

getPartners();