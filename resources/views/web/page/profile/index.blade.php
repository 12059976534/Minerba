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
                            <h5 class="text-muted">Bio Data</h5>
                            <div class="m-t-lg">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success mb-2">{{ $message }}</div>
                                @endif
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="name">Full Name</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ auth()->user()->name }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ $profile->address }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="province">Province</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ isset($profile->province) ? $profile->province->province_name : '' }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="city">City</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ isset($profile->city) ? $profile->city->city_name : '' }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="subdistrict_id">District</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ isset($profile->subdistrict) ? $profile->subdistrict->subdistrict_name : '' }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="urban_village_id">Village</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ isset($profile->urbanVillage) ? $profile->urbanVillage->urban_village_name : '' }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="postal_code">Postal Code</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ $profile->postal_code }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="job_field">Job Field</label>
                                    </div>
                                    <div class="col-md-7">
                                        <table class="table">
                                            <tbody>
                                                @foreach ($user_job_fields as $ujf)
                                                    <tr>
                                                        <td>{{ $ujf->jobField->name }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="education_id">Last Education</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ isset($profile->education) ? $profile->education->name . ' - ' . $profile->major : '' }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="university">University</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ $profile->university }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ auth()->user()->email }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="col-md-7" style="padding-top:10px">
                                        {{ $profile->telephone }}
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-lg">
                                <a href="{{ route('profile.edit', $profile->unique_id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()