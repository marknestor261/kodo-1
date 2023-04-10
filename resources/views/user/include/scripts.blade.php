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

<!-- STICKY JS -->
<script src={{ asset("assets/js/sticky.js") }}></script>

<!-- COLOR THEME JS -->
<script src={{ asset("assets/js/themeColors.js") }}></script>

<!-- CUSTOM JS -->
<script src={{ asset("assets/js/custom.js") }}></script>

<!-- Stack array for including inline js or scripts -->
@stack('plugin-scripts')

@stack('custom-scripts')
