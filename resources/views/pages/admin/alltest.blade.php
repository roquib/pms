@extends('layouts.admin')
@section('content')

<div class="container" style="width: 1055px;">  
          

          <div class="row ">
               <div class="col-sm-12 mt-5 " style="margin-top: 100px;">

                         <div class="text-right">

                                   <a href="#" class="btn btn-primary " style="margin-right: 80px;margin-bottom: 16px;"> Add </a>
                              </div>
                         <table class="table table-striped text-center">

                                   <tr  style="color: black;
                                   font-size: 16px;">
                                     
                                       <th class="text-center">Name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                             <td>CBC</td>
                             <td>400</td>

                              <td> 
                                   <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>

                                   <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 

                                   <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                    
                              
                              </td>                                      

                                   
                              </tr>


                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>X-ray</td>
                                        <td>300</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>

                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>FILM</td>
                                        <td>300</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>
                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>Vacum System</td>
                                        <td>60</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>
                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>SGPT</td>
                                        <td>300</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>
                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>WIDAL</td>
                                        <td>400</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>
                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>ECG</td>
                                        <td>500</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>

                              <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                        <td>EGFR</td>
                                        <td>1200</td>
           
                                         <td> 
                                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
           
                                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
           
                                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                               
                                         
                                         </td>                                      
           
                                              
                              </tr>
                             
                         {{-- @endforeach --}}

                        

                    </table>
               </div>
           </div>

           {{-- paginate here----------- --}}

           {{-- {{$all_patients->links()}} --}}
           
      </div>
      <div class="page-footer" style="background-color: cadetblue;">
               <p class="no-s text-center" style="font-size: 15px;">2019<i> &copy; MD MOMEN SHEKH</i></p>
          </div>

    
@endsection