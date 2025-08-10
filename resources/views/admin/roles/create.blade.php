@extends('layouts.admin')

@section('title')
{{ __('Add New Role') }}
@endsection

@section('header')
<h1 class="h3 mb-3">Dashboard</h1>
@endsection

@section('content')
<section class="row">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-6">
        <form action="{{  route('roles.store')  }}" method="post">
          @csrf
          <div class="card flex-fill">
            <div class="card-header">
              <h5 class="card-title mb-0">{{ __('Create New Role') }}</h5>
            </div>
            <div class="card-body py-0">
              <div class="row g-3">
                <div class="col-12">
                  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="{{ __('Role Title') }}" value="{{ old('title') }}" required />
                  @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
                  @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="{{ __('Role Slug') }}" value="{{ old('slug') }}" />
                  @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                    <option value="">{{ __('-- Choose Status --') }}</option>
                    <option value="1" {{ old('status') === '1' ? 'selected' : '' }}>{{ __('Enable') }}</option>
                    <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>{{ __('Disable') }}</option>
                  </select>
                  @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-6 d-grid">
                  <a href="{{ route('roles.index')  }}" class="btn btn-outline-secondary" >
                    <i class="align-middle me-1" data-feather="arrow-left"></i>
                    <span class="ps-1">{{ __('Discard') }}</span>
                  </a>
                </div>
                <div class="col-6 d-grid">
                  <button type="submit" class="btn btn-outline-secondary" >
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