@extends('layouts.admin.app')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="ti-xs ti ti-users me-1"></i>
                        Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-security.html"><i
                            class="ti-xs ti ti-lock me-1"></i> Security</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-billing.html"><i
                            class="ti-xs ti ti-file-description me-1"></i> Billing & Plans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-notifications.html"><i
                            class="ti-xs ti ti-bell me-1"></i> Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-connections.html"><i
                            class="ti-xs ti ti-link me-1"></i> Connections</a>
                </li> -->
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">{{ $page_title }}</h5>
                <!-- Account -->
                <div class="card-body">

                <form id="upload_frm" action="{{ route('uploadProfile') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ url($profileImage) }}" alt="user-avatar"
                            class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="ti ti-upload d-block d-sm-none"></i>
                                <input type="file" name="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                                <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                    </div>

                </form>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <!-- <form id="formAccountSettings" method="POST" onsubmit="return false"> -->
                    <form id="profile_frm" action="{{ route('saveProfile') }}" method="POST"  enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Name</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ $profileImageData->name }}" autofocus/>
                            </div>
                            <!-- <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" value="" />
                            </div> -->
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ $profileImageData->email }}" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $profileImageData->mobile }}" placeholder="202 555 0111" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $profileImageData->address }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="district" class="form-label">District</label>
                                <input type="text" class="form-control" id="district" name="district" value="{{ $profileImageData->district }}" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input class="form-control" type="text" id="state" name="state" value="{{ $profileImageData->state }}" placeholder="Enter your State" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" name="country" class="select2 form-select">
                                    <option value="">Select</option>

                                    @if(!empty($countryData))

                                    @foreach($countryData as $country)
                                    <option value="{{ $country->id }}" <?php echo $profileImageData->countryID == $country->id?'selected':''?>>{{ $country->name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="zipCode" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="pinCode" name="pinCode" placeholder="231465" value="{{ $profileImageData->pinCode }}" maxlength="6" />
                            </div>
                            <!-- <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">Language</label>
                                <select id="language" class="select2 form-select">
                                    <option value="">Select Language</option>
                                    <option value="en">English</option>
                                    <option value="fr">French</option>
                                    <option value="de">German</option>
                                    <option value="pt">Portuguese</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="timeZones" class="form-label">Timezone</label>
                                <select id="timeZones" class="select2 form-select">
                                    <option value="">Select Timezone</option>
                                    <option value="-12">(GMT-12:00) International Date Line West</option>
                                    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                    <option value="-10">(GMT-10:00) Hawaii</option>
                                    <option value="-9">(GMT-09:00) Alaska</option>
                                    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                    <option value="-7">(GMT-07:00) Arizona</option>
                                    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                    <option value="-6">(GMT-06:00) Central America</option>
                                    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                    <option value="-6">(GMT-06:00) Saskatchewan</option>
                                    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                    <option value="-5">(GMT-05:00) Indiana (East)</option>
                                    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                    <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency" class="form-label">Currency</label>
                                <select id="currency" class="select2 form-select">
                                    <option value="">Select Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="euro">Euro</option>
                                    <option value="pound">Pound</option>
                                    <option value="bitcoin">Bitcoin</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="mt-2">
                            <!-- <button type="submit" class="btn btn-primary me-2">Save changes</button> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-label-secondary" onclick="this.form.reset();">Cancel</button>
                            <!-- <button type="reset" id="reset" class="btn btn-label-secondary">Cancel</button> -->
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <!-- <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account
                                deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
</div>


@endsection
