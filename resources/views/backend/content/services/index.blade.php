@extends('backend.layouts.app')

@section('title', 'Service Management')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Add New Service</strong>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('admin.setting.service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Title <span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" required placeholder="e.g. Custom Software Development">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Short Summary (Details 1)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="details1" rows="3" placeholder="Brief overview of the service"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Features List (Details 2 - One per line)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="details2" rows="5" placeholder="Enterprise Web Apps&#10;Custom API Architecture&#10;Legacy Migration"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Detailed Description (Details 3)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="details3" rows="6" placeholder="Full technical details, methodology, and stack"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Banner Image (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="banner" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Image 1 (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="image1" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Image 2 (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="image2" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Service Image 3 (Optional)</label>
                        <div class="col-md-10">
                            <input type="file" name="image3" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Is Active</label>
                        <div class="col-md-10">
                            <label class="switch switch-label switch-pill switch-primary">
                                <input type="checkbox" name="is_active" class="switch-input" value="1" checked>
                                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>All Services</strong>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Images</th>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>
                            <div class="d-flex gap-1 flex-wrap align-items-center">
                                @if($service->banner)
                                    <img src="{{ asset('setting/service/' . $service->banner) }}" alt="Banner" class="rounded border" style="height: 40px; width: 60px; object-fit: cover;" title="Banner">
                                @endif
                                @if($service->image1)
                                    <img src="{{ asset('setting/service/' . $service->image1) }}" alt="Image 1" class="rounded border" style="height: 40px; width: 40px; object-fit: cover;" title="Image 1">
                                @endif
                                @if($service->image2)
                                    <img src="{{ asset('setting/service/' . $service->image2) }}" alt="Image 2" class="rounded border" style="height: 40px; width: 40px; object-fit: cover;" title="Image 2">
                                @endif
                                @if($service->image3)
                                    <img src="{{ asset('setting/service/' . $service->image3) }}" alt="Image 3" class="rounded border" style="height: 40px; width: 40px; object-fit: cover;" title="Image 3">
                                @endif
                                @if(!$service->banner && !$service->image1 && !$service->image2 && !$service->image3)
                                    <span class="text-muted small">No images</span>
                                @endif
                            </div>
                        </td>
                        <td>{{ $service->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($service->details1, 50) }}</td>
                        <td>
                            @if($service->is_active)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.setting.service.edit', $service->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
