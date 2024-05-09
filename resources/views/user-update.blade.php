<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __("Обновление записи") }}
</h2> 
</x-slot>
<form action="{{route('user-update-submit', $data->id)}}" class="max-w-7x1 mx-auto sm:px-6 lg:px-8 mt-8" method="post"> 
    @csrf

<div class="form-group pt-2">
    <label for="nаме">Введите имя</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control"> 
</div>

<div class="form-group mt-2">
    <label for="email">Ваш email</label>
    <input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control"> 
</div>

<div class="form-group mt-2">
    <label for="subject">Тeмa сообшения</label>
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообшения" id="subject" class="form-control"> 
</div>

<div class="form-group mt-2">
    <label for="subject">Сooбщeниe</label>
    <textarea type="text" name="message" placeholder="Введите сообшение" id="message" class="form-control"> {{$data->message}}</textarea> 
</div>

    <input type="submit" class="btn btn-success mt-2" value="06новить">
</form>
</x-app-layout>