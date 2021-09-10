<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<style>
.form-control {
    margin-top: 12px !important; 
}
.right {
    text-align: end !important;
}
#form {
    text-align: center !important;
}
</style>
<body>
    <?php include("menu.php") ?>
    <div class="container">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <h1>Adding Correspondence</h1>
            <br>
            <div class="form-group bg-light rounded-lg" style="padding: 30px;">
                <input class="form-control " type="text" id="company_name" name="company_name" placeholder="Nome da Empresa" required autofocus>
                <input class="form-control" type="text" id="ac" name="ac" placeholder="A/C do destinatário" required>
                <input class="form-control" type="text" id="address" name="address" placeholder="Endereço" required>
                <input class="form-control" type="text" id="person" name="person" placeholder="Pessoa responsável pelo envio" required>
                <select class="form-control" name="type" id="type">
                    <option value="Carta Comum">Carta Comum</option>
                    <option value="Carta Registrada">Carta Registrada</option>
                    <option value="Pac">Pac</option>
                    <option value="Sedex">Sedex</option>
                </select>
                <textarea class="form-control" type="text" id="ar" name="ar" placeholder="AR" required></textarea>
                <label class="form-control"><b>Data de envio</b></label>
                <input class="form-control" type="date" id="send_date" name="send_date" placeholder="Data de envio" required>
                <input class="form-control" type="text" id="code" name="code" placeholder="Codigo de rastreio" required>
                <div class="form-group right mt-3">
                <button type="submit" class="btn btn-lg btn-success" id="cadastrar">Cadastrar</button>
            </div>
            </div>
 
        </form>
    </div>

    <script language="javascript" type="text/javascript">
        // function formatarMoeda() {
        //     var elemento = document.getElementById('preco');
        //     var valor = preco.value;

        //     valor = valor + '';
        //     valor = parseInt(valor.replace(/[\D]+/g, ''));
        //     valor = valor + '';
        //     valor = valor.replace(/([0-9]{2})$/g, ",$1");

        //     if (valor.length > 6) {
        //         valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        //     }

        //     elemento.value = valor;
        // }



        function validar(formulario) {
            formulario.submit();

            // for (i = 0; i <= formulario.length - 2; i++) {
            //     if ((formulario[i].value == "")) {
            //         alert("Preencha o campo " + formulario[i].name);
            //         formulario[i].focus();
            //         return false;
            //     }
            // }
            // if (quantidade <= 0) {
            //     alert('A quantidade de páginas não pode ser igual ou inferior a 0');
            //     form.quantidade.focus();
            //     return false;
            // }
            // if (preco <= 0) {
            //     alert('O preço do livro não pode ser igual ou infeiror a 0');
            //     form.preco.focus();
            //     return false;
            // }
            // formulario.submit();
        }

    </script>
</body>

</html>
