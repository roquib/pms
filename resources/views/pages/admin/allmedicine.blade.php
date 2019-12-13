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
                                     
                                       <th class="text-center">Medicine-name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                             <td>Napa</td>
                             <td>10</td>

                              <td> 
                                   <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>

                                   <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 

                                   <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                    
                              
                              </td>                                      

                                   
                              </tr>
                             
                              

                    {{-- @foreach ($all_patients as $errors) --}}

                    <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                        <td>Apixaban</td>
                        <td>20</td>

                         <td> 
                              <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>

                              <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 

                              <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                               
                         
                         </td>                                      

                              
                         </tr>
                        
                    {{-- @endforeach --}      <tr  style="color: black;
                                   font-size: 16px;">
                                     
                                       <th class="text-center">Medicine-name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                   <td>Ativan</td>
                                   <td>50</td>
      
                                    <td> 
                                         <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
      
                                         <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
      
                                         <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                          
                                    
                                    </td>                                      
      
                                         
                                    </tr>
                                   
                               {{-- @endforeach --}      <tr  style="color: black;
                                   font-size: 16px;">
                                     
                                       <th class="text-center">Medicine-name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                   <td>Amitiza</td>
                                   <td>15</td>
      
                                    <td> 
                                         <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
      
                                         <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
      
                                         <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                          
                                    
                                    </td>                                      
      
                                         
                                    </tr>
                                   
                               {{-- @endforeach --}      <tr  style="color: black;
                                   font-size: 16px;">
                                     
                                       <th class="text-center">Medicine-name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                   <td>Max-pro</td>
                                   <td>100</td>
      
                                    <td> 
                                         <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
      
                                         <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
      
                                         <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                          
                                    
                                    </td>                                      
      
                                         
                                    </tr>
                                   
                               {{-- @endforeach --}      <tr  style="color: black;
                                   font-size: 16px;">
                                     
                                       <th class="text-center">Medicine-name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                   <td>Seclo</td>
                                   <td>5</td>
      
                                    <td> 
                                         <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
      
                                         <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
      
                                         <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                          
                                    
                                    </td>                                      
      
                                         
                                    </tr>
                                   
                               {{-- @endforeach --}      <tr  style="color: black;
                                   font-size: 16px;">
                                     
                                       <th class="text-center">Medicine-name</th>
                                       <th class="text-center"> Price</th>
                                       <th class="text-center">Action</th>
   
                                   </tr>

                         {{-- @foreach ($all_patients as $errors) --}}

                         <tr class="text-center" style="font-size: 15px;text-transform: capitalize;">

                                   <td>Napa-Extra</td>
                                   <td>20</td>
      
                                    <td> 
                                         <a href={{ URL::to('view/patients/')}} class="btn btn-success  text-center">View </a>
      
                                         <a href="{{ URL::to('edit/patients/')}}" class="btn btn-warning  text-center">Edit</a> 
      
                                         <a href="{{ URL::to('delete/patients/')}}" class="btn btn-danger  text-center " > Delete</a>	 
                                          
                                    
                                    </td>                                      
      
                                         
                                    </tr>
                                   
                               {{-- @endforeach --}
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