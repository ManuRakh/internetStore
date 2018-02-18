@extends('layouts.footer')
@extends('layouts.body')
@extends('layouts.header')
@extends('layouts.head')

<form method = "POST" action =  "{{route('sendMail')}}">
    {{csrf_field()}}
    <input type = "submit" value = "submit">
</form>