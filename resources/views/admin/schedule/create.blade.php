@extends('layouts.admin')

@section('title')
{{ __('Add New user') }}
@endsection

@section('content')
<section class="row">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-6">
            <form
                action="{{ Auth::user()->role->slug === 'super-admin' ? route('schedule.store') : (Auth::user()->role->slug === 'administrator' ? route('admin.schedule.store') : route('moderator.schedule.store') ) }}"
                method="post">
                @csrf
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ __('Create New Schedule') }}</h5>
                    </div>
                    <div class="card-body py-0">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="{{ __('Meeting to Schedule') }}" value="{{ old('title') }}" required />
                            </div>
                            <div class="col-12">
                                <input type="time" name="time_in" class="form-control" id="title"
                                    placeholder="{{ __('time_in') }}" value="{{ old('time_in') }}" required />
                            </div>
                            <div class="col-12">
                                <input type="time" name="time_out" class="form-control" id="title"
                                    placeholder="{{ __('time_out') }}" value="{{ old('time_out') }}" required />
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