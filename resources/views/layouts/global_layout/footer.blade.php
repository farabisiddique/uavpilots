<!-- ############ Footer START-->
    <div id="footer" class="page-footer hide">
        <div class="d-flex p-3">
            <span class="text-sm text-muted flex">&copy; Copyright. UVApilots</span>
            <div class="text-sm text-muted"></div>
        </div>
    </div>
    <!-- ############ Footer END-->
</div>
<!-- build:js {{ asset('js/basik_js/site.min.js ') }} -->
<!-- jQuery -->
<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- ajax page -->
<script src="{{ asset('libs/pjax/pjax.min.js ') }}"></script>
<script src="{{ asset('js/basik_js/ajax.js ') }}"></script>
<!-- lazyload plugin -->
<script src="{{ asset('js/basik_js/lazyload.config.js') }}"></script>
<script src="{{ asset('js/basik_js/lazyload.js') }}"></script>
<script src="{{ asset('js/basik_js/plugin.js') }}"></script>
<!-- scrollreveal -->
{{-- <script src="{{ asset('libs/scrollreveal/dist/scrollreveal.min.js') }}"></script> --}}
<!-- feathericon -->
<script src="{{ asset('libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('js/basik_js/plugins/feathericon.js') }}"></script>
<!-- theme -->
<script src="{{ asset('js/basik_js/theme.js') }}"></script>
<script src="{{ asset('js/basik_js/utils.js') }}"></script>
<!-- endbuild -->
{{-- custom js  for admin--}}
@if (Request::is('admin/*'))
<script src="{{asset('js/admin/script.js')}}"></script>
@endif
<script src="{{ asset('js/frontend/script.js') }}"></script>
    </body>
</html>
