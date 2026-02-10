@extends('backend.layouts.main')
@section('page-title', 'Dashboard')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row g-6">
                <!-- Navigation -->
                <div class="col-12 col-lg-3">
                    <div class="d-flex justify-content-between flex-column mb-1 mb-md-0">
                        <h5 class="mb-4">Settings</h5>
                        <ul class="nav nav-align-left nav-pills flex-column" role="tablist">
                            <li class="nav-item mb-1">

                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-left-home" aria-controls="navs-pills-left-home"
                                    aria-selected="true"><i class="icon-base ti tabler-brand-discord icon-sm me-3"></i>
                                    Business Settings
                                </button>
                            </li>

                            <li class="nav-item mb-1">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-left-profile" aria-controls="navs-pills-left-profile"
                                    aria-selected="false"><i class="icon-base ti tabler-settings icon-sm me-3"></i>
                                    System Settings
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Navigation -->

                <!-- Options -->
                <div class="col-12 col-lg-9 pt-1 pt-lg-0">
                    <div class="tab-content p-0 my-10">
                        <!-- Store Details Tab -->
                        <div class="tab-pane fade show active" id="navs-pills-left-home" role="tabpanel"
                            aria-labelledby="navs-pills-left-home-tab">
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Business Details</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('settings.update', $setting->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="settings_section" value="business">
                                        <div class="row mb-6 g-6">
                                            <div class="col-12 col-md-12">
                                                <label class="form-label mb-1" for="company_name">Company Name
                                                </label>
                                                <input type="name" class="form-control" id="company_name"
                                                    placeholder="Name" name="company_name"
                                                    value="{{ $setting->company_name }}" aria-label="name" />
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label mb-1" for="phone">Phone</label>
                                                <input type="tel" class="form-control phone-mask" id="phone"
                                                    placeholder="phone" value="{{ $setting->phone }}" name="phone"
                                                    aria-label="phone" />
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label mb-1" for="email">
                                                    Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="example@gmail.com" value="{{ $setting->email }}"
                                                    name="email" aria-label="email" />
                                            </div>

                                            <div class="col-12 col-md-12">
                                                <label class="form-label mb-1" for="address">Address</label>
                                                <textarea class="form-control" name="address" id="address" cols="30" rows="3">{{ $setting->address }}</textarea>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label for="tax_collection" class="form-label mb-1">Tax Collection</label>
                                                <select id="tax_collection" name="tax_collection"
                                                    class="select2 form-select">
                                                    <option value="">Tax Collection</option>
                                                    <option value="enable"
                                                        {{ $setting->tax_collection == 'enable' ? 'selected' : '' }}>Enable
                                                    </option>
                                                    <option value="disable"
                                                        {{ $setting->tax_collection == 'disable' ? 'selected' : '' }}>
                                                        Disable</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label class="form-label mb-1" for="tax_number">Tax Registration
                                                    Number</label>
                                                <input type="number" id="tax_number" name="tax_number"
                                                    value="{{ $setting->tax_number }}" class="form-control"
                                                    placeholder="Tax Registration Number" />
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label for="tax-type" class="form-label mb-1">Tax Type</label>
                                                <select id="tax-type" name="tax_type" class="select2 form-select"
                                                    data-placeholder="Tax Type">
                                                    <option value="">Tax Type</option>
                                                    <option value="inclusive"
                                                        {{ $setting->tax_type == 'inclusive' ? 'selected' : '' }}>Inclusive
                                                    </option>
                                                    <option value="exclusive"
                                                        {{ $setting->tax_type == 'exclusive' ? 'selected' : '' }}>Exclusive
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-md-5 form-control-validation align-self-center">
                                                <label class="form-label" for="logo">Logo</label>
                                                <input type="file" name="logo" id="logo" class="form-control"
                                                    accept="image/*"
                                                    onchange="document.getElementById('logo_preview').src = window.URL.createObjectURL(this.files[0])" />
                                            </div>
                                            <div class="col-md-1 form-control-validation">
                                                <label class="form-label" for="logo_preview">Logo Preview</label>
                                                @if ($setting->logo)
                                                    <div class="image-preview">
                                                        <img id="logo_preview"
                                                            src="{{ asset('backend/images/settings/' . $setting->logo) }}"
                                                            class="img-fluid rounded" alt="Logo Preview" />
                                                    </div>
                                                @else
                                                    <div class="image-preview">
                                                        <img id="logo_preview"
                                                            src="{{ asset('backend/images/no-image.jpg') }}"
                                                            class="img-fluid rounded" alt="Logo Preview" />
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-5 form-control-validation align-self-center">
                                                <label class="form-label" for="favicon">Favicon</label>
                                                <input type="file" name="favicon" id="favicon" class="form-control"
                                                    placeholder="Upload favicon" accept="image/*"
                                                    onchange="document.getElementById('favicon_preview').src = window.URL.createObjectURL(this.files[0])" />
                                            </div>
                                            <div class="col-md-1 form-control-validation">
                                                <label class="form-label" for="favicon_preview">Favicon Preview</label>
                                                @if ($setting->favicon)
                                                    <div class="image-preview">
                                                        <img id="favicon_preview"
                                                            src="{{ asset('backend/images/settings/' . $setting->favicon) }}"
                                                            class="img-fluid rounded" alt="Favicon Preview" />
                                                    </div>
                                                @else
                                                    <div class="image-preview">
                                                        <img id="favicon_preview"
                                                            src="{{ asset('backend/images/no-image.jpg') }}"
                                                            class="img-fluid rounded" alt="Favicon Preview" />
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-12 form-control-validation d-flex justify-content-end gap-2">
                                                <button type="submit" class="btn btn-primary me-2">
                                                    <i class="icon-base ti tabler-device-floppy icon-xs me-2"></i>
                                                    Update
                                                </button>
                                                <button type="button" class="btn btn-secondary me-2"
                                                    onclick="window.location.href='#'">
                                                    <i class="icon-base ti tabler-x icon-xs me-2"></i>
                                                    Cancel
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="window.location.reload();">
                                                    <i class="icon-base ti tabler-refresh icon-xs me-2"></i>
                                                    Reset
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- System Settings Tab -->
                        <div class="tab-pane fade" id="navs-pills-left-profile" role="tabpanel"
                            aria-labelledby="navs-pills-left-profile-tab">
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h5 class="card-title m-0">System Settings</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('settings.update', $setting->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="settings_section" value="system">
                                        <div class="row mb-6 g-6">
                                            <div class="col-12 col-md-6">
                                                <label class="form-label mb-1" for="app_name">App
                                                    Name</label>
                                                <input type="text" class="form-control" id="app_name"
                                                    placeholder="App Name" value="{{ $setting->app_name }}"
                                                    name="app_name" aria-label="settings Details" />
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label mb-1" for="app_url">App Url</label>
                                                <input type="text" class="form-control" id="app_url"
                                                    placeholder="App Url" name="app_url" value="{{ $setting->app_url }}"
                                                    aria-label="app_url" />
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label for="app_locale" class="form-label mb-1">App Locale</label>
                                                <select id="app_locale" name="app_locale" class="select2 form-select"
                                                    data-placeholder="app_locale">
                                                    <option value="">Select Locale</option>
                                                    <option value="en"
                                                        {{ $setting->app_locale == 'en' ? 'selected' : '' }}>English
                                                    </option>
                                                    <option value="es"
                                                        {{ $setting->app_locale == 'es' ? 'selected' : '' }}>Español
                                                    </option>
                                                    <option value="fr"
                                                        {{ $setting->app_locale == 'fr' ? 'selected' : '' }}>Français
                                                    </option>
                                                    <option value="de"
                                                        {{ $setting->app_locale == 'de' ? 'selected' : '' }}>Deutsch
                                                    </option>
                                                    <option value="it"
                                                        {{ $setting->app_locale == 'it' ? 'selected' : '' }}>Italiano
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="timezone" class="form-label mb-1">Time Zone</label>
                                                <select id="timezone" class="select2 form-select" name="timezone"
                                                    data-placeholder="Select Timezone">
                                                    <option value="">Select Timezone</option>
                                                    <option value="Pacific/Midway"
                                                        {{ $setting->timezone == 'Pacific/Midway' ? 'selected' : '' }}>
                                                        (GMT-11:00) Midway Island, Samoa
                                                    </option>
                                                    <option value="Pacific/Honolulu"
                                                        {{ $setting->timezone == 'Pacific/Honolulu' ? 'selected' : '' }}>
                                                        (GMT-10:00) Hawaii
                                                    </option>
                                                    <option value="US/Alaska"
                                                        {{ $setting->timezone == 'US/Alaska' ? 'selected' : '' }}>

                                                        (GMT-09:00) Alaska
                                                    </option>
                                                    <option value="America/Los_Angeles"
                                                        {{ $setting->timezone == 'America/Los_Angeles' ? 'selected' : '' }}>
                                                        (GMT-08:00) Pacific Time (US & Canada)
                                                    </option>
                                                    <option value="America/Tijuana"
                                                        {{ $setting->timezone == 'America/Tijuana' ? 'selected' : '' }}>
                                                        (GMT-08:00) Tijuana, Baja California
                                                    </option>
                                                    <option value="US/Arizona"
                                                        {{ $setting->timezone == 'US/Arizona' ? 'selected' : '' }}>
                                                        (GMT-07:00) Arizona
                                                    </option>
                                                    <option value="America/Chihuahua"
                                                        {{ $setting->timezone == 'America/Chihuahua' ? 'selected' : '' }}>
                                                        (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                                    </option>
                                                    <option value="US/Mountain"
                                                        {{ $setting->timezone == 'US/Mountain' ? 'selected' : '' }}>
                                                        (GMT-07:00) Mountain Time (US & Canada)
                                                    <option value="America/Managua"
                                                        {{ $setting->timezone == 'America/Managua' ? 'selected' : '' }}>

                                                        (GMT-06:00) Central America
                                                    </option>
                                                    <option value="US/Central"
                                                        {{ $setting->timezone == 'US/Central' ? 'selected' : '' }}>
                                                        (GMT-06:00) Central Time (US & Canada)
                                                    </option>
                                                    <option value="America/Mexico_City"
                                                        {{ $setting->timezone == 'America/Mexico_City' ? 'selected' : '' }}>
                                                        (GMT-06:00) Mexico City
                                                    </option>
                                                    <option value="America/Monterrey">
                                                        (GMT-06:00) Monterrey
                                                    </option>
                                                    <option value="Canada/Saskatchewan">
                                                        (GMT-06:00) Saskatchewan
                                                    </option>
                                                    <option value="America/Bogota">
                                                        (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                                    </option>
                                                    <option value="US/Eastern">
                                                        (GMT-05:00) Eastern Time (US & Canada)
                                                    </option>
                                                    <option value="US/East-Indiana">
                                                        (GMT-05:00) Indiana (East)
                                                    </option>
                                                    <option value="America/Lima">
                                                        (GMT-05:00) Lima
                                                    </option>
                                                    <option value="Canada/Atlantic">
                                                        (GMT-04:00) Atlantic Time (Canada)
                                                    </option>
                                                    <option value="America/Caracas">
                                                        (GMT-04:30) Caracas, La Paz
                                                    </option>
                                                    <option value="America/Manaus">
                                                        (GMT-04:00) Manaus
                                                    </option>
                                                    <option value="America/Santiago">
                                                        (GMT-04:00) Santiago
                                                    </option>
                                                    <option value="Canada/Newfoundland">
                                                        (GMT-03:30) Newfoundland
                                                    </option>
                                                    <option value="America/Sao_Paulo">
                                                        (GMT-03:00) Brasilia
                                                    </option>
                                                    <option value="America/Argentina/Buenos_Aires">
                                                        (GMT-03:00) Buenos Aires, Georgetown
                                                    </option>
                                                    <option value="America/Godthab">
                                                        (GMT-03:00) Greenland
                                                    </option>
                                                    <option value="America/Montevideo">
                                                        (GMT-03:00) Montevideo
                                                    </option>
                                                    <option value="America/Noronha">
                                                        (GMT-02:00) Mid-Atlantic
                                                    </option>
                                                    <option value="Atlantic/Azores">
                                                        (GMT-01:00) Azores
                                                    </option>
                                                    <option value="Atlantic/Cape_Verde">
                                                        (GMT-01:00) Cape Verde Is.
                                                    </option>
                                                    <option value="Africa/Casablanca">
                                                        (GMT) Casablanca, Monrovia, Reykjavik
                                                    </option>
                                                    <option value="Europe/London">
                                                        (GMT) Dublin, Edinburgh, Lisbon, London
                                                    </option>
                                                    <option value="Europe/London">
                                                        (GMT) Monrovia, Reykjavik
                                                    </option>
                                                    <option value="Europe/Amsterdam">
                                                        (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
                                                    </option>
                                                    <option value="Europe/Belgrade">
                                                        (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
                                                    </option>
                                                    <option value="Europe/Brussels">
                                                        (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                                                    </option>
                                                    <option value="Africa/Algiers">
                                                        (GMT+01:00) West Central Africa
                                                    </option>
                                                    <option value="Europe/Sarajevo">
                                                        (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                                                    </option>
                                                    <option value="Europe/Stockholm">
                                                        (GMT+01:00) Stockholm, Vienna
                                                    </option>
                                                    <option value="Europe/Vilnius">
                                                        (GMT+02:00) Vilnius, Luxembourg
                                                    </option>
                                                    <option value="Africa/Cairo">
                                                        (GMT+02:00) Cairo
                                                    </option>
                                                    <option value="Africa/Harare">
                                                        (GMT+02:00) Harare, Pretoria
                                                    </option>
                                                    <option value="Europe/Helsinki">
                                                        (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
                                                    </option>
                                                    <option value="Asia/Jerusalem">
                                                        (GMT+02:00) Jerusalem
                                                    </option>
                                                    <option value="Europe/Athens">
                                                        (GMT+02:00) Athens, Bucharest, Istanbul
                                                    </option>
                                                    <option value="Asia/Baghdad">
                                                        (GMT+03:00) Baghdad
                                                    </option>
                                                    <option value="Asia/Kuwait">
                                                        (GMT+03:00) Kuwait, Riyadh, Baghdad
                                                    </option>
                                                    <option value="Europe/Minsk">
                                                        (GMT+03:00) Minsk
                                                    </option>
                                                    <option value="Africa/Nairobi">
                                                        (GMT+03:00) Nairobi
                                                    </option>
                                                    <option value="Asia/Riyadh">
                                                        (GMT+03:00) Riyadh
                                                    </option>
                                                    <option value="Europe/Moscow">
                                                        (GMT+03:00) Moscow, St. Petersburg, Volgograd
                                                    </option>
                                                    <option value="Asia/Tehran">
                                                        (GMT+03:30) Tehran
                                                    </option>
                                                    <option value="Asia/Muscat">
                                                        (GMT+04:00) Muscat
                                                    </option>
                                                    <option value="Asia/Baku">
                                                        (GMT+04:00) Baku, Tbilisi, Yerevan
                                                    </option>
                                                    <option value="Asia/Yerevan">
                                                        (GMT+04:00) Yerevan
                                                    </option>
                                                    <option value="Asia/Tbilisi">
                                                        (GMT+04:00) Tbilisi
                                                    </option>
                                                    <option value="Asia/Kabul">
                                                        (GMT+04:30) Kabul
                                                    </option>
                                                    <option value="Asia/Karachi">
                                                        (GMT+05:00) Karachi
                                                    </option>
                                                    <option value="Asia/Tashkent">
                                                        (GMT+05:00) Tashkent
                                                    </option>
                                                    <option value="Asia/Kolkata"
                                                        {{ $setting->timezone == 'Asia/Kolkata' ? 'selected' : '' }}>
                                                        (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                                                    </option>
                                                    <option value="Asia/Kathmandu">
                                                        (GMT+05:45) Kathmandu
                                                    </option>
                                                    <option value="Asia/Yekaterinburg">
                                                        (GMT+06:00) Ekaterinburg
                                                    </option>
                                                    <option value="Asia/Almaty">
                                                        (GMT+06:00) Almaty, Novosibirsk
                                                    </option>
                                                    <option value="Asia/Dhaka"
                                                        {{ $setting->timezone == 'Asia/Dhaka' ? 'selected' : '' }}>
                                                        (GMT+06:00) Dhaka
                                                    </option>
                                                    <option value="Asia/Rangoon"
                                                        {{ $setting->timezone == 'Asia/Rangoon' ? 'selected' : '' }}>
                                                        (GMT+06:30) Yangon (Rangoon)
                                                    </option>
                                                    <option value="Asia/Bangkok">
                                                        (GMT+07:00) Bangkok, Hanoi, Jakarta
                                                    </option>
                                                    <option value="Asia/Krasnoyarsk">
                                                        (GMT+07:00) Krasnoyarsk
                                                    </option>
                                                    <option value="Asia/Novosibirsk">
                                                        (GMT+07:00) Novosibirsk
                                                    </option>
                                                    <option value="Asia/Brunei">
                                                        (GMT+08:00) Brunei
                                                    </option>
                                                    <option value="Asia/Kuala_Lumpur">
                                                        (GMT+08:00) Kuala Lumpur, Singapore
                                                    </option>
                                                    <option value="Asia/Taipei">
                                                        (GMT+08:00) Taipei
                                                    </option>
                                                    <option value="Australia/Perth">
                                                        (GMT+08:00) Perth
                                                    </option>
                                                    <option value="Asia/Irkutsk">
                                                        (GMT+09:00) Irkutsk, Ulaan Bataar
                                                    </option>
                                                    <option value="Asia/Seoul">
                                                        (GMT+09:00) Seoul
                                                    </option>
                                                    <option value="Asia/Tokyo">
                                                        (GMT+09:00) Tokyo
                                                    </option>
                                                    <option value="Australia/Adelaide">
                                                        (GMT+09:30) Adelaide
                                                    </option>
                                                    <option value="Australia/Darwin">
                                                        (GMT+09:30) Darwin
                                                    </option>
                                                    <option value="Australia/Brisbane">
                                                        (GMT+10:00) Brisbane
                                                    </option>
                                                    <option value="Australia/Sydney">
                                                        (GMT+10:00) Sydney
                                                    </option>
                                                    <option value="Australia/Hobart">
                                                        (GMT+10:00) Hobart
                                                    </option>
                                                    <option value="Asia/Vladivostok">
                                                        (GMT+10:00) Vladivostok
                                                    </option>
                                                    <option value="Australia/Lord_Howe">
                                                        (GMT+10:30) Lord Howe Island
                                                    </option>
                                                    <option value="Etc/GMT-11">
                                                        (GMT+11:00) Solomon Is., New Caledonia
                                                    </option>
                                                    <option value="Asia/Magadan">
                                                        (GMT+11:00) Magadan, Solomon Is., New Caledonia
                                                    </option>
                                                    <option value="Pacific/Norfolk">
                                                        (GMT+11:30) Norfolk Island
                                                    </option>
                                                    <option value="Asia/Anadyr">
                                                        (GMT+12:00) Anadyr, Kamchatka
                                                    </option>
                                                    <option value="Pacific/Auckland">
                                                        (GMT+12:00) Auckland, Wellington
                                                    </option>
                                                    <option value="Etc/GMT-12">
                                                        (GMT+12:00) Fiji, Kamchatka, Marshall Is.
                                                    </option>
                                                    <option value="Pacific/Chatham">
                                                        (GMT+12:45) Chatham Islands
                                                    </option>
                                                    <option value="Pacific/Tongatapu">
                                                        (GMT+13:00) Nuku'alofa
                                                    </option>
                                                    <option value="Pacific/Kiritimati">
                                                        (GMT+14:00) Kiritimati
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label for="currency" class="form-label mb-1">Currency</label>
                                                <select id="currency" name="currency" class="select2 form-select"
                                                    data-placeholder="currency">
                                                    <option value="">Currency</option>
                                                    <option value="usd"
                                                        {{ $setting->currency == 'usd' ? 'selected' : '' }}>USD</option>
                                                    <option value="euro"
                                                        {{ $setting->currency == 'euro' ? 'selected' : '' }}>Euro</option>
                                                    <option value="pound"
                                                        {{ $setting->currency == 'pound' ? 'selected' : '' }}>Pound
                                                    </option>
                                                    <option value="bdt"
                                                        {{ $setting->currency == 'bdt' ? 'selected' : '' }}>BDT</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="time_format" class="form-label mb-1">Time Format</label>
                                                <select id="time_format" name="time_format" class="select2 form-select"
                                                    data-placeholder="Time Format">
                                                    <option value="">Time Format</option>
                                                    <option value="12"
                                                        {{ $setting->time_format == '12' ? 'selected' : '' }}>12 Hours
                                                    </option>
                                                    <option value="24"
                                                        {{ $setting->time_format == '24' ? 'selected' : '' }}>24 Hours
                                                    </option>
                                                </select>

                                            </div>
                                            <div class="col-12 col-md-12">
                                                <label class="form-label mb-1" for="footer_text">Footer Text</label>
                                                <input type="text" class="form-control" id="footer_text"
                                                    placeholder="Footer Text" name="footer_text"
                                                    value="{{ $setting->footer_text }}" aria-label="footer text" />
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <label class="form-label mb-1" for="copyright">Copyright Text</label>
                                                <input type="text" class="form-control" id="copyright_text"
                                                    placeholder="copyright Text" name="copyright_text"
                                                    value="{{ $setting->copyright_text }}" aria-label="footer text" />
                                            </div>
                                            <div class="col-12 form-control-validation d-flex justify-content-end gap-2">
                                                <button type="submit" class="btn btn-primary me-2">
                                                    <i class="icon-base ti tabler-device-floppy icon-xs me-2"></i>
                                                    Update
                                                </button>
                                                <button type="button" class="btn btn-secondary me-2"
                                                    onclick="window.location.href='#'">
                                                    <i class="icon-base ti tabler-x icon-xs me-2"></i>
                                                    Cancel
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="window.location.reload();">
                                                    <i class="icon-base ti tabler-refresh icon-xs me-2"></i>
                                                    Reset
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Options-->
                </div>
            </div>
            <!-- / Content -->

        </div>

    @endsection
