<center>
<table class="table table-striped">
                            <thead>
                              <th>Fecha</th>
                              <th>Cliente</th>
                              <th>Prof.Realizadas</th>
                            </thead>

                            <tbody>
                              @foreach($count as $c)
                                <tr>
                                    <td>
                                      {{date('F d, Y', strtotime($c->fecha))}}
                                    </td> 

                                     <td>
                                      {{$c->nombre}} 
                                    </td>

                                    <td>
                                     <h4>{{$c->fecha_total}}</h4>
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