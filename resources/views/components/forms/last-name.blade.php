<div>
    <label for="last-name" class="block text-base font-medium text-gray-700">Last name</label>
    <div class="mt-1">
        <input type="text" value="{{old('last_name') ?? ''}}" name="last_name" id="last-name" autocomplete="given-name" class="form-input  @error('last_name') is-invalid @enderror" required>
    </div>
    @if($errors->has('last_name'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('last_name') }}</div>
    @endif
</div>
