<div class="sm:col-span-2">
    <label for="email" class="block text-base font-medium text-gray-700">{{ __('Email') }}</label>
    <div class="mt-1">
        <input id="email" value="{{old('email') ?? ''}}" name="email" type="email" autocomplete="email" class="form-input  @error('email') is-invalid @enderror" required>
    </div>
    @if($errors->has('email'))
        <div class="error bg-red-100 p-2">{{ $errors->first('email') }}</div>
    @endif
</div>
