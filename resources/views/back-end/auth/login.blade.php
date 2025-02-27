<!doctype html>
<html lang="en">

<head>
    <base href="{{url("/")}}">
    <meta charset="utf-8" />
    <title>Backend | System.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Toastr Alert-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/toastr/toastr.min.css')}}">
</head>

<body class="authentication-bg">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <i class="uil-shutter-alt spin-icon"></i>
            </div>
        </div>
    </div>
    <!-- End Loader -->


    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="{{url("")}}" class="mb-5 d-block auth-logo">
                            <img src="{{asset('assets/logo/logo.png')}}" alt="" height="100" class="logo logo-dark">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">ยินดีต้อนรับ !</h5>
                                <p class="text-muted">กรุณากรอกข้อมูลเพื่อ เข้าสู่ระบบหลังบ้าน</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="" method="post">
                                    @csrf
                                    @if (Session('error'))
                                    <div class="alert alert-danger">
                                        {{ Session('error') }}
                                    </div>
                                    @endif
                                    <div class="mb-3">
                                        <label class="form-label" for="username">ชื่อผู้ใช้งาน</label>
                                        <input type="text" class="form-control" id="username" name="username" required placeholder="ชื่อผู้ใช้งาน / Email / เบอร์โทร">
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="auth-recoverpw.html" class="text-muted">ลืมรหัสผ่าน</a>
                                        </div>
                                        <label class="form-label" for="userpassword">รหัสผ่าน</label>
                                        <input type="password" class="form-control" id="password" name="password" required placeholder="รหัสผ่าน">
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">เข้าสู่ระบบ</button>
                                    </div>



                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title"></h5>
                                        </div>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">เพิ่งเคยเข้ามาใน ระบบหลังบ้าน ใช่หรือไม่ <a href="javascript:void(0);" onclick="contact();" class="fw-medium text-primary"> สมัครสมาชิกใหม่ </a> </p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p>© <script>
                                document.write(new Date().getFullYear())
                            </script> Support <i class="mdi mdi-heart text-danger"></i> BY ORANGE TECHNOLOGY SOLUTION</p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('assets/libs/toastr/toastr.js')}}"></script>
    <script>
        function contact() {
            toastr.error("กรุณาติดต่อทางทีมผู้พัฒนาระบบ");
            return false;
        }
    </script>
</body>

</html>