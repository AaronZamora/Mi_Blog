@extends('template.layout')

@section('inicio')

<h1 class = "text-center">Informacion Personal</h1>

<div class="col-sm-offset-2 col-md-4 col-sm-6 margin-left-setting">
        <div class="margin-top-150">
            
         <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Nombre</td>
                    <td>Aaron Zamora</td>
                 </tr>
                 <tr>
                    <td>Email</td>
                    <td>aaronzamora127@gmail.com</td>
                </tr>
                <tr>
                    <td>Designacion</td>
                    <td>Ingenieria en Sistemas</td>
                 </tr>
                <tr>
                    <td>Experiencia</td>
                    <td>2 años</td>
                </tr>
                <tr>
                    <td>Contacto</td>
                    <td>563446427</td>
                </tr>
            </table>
          </div>
         </div>
       </div>
     
     <div class="col-md-5 col-sm-6">
        <div class="me-image">
          <img src="images/dkn.jpg" alt="">
      </div>
    </div>
@endsection
