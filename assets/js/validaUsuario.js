function validaUsuario() {
    var cpf = $("input[name='cpf']").val();
    var nome = $("input[name='nome']").val();
    var email = $("input[name='email']").val();
    var login = $("input[name='login']").val();
    var senha = $("input[name='senha']").val();

    if (cpf == '') {
        $.toaster({
            priority: 'danger',
            title: 'Atenção',
            messege: 'CPF obrigatório!',
            settings: {'timeout': 40000}
        });
    } else {
        alert(cpf);
    }
}