@extends('layouts.admin')

@section('title')
{{ __('Add New user') }}
@endsection



@section('content')
<section class="row">
    <div>
        <div class="col-lg-12 col-md-12 col-sm-6">
            {{-- Form to create a new attendance record --}}
            <form
                action="{{ Auth::user()->role->slug === 'super-admin' ? route('attendance.store') : (Auth::user()->role->slug === 'administrator' ? route('admin.attendance.store') : route('moderator.attendance.store') ) }}"
                method="post">
                @csrf
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ __('Create Attendance') }}</h5>
                    </div>
                    <div class="card-body py-0">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="date" name="date" class="form-control" id="title"
                                    placeholder="{{ __('Date') }}" value="{{ old('date') }}" required />
                            </div>
                            <div class="col-12">
                                <select name="employee_id" class="form-control" id="role">
                                    @forelse ($employees as $employee)
                                    <option value="{{$employee->id}}">{{ $employee->firstname }}
                                        {{ $employee->lastname }}</option>
                                    @empty
                                    <option value="">{{ __('-- employee --') }}</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="time" name="checkin_time" class="form-control" id="slug"
                                    placeholder="{{ __('Checkin_time') }}" value="{{ old('checkin_time') }}" />
                            </div>
                            <div class="col-12">
                                <input type="time" name="checkout_time" class="form-control" id="slug"
                                    placeholder="{{ __('Checkout_time') }}" value="{{ old('checkout_time') }}" />
                            </div>
                            <div class="col-12">
                                <select name="status" class="form-control" id="status">
                                    <option value="">{{ __('-- Status --') }}</option>
                                    <option value="1">{{ __('Present') }}</option>
                                    <option value="0">{{ __('Absent') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-md-row flex-column gap-2">

                            <div class="col-md-6">
                                <a href="{{ Auth::user()->role->slug === 'super-admin' ? route('user.index') : route('admin.user.index') }}"
                                    class="btn btn-danger w-100">
                                    <i class="align-middle me-1" data-feather="arrow-left"></i>
                                    <span class="ps-1">{{ __('Cancel') }}</span>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success w-100">
                                    <i class="align-middle me-1" data-feather="plus"></i>
                                    <span class="ps-1">{{ __('Create New') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="col-5">
      @include('partials.error')
    </div> --}}
</section>
@endsection

@section('script')
@endsection