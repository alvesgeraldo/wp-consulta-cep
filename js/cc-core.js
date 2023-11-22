document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

  // Pegando o valor do CEP digitado
  let cep = document.getElementById('cep').value;

  // Removendo caracteres especiais do CEP
  cep = cep.replace(/\D/g, '');

  // Verificando se o CEP tem o tamanho correto
  if (cep.length !== 8) {
      alert('CEP inválido. Por favor, digite um CEP válido com 8 dígitos.');
      return;
  }

  // Fazendo a requisição para a API do Via CEP
  fetch(`https://viacep.com.br/ws/${cep}/json/`)
      .then(response => response.json())
      .then(data => {
          // Montando o resultado na div 'div-res'
          document.getElementById('div-res').innerHTML = `
              <p>CEP: ${data.cep}</p>
              <p>Endereço: ${data.logradouro}</p>
              <p>Bairro: ${data.bairro}</p>
              <p>Cidade: ${data.localidade}</p>
              <p>UF: ${data.uf}</p>
          `;
      })
      .catch(error => {
          console.error('Ocorreu um erro ao buscar o CEP:', error);
          document.getElementById('div-res').innerHTML = 'Ocorreu um erro ao buscar o CEP. Por favor, tente novamente mais tarde.';
      });
});
