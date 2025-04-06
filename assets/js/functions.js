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
        alert(`Signo: ${signo}\nElemento: ${elemento}\nPlaneta Regente: ${planetaRegente}`); // Exibe as informações
    } else {
        alert('Erro ao enviar os dados. Tente novamente.');
    }
});