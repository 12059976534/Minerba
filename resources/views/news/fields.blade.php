

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body" >
                <h4 class="card-title">Deskripsi</h4>
               

              
                    <textarea id="elm1" name="content">{{ isset($data->content) ? $data->content : "" }}</textarea>
                
             
            </div>
           
        </div>
    </div> <!-- end col -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
               <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3 mt-3">
                        <label class="form-label" for="form-sm-input">title</label>
                        <input class="form-control form-control-sm" name="title" type="text" value="{{ isset($data->title) ? $data->title : old('title') }}" id="form-sm-input" placeholder="Please enter title">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3 mt-3">
                        <label class="form-label" for="form-sm-input">image</label>
                        {{-- <input class="form-control form-control-sm " type="file" id="imgInp" placeholder=".form-control-sm"> --}}
                        <input class="form-control form-control-sm " type="file" name="image" id="imgInp">
                    </div>
                    <img src="{{ isset($data->image) ? asset('images/news/'.$data->image) :  asset('assets/images/image-not-found.jpg') }}" id='img-upload'/>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3 mt-3">
                        <label class="form-label" for="form-sm-input">Kategori</label>
                            <select class="form-control form-control-sm" name="news_category_id" id="">
                                <option value="">- select kategori -</option>
                                @foreach ($kategori as $k)
                                 <option value="{{ $k->id }}" {{ isset($data->news_category_id) ? $data->news_category_id == $k->id ? "selected" : "" : "" }}>{{ $k->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
               </div>
               <div class="mt-5">
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Close</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->