<div>
    <label for="tax-id" class="block text-base font-medium text-gray-700">{{ __('Tax ID') }}</label>
    <div class="mt-1">
        <input id="tax-id" name="tax_id" maxlength="15" minlength="9" value="{{ old('tax_id') ?? '' }}" type="text" placeholder="{{ __('Enter tax ID') }}" class="form-input @error('tax_id') is-invalid @enderror" {!! $required ?? '' !!}  {{ $readonly ?? '' }} />
    </div>
    @if($errors->has('tax_id'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('tax_id') }}</div>
    @endif
</div>
