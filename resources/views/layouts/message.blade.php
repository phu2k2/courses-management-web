@if (session()->has('message'))
    <div class="notification-toast toast-success">
        <span class="alert-icon"><i class="fa-solid fa-thumbs-up"></i></span>
        <span class="alert-text"><strong>{{ __('success') }}</strong><br>{{ session()->get('message') }}</span>
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('error'))
    <div class="notification-toast toast-error">
        <span class="alert-icon"><i class="fa-solid fa-thumbs-up"></i></span>
        <span class="alert-text"><strong>{{ __('error') }}</strong><br>{{ session()->get('error') }}</span>
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('status'))
    <div class="notification-toast toast-success">
        <span class="alert-icon"><i class="fa-solid fa-thumbs-up"></i></span>
        <span class="alert-text"><strong>{{ __('success') }}</strong><br>{{ session()->get('status') }}</span>
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endif
