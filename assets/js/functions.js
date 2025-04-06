document.getElementById('zodiacForm').addEventListener('submit', async function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    const formData = new FormData(this); // Captura os dados do formulário
    const response = await fetch('show_zodiac_sign.php', {
        method: 'POST',
        body: formData
    });

    if (response.ok) {
        const result = await response.json(); // Obtém a resposta do servidor como JSON
        const { signo, elemento, planetaRegente } = result; // Desestrutura o JSON em variáveis
        document.getElementById('resultado').classList.remove("d-none");
        document.getElementById('title1').classList.add("d-none");
        document.getElementById('card').classList.add("d-none");
        document.getElementById('signo').textContent = signo;
        document.getElementById('elemento').textContent = elemento;
        document.getElementById('planetaRegente').textContent = planetaRegente;
        const container = document.querySelector('.container-fluid');
        container.className = 'container-fluid'; // Remove todas as classes de fundo anteriores
        switch (signo.toLowerCase()) {
            case 'áries':
            container.classList.add('aries-bg');
            break;
            case 'touro':
            container.classList.add('touro-bg');
            break;
            case 'gêmeos':
            container.classList.add('gemeos-bg');
            break;
            case 'câncer':
            container.classList.add('cancer-bg');
            break;
            case 'leão':
            container.classList.add('leao-bg');
            break;
            case 'virgem':
            container.classList.add('virgem-bg');
            break;
            case 'libra':
            container.classList.add('libra-bg');
            break;
            case 'escorpião':
            container.classList.add('escorpiao-bg');
            break;
            case 'sagitário':
            container.classList.add('sagitario-bg');
            break;
            case 'capricórnio':
            container.classList.add('capricornio-bg');
            break;
            case 'aquário':
            container.classList.add('aquario-bg');
            break;
            case 'peixes':
            container.classList.add('peixes-bg');
            break;
            default:
            console.warn(`Signo não reconhecido: ${signo}`);
        }
    } else {
        alert('Erro ao enviar os dados. Tente novamente.');
    }
});