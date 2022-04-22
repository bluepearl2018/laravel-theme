<div class="sm:col-span-2">
    <label for="city" class="block text-base font-medium text-gray-700">{{__('City')}}</label>
    <div class="mt-1">
        <input type="text" value="{{old('city') ?? ''}}" name="city" id="city" autocomplete="city" class="form-input  @error('city') is-invalid @enderror" required>
    </div>
    @if($errors->has('city'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('city') }}</div>
    @endif
</div>
