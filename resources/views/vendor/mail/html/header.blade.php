@props(['url'])
<tr>
<td class="header">
<a href="www.gasthof-bauer.at" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/logo.png') }}" class="" alt="Gasthof Bauer Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
