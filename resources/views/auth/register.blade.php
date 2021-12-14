@extends('web.app')
@section('content')
    <section class="">
        <div class="container">
            <div class="row justify-content-center m-t-xl">
                <div class="col-xs-12 col-md-6 col-xs-offset-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="#" class="">
                                        <img src="{{ asset('assets/images/web.png')}}" alt="" width="50%" class="auth-logo logo-dark mx-auto">
                                    </a>
                                </div>
                                <p class="m-b-lg text-center">Sign up to continue to E-Minerba.</p>
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px"><label class="form-label" for="name">Salutation</label></div>
                                                    <div class="col-xs-8">
                                                        <select name="salutation" id="" class="form-control">
                                                            <option value="mr">Mr.</option>
                                                            <option value="mrs">Mrs.</option>
                                                        </select>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px">
                                                        <label class="form-label" for="name">Full Name</label>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete>
                                                        @error('name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px">
                                                        <label class="form-label" for="telephone">Telephone</label>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input id="telephone" type="text" class="form-control phone-number @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required>
                                                        @error('telephone')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px">
                                                        <label class="form-label" for="username">Email</label>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px">
                                                        <label class="form-label" for="type-of-user">Type of User</label>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <select name="type_of_user" id="type-of-user" class="form-control type-of-user">
                                                            <option value="personal" {{ old('type_of_user') == 'personal' ? 'selected' : '' }}>Personal</option>
                                                            <option value="company" {{ old('type_of_user') == 'company' ? 'selected' : '' }}>Company</option>
                                                            <option value="contractor" {{ old('type_of_user') == 'contractor' ? 'selected' : '' }}>Contractor</option>
                                                            <option value="consultant" {{ old('type_of_user') == 'consultant' ? 'selected' : '' }}>Consultant</option>
                                                        </select>
                                                        @error('type_of_user')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="type-company" style="display: none">
                                                <div class="m-b">
                                                    <div class="row">
                                                        <div class="col-xs-4 text-right" style="padding-top:10px">
                                                            <label class="form-label" for="company-name">Company Name</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="text" class="form-control company-name @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}">
                                                            @error('company_name')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-b">
                                                    <div class="row">
                                                        <div class="col-xs-4 text-right" style="padding-top:10px">
                                                            <label class="form-label" for="company-address">Company Address</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <textarea class="form-control company-address @error('company_address') is-invalid @enderror" name="company_address">{{ old('company_address') }}</textarea>
                                                            @error('company_address')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px">
                                                        <label class="form-label" for="userpassword">{{ __('Password') }}</label>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px">
                                                        <label class="form-label" for="userpassword">Re-type Password</label>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px"></div>
                                                    <div class="col-xs-8">
                                                        <input type="checkbox" name="agree" id="agree" required><label for="agree">I agree to E-Minerba <a href="#">Term of Service</a> and <a href="#">Privacy Policy</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-xl">
                                                <div class="row">
                                                    <div class="col-xs-4 text-right" style="padding-top:10px"></div>
                                                    <div class="col-xs-8">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit"> {{ __('Register') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
@section('script')
    @include('js.cleave')
    <script>
        $(function(){
            new Cleave('.phone-number', {
                phone: true,
                phoneRegionCode: 'id',
                delimiter: '',
            });

            $('.type-of-user').on('change', function(){
                var val = $(this).val();
                if(val !== 'personal')
                {
                    $('.type-company').removeAttr('style');
                    $('.company-name').attr('required', true);
                    $('.company-address').attr('required', true);
                } else {
                    $('.type-company').attr('style', 'display:none');
                    $('.company-name').removeAttr('required');
                    $('.company-address').removeAttr('required');
                }
            });

            var val = $('.type-of-user').val();
            if(val !== 'personal')
            {
                $('.type-company').removeAttr('style');
                $('.company-name').attr('required', true);
                $('.company-address').attr('required', true);
            } else {
                $('.type-company').attr('style', 'display:none');
                $('.company-name').removeAttr('required');
                $('.company-address').removeAttr('required');
            }
        });
    </script>
@endsection
