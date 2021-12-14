<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="name">Bidang Kerja</label>
    </div>
    <div class="col-xs-7">
        <input type="text" name="name" id="name" class="form-control" value="{{ isset($job_field->name) ? $job_field->name : old('name') }}" required>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row m-b">
    <div class="col-xs-3" style="padding-top:10px">
        <label for="description">Deskripsi</label>
    </div>
    <div class="col-xs-7">
        <textarea name="description" id="description" class="form-control">{{ isset($job_field->description) ? $job_field->description : old('description') }}</textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>