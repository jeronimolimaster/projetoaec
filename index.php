<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
    
<?php include_once 'includes/menu.inc.php' ?>

<!--Formulário de Cadastro Simples-->
<div class="row container">
    <p>&nbsp;</p>
    <form action="banco_de_dados/create.php" method="POST" class="col s12">
        <fieldset class="formulario" style="padding: 15px">
            <legend><img src="imagens/avatar.png" alt="[imagem]" width="100"></legend>
            <h5 class="light center">Cadastro de Aluno</h5>

            <?php
                if (isset($_SESSION['msg']));
                    echo $_SESSION['msg'];
                    session_unset();
            ?>

            <!--Campo nome-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                <label for="nome">Nome do Aluno</label>
            </div>

            <!--Campo email-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" maxlength="50" required>
                <label for="email">E-mail do Aluno</label>
            </div>

            <!--Campo telefone-->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="telefone" id="telefone" maxlength="15" required>
                <label for="telefone">Telefone do Aluno</label>
            </div>

             <!--botões-->
             <div class="input-field col s12">
                 <input type="submite" value="cadastrar" class="btn blue">
                 <input type="reset" value="limpar" class="btn red">
             </div>
        </fieldset>
    </form>
</div>


<?php include_once 'includes/footer.inc.php' ?>