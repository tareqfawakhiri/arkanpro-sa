<div class="">
    <div class="">
        <div class="slider-form">
            <form action="{{ route('contact.send-quotation-request') }}" id="contact-form"
                  method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="form-clt">
                            <input type="text" name="name" id="name"
                                   value="{{ old('name') }}"
                                   placeholder="{{ trans('contact-us.your-name') }}">
                            @error('name')
                            <div style="color: red;">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="form-clt">
                            <input type="tel" name="phone" id="phone"
                                   value="{{ old('phone') }}"
                                   placeholder="{{ trans('contact-us.your-phone') }}">
                            @error('phone')
                            <div style="color: red;">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="form-clt">
{{--                            <span style="color: var(--header);">{{ trans('contact-us.your-company-type') }}</span>--}}
                            <select name="type" class="form-select">
                                @foreach($types as $key => $value)
                                    <option value="{{ $key }}">{{ trans('establishment-types.'.$value) }}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <div style="color: red;">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    @if(session('success'))
                        <div style="color: green;">{{ session('success') }}</div>
                    @endif

                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                        <button type="submit" class="theme-btn">
                            {{ trans('contact-us.send') }} <i
                                class="fa-solid fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
