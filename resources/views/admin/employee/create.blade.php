@extends('layouts.admin')
{{-- @extends('admin') --}}

@section('title')
{{ __('Add New Employee') }}
@endsection

@section('header')
@endsection

@section('content')
<section class="row">
    <div class="col-12">
        <form method="POST"
            action="{{ Auth::user()->role->slug === 'super-admin' ? route('employee.store') : (Auth::user()->role->slug === 'administrator' ? route('admin.employee.store') : route('hr.employee.store') ) }}">
            @csrf
            <!-- Personal Row -->
            <div class="row g-3">
                <div class="col-lg-12 col-md-12">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ ('Personal') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="firstname">{{ __('First Name') }}</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control"
                                        placeholder="John" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="lastname">{{ __('Last Name') }}</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control"
                                        placeholder="Doe" required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="john@example.com" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12col-6">
                                    <label for="phone">{{ __('Cell Phone') }}</label>
                                    <input type="tel" name="phone" class="form-control" id="phone"
                                        placeholder="{{ __('+88 (01X) XX-XXXXXX') }}" required
                                        oninput="formatPhoneNumber(this)" maxlength="19" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="dob">{{ __('Date of Birth') }}</label>
                                    <input type="date" name="dob" class="form-control" id="dob" />
                                </div>
                                <div class="col-12">
                                    <label for="address">{{ __('Address') }}</label>
                                    <textarea name="address" class="form-control" id="address" cols="30" rows="6"
                                        placeholder="Type address here"></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="gender">{{ __('Gender') }}</label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option value="">{{ __('-- Choose One --') }}</option>
                                        <option value="1">{{ __('Male') }}</option>
                                        <option value="2">{{ __('Female') }}</option>
                                        <option value="3">{{ __('Others') }}</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="religion">{{ __('Religion') }}</label>
                                    <select name="religion" class="form-control" id="religion">
                                        <option value="">{{ __('-- Choose One --') }}</option>
                                        <option value="1">{{ __('Islam') }}</option>
                                        <option value="2">{{ __('Christian') }}</option>
                                        <option value="3">{{ __('Hinduism') }}</option>
                                        <option value="4">{{ __('Buddhist') }}</option>
                                        <option value="5">{{ __('Others') }}</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="marital">{{ __('Martial Status') }}</label>
                                    <select name="marital" class="form-control" id="marital">
                                        <option value="">{{ __('-- Choose One --') }}</option>
                                        <option value="1">{{ __('Married') }}</option>
                                        <option value="2">{{ __('Unmarried') }}</option>
                                        <option value="3">{{ __('Divorced') }}</option>
                                        <option value="4">{{ __('Widowed') }}</option>
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
                  
                    <!-- Personal Info End -->


                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ __('Organizational') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="department">{{ __('Department') }}</label>
                                    <select name="department_id" class="form-control" id="department">
                                        @forelse ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                                        @empty
                                        <option value="">{{ __('-- Choose One --') }}</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="designation">{{ __('Designation') }}</label>
                                    <select name="designation_id" class="form-control" id="designation">
                                        @forelse ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->title }}</option>
                                        @empty
                                        <option value="">{{ __('-- Choose One --') }}</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="employeeId">{{ __('Employee ID') }}</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-secondary btn-sm" id="generate">
                                            <i class="fas fa-arrows-rotate"></i>
                                        </button>
                                        <input type="text" name="unique_id" id="employeeId" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="lastname">{{ __('Basic Salary') }}</label>
                                    <input type="number" name="basic" class="form-control" id="basic" step="0.01"
                                        required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="schedule">{{ __('Working Schedule') }}</label>
                                    <select name="schedule_id" class="form-control" id="schedule">
                                        @forelse ($schedules as $schedule)
                                        <option value="{{ $schedule->id }}"> {{ $schedule->title }} </option>
                                        @empty
                                        <option value="">{{ __('--Choose Schedule--') }}</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="">{{ __('-- Choose One --') }}</option>
                                        <option value="1">{{ __('Currently Employed') }}</option>
                                        <option value="2">{{ __('Retired') }}</option>
                                        <option value="3">{{ __('Resigned') }}</option>
                                        <option value="4">{{ __('Terminated') }}</option>
                                        <option value="5">{{ __('On Leave') }}</option>
                                        <option value="6">{{ __('Contract Ended') }}</option>
                                        <option value="7">{{ __('Part-Time') }}</option>
                                        <option value="8">{{ __('Full-Time') }}</option>
                                        <option value="9">{{ __('Freelancer') }}</option>
                                        <option value="10">{{ __('Intern') }}</option>
                                        <option value="11">{{ __('Transferred') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ... Previous content ... -->
            </div>

            <!-- Allowance Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ __('Allowance') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="house_rent">House Rent</label>
                                    <input type="number" name="house_rent" class="form-control" id="rent" step="0.01"
                                        value="0" readonly />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="medical">Medical</label>
                                    <input type="number" name="medical" class="form-control" id="medical" step="0.01"
                                        value="" readonly />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="transport">Transport</label>
                                    <input type="number" name="transport" class="form-control" id="transport"
                                        step="0.01" value="" readonly />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="special">Phone Bill</label>
                                    <input type="number" name="phone_bill" class="form-control" id="special" step="0.01"
                                        value="0" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="special">Internet Bill</label>
                                    <input type="number" name="internet_bill" class="form-control" id="special"
                                        step="0.01" value="0" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="special">Special</label>
                                    <input type="number" name="special" class="form-control" id="special" step="0.01"
                                        value="" />
                                </div>
                            </div>
                            <label for="overtime_pay">Overtime Pay</label>
                            <input type="number" name="overtime_pay" class="form-control" id="overtime_pay" step="0.01"
                                readonly>
                        </div>
                    </div>
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ __('Deductions') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="provident_fund">{{ __('Provident Fund') }}</label>
                                    <input type="number" name="provident_fund" class="form-control" id="providentFund"
                                        step="0.01" readonly />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="tax">{{ __('Income Tax') }}</label>
                                    <input type="number" name="income_tax" class="form-control" id="incomeTax"
                                        step="0.01" readonly />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="provident_fund">{{ __('Health Insurance') }}</label>
                                    <input type="number" name="health_insurance" class="form-control"
                                        id="healthInsrance" step="0.01" readonly />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="tax">{{ __('Life Insurance') }}</label>
                                    <input type="number" name="life_insurance" class="form-control" id="lifeInsurance"
                                        step="0.01" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ __('Employee Photo') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label for="imageInput"
                                        class="d-flex flex-column align-items-center justify-content-center bg-light h-100"
                                        style="border: 3px solid lightgray; border-style: dashed;">
                                        <div class="d-flex flex-column align-items-center justify-content-center py-1">
                                            <h1 class="h1 mb-0"><i class="align-middle" data-feather="upload-cloud"></i>
                                            </h1>
                                            <h6 class="my-1 text-dark text-center">
                                                <strong>{{ __('Click to upload') }}</strong>
                                            </h6>
                                            <p class="mb-2 text-dark text-center" style="font-size: 0.75rem;">
                                                <span>{{ __('PNG, JPG or JPEG') }}</span><br />
                                                <span>{{ __('(MAX. UPLOAD 2MB)') }}</span><br />
                                                <span>{{ __('(MIN. RES. 300X300)') }}</span>
                                            </p>
                                        </div>
                                        <input type="file" name="avatar" class="d-none" id="imageInput"
                                            accept="image/*;capture=camera" />
                                    </label>
                                </div>
                                <div class="col-6">
                                    <img id="dummy" src="https://via.placeholder.com/300x300" class="w-100" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('script')
<script>
var imgInp = document.getElementById("imageInput");
var dummy = document.getElementById("dummy");
imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        dummy.src = URL.createObjectURL(file)
    }
}
</script>
@endsection