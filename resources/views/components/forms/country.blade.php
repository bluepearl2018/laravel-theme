<div class="sm:col-span-2">
    <label for="country" class="block text-base font-medium text-gray-700">{{__('labels.Country')}}</label>
    <div class="mt-1">
        <select name="country_id" id="country" class="form-select  @error('country_id') is-invalid @enderror" required>
            @foreach(\Eutranet\Commons\Models\Country::all() as $country)
                <option value="{{ $country->id }}" @if($country->code === 'PT') selected @endif >
                    {{$country->name}}
                </option>
            @endforeach
        </select>
    </div>
    @if($errors->has('country_id'))
        <div class="alert alert-danger text-red-500">{{ $errors->first('country_id') }}</div>
    @endif
</div>
