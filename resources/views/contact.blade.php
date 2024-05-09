<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Новое сообщение') }}
        </h2>
    </x-slot>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   Заполните форму
                </div>
            </div>
        </div>
    </div>

<form action="{{route('contact-form')}}" class="max-w-7x1 mx-auto sm:px-6 lg:px-8" method="post">
    @csrf

<div class="form-group mt-2">
<label for="name">Введите имя</label>
<input type="text" name="name" placeholder="Bведите имя" id="name" class="form-control"> 
</div>

<div class="form-group mt-2">
<label for="email">Email</label>
<input type="text" name="email" placeholder="Bвeдите email" id="email" class="form-control"> 
</div>

<div class="form-group mt-2">
<label for="subject">Tema coобшения</label>
<input type="text" name="subject" placeholder="Tema сообщeния" id="subject" class="form-control">
 </div>

<div class="form-group mt-2">
<label for="message">Сooбщeние</label>
<textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
 </div>

<button type="submit" class="btn btn-success мt-2">Отправить</button> 

</form>

</x-app-layout>
