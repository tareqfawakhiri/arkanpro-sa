<div class="xxx-contact-wrapper-2">
    <div class="contact-left-items">
        <div class="contact-info-area-2">
            <form action="{{ route('contact.send') }}" id="contact-form"
                  method="POST"
                  class="contact-form-items">
                @csrf
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="form-clt">
                            <span>{{ trans('contact-us.your-name') }}*</span>
                            <input type="text" name="name" id="name"
                                   value="{{ old('name') }}"
                                   placeholder="{{ trans('contact-us.your-name') }}">
                            @error('name')
                            <div style="color: red;">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="form-clt">
                            <span>{{ trans('contact-us.your-email') }}*</span>
                            <input type="text" name="email" id="email"
                                   value="{{ old('email') }}"
                                   placeholder="{{ trans('contact-us.your-email') }}">
                            @error('email')
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
