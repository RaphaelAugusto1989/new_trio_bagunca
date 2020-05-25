function validaUsuario() {
    var cpf = $("input[name='cpf']").val();
    var nome = $("input[name='nome']").val();
    var email = $("input[name='email']").val();
    var login = $("input[name='login']").val();
    var senha = $("input[name='senha']").val();

    if (cpf == '') {
        var ErrBoder = 'class="form-control cpf border-danger"';
        bootoast.toast({
            message: 'CPF obrigatório!',
            type: 'danger',
            //icon:'exclamation-sign', //Glyphicons name
            position: 'top-center', //top-center, top-left, top-right, bottom-center, bottom-left, bottom-right
            //timeout: 2000, 
            timeoutProgress: 'top', //false, 'top', 'bottom', 'background'
            //animationDuration: 300,
        });
    } else {
        alert(cpf);
    }
}