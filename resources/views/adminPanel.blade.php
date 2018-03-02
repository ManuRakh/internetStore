
@if(session()->has('autorized'))


<form method = "POST" action = "{{route('enterGood')}}">
{{csrf_field()}}

<label>Select  category</label>
                <select name="category">
                @foreach($categories as $category)

                <option value="{{$category->id}}">{{$category->names}}</option>
                @endforeach
                </select>
<br/>
<input type = "text" name  = "name" placeholder ="name" />
<br/>

<input type = "text" name  = "brand" placeholder ="brand" />
<br/>

<input type = "text" name  = "description" placeholder ="description" />
<br/>


<input type = "text" name  = "deliveryprice" placeholder ="deliveryprice" />
<br/>


<input type = "text" name  = "imgurl" placeholder ="imgurl" />
<br/>


<input type = "text" name  = "price" placeholder ="price" />

<br/>

<label>Select  price cource</label>
<select name="pricecource">
@foreach($prices as $price)
<option value="{{$price->id}}">{{$price->name}}</option>
@endforeach 
</select>
<br/>
<input type = "text" name  = "tax" placeholder ="tax" />

<br/>




<input type = "text" name  = "special" placeholder ="special" />
<br/>
<input type = "text" name  = "exist" placeholder ="Amount exist" />
<br/>



<input type = "submit" value = "addGood">
</form>
<a href = "{{route('logoutAdmin')}}"> Logout</a>

@endif

@if(!session()->has('autorized'))
		 <!-- Form -->
            <form  method = "POST" action = "{{route('loginAdmin')}}">
            {{csrf_field()}}

				<div>
					<label>
                    <input type="text"  placeholder = "Login" name="login">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" name = "password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				
			</form>
			<!-- /Form -->
@endif

