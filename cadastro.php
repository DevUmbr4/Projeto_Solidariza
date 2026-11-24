<?php include_once 'includes/header.php'; ?>

<main class="conteudo-principal container-form">
    <section class="card-form">
        <div class="cabecalho-form">
            <h2>Entrar no Solidariza</h2>
            <p>Preencha seus dados para participar</p>
        </div>
        <form id="form-cadastro" class="formulario" method="POST" action="actions/auth_register.php">
            <fieldset class="grupo-secao">
                <legend>Dados Pessoais e Acesso</legend>
                <div class="grupo-input">
                    <label for="nome">Nome Completo</label>
                    <input 
                        type="text" 
                        id="nome" 
                        name="nome" 
                        placeholder="Ex. Maria da Silva" 
                        maxlength="150" 
                        required
                    >
                </div>
                <div class="grupo-input">
                    <label for="email">E-mail</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Ex. Maria da Silva" 
                        maxlength="150" 
                        required
                    >
                </div>
                <div class="linha-dupla">
                    <div class="grupo-input">
                        <label for="senha">Senha</label>
                        <input 
                            type="password" 
                            id="senha" 
                            name="senha" 
                            placeholder="Mínimo 6 caracteres" 
                            minlength="6" 
                            required
                        >
                    </div>
                    <div class="grupo-input">
                        <label for="confirma-senha">Confirme a Senha</label>
                        <input 
                            type="password" 
                            id="confirma-senha" 
                            name="confirma-senha" 
                            placeholder="Mínimo 6 caracteres" 
                            minlength="6" 
                            required
                        >
                    </div>    
                </div>
            </fieldset>
            <fieldset class="grupo-secao">
                <legend>Endereço para logística de coleta</legend>
                <div class="linha-dupla">
                    <div class="grupo-input">
                        <label for="cep">CEP</label>
                        <input 
                            type="text" 
                            id="cep" 
                            name="cep" 
                            placeholder="Ex. 12345-678"
                            maxlength="9"
                            required
                        >
                    <small id="cep-status" class="text-ajuda">Digite o CEP para preenchimento automático</small>
                    </div>
                    <div class="grupo-input">
                        <label for="bairro">Bairro</label>
                        <input 
                            type="text" 
                            id="bairro" 
                            name="bairro" 
                            placeholder="preenchido automaticamente" 
                            disabled required
                    >     
                    </div>
                </div>
                <div class="grupo-input">
                    <label for="logradouro">Logradouro</label>
                    <input 
                        type="text" 
                        id="logradouro" 
                        name="logradouro" 
                        placeholder="preenchido automaticamente" 
                        disabled required
                    >
                </div>
                <div class="linha-dupla"></div>
            </fieldset>
            <button type="submit" class="btn-sustentavel btn-bloco btn-grande">Cadastrar</button>
        </form>
        <div class="rodape-form"></div>
    </section>
</main>



<?php include_once 'includes/footer.php'; ?>