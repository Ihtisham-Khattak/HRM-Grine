<!-- Success -->
@if ($message = Session::get('success'))
<div class="custom-alert alert alert-success alert-dismissible fade show p-4 bg-success" role="alert">
    <strong>{{ $message }}</strong>
  </div>
  @endif

<!-- Failed -->
@if ($message = Session::get('error'))
<div class="custom-alert alert alert-danger alert-dismissible fade show p-4 bg-danger" role="alert">
    <strong>{{ $message }}</strong>
  </div>
@endif

<!-- Warning -->
@if ($message = Session::get('warning'))
<div class="custom-alert alert alert-warning alert-dismissible fade show p-4 bg-warning" role="alert">
    <strong>{{ $message }}</strong>
  </div>
@endif

@if ($message = Session::get('info'))
<div class="custom-alert alert alert-info alert-dismissible fade show p-4 bg-info" role="alert">
    <strong>{{ $message }}</strong>
  </div>
@endif

{{-- Auto-dismiss script --}}
<script>
    setTimeout(function () {
        let alerts = document.querySelectorAll('.custom-alert');
        alerts.forEach(alert => {
            alert.style.transition = 'opacity 0.3s ease-in-out';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        });
    }, 3000);
</script>
