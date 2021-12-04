<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="name" name="name" value="{{ isset($role->name) ? $role->name : "" }}" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label"></label>
                    <div class="col-md-10">
                    @foreach ($permission as $p)
                        @if (isset($rolePermissions ))
                           
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{$p->id}}" name="permission[]" id="inlineCheck1" {{in_array($p->id, $rolePermissions) ? true : false}} {{in_array($p->id, $rolePermissions) ? "checked" : ""}}>
                                <label class="form-check-label" for="inlineCheck1">
                                   {{$p->name}}
                                </label>
                            </div>
                           
                        @else
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="{{$p->id}}" name="permission[]" id="inlineCheck1"  >
                            <label class="form-check-label" for="inlineCheck1">
                               {{$p->name}}
                            </label>
                        </div>
                        @endif
                
                    @endforeach
                   
                       
                    
                    </div>
                </div>
              
                <div class="">
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
           
        </div>
    </div> <!-- end col -->
</div>