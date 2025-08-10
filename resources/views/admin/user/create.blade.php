@extends('layouts.admin')

@section('title')
{{ __('Add New user') }}
@endsection


@section('content')
<section class="row">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-6">
        <form action="{{ Auth::user()->role->slug === 'super-admin' ? route('user.store') : route('admin.user.store') }}" method="post">
          @csrf
          <div class="card flex-fill">
            <div class="card-header">
              <h5 class="card-title mb-0">{{ __('Create New user') }}</h5>
            </div>
            <div class="card-body py-0">
              <div class="row g-3">
                <div class="col-12">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="title" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required />
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="title" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="{{ __('Primary Phone') }}" value="{{ old('phone') }}" required oninput="formatPhoneNumber(this)" maxlength="19" />
                  @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-6 position-relative">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="{{ __('Password') }}" value="{{ old('password') }}" />
                    <span class="toggle-password" data-target="password" style="position:absolute;top:50%;right:18px;transform:translateY(-50%);cursor:pointer;color:#888;z-index:2;">
                       <i class="fa-regular fa-eye-slash"></i>
                    </span>
                    @error('password')
                      <div class="invalid-feedback " style="position: absolute; left: 0; bottom: -22px; width: 100%;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-6 position-relative">
                    <input type="password" name="cpass" class="form-control @error('cpass') is-invalid @enderror" id="cpass" placeholder="{{ __('Confirm Password') }}" value="{{ old('cpass') }}" />
                    <span class="toggle-password" data-target="cpass" style="position:absolute;top:50%;right:18px;transform:translateY(-50%);cursor:pointer;color:#888;z-index:2;">
                       <i class="fa-regular fa-eye-slash"></i>
                    </span>
                    @error('cpass')
                      <div class="invalid-feedback" style="position: absolute; left: 0; bottom: -22px; width: 100%;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-6">
                  <select name="role_id" class="form-control @error('role_id') is-invalid @enderror" id="role">
                    <option value="">{{ __('-- User Role --') }}</option>
                    @foreach ($roles as $role)
                      <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->title }}</option>
                    @endforeach
                  </select>
                  @error('role_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-6">
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
                  <a href="{{ Auth::user()->role->slug === 'super-admin' ? route('user.index') : route('admin.user.index')}}" class="btn btn-outline-secondary" >
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
</section>
@endsection

@section('script')
<script>
document.querySelectorAll('.toggle-password').forEach(icon => {
  icon.addEventListener('click', function () {
    let target = document.getElementById(this.dataset.target);
    if (target.type === "password") {
      target.type = "text";
      this.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
      target.type = "password";
      this.innerHTML = '<i class="fas fa-eye"></i>';
    }
  });
});
</script>

@endsection