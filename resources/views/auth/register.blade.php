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
                    <label for="edit-submitted-cultivation-amount-3">Facebook</label>
                    <input id="edit-submitted-cultivation-amount-3" name="facebook" type="url"
                        placeholder="https://facebook.com/yourprofile" autocomplete="url" />
                </div>

                <div class="hs-form-field">
                    <label for="edit-submitted-cultivation-amount-4">LinkedIn</label>
                    <input id="edit-submitted-cultivation-amount-4" name="linkedin" type="url"
                        placeholder="https://linkedin.com/in/yourprofile" autocomplete="url" />
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
    <script>
        $(document).ready(function() {
            console.log("Script loaded!");

            var current = 1;
            var steps = $("fieldset").length;

            // Update on resize (for dynamic responsiveness)
            $(window).resize(function() {
                console.log("Window resized - width:", $(window).width());
            });

            // Hide all fieldsets except the first
            $("fieldset:not(:first)").hide();

            // Function to update progress bar
            function updateProgressBar(step) {
                $("#progressbar li").removeClass("active");
                $("#progressbar li:nth-child(" + step + ")").addClass("active");
            }

            // Function to validate current step
            function validateStep(step) {
                var isValid = true;

                if (step === 1) {
                    var name = $("#firstname").val().trim();
                    if (!name) {
                        $("#firstname-error").text("Please include your first name").show();
                        isValid = false;
                    } else {
                        $("#firstname-error").hide();
                    }

                    var email = $("#email").val().trim();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!email || !emailRegex.test(email)) {
                        $("#email-error").text("Please enter a valid email address.").show();
                        isValid = false;
                    } else {
                        $("#email-error").hide();
                    }
                } else if (step === 2) {
                    var phone = $("#edit-submitted-acquisition-amount-1").val().trim();
                    if (!phone) {
                        $("#phone-error").text("Please enter your phone number.").show();
                        isValid = false;
                    } else {
                        $("#phone-error").hide();
                    }
                } else if (step === 3) {
                    var password = $("#edit-submitted-cultivation-amount-1").val();
                    if (!password) {
                        $("#password-error").text("Please enter a password.").show();
                        isValid = false;
                    } else {
                        $("#password-error").hide();
                    }

                    var confirmPassword = $("#edit-submitted-cultivation-amount-2").val();
                    if (!confirmPassword) {
                        $("#confirm-password-error").text("Please confirm your password.").show();
                        isValid = false;
                    } else if (password !== confirmPassword) {
                        $("#confirm-password-error").text("Passwords do not match.").show();
                        isValid = false;
                    } else {
                        $("#confirm-password-error").hide();
                    }
                }

                return isValid;
            }

            // Next button click
            $(".next").click(function() {
                if (validateStep(current)) {
                    var current_fs = $(this).parent();
                    var next_fs = current_fs.next();

                    // Sliding for all devices (faster: 400ms)
                    next_fs.css({
                        'z-index': 10,
                        left: '100%'
                    }).show();
                    current_fs.css({
                        'z-index': 5
                    });

                    current_fs.animate({
                        left: '-100%'
                    }, 400, function() {
                        current_fs.hide().css({
                            left: '0',
                            'z-index': 1
                        });
                        current++;
                        updateProgressBar(current);
                    });
                    next_fs.animate({
                        left: '0'
                    }, 400, function() {
                        next_fs.css({
                            'z-index': 1
                        });
                    });
                }
            });

            // Previous button click
            $(".previous").click(function() {
                var current_fs = $(this).parent();
                var previous_fs = current_fs.prev();

                // Sliding for all devices (faster: 400ms)
                previous_fs.css({
                    'z-index': 10,
                    left: '-100%'
                }).show();
                current_fs.css({
                    'z-index': 5
                });

                current_fs.animate({
                    left: '100%'
                }, 400, function() {
                    current_fs.hide().css({
                        left: '0',
                        'z-index': 1
                    });
                    current--;
                    updateProgressBar(current);
                });
                previous_fs.animate({
                    left: '0'
                }, 400, function() {
                    previous_fs.css({
                        'z-index': 1
                    });
                });
            });

            // Submit button click (opens OTP modal)
            $(".submit").click(function() {
                console.log("Submit button clicked!");
                console.log("Current step:", current);
                if (validateStep(current)) {
                    console.log("Validation passed, opening modal.");
                    $('#otp-modal').addClass('modal-show');
                    $('#otp-method').addClass('active'); // Show first step
                } else {
                    console.log("Validation failed.");
                }
            });

            // Password toggle functionality
            $('.toggle-password').on('click', function() {
                const targetId = $(this).data('target');
                const input = $('#' + targetId);
                const icon = $(this).find('i');

                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });

            // OTP method selection
            $('.otp-option').on('click', function() {
                const method = $(this).data('method');
                $('#selected-method').text(method.charAt(0).toUpperCase() + method.slice(1)); // Capitalize

                // Animate to OTP input
                $('#otp-method').removeClass('active');
                setTimeout(() => {
                    $('#otp-input').addClass('active');
                }, 250); // Delay for smooth transition
            });

            // Back button
            $('.otp-back-btn').on('click', function() {
                $('#otp-input').removeClass('active');
                setTimeout(() => {
                    $('#otp-method').addClass('active');
                }, 250);
            });

            // OTP form submission
            $('#otp-form').on('submit', function(e) {
                e.preventDefault();
                const otp = $('#otp-code').val();
                if (otp.length === 6 && /^\d+$/.test(otp)) {
                    alert('OTP Verified! Form submitted successfully.');
                    $('#otp-modal').removeClass('modal-show');
                    // Here, you can add actual submission logic (e.g., AJAX)
                } else {
                    alert('Please enter a valid 6-digit OTP.');
                }
            });

            // Close modal on overlay click or Escape
            $('body').on('click', '.modal-overlay, .modal-close', function() {
                $('.modal').removeClass('modal-show');
                $('.modal-step').removeClass('active'); // Reset steps
            });

            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    $('.modal').removeClass('modal-show');
                    $('.modal-step').removeClass('active');
                }
            });
        });

        // Modal module (for other modals, if needed)
        var modules = {
            $window: $(window),
            $html: $('html'),
            $body: $('body'),

            init: function() {
                this.modals.init();
            },

            modals: {
                trigger: $('.explanation'),
                modal: $('.modal'),
                scrollTopPosition: 0,

                init: function() {
                    if (this.trigger.length && this.modal.length) {
                        $('body').append('<div class="modal-overlay"></div>');
                        this.bindEvents();
                    }
                },

                bindEvents: function() {
                    var self = this;

                    self.trigger.on('click', function(e) {
                        e.preventDefault();
                        self.openModal($(this).data('modalId'));
                    });

                    $('body').on('click', '.modal-overlay, .modal-close', function() {
                        self.closeModal();
                    });

                    $(document).on('keydown', function(e) {
                        if (e.key === "Escape") self.closeModal();
                    });
                },

                openModal: function(id) {
                    this.scrollTopPosition = $(window).scrollTop();
                    $('html').addClass('modal-show');
                    $('#' + id).addClass('modal-show');
                },

                closeModal: function() {
                    $('.modal-show').removeClass('modal-show');
                    $('html').removeClass('modal-show');
                    $(window).scrollTop(this.scrollTopPosition);
                }
            }
        };

        modules.init();
    </script>
@endpush
