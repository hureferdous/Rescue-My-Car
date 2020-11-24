@extends('index')

@section('content')
   <div class= "container">
   <h4 class="heading">Select Your Cover Level</h4>
   <form action="/quote" method="POST">  
   @csrf
     <div class="row"> 
     <div class="col-sm-6">
       <div class="form-group">
               <label for="coverlevels">Select a Cover level:</label>
                  <select name="coverlevels" class="">
                @foreach($carquotes as $carquote)
                    <option selected>{{ $carquote->coverlevel }}</option>
                 @endforeach
         </select>
        </div>
    </div> 
       
    <div class="col-sm-6">
       <div class="form-group">
               <label for="addons">Select Optional Addons:</label>
                     <select name="addons" class="">
                @foreach($carquotes as $carquote)
                    <option selected>{{ $carquote->addons }}</option>
                 @endforeach
                     </select>
        </div>
         </div>
      </div>



   <div class="row">
      <div class="col-sm-6"> <lavel for="startDate">Select Start Date:</lavel>
      <input type="text" id="startdate">
      </div>
      <div class="col-sm-6"> <lavel for="endDate">Select End Date:</lavel>
        <input type="text" id="enddate"></div>
      <div>
     
</div>


<button type="submit" class="btn btn-primary" id="quoteBtn">Get A Quote</button>

</form>
</div>    
        @endsection