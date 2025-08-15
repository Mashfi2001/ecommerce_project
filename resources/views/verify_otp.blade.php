<form method="POST" action="/verify-otp">
    @csrf
    <input type="hidden" name="user_id" value="{{ session('user_id') }}">
    <input type="text" name="otp" class="form-control" placeholder="Enter OTP">
    <button type="submit" class="btn btn-primary">Verify OTP</button>
</form>