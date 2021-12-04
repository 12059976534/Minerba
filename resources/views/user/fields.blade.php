<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

               
              
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">username</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="Username" name="name"  value="{{ isset($user) ? $user->name : "" }}" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" placeholder="example@example.com" value="{{ isset($user) ? $user->email : "" }}" name="email" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Position</label>
                    <div class="col-md-10">
                        <select class="form-select" name="roles">
                            <option>Select</option>
                           @foreach ($roles as $r)
                           <option value="{{ $r->name }}" {{ isset($userRole) ? $r->id == $userRole->id ? "selected" : "" : "" }} >{{ $r->name }}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password" placeholder="Password" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">password confirm</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" name="confirm-password" placeholder="Password Confirm" id="example-text-input">
                    </div>
                </div>
                <div class="">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
           
        </div>
    </div> <!-- end col -->
</div>