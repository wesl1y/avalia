@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Avaliação')
<img src={{ asset('assets/img/headerEmail.png') }} class="logo" alt="Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
