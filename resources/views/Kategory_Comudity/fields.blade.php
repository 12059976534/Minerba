<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="name" name="name" value="{{ isset($data->name) ? $data->name : old('name') }}" id="example-text-input">
                    </div>
                </div>
             
               <div class="">
                    <a href="{{ route('KategoriProduct.index') }}" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
           
        </div>
    </div> <!-- end col -->
</div>