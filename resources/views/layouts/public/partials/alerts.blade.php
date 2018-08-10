@if(Session::has('logIn'))
    <script>
        swal({
                title: "Welcome !!  {{session('u_name')}}",
                text: "Now You Can Visit Your Account",
                type: "success",
                confirmButtonColor: "#66db7a",
            },
            function(){
                swal("success");
            });
    </script>
@endif

<!-- @if(Session::has('BackVou'))
    <script>
        swal({
                title: "Welcome !!  {{ Auth::user()->name }}",
                text: "Now You Can Visit Your Account",
                type: "success",
                confirmButtonColor: "#66db7a",
            },
            function(){
                swal("success");
            });
    </script>
@endif -->


@if(Session::has('signUp'))
    <script>
        swal({
            title: "Congratulations !!!",
            text: "Your Account Successfully Created , Please Login ",
            type: "success",
            confirmButtonColor: "#66db7a",
        });

    </script>
@endif


@if(Session::has('UnSucess'))
    <script>
        swal({
                title: "Opps !!!",
                text: "Wrong email or password ! please try again",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif



@if(Session::has('update'))
    <script>
        swal({
            title: "Thank You !!!",
            text: "Your Product Info Update Successfully",
            type: "success",
            timer: 4000,
            showConfirmButton: false
        });

    </script>
@endif


@if(Session::has('info'))
    <script>
        swal({
            title: "Thank You !!!",
            text: "Your Information Successfully Stored ",
            type: "success",
            timer: 4000,
            showConfirmButton: false
        });

    </script>
@endif



@if(Session::has('unnes'))
    <script>
        swal({
                title: "Sorry !!!",
                text: "Please Give Shipping Address Before Payment Method",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif



@if(Session::has('checkPay'))
    <script>
        swal({
                title: "Sorry !!!",
                text: "Please Give Payment Method Before Confirm & Pay",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif


@if(Session::has('card'))
    <script>
        swal({
            title: "Thank You !!!",
            text: "Your Card Info Successfully Stored",
            type: "success",
            timer: 4000,
            showConfirmButton: false
        });

    </script>
@endif


@if(Session::has('check'))
    <script>
        swal({
                title: "Sorry !!!",
                text: "Your Cart Is Empty, Please Shop",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif



@if(Session::has('checkCart'))
    <script>
        swal({
                title: "Sorry !!!",
                text: "Your Cart Is Empty, Please Shop to Continue",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif

@if(Session::has('vouSecure'))
    <script>
        swal({
                title: "Sorry !!!",
                text: "You Can Not See This Page Before The Complete Chekout Step 1 to 4!",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif



@if(Session::has('OutOfStock'))
    <script>
        swal({
                title: "Sorry !!!",
                text: "This Product Is Out Of Stock ! Please Cut Down ( {{ session('qun') }} ) Quantity",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif



@if(Session::has('conFirmOrd'))
    <script>
        swal({
            title: "Thank You !!!",
            text: "Order Confirm Successfully",
            type: "success",
            confirmButtonColor: "#66db7a",
        });

    </script>
@endif


@if(Session::has('DeleteOrder'))
    <script>
        swal({
                title: "Delete !!!",
                text: "Order Delete successfully",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif


@if(Session::has('sendMail'))
    <script>
        swal({
            title: "Thank You !!!",
            text: "Your message has been send.",
            type: "success",
            confirmButtonColor: "#66db7a",
        });

    </script>
@endif


@if(Session::has('wrngMail'))
    <script>
        swal({
                title: "Delete !!!",
                text: "Something went wrong !!!",
                type: "warning",
                confirmButtonColor: "#FF5F77",
            },
            function(){
                swal("warning");
            });
    </script>
@endif
