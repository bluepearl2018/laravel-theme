@if(Schema::hasTable('corporates'))
    <div class="footer-address">
        @isset($corporate)
            <span class="text-gray-500 address">
                <i class="fa fa-home"></i>
                {!! $corporate->name ? : '' !!}
                {!! $corporate->address1 ? '<br>' . $corporate->address1 : '' !!}
                {!! $corporate->address2 ? '<br>' . $corporate->address2 : '' !!}
                {!! $corporate->postal_code ? '<br>' . $corporate->postal_code : '' !!}    {!! $corporate->city ? '-' . $corporate->city : '' !!}
                {!! $corporate->council ? '<br>' . $corporate->council : '' !!}    {!! $corporate->district ? '-' . $corporate->district : '' !!}
                {!! $corporate->phone ? '<br><i class="fa fa-phone mr-2"></i>' . $corporate->phone : '' !!}
                {!! $corporate->mobile ? '<br><i class="fa fa-mobile mr-2"></i>' . $corporate->mobile : '' !!}
                @if(Route::has('contacts.form'))
                    @if($corporate->email_private !== NULL)
                        <form action="{{ route('contacts.form')}}" method="POST">
                            @csrf
                            <button type="submit" class="text-gray-500"><i class="fa fa-envelope mr-2"></i>{!! $corporate->email_private !!}</button>
                        </form>
                    @endif
                @endif
            </span>
        @endisset
    </div>
@else
    <div class="footer-address">
        <span class="text-gray-500 address">
            <i class="fa fa-home"></i>
            {!! 'Eutranet' !!}
            {!! 'The world' !!}
            @if(Route::has('contacts.form'))
                @if($corporate->email_private !== NULL)
                    <form action="{{ route('contacts.form')}}" method="POST">
                        @csrf
                        <button type="submit" class="text-gray-500"><i class="fa fa-envelope mr-2"></i>{!! $corporate->email_private !!}</button>
                    </form>
                @endif
            @endif
        </span>
    </div>
@endif