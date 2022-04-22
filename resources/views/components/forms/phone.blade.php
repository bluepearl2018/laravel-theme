<div class="sm:col-span-2">
    <label for="phone-number" class="block text-base font-medium text-gray-700">{{ __('Phone Number') }}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="text" minlength="9" maxlength="16" value="{{old('phone') ?? ''}}" name="phone" id="phone-number" autocomplete="tel" class="form-input  @error('phone') is-invalid @enderror" required>
    </div>
    @if($errors->has('phone'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('phone') }}</div>
    @endif
</div>
