{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
@extends('frontend.layouts.main')
@push('styles')
    @include('frontend.pages.register.style')
@endpush
@section('content')
    <section>

        <div class="info">
            <h1>Please complete the following steps to register!</h1>
        </div>

        <form class="steps" novalidate>
            <ul id="progressbar">
                <li class="active">User Information</li>
                <li>Details</li>
                <li>Security</li>
                <li>Social Media</li>
            </ul>

            <!-- Basic Information-->
            <fieldset>
                <h2 class="fs-title">Basic Information</h2>
                <h3 class="fs-subtitle">
                    We just need some basic information to begin your scoring
                </h3>

                <div class="hs_firstname field hs-form-field">
                    <label for="firstname">Enter your Name*</label>
                    <input id="firstname" name="firstname" type="text" required
                        data-msg-required="Please include your first name" autocomplete="given-name"
                        aria-describedby="firstname-error" />
                    <span id="firstname-error" class="error1" style="display: none;">
                        Please include your first name
                    </span>
                </div>

                <div class="hs_email field hs-form-field">
                    <label for="email">Enter your E-mail Address*</label>
                    <input id="email" name="email" required data-msg-required="Please enter a valid email address."
                        autocomplete="email" aria-describedby="email-error" />
                    <span id="email-error" class="error1" style="display: none;">
                        Please enter a valid email address.
                    </span>
                </div>

                <button type="button" class="next action-button">Next</button>
            </fieldset>

            <!-- User Details -->
            <fieldset>
                <h2 class="fs-title">User Details</h2>
                <h3 class="fs-subtitle">
                    Please provide some additional information
                </h3>
                <div class="hs-form-field">
                    <label for="edit-submitted-acquisition-amount-1">Phone Number*</label>
                    <input id="edit-submitted-acquisition-amount-1" name="phone" type="tel" required
                        autocomplete="tel" aria-describedby="phone-error" />
                    <span id="phone-error" class="error1" style="display: none;">
                        Please enter your phone number.
                    </span>
                </div>

                <div class="hs-form-field">
                    <label for="edit-submitted-acquisition-amount-2">Address</label>
                    <input id="edit-submitted-acquisition-amount-2" name="address" type="text"
                        autocomplete="address-line1" />
                </div>

                <button type="button" class="previous action-button">Previous</button>
                <button type="button" class="next action-button">Next</button>
            </fieldset>

            <!-- Security -->
            <fieldset>
                <h2 class="fs-title">Security</h2>
                <h3 class="fs-subtitle">
                    Enter a password to secure your account
                </h3>
                <div class="hs-form-field">
                    <label for="edit-submitted-cultivation-amount-1">Password*</label>
                    <div class="password-container">
                        <input id="edit-submitted-cultivation-amount-1" name="password" type="password" required
                            autocomplete="new-password" aria-describedby="password-error" />
                        <button type="button" class="toggle-password" data-target="edit-submitted-cultivation-amount-1">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <span id="password-error" class="error1" style="display: none;">
                        Please enter a password.
                    </span>
                </div>

                <div class="hs-form-field">
                    <label for="edit-submitted-cultivation-amount-2">Confirm Password*</label>
                    <div class="password-container">
                        <input id="edit-submitted-cultivation-amount-2" name="confirm_password" type="password" required
                            autocomplete="new-password" aria-describedby="confirm-password-error" />
                        <button type="button" class="toggle-password" data-target="edit-submitted-cultivation-amount-2">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <span id="confirm-password-error" class="error1" style="display: none;">
                        Passwords do not match.
                    </span>
                </div>

                <button type="button" class="previous action-button">Previous</button>
                <button type="button" class="next action-button">Next</button>
            </fieldset>

            <!-- Social Media -->
            <fieldset>
                <h2 class="fs-title">Social Media</h2>
                <h3 class="fs-subtitle">
                    Add your social media profiles to help spread the word
                </h3>
                <div class="hs-form-field">
                    <label for="edit-submitted-cultivation-amount-3">Facebook*</label>
                    <input id="edit-submitted-cultivation-amount-3" name="facebook" required type="url"
                        placeholder="https://facebook.com/yourprofile" aria-describedby="facebook-error"
                        autocomplete="url" />
                    <span id="facebook-error" class="error1" style="display: none;">
                        Please enter your Facebook Url.
                    </span>
                </div>

                <div class="hs-form-field">
                    <label for="edit-submitted-cultivation-amount-4">LinkedIn*</label>
                    <input id="edit-submitted-cultivation-amount-4" name="linkedin" required type="url"
                        placeholder="https://linkedin.com/in/yourprofile" aria-describedby="linkedin-error"
                        autocomplete="url" />
                    <span id="linkedin-error" class="error1" style="display: none;">
                        Please enter your linkedin URL.
                    </span>
                </div>

                <button type="button" class="previous action-button">Previous</button>
                <button type="button" class="submit action-button">Submit</button>
            </fieldset>

        </form>

        <!-- Modal for OTP -->
        <div id="otp-modal" class="modal"> <!-- Removed modal-show to hide it on page load -->
            <div class="modal-content">
                <!-- Popup 1: OTP Method Selection -->
                <div id="otp-method" class="modal-step active">
                    <h3>Where should we send the OTP?</h3>
                    <div class="otp-options">
                        <button class="otp-option" data-method="email">
                            <i class="fas fa-envelope"></i> Email
                        </button>
                        <button class="otp-option" data-method="sms">
                            <i class="fas fa-sms"></i> SMS
                        </button>
                        <button class="otp-option" data-method="whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </button>
                    </div>
                </div>

                <!-- Popup 2: OTP Input -->
                <div id="otp-input" class="modal-step">
                    <h3>Enter the OTP sent to your <span id="selected-method"></span></h3>
                    <form id="otp-form">
                        <div class="otp-input-container">
                            <input type="text" id="otp-code" maxlength="6" placeholder="Enter 6-digit OTP"
                                required />
                        </div>
                        <button type="submit" class="otp-submit-btn">Verify OTP</button>
                        <button type="button" class="otp-back-btn">Back</button>
                    </form>
                </div>
            </div>
        </div>


    </section>
@endsection
@push('scripts')
    @include('frontend.pages.register.script')
@endpush
