<div class="">
    <div class="center-container">
        <div class="slider-form">
            <form action="{{ route('contact.send-quotation-request') }}" id="contact-form"
                  method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-lg-12  ">
                        <div class="form-clt">
                            <input type="text" name="name" id="name"
                                   value="{{ old('name') }}"
                                   placeholder="{{ trans('contact-us.your-name') }}">
                            @error('name')
                            <div style="color: red;">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-lg-12  ">
                        <div class="form-clt">
                            <input type="tel" name="phone" id="phone"
                                   value="{{ old('phone') }}"
                                   placeholder="{{ trans('contact-us.your-phone') }}">
                            @error('phone')
                            <div style="color: red;">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-lg-12  ">
                        <div class="form-clt">
                            <div class="form-clt">
                                <input type="text" name="type" id="type"
                                       value="{{ old('type') }}"
                                       placeholder="{{ trans('contact-us.your-business') }}">
                                @error('type')
                                <div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
                        <div style="color: green;">{{ session('success') }}</div>
                    @endif

                    <div class="col-lg-12 btn-text-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">
                        <button type="submit" class="theme-btn">
                            {{ trans('contact-us.send') }}
                            <i class="fa-solid fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
