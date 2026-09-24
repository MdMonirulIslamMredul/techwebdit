@extends('backend.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit Service #{{ $service->id }}</strong>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('admin.setting.service.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Title <span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Short Summary (Details 1)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="details1" rows="3">{{ $service->details1 }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Features List (Details 2 - One per line)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="details2" rows="5">{{ $service->details2 }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Detailed Description (Details 3)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="details3" rows="6">{{ $service->details3 }}</textarea>
                        </div>
                    </div>

                    <!-- Banner Image -->
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Banner Image (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="banner" class="form-control image-input" data-preview="preview-banner" accept="image/*">
                            <div class="mt-2">
                                <div id="preview-banner-wrapper">
                                    @if($service->banner)
                                        <p class="mb-1 text-muted small">Current Banner:</p>
                                        <img id="preview-banner" src="{{ asset('setting/service/' . $service->banner) }}" alt="Banner Image" class="rounded border shadow-sm" style="max-height: 120px; max-width: 250px; object-fit: cover;">
                                    @else
                                        <img id="preview-banner" src="" alt="Banner Preview" class="rounded border shadow-sm" style="max-height: 120px; max-width: 250px; object-fit: cover; display: none;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image 1 -->
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Image 1 (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="image1" class="form-control image-input" data-preview="preview-image1" accept="image/*">
                            <div class="mt-2">
                                <div id="preview-image1-wrapper">
                                    @if($service->image1)
                                        <p class="mb-1 text-muted small">Current Image 1:</p>
                                        <img id="preview-image1" src="{{ asset('setting/service/' . $service->image1) }}" alt="Service Image 1" class="rounded border shadow-sm" style="max-height: 100px; max-width: 150px; object-fit: cover;">
                                    @else
                                        <img id="preview-image1" src="" alt="Image 1 Preview" class="rounded border shadow-sm" style="max-height: 100px; max-width: 150px; object-fit: cover; display: none;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Image 2 (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="image2" class="form-control image-input" data-preview="preview-image2" accept="image/*">
                            <div class="mt-2">
                                <div id="preview-image2-wrapper">
                                    @if($service->image2)
                                        <p class="mb-1 text-muted small">Current Image 2:</p>
                                        <img id="preview-image2" src="{{ asset('setting/service/' . $service->image2) }}" alt="Service Image 2" class="rounded border shadow-sm" style="max-height: 100px; max-width: 150px; object-fit: cover;">
                                    @else
                                        <img id="preview-image2" src="" alt="Image 2 Preview" class="rounded border shadow-sm" style="max-height: 100px; max-width: 150px; object-fit: cover; display: none;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image 3 -->
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Image 3 (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="image3" class="form-control image-input" data-preview="preview-image3" accept="image/*">
                            <div class="mt-2">
                                <div id="preview-image3-wrapper">
                                    @if($service->image3)
                                        <p class="mb-1 text-muted small">Current Image 3:</p>
                                        <img id="preview-image3" src="{{ asset('setting/service/' . $service->image3) }}" alt="Service Image 3" class="rounded border shadow-sm" style="max-height: 100px; max-width: 150px; object-fit: cover;">
                                    @else
                                        <img id="preview-image3" src="" alt="Image 3 Preview" class="rounded border shadow-sm" style="max-height: 100px; max-width: 150px; object-fit: cover; display: none;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Is Active</label>
                        <div class="col-md-10">
                            <label class="switch switch-label switch-pill switch-primary">
                                <input type="checkbox" name="is_active" class="switch-input" value="1" {{ $service->is_active ? 'checked' : '' }}>
                                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.setting.service') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('after-scripts')
<script>
    document.querySelectorAll('.image-input').forEach(function(input) {
        input.addEventListener('change', function(e) {
            var targetId = this.getAttribute('data-preview');
            var imgElem = document.getElementById(targetId);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(evt) {
                    imgElem.src = evt.target.result;
                    imgElem.style.display = 'block';
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
@endpush
@endsection
