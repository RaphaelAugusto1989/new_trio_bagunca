$(document).ready(function() {
    var cpf = $("input[name='cpf']").val();
    var nome = $("input[name='nome']").val();
    var email = $("input[name='email']").val();
    var login = $("input[name='login']").val();
    var senha = $("input[name='senha']").val();
    var cpf = $("input[name='cpf']").val();

    alert(cpf);
    $('.salvarUsuario').on('click', function() {
        alert(cpf);
    });
});
