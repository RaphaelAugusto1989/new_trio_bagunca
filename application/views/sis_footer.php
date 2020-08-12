    <footer class="main-footer">
        <strong>
            © <?php echo date('Y');?> SIGAP - SISTEMA DE GESTÃO ARTSPECK
        </strong>
    </footer>
    </div>
</body>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/icons_fontawesome.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/mask.jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/mask.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/validations.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/alerts.toastr.js');?>"></script>
    
    <!-- SCRIPTS DO LAYOUT ABAIXO-->
    <script type="text/javascript" src="<?= base_url('assets/js/layout.adminlte.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/layout_admin_lte.js');?>"></script>

    <script>
    //FUNÇÃO PARA DIGITAR SÓ NÚMEROS NO INPUT
    function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }
    </script>
</html>