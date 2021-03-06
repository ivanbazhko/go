@extends('template')

@section('title')
   Наши контакты
@endsection

@section('contents')
      <div class="container">
      @include('messages')
         <!-- <a class="nav-link" href="/login" style="color:navy; font-size:20px;">Log in</a>
         <a class="nav-link" href="/register" style="color:navy; font-size:20px;">Register</a> -->
         <div class="col-md-6">
         <h3>Отправьте нам сообщение</h3>
         <form action="{{ route('message') }}" method="post" class="form-success">
           @csrf
            <div class="form-group">
               <label for="name">Введите Ваше имя</label>
               <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
            </div>
            <div class="form-group">
               <label for="email">Введите Ваш E-mail</label>
               <input type="text" name="email" placeholder="Введите E-mail" id="email" class="form-control">
            </div>
            <div class="form-group">
               <label for="subject">Введите тему Вашего сообщения</label>
               <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control">
            </div>
            <div class="form-group">
               <label for="message">Введите Ваше сообщение</label>
               <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn-success">Отправить</button><br/><br/>

            <br/><br/>
            </div>
         </form>
      </div>
@endsection
