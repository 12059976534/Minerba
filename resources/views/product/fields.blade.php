<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="name" name="name" value="{{ isset($data->name) ? $data->name : old('name') }}" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Unit</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="unit" name="unit" value="{{ isset($data->unit) ? $data->unit : old('unit') }}" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Harga</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="Harga" name="price" value="{{ isset($data->price) ? $data->price : old('price') }}" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Kategori</label>
                    <div class="col-md-10">
                       <select name="product_category_id" class="form-control" id="">
                        <option value="">- Select Option -</option>
                           @foreach ($kategori as $k)
                           <option value="{{ $k->id }}  {{ isset($data->product_category_id) ? $k->id == $data->product_category_id ? "selected" : "" : "" }}">{{ $k->name }}</option>
                           @endforeach
                       
                       </select>
                    </div>
                </div>
               
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-md-10">
                      <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Comodity</label>
                    <div class="col-md-10">
                       <select name="comodity_id" class="form-control" id="">
                           <option value="1">- Select Option -</option>
                       </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
               
               <div class="">
                    <a href="{{ route('Product.index') }}" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
           
        </div>
    </div> <!-- end col -->
</div>