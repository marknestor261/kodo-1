<!-- JQUERY JS -->
<script src={{ asset("assets/js/jquery.min.js") }}></script>

<!-- BOOTSTRAP JS -->
<script src={{ asset("assets/plugins/bootstrap/js/popper.min.js") }}></script>
<script src={{ asset("assets/plugins/bootstrap/js/bootstrap.min.js") }}></script>

<!-- SIDE-MENU JS -->
<script src={{ asset("assets/plugins/sidemenu/sidemenu.js") }}></script>

<!-- Perfect SCROLLBAR JS-->
<script src={{ asset("assets/plugins/p-scroll/perfect-scrollbar.js") }}></script>
<script src={{ asset("assets/plugins/p-scroll/pscroll.js") }}></script>

	<!-- INTERNAL Notifications js -->
    <script src={{ asset("assets/plugins/notify/js/rainbow.js") }}></script>
    {{-- <script src="../assets/plugins/notify/js/sample.js"></script> --}}
    <script>

        (function () {
            $(function () {
                @if (session('success'))
                    $.growl.notice({
                        message: {{ session('success') }}
                    });
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        $.growl.error({
                            message: $error
                        });
                    @endforeach
                @endif


              // $.growl({
              //   title: "Growl",
              //   message: "Hi I'm Noa!"
              // });
              // $.growl.notice({
              //   message: "You have 4 notification"
              // });
          
               $('.error').click(function (event) {
                event.preventDefault();
                event.stopPropagation();
                return $.growl.error({
                  message: "please check Your details ...file is missing"
                });
              });
              $('.notice').click(function (event) {
                event.preventDefault();
                event.stopPropagation();
                return $.growl.notice({
                  message: "You have 4 notification"
                });
              });
              return $('.warning').click(function (event) {
                event.preventDefault();
                event.stopPropagation();
                return $.growl.warning({
                  message: "read all details carefully"
                });
              });
            });
          }).call(this);
    </script>
    <script src={{ asset("assets/plugins/notify/js/jquery.growl.js") }}></script>
    <script src={{ asset("assets/plugins/notify/js/notifIt.js") }}></script>


<!-- STICKY JS -->
<script src={{ asset("assets/js/sticky.js") }}></script>

<!-- COLOR THEME JS -->
<script src={{ asset("assets/js/themeColors.js") }}></script>

<!-- CUSTOM JS -->
<script src={{ asset("assets/js/custom.js") }}></script>

<!-- Stack array for including inline js or scripts -->
@stack('plugin-scripts')

@stack('custom-scripts')
