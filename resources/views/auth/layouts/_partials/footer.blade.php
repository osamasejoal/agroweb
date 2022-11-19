</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/assets')}}/vendor/global/global.min.js"></script>
	<script src="{{asset('backend/assets')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('backend/assets')}}/js/custom.min.js"></script>
    <script src="{{asset('backend/assets')}}/js/deznav-init.js"></script>

    <script>
        $(document).ready(function(){
            setTimeout(() => {
                $("#success-alert").fadeOut(300, function(){
                    $(this).remove();
                });
            }, 4000);
        });
    </script>

    @yield('auth-footer')

</body>

</html>