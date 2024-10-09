<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Eventrix Registration</title>

    <!-- Airbnb Style Minimalist CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@300;400;600&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Afacad Flux', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-card {
            background: white;
            padding: 75px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 550px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-header img {
            max-width: 100px; /* Adjust the size as needed */
            margin-bottom: 15px;
        }

        .register-header h2 {
            font-weight: 600;
            color: #333;
        }

        .register-header p {
            color: #777;
            font-size: 14px;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #000000;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .login-button {
            background-color: #000000;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #313131;
        }

        .footer-link {
            text-align: right;
            font-size: 12px;
        }

        .footer-link a {
            color: #000000;
            text-decoration: none;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }

        .logo {
            width: 250px; /* Adjust size as needed */
        }

        .password-toggle {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 70%;
            transform: translateY(-50%);
        }

        /* Remove up-down arrows from number input */
        input[type=number] {
            -moz-appearance: textfield; /* Firefox */
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none; /* Chrome, Safari, and Edge */
            margin: 0; /* Remove margin */
        }
        .already{
            color: #000000;
        }

    </style>
</head>
<body>

    <div class="register-card">
        <div class="register-header">
            <img src="logo/logo1.png" alt="Logo" class="logo"/> <!-- Update the path as needed -->
            <h2>{{ __('Eventrix') }}</h2>
            <p>Register for an account</p>
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" onsubmit="return validatePhoneNumber()">
            @csrf

            <div class="mb-3">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  maxlength="30" />
            </div>

            <div class="mb-3">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mb-3">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="form-control" type="number" name="phone" :value="old('phone')" required autocomplete="tel" oninput="this.value = this.value.slice(0, 11);" />
                <span id="phone-error" class="text-danger" style="display:none;">Invalid phone number, please try again.</span>
            </div>

            <div class="mb-3">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="form-control" type="text" name="address" :value="old('address')" required autocomplete="text" />
            </div>

            <div class="mb-3 position-relative">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                <span class="password-toggle" onclick="togglePasswordVisibility('password')">
                    <i id="toggle-icon-password" class="fas fa-eye"></i>
                </span>
            </div>

            <div class="mb-3 position-relative">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <span class="password-toggle" onclick="togglePasswordVisibility('password_confirmation')">
                    <i id="toggle-icon-password_confirmation" class="fas fa-eye"></i> <!-- Change the ID for correct referencing -->
                </span>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mb-3">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="d-flex justify-content-between mb-3">
                <a class="footer-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="login-button">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>

    <script>
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(`toggle-icon-${inputId}`);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        function validatePhoneNumber() {
            const phoneInput = document.getElementById('phone');
            const phoneError = document.getElementById('phone-error');
            const phoneValue = phoneInput.value;

            // Check if the phone number is 11 digits long and numeric
            if (phoneValue.length !== 11 || isNaN(phoneValue)) {
                phoneError.textContent = 'Invalid phone number, please try again.'; // Custom error message
                phoneError.style.display = 'block';
                return false;
            }

            phoneError.style.display = 'none'; // Hide error if valid
            return true; // Allow form submission
        }
    </script>
</body>
</html>
