<div>
   <h1>{{$data['type']}}</h1>
   <p>{{$data['thanks']}}</p>
   <div>
       <h3>Your Tour details: </h3>
       <p>Tour name: {{$data['tour']['name']}}</p>
       <p>Tour start date: From {{$data['tour']['date_start']}}</p>
       <p>Tour duration: {{$data['tour']['number_days']}} days</p>
       <h3>Your Bill details: </h3>
       <p>Number of Adult: {{$data['adult']}}</p>
       <p>Number of Children: {{$data['children']}}</p>
       <p>Number of Young children: {{$data['ychildren']}}</p>
       <p>Total price: {{$data['price']}}</p>
   </div>
   <h2>Have fun and safe with the tour!</h6>
</div>