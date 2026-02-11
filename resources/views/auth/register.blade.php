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
@extends('backend.layouts.register')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Default -->
        {{-- <div class="row">
            <div class="col-12">
                <h5>Default</h5>
            </div>

            <!-- Default Wizard -->
            <div class="col-12 mb-6">
                <small class="fw-medium">Basic</small>
                <div class="bs-stepper wizard-numbered mt-2">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#account-details">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Account Details</span>
                                    <span class="bs-stepper-subtitle">Setup Account Details</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personal-info">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Personal Info</span>
                                    <span class="bs-stepper-subtitle">Add personal info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#social-links">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Social Links</span>
                                    <span class="bs-stepper-subtitle">Add social links</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onSubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" id="username" class="form-control" placeholder="johndoe"
                                            required />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" class="form-control"
                                            placeholder="john.doe@email.com" aria-label="john.doe" required />
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password2" />
                                            <span class="input-group-text cursor-pointer" id="password2"><i
                                                    class="icon-base ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="confirm-password">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm-password" class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="confirm-password2" />
                                            <span class="input-group-text cursor-pointer" id="confirm-password2"><i
                                                    class="icon-base ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled>
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="first-name">First Name</label>
                                        <input type="text" id="first-name" class="form-control" placeholder="John" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="last-name">Last Name</label>
                                        <input type="text" id="last-name" class="form-control" placeholder="Doe" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="country">Country</label>
                                        <select class="form-select select2" id="country">
                                            <option label=" "></option>
                                            <option>UK</option>
                                            <option>USA</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="language">Language</label>
                                        <select class="selectpicker w-auto" id="language" data-style="btn-transparent"
                                            data-icon-base="icon-base ti" data-tick-icon="tabler-check text-white"
                                            multiple>
                                            <option>English</option>
                                            <option>French</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter">Twitter</label>
                                        <input type="text" id="twitter" class="form-control"
                                            placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook">Facebook</label>
                                        <input type="text" id="facebook" class="form-control"
                                            placeholder="https://facebook.com/abc" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google">Google+</label>
                                        <input type="text" id="google" class="form-control"
                                            placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin">LinkedIn</label>
                                        <input type="text" id="linkedin" class="form-control"
                                            placeholder="https://linkedin.com/abc" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Default Wizard -->

            <!-- validation wizard -->
            <div class="col-12 mb-6">
                <small class="fw-medium">Validation</small>
                <div id="wizard-validation" class="bs-stepper mt-2">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#account-details-validation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Account Details</span>
                                    <span class="bs-stepper-subtitle">Setup Account Details</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personal-info-validation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Personal Info</span>
                                    <span class="bs-stepper-subtitle">Add personal info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#social-links-validation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Social Links</span>
                                    <span class="bs-stepper-subtitle">Add social links</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form id="wizard-validation-form" onSubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details-validation" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationUsername">Username</label>
                                        <input type="text" name="formValidationUsername" id="formValidationUsername"
                                            class="form-control" placeholder="johndoe" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationEmail">Email</label>
                                        <input type="email" name="formValidationEmail" id="formValidationEmail"
                                            class="form-control" placeholder="john.doe@email.com"
                                            aria-label="john.doe" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation form-password-toggle">
                                        <label class="form-label" for="formValidationPass">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="formValidationPass" name="formValidationPass"
                                                class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="formValidationPass2" />
                                            <span class="input-group-text cursor-pointer" id="formValidationPass2"><i
                                                    class="icon-base ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-control-validation form-password-toggle">
                                        <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="formValidationConfirmPass"
                                                name="formValidationConfirmPass" class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="formValidationConfirmPass2" />
                                            <span class="input-group-text cursor-pointer"
                                                id="formValidationConfirmPass2"><i
                                                    class="icon-base ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled>
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info-validation" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationFirstName">First Name</label>
                                        <input type="text" id="formValidationFirstName" name="formValidationFirstName"
                                            class="form-control" placeholder="John" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationLastName">Last Name</label>
                                        <input type="text" id="formValidationLastName" name="formValidationLastName"
                                            class="form-control" placeholder="Doe" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationCountry">Country</label>
                                        <select class="form-select select2" id="formValidationCountry"
                                            name="formValidationCountry">
                                            <option label=" "></option>
                                            <option>UK</option>
                                            <option>USA</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationLanguage">Language</label>
                                        <select class="selectpicker w-auto" id="formValidationLanguage"
                                            data-style="btn-transparent" data-icon-base="icon-base ti"
                                            data-tick-icon="tabler-check text-white" name="formValidationLanguage"
                                            multiple>
                                            <option>English</option>
                                            <option>French</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links-validation" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationTwitter">Twitter</label>
                                        <input type="text" name="formValidationTwitter" id="formValidationTwitter"
                                            class="form-control" placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationFacebook">Facebook</label>
                                        <input type="text" name="formValidationFacebook" id="formValidationFacebook"
                                            class="form-control" placeholder="https://facebook.com/abc" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationGoogle">Google+</label>
                                        <input type="text" name="formValidationGoogle" id="formValidationGoogle"
                                            class="form-control" placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="col-sm-6 form-control-validation">
                                        <label class="form-label" for="formValidationLinkedIn">LinkedIn</label>
                                        <input type="text" name="formValidationLinkedIn" id="formValidationLinkedIn"
                                            class="form-control" placeholder="https://linkedin.com/abc" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-next btn-submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- validation wizard end -->
        </div>
        <hr class="container-m-nx mb-12" /> --}}

        <!-- Modern -->
        <div class="row">
            <div class="col-12">
                <h4>Please complete the registration form below!</h4>
            </div>

            <!-- Modern Wizard -->
            <div class="col-12 mb-6">
                <div class="bs-stepper wizard-modern wizard-modern-example mt-2">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#account-details-modern">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Account Details</span>
                                    <span class="bs-stepper-subtitle">Setup Account Details</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personal-info-modern">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Personal Info</span>
                                    <span class="bs-stepper-subtitle">Add personal info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#details-info-modern">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Security Info</span>
                                    <span class="bs-stepper-subtitle">Add security info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="icon-base ti tabler-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#social-links-modern">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Social Links</span>
                                    <span class="bs-stepper-subtitle">Add social links</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onSubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details-modern" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Account Details</h6>
                                    <small>Enter Your Account Details.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email-modern">Email</label>
                                        <input type="email" id="email-modern" class="form-control"
                                            placeholder="john.doe@email.com" aria-label="john.doe" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username-modern">Phone</label>
                                        <input type="tel" id="username-modern" class="form-control"
                                            placeholder="+8801234567890" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled>
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info-modern" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="first-name-modern">Full Name</label>
                                        <input type="text" id="first-name-modern" class="form-control"
                                            placeholder="John doe" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="detail-modern">Detail Info</label>
                                        <textarea type="text" id="detail-modern" rows="1" class="form-control"
                                            placeholder="Enter your detail here."></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Details -->
                            <div id="details-info-modern" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Security Info</h6>
                                    <small>Enter Your password here.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="password-modern">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password-modern" class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password2-modern" />
                                            <span class="input-group-text cursor-pointer" id="password2-modern"><i
                                                    class="icon-base ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="confirm-password-modern">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm-password-modern" class="form-control"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="confirm-password-modern2" />
                                            <span class="input-group-text cursor-pointer" id="confirm-password-modern2"><i
                                                    class="icon-base ti tabler-eye-off"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links-modern" class="content">
                                <div class="content-header mb-4">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook-modern">Facebook</label>
                                        <input type="text" id="facebook-modern" class="form-control"
                                            placeholder="https://facebook.com/abc" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin-modern">LinkedIn</label>
                                        <input type="text" id="linkedin-modern" class="form-control"
                                            placeholder="https://linkedin.com/abc" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-submit" data-bs-toggle="modal"
                                            data-bs-target="#modalToggle">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Modern Wizard -->
        </div>

        <!-- modal start -->
        <!-- Toggle Between Modals -->
        <div class="col-lg-4 col-md-6">
            <div class="mt-4">
                <!-- Modal 1-->
                <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1"
                    style="display: none" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Notyf Demo -->
                                <h5 class="mb-2">Where should we send the OTP?</h5>
                                <div class="row">
                                    <!-- Duration Input -->
                                    <div class="col">
                                        <label class="form-label mb-2">Choose one option.</label>
                                        <div class="form-check">
                                            <input id="Email" class="form-check-input" type="radio"
                                                name="positionx" value="left" />
                                            <label class="form-check-label" for="Email">Email</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="SMS" class="form-check-input" type="radio"
                                                name="positionx" value="center" />
                                            <label class="form-check-label" for="SMS">SMS</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="WhatsApp" class="form-check-input" type="radio"
                                                name="positionx" value="right" checked />
                                            <label class="form-check-label" for="WhatsApp">WhatsApp</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2-->
                <div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Notyf Demo -->
                                <h5 class="mb-2">Please enter the OTP.</h5>
                                <div class="row">
                                    <!-- Duration Input -->
                                    <div class="col">
                                        <input type="number" id="otp" class="form-control"
                                            placeholder="Enter OTP" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">
                                    Land on shop
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Toggle Modals end-->
    </div>
    <!-- / Content -->
@endsection

@push('scripts')
    <script>
        window.addEventListener('load', function() {
            var stepperEl = document.querySelector('.bs-stepper');

            // Initialize Stepper
            var stepper = new Stepper(stepperEl, {
                linear: false,
                animation: true
            });

            // Make sure first step is active on page load
            var firstStep = stepperEl.querySelector('.bs-stepper-content .content');
            if (firstStep) firstStep.classList.add('active');

            // Next buttons
            stepperEl.querySelectorAll('.btn-next').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stepper.next();
                });
            });

            // Previous buttons
            stepperEl.querySelectorAll('.btn-prev').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stepper.previous();
                });
            });
        });
    </script>
@endpush
