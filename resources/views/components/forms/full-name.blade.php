<div>
    <label for="full-name" class="sr-only">{{ __('Full name') }}</label>
    <div class="mt-1">
        <input type="text" name="full_name" id="full-name" autocomplete="name" class="form-input  @error('full_name') is-invalid @enderror" placeholder="{{ __('Full name') }}" required>
    </div>
    @if($errors->has('full_name'))
        <div class="error">{{ $errors->first('full_name') }}</div>
    @endif
</div>
