<div>
    <label for="name" class="sr-only">{{ __('Name') }}</label>
    <input type="text" value="{{old('name') ?? ''}}" name="name" id="name" autocomplete="name" class="form-input  @error('name') is-invalid @enderror" placeholder="{{ __('Full name') }}" required>
    @if($errors->has('name'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('name') }}</div>
    @endif
</div>
