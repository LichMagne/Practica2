
 <div class="container">
        <div class="card">
            <div class="card-body">

<hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th hidden scope="col">Id</th>
                            <th scope="col">Nombre Usuario</th>
                            <th scope="col">Correo</th>
                          
                        </tr>
                    </thead>
@foreach ($users as $u)
    

                        <tbody>
                            <tr>
                                <td hidden >{{$u->id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>                          
                                <td> </td>                        
                            </tr>
                        </tbody>
 @endforeach


                </table>

            </div>

        </div>







    </div>


