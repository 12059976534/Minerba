@extends('web.app')
@section('content')
    <div class="container">
        <div class="row m-t-xxl m-b-xxl">
            <div class="col-xs-12 col-md-3">
                @include('web.sidebar-menu')
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="thumbnail">
                    <div class="caption p-lg">
                        <div class="m-b-xl">
                            <h5 class="text-muted">Edit Bio Data</h5>
                            <form action="{{ route('profile.update', $profile->unique_id) }}" method="post" class="m-t-lg">
                                @method('PUT')
                                @csrf
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="name">Full Name</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}" required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea name="address" id="address" class="form-control" required>{{ $profile->address }}</textarea>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="province">Province</label>
                                    </div>
                                    <div class="col-md-7">
                                        {!! Form::select('province_id', $provinces, isset($profile->province_id) ? $profile->province_id : old('province_id') , ['placeholder' => '-Select Province-', 'class="form-control province" required']) !!}
                                        @error('province_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="city">City</label>
                                    </div>
                                    <div class="col-md-7">
                                        {!! Form::select('city_id', $cities, isset($profile->city_id) ? $profile->city_id : old('city_id'), ['placeholder' => '-Select City-', 'class="form-control city" required']) !!}
                                        @error('city_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="subdistrict_id">District</label>
                                    </div>
                                    <div class="col-md-7">
                                        {!! Form::select('subdistrict_id', $subdistricts, isset($profile->subdistrict_id) ? $profile->subdistrict_id : old('subdistrict_id'), ['placeholder' => '-Select District-', 'class="form-control subdistrict" required']) !!}
                                        @error('subdistrict_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="urban_village_id">Village</label>
                                    </div>
                                    <div class="col-md-7">
                                        {!! Form::select('urban_village_id', $urban_villages, isset($profile->urban_village_id) ? $profile->urban_village_id : old('urban_village_id'), ['placeholder' => '-Select Village-', 'class="form-control urban-village" required']) !!}
                                        @error('urban_village_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="postal_code">Postal Code</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="postal_code" id="postal_code" minlength="5" maxlength="5" class="form-control postal-code" value="{{ $profile->postal_code }}" required>
                                        @error('postal_code')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="job_field">Job Field</label>
                                    </div>
                                    <div class="col-md-7">
                                        <table class="table job-field-table">
                                            <tbody>
                                                @foreach ($user_job_fields as $ujf)
                                                    <tr class="job-field-row-{{ $ujf->job_field_id }}">
                                                        <td>{{ $ujf->jobField->name }}<input type="hidden" name="job_field_id[]" value="{{ $ujf->job_field_id }}" /></td>
                                                        <td>
                                                            <a class="text-danger job-field-delete" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                        {!! Form::select('job_field', $job_fields, null, ['placeholder' => '-Select-', 'class="form-control job-field-input"']) !!}
                                                    </th>
                                                    <th width="2%">
                                                        <button type="button" class="btn btn-primary btn-add job-field-add"><i class="fa fa-plus"></i></button>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="education_id">Last Education</label>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-12 m-b">
                                                {!! Form::select('education_id', $educations, isset($profile->education_id) ? $profile->education_id : old('education_id'), ['placeholder' => '-Select Education-', 'class="form-control"']) !!}
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="text" name="major" class="form-control" value="{{ isset($profile->major) ? $profile->major : old('major') }}" placeholder="Major">
                                            </div>
                                        </div>
                                        
                                        @error('education_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="university">University</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="university" id="university" class="form-control" value="{{ $profile->university }}">
                                        @error('university')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="email" id="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="telephone" id="telephone" minlength="5" maxlength="18" class="form-control phone-number" value="{{ $profile->telephone }}" required>
                                        @error('telephone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px"></div>
                                    <div class="col-md-7">
                                        <button class="btn btn-primary">Save</button>
                                        <a href="{{ route('profile.index') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

            $('.job-field-add').on('click', function(){
                var job_field_id = $('.job-field-input').val();
                var job_field_name = $('.job-field-input option:selected').text();

                if(job_field_id !== ''){
                    if($('.job-field-table tbody').find('tr.job-field-row-' + job_field_id).length === 0)
                    {
                        $('.job-field-table tbody').append('<tr class="job-field-row-' + job_field_id + '"><td>' + job_field_name + '<input type="hidden" name="job_field_id[]" value="' + job_field_id + '" /></td><td><a class="text-danger job-field-delete" href="javascript:void(0)"><i class="fa fa-times"></i></a></td></tr>')
                        $('.job-field-input').val('');
                    }
                }
            });

            $('.job-field-table tbody').on('click', 'tr td .job-field-delete', function(){
                $(this).closest('tr').remove()
            });

            $('.province').on('change', function(){
                var province_id = $(this).val();
                $.ajax({
                    url: '{{ route('ajax.region.getCities') }}',
                    method: 'POST',
                    data: { province_id: province_id },
                    beforeSend: function(){
                        $('.city').html('<option value="">Loading...</option>');
                        $('.subdistrict').html('<option value="">-Select-</option>');
                        $('.urban-village').html('<option value="">-Select-</option>');
                    },
                    success: function(data){
                        if(data.success)
                        {
                            var items = '<option value="">-Select-</option>';
                            $.each(data.data, function(i, item){
                                items += '<option value="' + item.id + '">' + item.city_name + '</option>'
                            });
                            
                            $('.city').html(items);
                        }
                    },
                    complete: function(data){
                    }
                });
            });

            $('.city').on('change', function(){
                var city_id = $(this).val();
                $.ajax({
                    url: '{{ route('ajax.region.getSubdistricts') }}',
                    method: 'POST',
                    data: { city_id: city_id },
                    beforeSend: function(){
                        $('.subdistrict').html('<option value="">Loading...</option>');
                        $('.urban-village').html('<option value="">-Select-</option>');
                    },
                    success: function(data){
                        if(data.success)
                        {
                            var items = '<option value="">-Select-</option>';
                            $.each(data.data, function(i, item){
                                items += '<option value="' + item.id + '">' + item.subdistrict_name + '</option>'
                            });
                            
                            $('.subdistrict').html(items);
                        }
                    },
                    complete: function(data){
                    }
                });
            });

            $('.subdistrict').on('change', function(){
                var subdistrict_id = $(this).val();
                $.ajax({
                    url: '{{ route('ajax.region.getUrbanVillages') }}',
                    method: 'POST',
                    data: { subdistrict_id: subdistrict_id },
                    beforeSend: function(){
                        $('.urban-village').html('<option value="">Loading...</option>');
                    },
                    success: function(data){
                        if(data.success)
                        {
                            var items = '<option value="">-Select-</option>';
                            $.each(data.data, function(i, item){
                                items += '<option value="' + item.id + '" postal-code="' + item.postal_code + '">' + item.urban_village_name + '</option>'
                            });
                            
                            $('.urban-village').html(items);
                        }
                    },
                    complete: function(data){
                    }
                });
            });

            $('.urban-village').on('change', function(){
                var postalCode = $('.urban-village option:selected').attr('postal-code');
                $('.postal-code').val(postalCode);
            });
        });
    </script>
@endsection