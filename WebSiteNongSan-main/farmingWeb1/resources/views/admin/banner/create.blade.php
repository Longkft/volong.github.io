@extends('layouts.admin')
@section('title', 'Add Product')
@section('main')


<form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for=""> Name </label>
                <input type="text" class="form-control" name="name" placeholder="input name">
            </div>
            <div class="form-group">
                <label for=""> Description </label>
                <textarea name="description" class="form-control" placeholder="input description" ></textarea>
                @error('description')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for=""> Image </label>
                <input type="file" class="form-control" name="file_upload" placeholder="input image" >
                @error('image')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for=""> Link </label>
                <input type="text" class="form-control" name="link" placeholder="input image">
                @error('link')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for=""> Status </label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" checked> Public
                    </label>
                    <label>
                        <input type="radio" name="status" value="0">Private
                        </lable>
                </div>
            </div>
            <div class="form-group">
                <label for=""> Prioty </label>
                <input type="number" class="form-control" name="prioty">
                @error('prioty')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

        </div>
    </div>
    <button type="submit" class="btn btn-primary me-1 mb-1" onClick="return confirm('Bạn xác nhận muốn thêm mới Banner ?')">Thêm mới</button>
    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
</form>

@stop