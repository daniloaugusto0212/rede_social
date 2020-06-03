<section class="cadastro">
    <div class="container box">
        <h2>Efetuar Cadastro:</h2>
        <form  method="post" enctype="multipart/form-data">
            <input type="text" name="nome" placeholder="Nome..." required>
            <input type="email" name="email" placeholder="E-mail..." required>
            <input type="password" name="senha" placeholder="Senha..." required>
            <input type="password" name="senha_confirm" placeholder="Confimação de senha..." required>
            <p>Escolha sua foto de perfil:</p>
            <input type="file" name="imagem">
            <input type="submit" name="cadastro" value="Cadastrar!">
        </form>
    </div>
</section>