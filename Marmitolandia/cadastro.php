<div class="Content">
    <div class="Resultado"></div>

    <div class="Formulario">
        <h1 class="Center">Cadastro</h1>

        <form name="FormCadastro" id="FormCadastro" method="post" action="controller/controller.cadastro.php">
            <div class="FormularioInput">
                Nome: <br>
                <input type="text" id="nome" name="nome">
            </div>

            <div class="FormularioInput">
                Descrição: <br>
                <input type="text" id="descricao" name="descricao">
            </div>

            <div class="FormularioInput">
                Preço: <br>
                <input type="number" id="preco" name="preco">
            </div>

            <div class="FormularioInput">
                Ingredientes: <br>
                <input type="text" id="ingrediente" name="ingrediente">
            </div> 
            
            <div class="FormularioInput">
                Quantidade: <br>
                <input type="number" id="quantidade" name="quantidade">
            </div>
        
            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</div>