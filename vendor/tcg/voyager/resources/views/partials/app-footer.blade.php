<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 17)
            <i class="voyager-beer"></i> Made by Alabang Bros &trade;
        @else
            Copyright 2017. Pepsi-Cola Products Philippines, Inc. All Rights Reserved.
        @endif
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
