<center>
<table class="table table-striped">
                            <thead>
                              <th>Cliente</th>
                              <th>Prof.Realizadas</th>
                              <th>Mes</th>
                            </thead>
                            <tbody>
                              @foreach($count as $c)
                                <tr>
                                    <td>
                                      {{$c->nombre}} 
                                    </td>
                                    <td>
                                      {{$c->tipo}}
                                    </td>
                                    <td>
                                      {{date('F d, Y', strtotime($c->created_at))}}
                                    </td> 
                                    <td>
                                      
                                    </td>           
                                  </tr>
                              @endforeach
                            </tbody>
</table>

        <button type="button" class="btn btn-default" href="#"">
              <i class="fa fa-print" aria-hidden="true"> Imprimir</i>
          </button>
</center>
<br>


