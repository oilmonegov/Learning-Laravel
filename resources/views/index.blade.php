@php
    $arr = ['Abanum', 'Chiedu', 'Usama', 'Diei', 'Utomi'];
@endphp

@forelse ($arr as $ar)
    {{ $ar }} <br />
@empty
    {{ 'No Data to Display' }}
@endforelse

<br />

{{ $title or "No Default Data set." }}