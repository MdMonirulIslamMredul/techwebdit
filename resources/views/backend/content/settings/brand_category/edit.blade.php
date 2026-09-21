@extends('backend.layouts.app')

@section('title', 'Edit Brand Category')

@section('content')
    <div class="card">
        <div class="card-header with-border">
            <h3 class="card-title">Edit Brand Category</h3>
            <div class="card-tools">
                <a href="{{ route('admin.setting.brand.category') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.setting.brand.category.update') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="category_id" value="{{ $category->id }}">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $category->name) }}" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" value="{{ $category->slug }}" disabled>
                            <small class="text-muted">Slug is auto-generated and cannot be changed.</small>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($category->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($category->is_active == 0) selected @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">
                    <i class="fas fa-save"></i> Update Category
                </button>
            </form>
        </div>
    </div>
@endsection

@push('after-scripts')
    {{ script('assets/js/jscolor.js') }}
@endpush
