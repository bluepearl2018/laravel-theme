<div>
    <label for="first-name" class="block text-base font-medium text-gray-700">First name</label>
    <div class="mt-1">
        <input type="text" value="{{old('first_name') ?? ''}}" name="first_name" id="first-name" autocomplete="first-name" class="form-input  @error('fist_name') is-invalid @enderror" required>
    </div>
    @if($errors->has('first_name'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('first_name') }}</div>
    @endif
</div>
