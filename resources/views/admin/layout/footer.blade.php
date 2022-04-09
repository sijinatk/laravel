              </div>
              </div>
            </div>
        </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('admin_assets/js/jquery-3.2.1.slim.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/popper.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/all.min.js')}}"></script>
        <script type="text/javascript">
            $('a[data-toggle="pill"]').on("shown.bs.tab", function (e) {});
        </script>
        <script type="text/javascript">
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
    </body>
</html>