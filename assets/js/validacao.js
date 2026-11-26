// Capta os elementos do formulário de cadastro
const formCadastro = document.getElementById('form-cadastro');

// Se o foemulário existir, aplica validações
if(formCadastro) {
    const cepInput = document.getElementById('cep');
    const inputUf = document.getElementById('uf');
    const inputSenha = document.getElementById('senha');
    const inputConfirmarSenha = document.getElementById('confirma-senha');
    const erroSenha = document.getElementById('erro-senha');
    const msgcepStatus = document.getElementById('cep-status');

    // Validação do CEP
    inputCep.addEventListener('input', () => {
    let valor = event.target.value.replace(/\D/g, '');

    valor = valor.substring(0, 8);

    if(valor.length > 5) {
        valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
    }
    event.target.value = valor;

    inputCep.classList.remove('erro');
});

// Validação Uf
inputUf.addEventListener('input', (evento) => {
    evento.target.value = evento.target.value.replace(/[^a-zA-Z]/g, ''). toUpperCase();
});

// Validação senha
function validarSenha() {
    const senha = inputSenha.value;
    const confirmar = inputConfirmarSenha.value;

    if(confirmar === ''){
        msgErroSenha.textContent = '';
        inputSenha.classList.remove('input-erro');
    }

    if(senha !== confirmar){
        msgErroSenha.textContent = 'As senhas não coincidem.';
        inputConfirmarSenha.classList.add('input-erro');
        inputConfirmarSenha.classList.remove('input-sucesso');
        return false;
    }else{
        msgErroSenha.textContent = '';
        inputConfirmarSenha.classList.remove('input-erro');
        inputConfirmarSenha.classList.add('input-sucesso');
    }
}

inputSenha.addEventListener('input', validarSenha);
inputConfirmarSenha.addEventListener('input', validarSenha);

// Validção final
formCadastro.addEventListener('submit', (evento) => {
    let formularioValido = true;
    if(!validarSenha()){
        formularioValido = false;
        inputConfirmarSenha.focus();
    }

    const cep = inputCep.value.replace(/\D/g, '');
    if(cep.length !== 8) {
        formularioValido = false;
        inputCep.classList.add('input-erro');
        msgCepStatus.textContent = 'Informe seu CEP válido com 8 números';
        msgCepStatus.classList.add('texto-erro');
        inputCep.focus();
    }

    if(!formularioValido){
        evento.preventDefault();
    }

});

}



                         
