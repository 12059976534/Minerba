<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="name">Foto</label>
    </div>
    <div class="col-xs-7">
        <label for="photo" style="border:solid 1px #ddd">
            <img src="{{ asset('images/no-image.png') }}" alt="photo" style="height:130px; width:110px;object-position:center;object-fit:cover;o-onject-position:center;o-object-fit:center">
        </label>
        <input type="file" name="photo" id="photo" class="form-control" accept="image/*" style="display: none">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="name">Nama</label>
    </div>
    <div class="col-xs-7">
        <input type="text" name="name" id="name" class="form-control" value="{{ isset($expert->name) ? $expert->name : old('name') }}" required>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="name">Pendidikan</label>
    </div>
    <div class="col-xs-7">
        {!! Form::select('education_id', $educations, isset($expert->education_id) ? $expert->education_id : old('education_id'), ['placeholder' => '-Select', 'class="form-control" required']) !!}
        @error('education_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="position">Posisi</label>
    </div>
    <div class="col-xs-7">
        <input type="text" name="position" id="position" class="form-control" value="{{ isset($expert->position) ? $expert->position : old('position') }}" required>
        @error('position')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="training">Training</label>
    </div>
    <div class="col-xs-7">
        <textarea name="training" id="training" class="form-control">{{ isset($expert->training) ? $expert->training : old('training') }}</textarea>
        @error('training')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="skill">Keahlian</label>
    </div>
    <div class="col-xs-7">
        <textarea name="skill" id="skill" class="form-control">{{ isset($expert->skill) ? $expert->skill : old('skill') }}</textarea>
        @error('skill')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>