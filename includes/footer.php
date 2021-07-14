</body>

</html>


<footer class="">

</footer>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
<script src="../includes/js/jquery-3.3.1.min.js"></script>
<script src="../includes/js/popper.min.js"></script>
<script src="../includes/js/bootstrap.min.js"></script>
<script src="../includes/js/jquery.sticky.js"></script>
<script src="../includes/js/main.js"></script>
<script>
M.AutoInit();
</script>
<script>
function validarSenha() {
    senha = document.getElementById('senha').value;
    senha2 = document.getElementById('senha2').value;
    if (senha != senha2) {
        alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS");
    } else {
        document.form.submit();
    }

}
</script>