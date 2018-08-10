<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="loginModalLabel"><span class="light">Login</span> To MyShop</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="email">Email</label>
                <div class="controls">
                    <input type="email" class="input-block-level" name="email" id="email" value="{{ old('email') }}"  placeholder="Email" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="password">Password</label>
                <div class="controls">
                    <input type="password" class="input-block-level" name="password" id="Password" placeholder="Password" required>
                </div>
            </div>
         
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                SIGN IN
            </button>
        </form>

            <a href="{{ URL::route('auth/facebook') }}">
                <div>
                    <img src="{{ asset('assets/img/fbb.png') }}" height="" />
                </div>
            </a><br>


            <a href="{{ URL::route('auth/google') }}">
                <div>
                    <img src="{{ asset('assets/img/g.png') }}" height="" />
                </div>
            </a><br>

        
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#registerModal" data-dismiss="modal">Don't have an account? Register</a>
        </p>
    </div>
</div>

<style>
    label.error{
        color: red;
        font-weight:  bold;
        font-size: 12px;
    }
    .input-block-level.error{
        border: 1px solid red;
    }
</style>

<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="registerModalLabel"><span class="light">Register</span> To MyShop</h3>
    </div>


    <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="name">Username</label>
                <div class="controls">
                    <input type="text" class="input-block-level" name="name" id="name" placeholder="Username" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="email">Email</label>
                <div class="controls">
                    <input type="email" class="input-block-level" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="password">Password</label>
                <div class="controls">
                    <input type="password" class="input-block-level" name="password" id="password" placeholder="Password" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="password-confirm">Confirm Password</label>
                <div class="controls">
                    <input type="password" class="input-block-level" name="password_confirmation" id="password-confirmation" placeholder="Confirm Password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                Sign Up
            </button>
        </form>
        {{--<button type="submit" class="btn btn-info input-block-level bold higher">--}}
           <!--  <a class="btn btn-info input-block-level bold higher" href="{{ URL::route('auth/facebook') }}">
            Sign Up With Facebook
            </a> -->
        {{--</button>--}}
    
        {{--<button type="submit" class="btn btn-danger input-block-level bold higher">--}}
            <!-- <a class="btn btn-danger input-block-level bold higher" href="{{ URL::route('auth/google') }}">
            Sign Up With Google+
            </a> -->
        {{--</button>--}}
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
        </p>
    </div>
</div>

<div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="forgotPassModalLabel"><span class="light">Forgot</span> your password?</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="#">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
                </div>
            </div>
            <p class="center-align">OR</p>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
                <div class="controls">
                    <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
                </div>
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                SEND ME A NEW PASSWORD
            </button>
        </form>
    </div>
</div>
</div>