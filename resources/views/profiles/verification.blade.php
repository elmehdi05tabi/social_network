<x-master title="Verify Email">

    <div class="verify-container">
        <h2>Verify Your Email</h2>

        <p>
            Please verify your email address before creating your profile.
            We have sent you a verification link to your email.
        </p>

        <div class="verify-actions">
            <a href="{{ route('login.show') }}" class="btn-primary">
                Go to Login
            </a>
        </div>
    </div>

</x-master>
