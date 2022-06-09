        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                <!-- Anything you want -->
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022</strong> All rights reserved.
        </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <script src="<?= $path ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $path ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= $path ?>assets/js/adminlte.min.js"></script>
        <script src="<?= $path ?>assets/js/popper.min.js"></script>
        <script src="<?= $path ?>assets/js/bootstrap-table.min.js"></script>
        <script src="<?= $path ?>assets/js/bootstrap-table-toolbar.min.js"></script>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
        </body>

        </html>