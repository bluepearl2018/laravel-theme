<div class="sm:col-span-2">
    <label for="message" class="block text-base font-medium text-gray-700">{{__('Message')}}</label>
    <div class="mt-1">
        <textarea id="message" name="message" rows="4" class="form-input @error('message') is-invalid @enderror" required>{{old('message') ?? ''}}</textarea>
    </div>
    @if($errors->has('message'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('message') }}</div>
    @endif
</div>
