@extends('layouts.admin')


@section('content')
<section class="row">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-6">
            <form
                action="{{ Auth::user()->role->slug === 'super-admin' ? route('designation.store') : (Auth::user()->role->slug === 'administrator' ? route('admin.designation.store') : route('hr.designation.store') ) }}"
                method="post">
                @csrf
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ __('Create New Desgination') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title">Designation Title</label>
                                <input type="text" name="title" class="form-control" id="title" required />
                            </div>
                            <div class="col-12">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="30"
                                    rows="6"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="">{{ __('-- Choose One --') }}</option>
                                    <option value="1">{{ __('Enable') }}</option>
                                    <option value="0">{{ __('Disable') }}</option>
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
        {{-- <div class="col-5">
        @include('partials.error')
      </div> --}}
    </div>
</section>
@endsection

@section('script')
@endsection