@extends('layout')

@section('content')
    <h1 class="w-100 text-center m-2">Overzicht evenementen</h1>
    <div class="album py-5 bg-light">
        <div class="container">
            <?php
            $id = 1;
            $users = DB::table('users')->get();
            ?>
            <div class="text-right " style="width: 100%">
                <a href="/adminAddUser">
                    <button class="btn btn-warning">Toevoegen</button>
                </a>
            </div>

            <div class="row">


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">naam</th>
                        <th scope="col">email</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>


                    @foreach($users as $user)
                        <?php
                        $users = DB::table('users')->where('ID', $id)->get();
                        ?>
                        <tbody class="table-group-divider">
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a >
                                    <button class="btn btn-secondary" type="submit">aanpassen</button>
                                </a></td>
                            <td>
                                <form action="/user/delete">
                                    <input type="hidden" value="{{$user->id}}" name="id">
                                    <button type="submit" class="btn btn-danger">verwijder</button>
                                </form>
                            </td>

                        </tr>
                        </tbody>


                        <?php $id++ ?>
                    @endforeach

                </table>

                <div class="d-flex justify-content-between" style="width: 100%">
                    <button class="btn btn-primary" type="submit">vorige</button>
                    <button class="btn btn-primary" type="submit">volgende</button>
                </div>
            </div>
@endsection
