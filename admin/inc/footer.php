<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Hardik Hamal - <?php echo date('Y') ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="assets/js/datatables.min.js"></script>
        <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.min.js" type="text/javascript"></script>
        <title><?php echo $title ?> | Hardik Hamal</title>
        <script>
            setTimeout(function(){
                $('.alert').slideUp()
            },3000)
        </script>
        <script>
            $(document).ready(function() {
                $('.counter').each(function () {
                $(this).prop('Counter',0).animate({
                Counter: $(this).text()
                }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
                });
                });

                });  
        </script>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup",function(){
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $('#nepalidate').nepaliDatePicker(
                    {
                        ndpYear: true,
                        ndpMonth: true,
                        ndpYearCount: 10
                    }
                );
            });
            $(document).ready(function(){
                $('#nepalidate2').nepaliDatePicker(
                    {
                        ndpYear: true,
                        ndpMonth: true,
                        ndpYearCount: 10
                    }
                );
            });
        </script>
    </body>
</html>