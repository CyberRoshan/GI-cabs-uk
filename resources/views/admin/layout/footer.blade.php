				
				</div>
				</div>
				<!-- Required Jquery -->
				<script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/SmoothScroll.js"></script>
    <script src="{{url('/public/admin/')}}/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- waves js -->
<script src="{{url('/public/admin/')}}/assets/pages/waves/js/waves.min.js"></script>

<!-- Accordion js -->
<script type="text/javascript" src="{{url('/public/admin/')}}/assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script src="{{url('/public/admin/')}}/assets/js/pcoded.min.js"></script>
<script src="{{url('/public/admin/')}}/assets/js/vertical-layout.min.js "></script>
<script src="{{url('/public/admin/')}}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="{{url('/public/admin/')}}/files/assets/js/script.js"></script>
<script src="{{asset('public/admin/')}}//dropify.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="{{url('/public/admin/')}}/assets/js/script.js"></script>
</body>

</html>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

				<script>
				    $(document).ready(function() {
				        // Basic
				        $('.dropify').dropify();

				        // Translated
				        $('.dropify-fr').dropify({
				            messages: {
				                default: 'Glissez-déposez un fichier ici ou cliquez',
				                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
				                remove: 'Supprimer',
				                error: 'Désolé, le fichier trop volumineux'
				            }
				        });

				        // Used events
				        var drEvent = $('#input-file-events').dropify();

				        drEvent.on('dropify.beforeClear', function(event, element) {
				            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
				        });

				        drEvent.on('dropify.afterClear', function(event, element) {
				            alert('File deleted');
				        });

				        drEvent.on('dropify.errors', function(event, element) {
				            console.log('Has Errors');
				        });

				        var drDestroy = $('#input-file-to-destroy').dropify();
				        drDestroy = drDestroy.data('dropify')
				        $('#toggleDropify').on('click', function(e) {
				            e.preventDefault();
				            if (drDestroy.isDropified()) {
				                drDestroy.destroy();
				            } else {
				                drDestroy.init();
				            }
				        })
				    });
				</script>

				<script>
				    $("#mobile_code").intlTelInput({
				        initialCountry: "in",
				        separateDialCode: true,
				    });
				</script>
				<script type="text/javascript">
				    $(document).ready(function() {
				        $(".alert-dismissible").hide();
				        $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function() {
				            $(".alert-dismissible").slideUp(2000);
				        });

				    });
				</script>
				</body>

				</html>