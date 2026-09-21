@extends('backend.layouts.app')

@section('title', __('Booking Requests Management'))

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom">
                <h3 class="card-title font-weight-bold m-0 text-primary">
                    <i class="fas fa-bookmark mr-2"></i> @lang('Booking Requests')
                </h3>
                <span class="badge badge-pill badge-primary px-3 py-2" style="font-size: 14px;">
                    Total Requests: {{ method_exists($bookings, 'total') ? $bookings->total() : count($bookings) }}
                </span>
            </div>
            <div class="card-body">
                <!-- Search Form -->
                <form method="GET" action="{{ route('admin.booking.search') }}" class="form-inline mb-4">
                    <div class="input-group w-100" style="max-width: 500px;">
                        <input type="text" name="search" class="form-control form-control-lg" placeholder="Search by Name, Email, Phone, Services..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-search mr-1"></i> Search
                            </button>
                            @if(request('search'))
                                <a href="{{ route('admin.booking.index') }}" class="btn btn-secondary px-3">Clear</a>
                            @endif
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th>#ID</th>
                                <th>Client Name</th>
                                <th>Contact Info</th>
                                <th>Package Type & Tier</th>
                                <th>Estimated Budget</th>
                                <th>Custom Options</th>
                                <th>Add-on Services</th>
                                <th>Target Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $booking)
                                <tr id="bookingRow{{ $booking->id }}" class="{{ $booking->is_view == 0 ? 'bg-light font-weight-bold' : '' }}">
                                    <td class="text-center font-weight-bold">{{ $booking->id }}</td>
                                    <td>
                                        <strong class="text-dark d-block">{{ $booking->name ?? 'N/A' }}</strong>
                                        <small class="text-muted"><i class="far fa-clock mr-1"></i> {{ $booking->created_at ? $booking->created_at->format('d M Y, h:i A') : 'N/A' }}</small>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="tel:{{ $booking->phone }}" class="text-dark text-decoration-none">
                                                <i class="fas fa-phone-alt text-primary mr-1"></i> {{ $booking->phone ?? 'N/A' }}
                                            </a>
                                        </div>
                                        @if($booking->email)
                                            <small>
                                                <a href="mailto:{{ $booking->email }}" class="text-muted">
                                                    <i class="fas fa-envelope mr-1"></i> {{ $booking->email }}
                                                </a>
                                            </small>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($booking->is_custom_package)
                                            <span class="badge badge-warning text-dark px-3 py-2 rounded-pill font-weight-bold">
                                                <i class="fas fa-sliders-h mr-1"></i> Custom Package
                                            </span>
                                        @else
                                            <span class="badge badge-info px-3 py-2 rounded-pill font-weight-bold">
                                                <i class="fas fa-box mr-1"></i> Standard Package
                                            </span>
                                            @if($booking->package)
                                                <small class="d-block text-primary font-weight-bold mt-1">{{ $booking->package->name }}</small>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($booking->estimated_price)
                                            <span class="badge badge-success px-2 py-1 font-weight-bold" style="font-size: 12px;">
                                                {{ $booking->estimated_price }}
                                            </span>
                                        @else
                                            <span class="text-muted small">Standard Pricing</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($booking->custom_package_details)
                                            <span class="text-dark small" style="line-height: 1.4; display: block;">
                                                {{ Str::limit($booking->custom_package_details, 60) }}
                                            </span>
                                        @else
                                            <span class="text-muted small">None</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($booking->venue)
                                            <span class="badge badge-light border text-dark px-2 py-1 small">
                                                {{ Str::limit($booking->venue, 50) }}
                                            </span>
                                        @else
                                            <span class="text-muted small">None</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($booking->event_date)
                                            <span class="badge badge-secondary px-2 py-1">
                                                <i class="far fa-calendar-alt mr-1"></i> {{ $booking->event_date }}
                                            </span>
                                        @else
                                            <span class="text-muted small">Flexible</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($booking->is_view == 0)
                                            <span class="badge badge-danger px-2 py-1" id="statusBadge{{ $booking->id }}">
                                                <i class="fas fa-bell mr-1"></i> New
                                            </span>
                                        @else
                                            <span class="badge badge-success px-2 py-1" id="statusBadge{{ $booking->id }}">
                                                <i class="fas fa-check-circle mr-1"></i> Viewed
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-primary font-weight-bold" data-toggle="modal" data-target="#bookingModal{{ $booking->id }}" onclick="markBookingViewed({{ $booking->id }})">
                                            <i class="fas fa-eye mr-1"></i> View Details
                                        </button>
                                    </td>
                                </tr>

                                <!-- Booking Details Modal -->
                                <div class="modal fade" id="bookingModal{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel{{ $booking->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content border-0 shadow">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title font-weight-bold" id="bookingModalLabel{{ $booking->id }}">
                                                    <i class="fas fa-bookmark mr-2"></i> Booking Request #{{ $booking->id }} Details
                                                </h5>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="row mb-3">
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Client Name:</strong> <span class="text-dark">{{ $booking->name ?? 'N/A' }}</span>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Phone / WhatsApp:</strong>
                                                        <a href="tel:{{ $booking->phone }}" class="text-primary font-weight-bold">{{ $booking->phone ?? 'N/A' }}</a>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Email Address:</strong>
                                                        @if($booking->email)
                                                            <a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a>
                                                        @else
                                                            <span class="text-muted">N/A</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Date Received:</strong> <span class="text-muted">{{ $booking->created_at ? $booking->created_at->format('d M Y, h:i A') : 'N/A' }}</span>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="row mb-3">
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Package Type:</strong>
                                                        @if($booking->is_custom_package)
                                                            <span class="badge badge-warning text-dark px-2 py-1"><i class="fas fa-sliders-h mr-1"></i> Custom Package</span>
                                                        @else
                                                            <span class="badge badge-info px-2 py-1"><i class="fas fa-box mr-1"></i> Standard Package</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Estimated Price / Budget:</strong>
                                                        <span class="badge badge-success px-2 py-1">{{ $booking->estimated_price ?? ($booking->package ? $booking->package->price . ' ' . $booking->package->suffix : 'Standard Pricing') }}</span>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Target Start Date:</strong>
                                                        <span class="badge badge-secondary px-2 py-1">{{ $booking->event_date ?? 'Flexible' }}</span>
                                                    </div>
                                                </div>

                                                <!-- Full Selected Package Details Box -->
                                                @if(!$booking->is_custom_package && $booking->package)
                                                    <div class="card border-primary mb-3 shadow-sm">
                                                        <div class="card-header bg-primary text-white py-2 font-weight-bold">
                                                            <i class="fas fa-box-open mr-2"></i> Selected Package Details: {{ $booking->package->name }}
                                                        </div>
                                                        <div class="card-body p-3 bg-light">
                                                            <div class="row mb-2">
                                                                <div class="col-md-6">
                                                                    <strong>Package Name:</strong> <span class="text-primary font-weight-bold">{{ $booking->package->name }}</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <strong>Price & Billing:</strong> <span class="badge badge-success px-2 py-1">{{ $booking->package->price }} {{ $booking->package->suffix }}</span>
                                                                </div>
                                                            </div>
                                                            @if($booking->package->description)
                                                                <p class="small text-muted mb-2"><strong>Description:</strong> {{ $booking->package->description }}</p>
                                                            @endif
                                                            @if($booking->package->features)
                                                                <strong class="d-block mb-1 text-dark small"><i class="fas fa-check-circle text-success mr-1"></i> Package Features Included:</strong>
                                                                <ul class="list-unstyled mb-0 pl-2" style="font-size: 13px; line-height: 1.6;">
                                                                    @foreach(array_filter(explode("\n", str_replace("\r", "", $booking->package->features))) as $feature)
                                                                        <li><i class="fas fa-check text-success mr-1"></i> {{ trim($feature) }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif

                                                @if($booking->custom_package_details)
                                                    <div class="bg-light p-3 rounded mb-3 border">
                                                        <strong class="text-primary d-block mb-2"><i class="fas fa-sliders-h mr-1"></i> Customized Service Options:</strong>
                                                        <ul class="list-unstyled mb-0 pl-2" style="font-size: 14px; line-height: 1.8;">
                                                            @foreach(array_filter(explode(',', $booking->custom_package_details)) as $option)
                                                                <li class="d-flex align-items-center mb-1">
                                                                    <i class="fas fa-check-circle text-success mr-2"></i>
                                                                    <span class="text-dark font-weight-semibold">{{ trim($option) }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                @if($booking->venue)
                                                    <div class="bg-light p-3 rounded mb-3 border">
                                                        <strong class="text-primary d-block mb-2"><i class="fas fa-puzzle-piece mr-1"></i> Add-on Services:</strong>
                                                        <ul class="list-unstyled mb-0 pl-2" style="font-size: 14px; line-height: 1.8;">
                                                            @foreach(array_filter(explode(',', $booking->venue)) as $addon)
                                                                <li class="d-flex align-items-center mb-1">
                                                                    <i class="fas fa-plus-circle text-info mr-2"></i>
                                                                    <span class="text-dark font-weight-semibold">{{ trim($addon) }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                @if($booking->notes)
                                                    <div class="bg-light p-3 rounded border">
                                                        <strong class="text-primary d-block mb-1"><i class="fas fa-comment-alt mr-1"></i> Detailed Project Requirements / Notes:</strong>
                                                        <p class="mb-0 text-dark" style="white-space: pre-line;">{{ $booking->notes }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                @if($booking->phone)
                                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $booking->phone) }}" target="_blank" class="btn btn-success font-weight-bold">
                                                        <i class="fab fa-whatsapp mr-1"></i> Contact via WhatsApp
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-5">
                                        <i class="fas fa-info-circle fa-2x d-block mb-2 text-muted"></i>
                                        No booking requests found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if(method_exists($bookings, 'links'))
                    <div class="d-flex justify-content-center mt-4">
                        {!! $bookings->links() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('after-scripts')
<script>
    function markBookingViewed(id) {
        var badge = document.getElementById('statusBadge' + id);
        var row = document.getElementById('bookingRow' + id);

        fetch('{{ url("admin/booking/mark-viewed") }}/' + id, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                if (badge) {
                    badge.className = 'badge badge-success px-2 py-1';
                    badge.innerHTML = '<i class="fas fa-check-circle mr-1"></i> Viewed';
                }
                if (row) {
                    row.classList.remove('bg-light', 'font-weight-bold');
                }
            }
        })
        .catch(error => console.error('Error marking booking as viewed:', error));
    }
</script>
@endpush
@endsection
