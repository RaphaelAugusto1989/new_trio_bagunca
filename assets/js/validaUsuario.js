function validaUsuario() {
    var cpf = $("input[name='cpf']").val();
    var nome = $("input[name='nome']").val();
    var email = $("input[name='email']").val();
    var login = $("input[name='login']").val();
    var senha = $("input[name='senha']").val();

    if (cpf == '') {
        $('.labelCpf').addClass('labelError'); //Add a cor vermelha no texto
        $('.cpf').addClass('border border-4 border-danger'); //Add a Bordar vermelha
        
        //Mostra o popup de alertaT
        toastr.error('CPF Obrigatório!', '', {
                    "closeButton": true, //true or false
                    "debug": false, //true or false
                    "newestOnTop": false, //true or false
                    "progressBar": true, //true or false
                    "positionClass": "toast-top-right", //toast-top-right, toast-top-left, toast-top-full-width, toast-top-center, toast-bottom-right, toast-bottom-left, toast-bottom-full-width, toast-bottom-center
                    "preventDuplicates": false, //true or false
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn", //fadeIn, show, slideDown
                    "hideMethod": "fadeOut" //fadeOut, hide
        });
    } 

    if (email == '') {
        $('.labelEmail').addClass('labelError');
        $('.email').addClass('border border-4 border-danger');
        toastr.error('CPF Obrigatório!', '', {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
        });
    }
}